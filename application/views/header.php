<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Что сделать?</title>
<link rel="shortcut icon" href="/static/images/sphere.ico" type="image/x-icon">
<?php foreach($styles as $style): ?>
    <link href="<?php echo URL::base(); ?>static/css/<?php echo $style; ?>.css" 
    rel="stylesheet" type="text/css" />
<?php endforeach; ?>
  
<?php foreach($js as $j): ?>
    <script src="<?php echo URL::base(); ?>static/js/<?php echo $j; ?>.js" 
    type="text/javascript"></script>
<?php endforeach; ?>
    
        <script type="text/javascript">
        $(document).ready(function(){
          $('#menu').hide(); 
          $('#hide-layout').css({opacity: 0.1}); 
          $('#click-me').click(function() {
            $('#hide-layout, #menu').fadeIn(300);
          });
          $('#hide-layout').click(function() {
            $('#hide-layout, #menu').fadeOut(300); 
          });
          $('#btn-ok,').click(function() {
            $('#hide-layout, #popup').fadeOut(300); 
          });
		});
	</script>
    
</head>
    <body>
<div id="page">
<div id="head">
    <div id="signe">
        <a href="/" alt='Воздушный шар' title='Домой :)'> 
        <IMG src="/static/images/sphere.png">
        </a>
    </div>
    <div id="name_of_the_site">
        <a href="/ListOfCategories/" alt='Что сделать?' title='Думаешь чем заняться?
        Жми сюда!'>
        <IMG src="/static/images/name_of_the_site.png">
        </a>
    </div>
    <div id="search_buttons">
	<div id="search">
		<form>
		<div class="border search"><input id="field" name="field" type="text"/></div>
                <button id="submit" name="submit" type="submit" value="Поиск"></button>
		</form>
	</div>
	<?php if($isLoggedIn): ?>
	<div class="head_button exit"><a href="/logout">Выход</a></div>
	<?php else: ?>
        <div class="head_button enter"><a id="click-me" href="#">Вход</a><div id="menu">
			<div style='margin: 10px auto; width: 210px;'>
				<form method='POST'>
					<div>E-mail <input type="text" name="e-mail"/></div>
					<div>Пароль <input type="password" name="pass"/></div>
					<div><input id="btn-ok" type='submit' value='Войти'/></div>
				</form>
				<a>Я забыл пароль</a>
				</div><p style="text-align: left; margin-left: 4px; float: left;">Войти через:</p>
				<a href="/SNLogin/VKontakte"><div class="social_button Vk"></div></a>
				<a href="/SNLogin/facebook"><div class="social_button fb"></div></a>
				<a href="/SNLogin/twitter"><div class="social_button tw"></div></a>
            </div>
        </div>
	<div class="head_button registration"><a href="/Registration">Регистрация</a></div>
        <?php endif;?>
	</div>
    <div class="clear"></div>
	
</div>
    
<div id="menu_line_slider">
	<div id='menu_line'>
		<div id='container'>
		<div class='menu_button home'><a href="/">Домой</a></div>
		<div class='menu_button your_list'><a href="/Profile/">Твой список</a></div>
		<div class='menu_button read_lists'><a href="/ListOfCategories/">Читать списки</a></div>
		<div class='menu_button ideas'>Идеи</div>
		<div class='menu_button top_100'>Топ 100</div>
		</div>
		<div class="clear"></div>
	</div>
<div style='width: 98%; margin: 4px auto;'>
<img src='/static/images/header_back.jpg' width='100%'/>
</div>
</div>
<div id="hide-layout" class="hide-layout"></div>