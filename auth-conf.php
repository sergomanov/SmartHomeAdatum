<?php
session_start();


class mysql {
	#	Подключение к бд
	function connect($db_host, $db_login, $db_passwd, $db_name) {
		mysql_connect($db_host, $db_login, $db_passwd) or die ("MySQL Error: " . mysql_error()); //~ устанавливаем подключение с бд
		mysql_query("set names utf8") or die ("<br>Invalid query: " . mysql_error()); //~ указываем что передаем данные в utf8
		mysql_select_db($db_name) or die ("<br>Invalid query: " . mysql_error()); //~ выбираем базу данных
	}
	#	Запрос к базе и его производные
	function query($query, $type, $num) {
		if ($q=mysql_query($query)) {
			switch ($type) {
				case 'num_row' : return mysql_num_rows($q); break;
				case 'result' : return mysql_result($q, $num); break;
				case 'accos' : return mysql_fetch_assoc($q); break;
				case 'none' : return $q;
				default: return $q;
			}
		} else {			return false;		}

	}
	#	экранирование данных 
	function screening($data) {
		$data = trim($data); //~ удаление пробелов из начала и конца строки
		return mysql_real_escape_string($data); //~ экранирование символов
	}
}

class auth {
	#	Проверка входных данных при регистрации
	function check_new_user($login, $passwd, $passwd2, $mail) {
		//~ Проверка валидности данных
		if (empty($login) or empty($passwd) or empty($passwd2)) $error[]='Все поля обязательны для заполнения';
		if ($passwd != $passwd2) $error[]='Введенные пароли не совпадают';
		if (strlen($login)<3 or strlen($login)>30) $error[]='Длинна логина должна быть от 3 до 30 символов';
		if (strlen($passwd)<3 or strlen($passwd)>30) $error[]='Длинна пароля должна быть от 3 до 30 символов';
		//~ Валидация почты не используя регулярки http://www.php.net/manual/en/filter.examples.validation.php
		if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) $error[]='Не корректный email';
		//~ Проверяем наличее пользователя с таким именем в бд
		$db = new mysql(); //~ Создаем новый объект класса
		$login = $db->screening($login);
		if ($db->query("SELECT * FROM users WHERE login_user='".$login."';", 'num_row', '')!=0) $error[]='Пользователь с таким именем уже существует';
		if ($db->query("SELECT * FROM users WHERE mail_user='".$mail."';", 'num_row', '')!=0) $error[]='Пользователь с таким email уже существует';

		//~ Возвращаем массив ошибок или положительный ответ
		if (isset($error)) return $error;
		else return 'good';
	}

	###
	#	Регистрация
	function reg($login, $passwd, $passwd2, $mail,$checkbox1,$checkbox2,$checkbox3,$checkbox4) {
		if (($this->check_new_user($login, $passwd, $passwd2, $mail))=='good') {
			$db = new mysql(); //~ Создаем новый объект класса
			$passwd = md5($db->screening($passwd).'7seR#21rrTE6'); //~ хеш пароля с солью
			$login = $db->screening($login);
			if ($db->query("INSERT INTO `users` (`id_user`, `login_user`, `passwd_user`, `mail_user`, `rule1`, `rule2`, `rule3`, `rule4`, `rule5`) VALUES (NULL, '".$login."', '".$passwd."', '".$mail."', '".$checkbox1."', '".$checkbox2."', '".$checkbox3."', '".$checkbox4."', '".$checkbox5."');", '', '')) return true;
			else {
				print 'Возникла ошибка при регистрации нового пользователя. Свяжитесь с администрацией';
				return false;
			}
		} else {
			print $this->error_print($this->check_new_user($login, $passwd, $passwd2, $mail,$checkbox1,$checkbox2,$checkbox3,$checkbox4));
			return false;
		}
	}
	
	#	Проверка авторизации
	function check() {
		if (isset($_SESSION['id_user']) and isset($_SESSION['login_user'])) return true;
		else {
			//~ проверяем наличие кук
			if (isset($_COOKIE['id_user']) and isset($_COOKIE['code_user'])) {
				//~ куки есть - сверяем с таблицей сессий
				$db = new mysql(); //~ создаем новый объект класса
				$id_user=$db->screening($_COOKIE['id_user']);
				$code_user=$db->screening($_COOKIE['code_user']);
				if ($db->query("SELECT * FROM `session` WHERE `id_user`=".$id_user.";", 'num_row', '')==1) {
					//~ Есть запись в таблице сессий, сверяем данные
					$data = $db->query("SELECT * FROM `session` WHERE `id_user`=".$id_user.";", 'accos', '');
					if ($data['code_sess']==$code_user and $data['user_agent_sess']==$_SERVER['HTTP_USER_AGENT']) {
						//~ Данные верны, стартуем сессию
						$_SESSION['id_user']=$id_user;
						$_SESSION['login_user']=$db->query("SELECT login_user FROM `users` WHERE  `id_user` = '".$id_user."';", 'result', 0);
						
						//~ обновляем куки
						setcookie("id_user", $_SESSION['id_user'], time()+3600*24*14);
						setcookie("code_user", $code_user, time()+3600*24*14);
						return true;
					} else return false; //~ данные в таблице сессий не совпадают с куками
				} else return false; //~ в таблице сессий не найден такой пользователь
			} else return false;
		}
	}

	#	Авторизация
	function authorization() {


		$db = new mysql(); //~ создаем новый объект класса
$timezone=$db->query("SELECT state FROM `data` WHERE  `id` = '4';", 'result', 0);
$timereal = time()+$timezone;   //в формате Unixtime + часовой пояс
$date_today = date("Y.m.d",$timereal); 
$time_today = date("H:i:s",$timereal); 
		$login = $db->screening($_POST['login']);
		$passwd = md5($db->screening($_POST['passwd']).'7seR#21rrTE6'); //~ хеш пароля с солью
		if ($db->query("SELECT * FROM `users` WHERE  `login_user` =  '".$login."' AND  `passwd_user` = '".$passwd."';", 'num_row', '')==1) {
			//~ пользователь найден в бд, логин совпадает с паролем
			$_SESSION['id_user']=$db->query("SELECT * FROM `users` WHERE  `login_user` =  '".$login."' AND  `passwd_user` = '".$passwd."';", 'result', 0);
			$id_user=$_SESSION['id_user'];
			$_SESSION['mail_user']=$db->query("SELECT mail_user FROM `users` WHERE  `id_user` = '".$id_user."';", 'result', 0);
			
			$_SESSION['rule1']=$db->query("SELECT rule1 FROM `users` WHERE  `id_user` = '".$id_user."';", 'result', 0);
			$_SESSION['rule2']=$db->query("SELECT rule2 FROM `users` WHERE  `id_user` = '".$id_user."';", 'result', 0);
			$_SESSION['rule3']=$db->query("SELECT rule3 FROM `users` WHERE  `id_user` = '".$id_user."';", 'result', 0);
			$_SESSION['rule4']=$db->query("SELECT rule4 FROM `users` WHERE  `id_user` = '".$id_user."';", 'result', 0);
			$_SESSION['rule5']=$db->query("SELECT rule5 FROM `users` WHERE  `id_user` = '".$id_user."';", 'result', 0);
			$_SESSION['rule6']=1;

$db->query("INSERT INTO `logs` (`cont`, `stat`,`date`,`time`) VALUES ('Успешный вход в систему.  (".$login.")', '1','".$date_today."','".$time_today."');", '', '');
						
			$_SESSION['login_user']=$login;
			//~ добавляем/обновляем запись в таблице сессий и ставим куку
			$r_code = $this->generateCode(15);
			if ($db->query("SELECT * FROM `session` WHERE `id_user`=".$_SESSION['id_user'].";", 'num_row', '')==1) {
				//~ запись уже есть - обновляем
				$db->query("UPDATE `session` SET `code_sess` = '".$r_code."', `user_agent_sess` = '".$_SERVER['HTTP_USER_AGENT']."' WHERE `id_user` = ".$_SESSION['id_user'].";", '', '');
			} else {
				//~ записи нету - добавляем
				$db->query("INSERT INTO `session` (`id_user`, `code_sess`, `user_agent_sess`) VALUES ('".$_SESSION['id_user']."', '".$r_code."', '".$_SERVER['HTTP_USER_AGENT']."');", '', '');
			}
			//~ ставим куки на 2 недели
			setcookie("id_user", $_SESSION['id_user'], time()+3600*24*14);
			setcookie("code_user", $r_code, time()+3600*24*14);
			return true;
		} else {
			//~ пользователь не найден в бд, или пароль не соответствует введенному
			if ($db->query("SELECT * FROM  `users` WHERE  `login_user` =  '".$login."';", 'num_row', 0)==1) $error[]='Введен не верный пароль';
			else $error[]='Такой пользователь не существует';
			$_SESSION['error'] = $this->error_print($error);
			$db->query("INSERT INTO `logs` (`cont`, `stat`,`date`,`time`) VALUES ('Неудачный вход в систему неверный пользователь или пароль. (".$login.")', '3','".$date_today."','".$time_today."');", '', '');
			return false;
		}
	}

	#	Выход
	function exit_user() {
		//~ разрушаем сессию, удаляем куки и отправляем на главную
		session_destroy();
		setcookie("id_user", '', time()-3600);
		setcookie("code_user", '', time()-3600);
		header("Location: index.php");
	}


	#	Функция генерации случайной строки
	function generateCode($length) { 
		$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPRQSTUVWXYZ0123456789"; 
		$code = ""; 
		$clen = strlen($chars) - 1;   
		while (strlen($code) < $length) { 
			$code .= $chars[mt_rand(0,$clen)];   
		} 
		return $code; 
	}

	#	Формирование списка ошибок
	function error_print($error) {
		$r='<h4>Произошли следующие ошибки:</h4>'."\n".'<ul>';
		foreach($error as $key=>$value) {
			$r.='<li>'.$value.'</li>';
		}
		return $r.'</ul>';
	}
}



include_once "mysql";
$db = new mysql(); //~ Создаем новый объект класса
$db -> connect($db_host, $db_login, $db_passwd, $db_name);
?>
