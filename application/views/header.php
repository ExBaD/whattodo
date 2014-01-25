<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>ЧТО СДЕЛАТЬ?</title>
<?php foreach($styles as $style): ?>
    <link href="<?php echo URL::base(); ?>static/css/<?php echo $style; ?>.css" 
    rel="stylesheet" type="text/css" />
<?php endforeach; ?>
  
<?php foreach($js as $j): ?>
    <script src="<?php echo URL::base(); ?>static/js/<?php echo $j; ?>.js" 
    type="text/javascript"></script> 
<?php endforeach; ?> 
</head>
    <body>
<div style='width: 100%; min-width: 1250px;'>
<DIV style='height: 150px; margin: 0 auto; width: 60%'>
<DIV style="FLOAT: left"><IMG src="/static/images/sphere.png" width=80></DIV>
<DIV style="FLOAT: left; margin-left: 20px">
<DIV style="FONT-FAMILY: Calibri; COLOR: #31859c; FONT-SIZE: 80px">ЧТО СДЕЛАТЬ?</DIV>
<DIV style="FONT-STYLE: italic; FONT-FAMILY: Calibri; COLOR: #dd2f54; FONT-SIZE: 25px">1000 способов сделать свою жизнь ярче</DIV></DIV>
<DIV style="FLOAT: left; margin-left: 20px">
<?php if($isLoggedIn): ?>
    <DIV style="FONT-FAMILY: Calibri; FONT-SIZE: 20px"><A style="COLOR: #00b0f0;" href="/logout">Выход</A></DIV>
<?php else: ?>    
<DIV style="FONT-FAMILY: Calibri; FONT-SIZE: 20px"><A style="COLOR: #00b0f0;" href="/Registration">Регистрация</A></DIV>
<DIV style="FONT-FAMILY: Calibri; FONT-SIZE: 20px"><A style="COLOR: #00b0f0;" href="/login">Вход</A></DIV>
<DIV style="FONT-FAMILY: Calibri; FONT-SIZE: 20px"><A style="COLOR: #00b0f0;" href="/SNLogin/VKontakte">ВК</A> <A style="COLOR: #00b0f0;" href="SNLogin/facebook">FB</A> <A style="COLOR: #00b0f0;" href="SNLogin/twitter">TW</A></DIV>
<?php endif; ?>
</DIV></DIV>
<div style='background-image: url("/static/images/background.jpg");'>
<div style='background-color: #ffffff; width: 70%; margin: 0 auto;' class='theShaddow'>
<div>
<div style='width: 100%;'>
<div style='width: 98%; color: #ffffff; margin-left: 10px; font-family: Arial; font-size: 17px; font-weight: bold; height: 25px'>
<div style='float: left; background-color: #17375E; width: 15%; text-align: center; height: 100%'>Дом</div>
<div style='float: left; background-color: #31859C; width: 23%; text-align: center; height: 100%'><a href="/Profile/" style='color: white; text-decoration: none'>Твой список</a></div>
<div style='float: left; background-color: #5BBF4D; width: 25%; text-align: center; height: 100%'><a href="/ListOfCategories/" style='color: white; text-decoration: none'>Читать списки</a></div>
<div style='float: left; background-color: #E9AD17; width: 22%; text-align: center; height: 100%'>Идеи</div>
<div style='float: left; background-color: #DD2F54; width: 15%; text-align: center; height: 100%'>Топ 100</div>
</div>
</div>
</div>
<div style='width: 100%'>
<img src='/static/images/header_back.jpg' width='100%'/>
</div>