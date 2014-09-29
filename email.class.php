<?php 

function email_send($address,$port,$login,$pwd ,$from ,$to, $subject, $message) { 
 ob_implicit_flush();
 
//include_once "mysql";
 $db_host   = "localhost";
$db_login  = "root";
$db_passwd = "111";
$db_name   = "adatum";
 // подключение к базе mysql
$con=mysqli_connect($db_host,$db_login,$db_passwd,$db_name);
if (mysqli_connect_error()) {
    die('Ошибка подключения (' . mysqli_connect_errno() . ') '
            . mysqli_connect_error());
}
$con->set_charset("utf8"); // здесь
if (mysqli_connect_errno()) {  echo "-> Failed to connect to MySQL: " . mysqli_connect_error();}
// подключение к базе mysql

  //  $address = 'smtp.mail.ru'; // адрес smtp-сервера
 //   $port    = 25;          // порт (стандартный smtp - 25)
    
 //   $login   = 'sergomanov';    // логин к ящику
 //   $pwd     = '7Admin312';    // пароль к ящику
    
  //  $from    = 'sergomanov@mail.ru';  // адрес отправителя
  //   $to      = 'sergomanov@mail.ru';  // адрес получателя
    
  //  $subject = 'Message subject Тема';       // тема сообщения
  //  $message = 'Message text привет мир';          // текст сообщения

    try {
        
        // Создаем сокет
        $socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
        if ($socket < 0) {
            throw new Exception('socket_create() failed: '.socket_strerror(socket_last_error())."\n");
        }

        // Соединяем сокет к серверу
        echo ' -> Connect to \''.$address.':'.$port.'\' ... ';
        $result = socket_connect($socket, $address, $port);
        if ($result === false) {
            throw new Exception('socket_connect() failed: '.socket_strerror(socket_last_error())."\n");
        } else {
            echo "OK\n";
        }
        
        // Читаем информацию о сервере
        read_smtp_answer($socket);
        
        // Приветствуем сервер
        write_smtp_response($socket, 'EHLO '.$login);
        read_smtp_answer($socket); // ответ сервера
        
        echo ' -> Authentication ... ';
            
        // Делаем запрос авторизации
        write_smtp_response($socket, 'AUTH LOGIN');
        read_smtp_answer($socket); // ответ сервера
        
        // Отравляем логин
        write_smtp_response($socket, base64_encode($login));
        read_smtp_answer($socket); // ответ сервера
        
        // Отравляем пароль
        write_smtp_response($socket, base64_encode($pwd));
        read_smtp_answer($socket); // ответ сервера
        
        echo "OK\n";
        echo " -> Check sender address ... ".$from."  ... ";
        
        // Задаем адрес отправителя
        write_smtp_response($socket, 'MAIL FROM:<'.$from.'>');
        read_smtp_answer($socket); // ответ сервера
        
        echo "OK\n";
        echo " -> Check recipient address ... ". $to." ... ";
        
        // Задаем адрес получателя
        write_smtp_response($socket, 'RCPT TO:<'.$to.'>');
        read_smtp_answer($socket); // ответ сервера
        
        echo "OK\n";
        echo " -> Send message text ... ".$subject." ... ";
        
        // Готовим сервер к приему данных
        write_smtp_response($socket, 'DATA');
        read_smtp_answer($socket); // ответ сервера
        
        // Отправляем данные
        $message = "To: $to\r\n".$message; // добавляем заголовок сообщения "адрес получателя"
        $message = "Subject: $subject\r\n".$message; // заголовок "тема сообщения"
        write_smtp_response($socket, $message."\r\n.");
        read_smtp_answer($socket); // ответ сервера
        
        echo "OK\n";
        echo ' -> Close connection ... ';
        
        // Отсоединяемся от сервера
        write_smtp_response($socket, 'QUIT');
        read_smtp_answer($socket); // ответ сервера
        
        echo "OK\n";
		
		//Удаление отработтаных и подтверждённых записей
		    $res8 = mysqli_query($con,"SELECT * FROM `run` WHERE run ='1' AND mode='EML'");
			if($res8) {   while($row8 = mysqli_fetch_assoc($res8)) 
						 {
						 $del_command = $row8['id'];
						 mysqli_query($con,"DELETE FROM run WHERE id='$del_command'");
						 echo " -> Removal from the database of used commands.\n\r";
			 }}
			//Удаление отработтаных и подтверждённых записей
			
        
    } catch (Exception $e) {
        echo "\nError: ".$e->getMessage();
    }
    
    if (isset($socket)) {
        socket_close($socket);
    }
	}
    
    // Функция для чтения ответа сервера. Выбрасывает исключение в случае ошибки
    function read_smtp_answer($socket) {
        $read = socket_read($socket, 1024);
        
        if ($read{0} != '2' && $read{0} != '3') {
            if (!empty($read)) {
                throw new Exception('SMTP failed: '.$read."\n");
            } else {
                throw new Exception('Unknown error'."\n");
            }
        }
    }
    
    // Функция для отправки запроса серверу
    function write_smtp_response($socket, $msg) {
        $msg = $msg."\r\n";
        socket_write($socket, $msg, strlen($msg));
    }
?>