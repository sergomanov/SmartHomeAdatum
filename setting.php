<!DOCTYPE html>
<html>
<head>


<?php	

 include 's-head.php';
 include 's-lib.php'; 
  include 'autt.php';
 ?>
 
 <link rel="stylesheet" type="text/css" media="all" href="css/googlefont.css" />
<link rel="stylesheet" type="text/css" media="all" href="css/whhg.css" />
<link href="css/jquery.sidr.light.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="css/bootstrap-checkbox.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="css/jquery.dataTables.css" rel="stylesheet" type="text/css"/>
<link href="css/font-awesome.css" rel="stylesheet" type="text/css"/>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
<link href="css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
<link href="css/animate.min.css" rel="stylesheet" type="text/css"/>
<link href="css/style.css" rel="stylesheet" type="text/css"/>
<link href="css/responsive.css" rel="stylesheet" type="text/css"/>
<link href="css/custom-icon-set.css" rel="stylesheet" type="text/css"/>
<link href="css/select2.css" rel="stylesheet"/>
<link href="css/jquery-ui-timepicker-addon.css" rel="stylesheet"/>
<link href="css/jquery-ui.css" rel="stylesheet"/>


<script src="js/jquery-1.8.3.min.js" type="text/javascript"></script> 
<script src="js/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script> 
<script src="js/bootstrap.min.js" type="text/javascript"></script> 
<script src="js/breakpoints.js" type="text/javascript"></script> 
<script src="js/jquery.unveil.min.js" type="text/javascript"></script> 
<script src="js/pace.min.js" type="text/javascript"></script>  
<script src="js/jquery.sidr.min.js" type="text/javascript"></script> 	
<script src="js/jquery.animateNumbers.js" type="text/javascript"></script> 
<script src="js/jquery.slimscroll.min.js" type="text/javascript"></script> 
<script src="js/s-email_comman.js" type="text/javascript"></script> 
<script src="js/s-core.js" type="text/javascript"></script> 
<script src="js/s-chat.js" type="text/javascript"></script> 
<script src="js/s-demo.js" type="text/javascript"></script> 
<script src="js/select2.js"></script>
<script src="js/jquery-ui-timepicker-addon.js"></script>
<script src="js/jquery-ui-timepicker-ru.js"></script>


<script src="assets/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
<script src="assets/js/form_validations.js" type="text/javascript"></script>



 <script>
        $(document).ready(function() { $(".select2").select2(); });
$.datepicker.regional['ru'] = {
	closeText: 'Закрыть',
	prevText: '<Пред',
	nextText: 'След>',
	currentText: 'Сегодня',
	monthNames: ['Январь','Февраль','Март','Апрель','Май','Июнь',
	'Июль','Август','Сентябрь','Октябрь','Ноябрь','Декабрь'],
	monthNamesShort: ['Янв','Фев','Мар','Апр','Май','Июн',
	'Июл','Авг','Сен','Окт','Ноя','Дек'],
	dayNames: ['воскресенье','понедельник','вторник','среда','четверг','пятница','суббота'],
	dayNamesShort: ['вск','пнд','втр','срд','чтв','птн','сбт'],
	dayNamesMin: ['Вс','Пн','Вт','Ср','Чт','Пт','Сб'],
	weekHeader: 'Не',
	dateFormat: 'dd.mm.yy',
	firstDay: 1,
	isRTL: false,
	showMonthAfterYear: false,
	yearSuffix: ''
};
$.datepicker.setDefaults($.datepicker.regional['ru']);


$.timepicker.regional['ru'] = {
	timeOnlyTitle: 'Выберите время',
	timeText: 'Время',
	hourText: 'Часы',
	minuteText: 'Минуты',
	secondText: 'Секунды',
	millisecText: 'Миллисекунды',
	timezoneText: 'Часовой пояс',
	currentText: 'Сейчас',
	closeText: 'Закрыть',
	timeFormat: 'HH:mm',
	amNames: ['AM', 'A'],
	pmNames: ['PM', 'P'],
	isRTL: false
};
$.timepicker.setDefaults($.timepicker.regional['ru']);
    </script>
	


			
			
			
			
			
</head>
<!-- END HEAD -->

<!-- BEGIN BODY -->
<body class="inner-menu-always-open">







<?php	 include 's-tophead.php'; ?>

<?php	 include 'adatum.class.php' ; ?>





<!-- BEGIN CONTAINER -->
<div class="page-container row-fluid"> 
<!-- BEGIN SIDEBAR -->
<div class="page-sidebar mini mini-mobile" id="main-menu" data-inner-menu="1">
 
 
 <?php	 include 's-slidebar.php'; ?>
 
 
 <form method="post" >
 
  <?php	 include 's-settmenu.php'; ?>
  
  

   
   
 </div>
  <a href="#" class="scrollup">Scroll</a>

  <div class="page-content"> 


    <div class="clearfix"></div>

    <div class="content">    

	 
	
								
							
								
								
								
			<div class="row">
             <div class="col-md-6">
              <div class="grid simple">
                <div class="grid-title no-border">
                  <h4>Настройки <span class="semi-bold">Системы</span></h4>
                  <div class="tools"> <i class="icon-usb" style="font-size: 20px;"></i> </div>
                </div>
                <div class="grid-body no-border"> <br>
			
                      <div class="form-group">
                        <label class="form-label">Часовой пояс</label>
                       
						<div class="input-with-icon  right">                                       
							<i class=""></i>
	<?php
		$result= mysqli_query($con, "SELECT * FROM data WHERE id='4'");
		$row=mysqli_fetch_array($result);	if($row){$timezone = $row['state'];}
?>
	
	<select name="timezone" id="timezone" style="width:100%" class="form-control">
		<option <?php if($timezone==-43200){echo "selected";}?> title="[UTC - 12] 	 Меридиан смены дат (запад)" value="-43200">[UTC - 12] Меридиан смены дат (запад)</option>
		<option <?php if($timezone==-39600){echo "selected";}?> title="[UTC - 11]    о. Мидуэй, Самоа" value="-39600">[UTC - 11] о. Мидуэй, Самоа</option>
		<option <?php if($timezone==-36000){echo "selected";}?> title="[UTC - 10]    Гавайи" value="-36000">[UTC - 10] Гавайи</option>
		<option <?php if($timezone==-34200){echo "selected";}?> title="[UTC - 9:30]  Маркизские острова" value="-34200">[UTC - 9:30] Маркизские острова</option>
		<option <?php if($timezone==-23400){echo "selected";}?> title="[UTC - 9]     Аляска" value="-23400">[UTC - 9] Аляска</option>
		<option <?php if($timezone==-28800){echo "selected";}?> title="[UTC - 8]     Тихоокеанское время (США и Канада) и Тихуана" value="-28800">[UTC - 8] Тихоокеанское время (США и Канада) и Тихуана</option>
		<option <?php if($timezone==-25200){echo "selected";}?> title="[UTC - 7]     Аризона" value="-25200">[UTC - 7] Аризона</option>
		<option <?php if($timezone==-21600){echo "selected";}?> title="[UTC - 6] 	 Мехико, Центральная Америка, Центральное время (США и Канада)" value="-21600">[UTC - 6] Мехико, Центральная Америка, Центральное время (США и Канада)</option>
		<option <?php if($timezone==-18000){echo "selected";}?> title="[UTC - 5]  	 Индиана (восток), Восточное время (США и Канада)" value="-18000">[UTC - 5] Индиана (восток), Восточное время (США и Канада)</option>
		<option <?php if($timezone==-16200){echo "selected";}?> title="[UTC - 4:30]  Венесуэла" value="-16200">[UTC - 4:30] Венесуэла</option>
		<option <?php if($timezone==-14400){echo "selected";}?> title="[UTC - 4] 	 Каракас, Сантьяго, Атлантическое время (Канада)" value="-14400">[UTC - 4] Каракас, Сантьяго, Атлантическое время (Канада)</option>
		<option <?php if($timezone==-12600){echo "selected";}?> title="[UTC - 3:30]  Ньюфаундленд" value="-12600">[UTC - 3:30] Ньюфаундленд</option>
		<option <?php if($timezone==-10800){echo "selected";}?> title="[UTC - 3] 	 Бразилия, Гренландия" value="-10800">[UTC - 3] Бразилия, Гренландия</option>
		<option <?php if($timezone==-7200){echo "selected";}?> title="[UTC - 2] 	 Среднеатлантическое время" value="-7200">[UTC - 2] Среднеатлантическое время</option>
		<option <?php if($timezone==-3600){echo "selected";}?> title="[UTC - 1]	 Азорские острова, острова Зеленого мыса" value="-3600">[UTC - 1] Азорские острова, острова Зеленого мыса</option>
		<option <?php if($timezone==0){echo "selected";}?> title="[UTC] 		 Время по Гринвичу: Дублин, Лондон, Лиссабон, Эдинбург" value="0">[UTC] Время по Гринвичу: Дублин, Лондон, Лиссабон, Эдинбург</option>
		<option <?php if($timezone==3600){echo "selected";}?> title="[UTC + 1] 	 Берлин, Мадрид, Париж, Рим, Западная Центральная Африка" value="3600">[UTC + 1] Берлин, Мадрид, Париж, Рим, Западная Центральная Африка</option>
		<option <?php if($timezone==7200){echo "selected";}?>  title="[UTC + 2] 	 Афины, Вильнюс, Киев, Минск, Рига, Таллин, Центральная Африка" value="7200">[UTC + 2] Афины, Вильнюс, Киев, Минск, Рига, Таллин, Центральная Африка</option>
		<option <?php if($timezone==10800){echo "selected";}?> title="[UTC + 3] 	 Волгоград, Москва, Санкт-Петербург" value="10800">[UTC + 3] Волгоград, Москва, Санкт-Петербург</option>
		<option <?php if($timezone==12600){echo "selected";}?> title="[UTC + 3:30]  Тегеран" value="12600">[UTC + 3:30] Тегеран</option>
		<option <?php if($timezone==14400){echo "selected";}?> title="[UTC + 4] 	 Баку, Ереван, Самара, Тбилиси" value="14400">[UTC + 4] Баку, Ереван, Самара, Тбилиси</option>
		<option <?php if($timezone==16200){echo "selected";}?> itle="[UTC + 4:30]  Кабул" value="16200">[UTC + 4:30] Кабул</option>
		<option <?php if($timezone==18000){echo "selected";}?> title="[UTC + 5]	 Екатеринбург, Исламабад, Карачи, Оренбург, Ташкент" value="18000">[UTC + 5] Екатеринбург, Исламабад, Карачи, Оренбург, Ташкент</option>
		<option <?php if($timezone==19800){echo "selected";}?> title="[UTC + 5:30]  Бомбей, Калькутта, Мадрас, Нью-Дели" value="19800">[UTC + 5:30] Бомбей, Калькутта, Мадрас, Нью-Дели</option>
		<option <?php if($timezone==20700){echo "selected";}?> title="[UTC + 5:45]  Катманду" value="20700">[UTC + 5:45] Катманду</option>
		<option <?php if($timezone==21600){echo "selected";}?> title="[UTC + 6] 	 Алматы, Астана, Новосибирск, Омск" value="21600">[UTC + 6] Алматы, Астана, Новосибирск, Омск</option>
		<option <?php if($timezone==23400){echo "selected";}?> title="[UTC + 6:30]  Рангун" value="23400">[UTC + 6:30] Рангун</option>
		<option <?php if($timezone==25200){echo "selected";}?> title="[UTC + 7] 	 Бангкок, Красноярск" value="25200">[UTC + 7] Бангкок, Красноярск</option>
		<option <?php if($timezone==28800){echo "selected";}?> title="[UTC + 8] 	 Гонконг, Иркутск, Пекин, Сингапур" value="28800" >[UTC + 8] Гонконг, Иркутск, Пекин, Сингапур</option>
		<option <?php if($timezone==31500){echo "selected";}?> title="[UTC + 8:45]  Юго-восточная Западная Австралия" value="31500">[UTC + 8:45] Юго-восточная Западная Австралия</option>
		<option <?php if($timezone==32400){echo "selected";}?> title="[UTC + 9] 	 Токио, Сеул, Чита, Якутск" value="32400">[UTC + 9] Токио, Сеул, Чита, Якутск</option>
		<option <?php if($timezone==34200){echo "selected";}?> title="[UTC + 9:30]  Дарвин" value="34200">[UTC + 9:30] Дарвин</option>
		<option <?php if($timezone==36000){echo "selected";}?> title="[UTC + 10]	 Владивосток, Канберра, Мельбурн, Сидней" value="36000">[UTC + 10] Владивосток, Канберра, Мельбурн, Сидней</option>
		<option <?php if($timezone==37800){echo "selected";}?> title="[UTC + 10:30] Лорд-Хау" value="37800">[UTC + 10:30] Лорд-Хау</option>
		<option <?php if($timezone==39600){echo "selected";}?> title="[UTC + 11] 	 Магадан, Сахалин, Соломоновы о-ва" value="39600">[UTC + 11] Магадан, Сахалин, Соломоновы о-ва</option>
		<option <?php if($timezone==41400){echo "selected";}?> title="[UTC + 11:30] Остров Норфолк" value="41400">[UTC + 11:30] Остров Норфолк</option>
		<option <?php if($timezone==43200){echo "selected";}?> title="[UTC + 12]	 Камчатка, Новая Зеландия, Фиджи" value="43200">[UTC + 12] Камчатка, Новая Зеландия, Фиджи</option>
		<option <?php if($timezone==45900){echo "selected";}?> title="[UTC + 12:45] Острова Чатем" value="45900">[UTC + 12:45] Острова Чатем</option>
		<option <?php if($timezone==46800){echo "selected";}?> title="[UTC + 13] 	 Острова Феникс, Тонга" value="46800">[UTC + 13] Острова Феникс, Тонга</option>
		<option <?php if($timezone==50400){echo "selected";}?> title="[UTC + 14]	 Остров Лайн" value="50400">[UTC + 14] Остров Лайн</option>
	</select>                               
						</div>
                      </div>

					  
					  
                      <div class="form-group">
					 
                        <label class="form-label">Имя адаптера usb-rs485</label>
                       
						<div class="input-with-icon  right">                                       
							<i class=""></i>
<?php
	$result= mysqli_query($con, "SELECT * FROM data WHERE id='5'");
	$row=mysqli_fetch_array($result);	if($row){$namedev = $row['state'];}
?>
							<input type="text" name="namedev" id="namedev" class="form-control" value="<?php echo $namedev;?>">                                 
						</div>
						
						
						
						         <label class="form-label">Ip адрес сервера</label>
                       
						<div class="input-with-icon  right">                                       
							<i class=""></i>
<?php
	$result= mysqli_query($con, "SELECT * FROM data WHERE id='21'");
	$row=mysqli_fetch_array($result);	if($row){$nameipservelocal = $row['state'];}
?>
							<input type="text" name="nameipservelocal" id="nameipservelocal" class="form-control" value="<?php echo $nameipservelocal;?>">                                 
						</div>
						
							    

								<label class="form-label">Время через которое считать датчики недоступными (секунды)</label>
                       
						<div class="input-with-icon  right">                                       
							<i class=""></i>
<?php
	$result= mysqli_query($con, "SELECT * FROM data WHERE id='22'");
	$row=mysqli_fetch_array($result);	if($row){$timeperioddat = $row['state'];}
?>
							<input type="text" name="timeperioddat" id="timeperioddat" class="form-control" value="<?php echo $timeperioddat;?>">                                 
						</div>
						
						
						
						<br>
						  <label class="form-label">Подключенные устройства</label>
						  <div class="alert alert-success">
				
<?php $result= mysqli_query($con, "SELECT * FROM data WHERE id='20'"); $row=mysqli_fetch_array($result); echo $row['state'];

?>
  </div>
                      </div>
               
				  <div class="form-actions">  
					<div class="pull-right">
					 
					 
					 	  <button type="submit" class="btn btn-danger btn-small btn-cons" name="edit"><i class="icon-ok"></i> Сохранить</button>
			  <button type="submit" class="btn btn-white btn-small btn-cons" name="refres">Отмена</button>
					</div>
					</div>
				
                </div>
              </div>
            </div>
			
			
			
			
			
			
			
			<div class="col-md-6">
              <div class="grid simple">
                <div class="grid-title no-border">
                  <h4>Настройки <span class="semi-bold">Почты</span></h4>
                  <div class="tools"> <i class="icon-emailforwarders" style="font-size: 20px;"></i> </div>
                </div>
                <div class="grid-body no-border"> <br>
			
                      <div class="form-group">
                        <label class="form-label">Адрес сервера почты</label>
                        <span class="help">к примеру "smtp.mail.ru"</span>
						<div class="input-with-icon  right">                                       
							<i class=""></i>
							<?php
	$result= mysqli_query($con, "SELECT * FROM data WHERE id='7'");
	$row=mysqli_fetch_array($result);	if($row){$mailaddressserver = $row['state'];}
?>
							<input type="text" name="mailaddressserver" id="mailaddressserver" class="form-control" value="<?php echo $mailaddressserver;?>">                                 
						</div>
                      </div>
                      <div class="form-group">
                        <label class="form-label">Порт сервера почты</label>
                        <span class="help">к примеру  "25"</span>
						<div class="input-with-icon  right">                                       
							<i class=""></i>
														<?php
	$result= mysqli_query($con, "SELECT * FROM data WHERE id='8'");
	$row=mysqli_fetch_array($result);	if($row){$mailportserver = $row['state'];}
?>
							<input type="text" name="mailportserver" id="mailportserver" class="form-control" value="<?php echo $mailportserver;?>">                                    
						</div>
                      </div>
					  <div class="form-group">
                        <label class="form-label">Адрес отправителя</label>
                        <span class="help">к примеру  "info@mail.ru"</span>
						<div class="input-with-icon  right">                                       
							<i class=""></i>
														<?php
	$result= mysqli_query($con, "SELECT * FROM data WHERE id='11'");
	$row=mysqli_fetch_array($result);	if($row){$mailfrom = $row['state'];}
?>
							<input type="text" name="mailfrom" id="mailfrom" class="form-control" value="<?php echo $mailfrom;?>">                                 
						</div>
                      </div>
                      <div class="form-group">
                        <label class="form-label">Логин</label>
                        <span class="help">к примеру  "info"</span>
						<div class="input-with-icon  right">                                       
							<i class=""></i>
														<?php
	$result= mysqli_query($con, "SELECT * FROM data WHERE id='9'");
	$row=mysqli_fetch_array($result);	if($row){$maillogin = $row['state'];}
?>
							<input type="text" name="maillogin" id="maillogin" class="form-control" value="<?php echo $maillogin;?>">                                  
						</div>
                      </div>
					   <div class="form-group">
                        <label class="form-label">Пароль</label>
                        <span class="help">к примеру  "Z344fwQ"</span>
						<div class="input-with-icon  right">                                       
							<i class=""></i>
														<?php
	$result= mysqli_query($con, "SELECT * FROM data WHERE id='10'");
	$row=mysqli_fetch_array($result);	if($row){$mailpwd = $row['state'];}
?>
							<input type="password" name="mailpwd" id="mailpwd" class="form-control" value="<?php echo $mailpwd;?>">                               
						</div>
                      </div>
				  <div class="form-actions">  
					<div class="pull-right">
			  <button type="submit" class="btn btn-danger btn-small btn-cons" name="edit2"><i class="icon-ok"></i> Сохранить</button>
			  <button type="submit" class="btn btn-white btn-small btn-cons" name="refres">Отмена</button>
	
					</div>
					</div>
					
				
                </div>
              </div>
            </div>
			
			
			<div class="col-md-6">
              <div class="grid simple">
                <div class="grid-title no-border">
                  <h4>Управление <span class="semi-bold">Системой</span></h4>
                  <div class="tools"> <i class="icon-settingstwo-gearalt" style="font-size: 20px;"></i> </div>
                </div>
                <div class="grid-body no-border"> <br>
			
                    
					 <div class="form-group">
                        <label class="form-label">Перезапуск сервисов</label>
                       
						                                   
                             	  <button type="submit" class="btn btn-warning btn-small btn-cons" name="restart"><i class="icon-ok"></i> Перезапустить</button>  
					<p style="font-size: 10px;">( Сервисы включатся в течении минуты после перезапуска. )</p>
                      </div>
					  
					  
					
                      <div class="form-group">
                        <label class="form-label">Перезагрузка</label>
                       
						                                   
                             	  <button type="submit" class="btn btn-danger btn-small btn-cons" name="reboot"><i class="icon-ok"></i> Перезагрузить</button>  
					
                      </div>
					   <div class="form-group">
                        <label class="form-label">Выключение системы</label>
                       
						                                   
                             	  <button type="submit" class="btn btn-danger btn-small btn-cons" name="shutdown"><i class="icon-ok"></i> Выключить</button>  
					
                      </div>
                   

				
                </div>
              </div>
            </div>
			
			
			
			<div class="col-md-6">
              <div class="grid simple">
                <div class="grid-title no-border">
                  <h4>Настройки <span class="semi-bold">3G модема</span></h4>
                  <div class="tools"> <i class="icon-mobile text-success " style="font-size: 20px;"></i> </div>
                </div>
                <div class="grid-body no-border"> <br>
			
                        <div class="form-group">
                        <label class="form-label">Префикс названия ком порта в системе</label>
                       
						<div class="input-with-icon  right">                                       
							<i class=""></i>
<?php
	$result= mysqli_query($con, "SELECT * FROM data WHERE id='19'");
	$row=mysqli_fetch_array($result);	if($row){$namedev = $row['state'];}
?>
							<input type="text" name="prefixcom" id="prefixcom" class="form-control" value="<?php echo $namedev;?>">                                 
						</div>
                       </div>
					
					   <div class="form-group">
                        <label class="form-label">Название 3G модема</label>
                       
						<div class="input-with-icon  right">                                       
							<i class=""></i>
<?php
	$result= mysqli_query($con, "SELECT * FROM data WHERE id='17'");
	$row=mysqli_fetch_array($result);	if($row){$namedev = $row['state'];}
?>
							<input type="text" name="name3g" id="name3g" class="form-control" value="<?php echo $namedev;?>">                                 
						</div>
                       </div>
					  	   <div class="form-group">
                        <label class="form-label">Номер СМС центра</label>
						<p style="font-size: 10px;">Номер смс центра оператора сотовой связи (для современных Sim карт вводить не требуется, автоматически берется с Sim карты).</p><br>
                       
						<div class="input-with-icon  right">                                       
							<i class=""></i>
<?php
	$result= mysqli_query($con, "SELECT * FROM data WHERE id='18'");
	$row=mysqli_fetch_array($result);	if($row){$namedev = $row['state'];}
?>
							<input type="text" name="numsns" id="numsns" class="form-control" value="<?php echo $namedev;?>">                                 
						</div>
                       </div>
					
                     
					  
                   
				  <div class="form-actions">  
					<div class="pull-right">
					   <button type="submit" class="btn btn-danger btn-small btn-cons" name="edit3"><i class="icon-ok"></i> Сохранить</button>
			  <button type="submit" class="btn btn-white btn-small btn-cons" name="refres">Отмена</button>
				
					</div>
					</div>
				
                </div>
              </div>
            </div>
			
			
          </div>	
								
								
		 		<?php


if (isset($_POST['refres'])) { echo "<SCRIPT> window.location.reload();</SCRIPT>";}


if (isset($_POST['restart'])) { 
mysqli_query($con,"UPDATE data SET state='3' WHERE id='16'"); 
echo "<SCRIPT> window.location.reload();</SCRIPT>";
}


if (isset($_POST['reboot'])) { 
mysqli_query($con,"UPDATE data SET state='2' WHERE id='16'"); 
echo "<SCRIPT>alert('Система будет перезагружена....');</SCRIPT>";
}

if (isset($_POST['shutdown'])) { 
mysqli_query($con,"UPDATE data SET state='1' WHERE id='16'"); 
//echo "<SCRIPT> window.location.reload();</SCRIPT>";
}

if (isset($_POST['edit'])) {

$timezone = $_POST['timezone'];
$namedev= $_POST['namedev'];
$prefixcom= $_POST['prefixcom'];
$cities= $_POST['cities'];
$nameipservelocal= $_POST['nameipservelocal'];
$timeperioddat= $_POST['timeperioddat'];


 
mysqli_query($con,"UPDATE data SET state='$timezone'  WHERE id = 4");
mysqli_query($con,"UPDATE data SET state='$namedev'  WHERE id = 5");
mysqli_query($con,"UPDATE data SET state='$prefixcom'  WHERE id = 19");
mysqli_query($con,"UPDATE data SET state='$cities'  WHERE id = 2");
mysqli_query($con,"UPDATE data SET state='$nameipservelocal'  WHERE id = 21");
mysqli_query($con,"UPDATE data SET state='$timeperioddat'  WHERE id = 22");
 echo "Запись изменена";
 echo "<SCRIPT> window.location.reload();</SCRIPT>";
}


if (isset($_POST['edit3'])) {


$prefixcom= $_POST['prefixcom'];
$numsns= $_POST['numsns'];
$name3g= $_POST['name3g'];
 

mysqli_query($con,"UPDATE data SET state='$prefixcom'  WHERE id = 19");
mysqli_query($con,"UPDATE data SET state='$numsns'  WHERE id = 18");
mysqli_query($con,"UPDATE data SET state='$name3g'  WHERE id = 17");

 echo "Запись изменена";
 echo "<SCRIPT> window.location.reload();</SCRIPT>";
}


if (isset($_POST['edit2'])) {

 $mailaddressserver = $_POST['mailaddressserver'];
$mailportserver= $_POST['mailportserver'];
$mailfrom= $_POST['mailfrom'];
 $maillogin= $_POST['maillogin'];
 $mailpwd= $_POST['mailpwd'];
 
mysqli_query($con,"UPDATE data SET state='$mailaddressserver'  WHERE id = 7");
mysqli_query($con,"UPDATE data SET state='$mailportserver'  WHERE id = 8");
mysqli_query($con,"UPDATE data SET state='$mailfrom'  WHERE id = 11");
mysqli_query($con,"UPDATE data SET state='$maillogin'  WHERE id = 9");
mysqli_query($con,"UPDATE data SET state='$mailpwd'  WHERE id = 10");
 echo "Запись изменена";
 echo "<SCRIPT> window.location.reload();</SCRIPT>";
}

?>						
								
		
		
	
		

	

 <div class="clearfix"></div>
  </div>
   <div class="clearfix"></div>

  <!-- END PAGE --> 
</div>

 </div>
 

 
 
 
 
 </form>
 
<?php	
 include 's-rpanel.php'; 
?>




</body>
</html>