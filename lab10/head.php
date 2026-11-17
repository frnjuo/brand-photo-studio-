<html><head><title>Сокет – магазин комплектующих для ПК</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style>
/* Общие стили */
body { background-color: #f2f3f5; }
table { border-collapse: collapse; border: none; table-layout: fixed; }
td { border: none; padding: 0; vertical-align: top; font-family: Arial, sans-serif; font-size: 15px; color: #1d1f23; }
a { color: #1d1f23; text-decoration: none; }
.wrap { max-width: 1100px; margin: 0 auto; padding: 0 20px; }
.setka { width: 100%; }
.setka td { padding-right: 16px; }
.setka td.posl { padding-right: 0; }

/* «Шапка» */
.shapka { height: 150px; background-color: #ffffff; border-bottom: 1px solid #e4e6ea; }
.logo { padding-top: 20px; font-size: 28px; font-weight: bold; }
.logo a { display: inline-block; }
.logo_znak { display: inline-block; width: 12px; height: 12px; margin-right: 8px; border: 10px solid #8b1e3f; border-radius: 8px; background-color: #ffffff; vertical-align: -5px; }
.logo small { display: block; margin-top: 4px; font-size: 13px; font-weight: normal; color: #6f737b; }
.podval .logo { padding-top: 0; margin-bottom: 12px; font-size: 22px; }
.poisk { padding-top: 26px; text-align: right; }
.poisk input { height: 40px; border: 2px solid #8b1e3f; font-size: 15px; vertical-align: top; }
.poisk .pole { width: 340px; padding: 0 12px; border-right: none; }
.poisk .knopka_poisk { padding: 0 20px; background-color: #8b1e3f; color: #ffffff; font-weight: bold; cursor: pointer; }
.tel { padding-top: 26px; text-align: right; font-size: 17px; font-weight: bold; }
.tel small { display: block; font-size: 12px; font-weight: normal; color: #6f737b; }
.menu { padding-top: 14px; }
.menu a { display: inline-block; margin-right: 6px; padding: 8px 18px; border-radius: 8px; font-size: 15px; }
.menu a:hover { background-color: #f2f3f5; }
.menu a.aktiv { background-color: #1d1f23; color: #ffffff; }

/* Содержание */
.soderzhanie { padding: 24px 0 50px 0; }
h1 { margin: 40px 0 18px 0; font-size: 26px; }
.banner { padding: 50px 44px; border-radius: 16px; background-color: #1d1f23; }
.banner h2 { margin: 0 0 14px 0; font-size: 38px; color: #ffffff; }
.banner p { width: 560px; max-width: 100%; margin: 0 0 28px 0; font-size: 17px; line-height: 1.5; color: #b9bcc2; }
.knopka { display: inline-block; padding: 13px 26px; border-radius: 10px; background-color: #8b1e3f; color: #ffffff; font-weight: bold; }
.knopka:hover { background-color: #6e1631; }
.blok { padding: 26px; border-radius: 14px; background-color: #ffffff; }
.blok p { margin: 0 0 12px 0; line-height: 1.6; color: #4a4e56; }
.blok h3 { margin: 0 0 8px 0; font-size: 18px; }
.nomer { display: block; margin-bottom: 12px; font-size: 28px; font-weight: bold; color: #8b1e3f; }
.akciya_1 { background-color: #8b1e3f; }
.akciya_1 h3, .akciya_1 p, .akciya_1 .nomer { color: #ffffff; }

/* «Подвал» */
.podval { padding: 36px 0 20px 0; background-color: #ffffff; border-top: 1px solid #e4e6ea; }
.podval h4 { margin: 0 0 12px 0; font-size: 15px; }
.podval p { margin: 0; font-size: 14px; line-height: 1.9; color: #4a4e56; }
.podval a { display: block; font-size: 14px; line-height: 1.9; color: #4a4e56; }
.podval a:hover { color: #8b1e3f; }
.kopirait { margin-top: 24px; padding-top: 16px; border-top: 1px solid #e4e6ea; font-size: 13px; color: #6f737b; }

/* Телефон */
@media (max-width: 700px) {
	.setka, .setka tbody, .setka tr { display: block; width: 100%; }
	.setka td { display: block; width: auto !important; padding: 0 0 12px 0; }
	.shapka { height: auto; padding-bottom: 12px; }
	.poisk, .tel { padding-top: 12px; text-align: left; }
	.poisk .pole { width: 65%; }
	.banner { padding: 28px; }
	.banner h2 { font-size: 28px; }
}
</style>
</head>
<body style="width:100%; height:100%; margin:0">
<table border="1" style="width:100%; height:100%">
<tr><td style="height:150px">
<div class="shapka">
	<div class="wrap">
		<table class="setka">
		<tr>
			<!-- Логотип -->
			<td style="width:30%"><div class="logo"><a href="index.php"><span class="logo_znak"></span>Сокет</a><small>магазин комплектующих для ПК</small></div></td>
			<!-- Строка поиска -->
			<td style="width:50%"><form class="poisk" action="#" method="get"><input type="text" class="pole" name="poisk" placeholder="Поиск комплектующих" /><input type="submit" class="knopka_poisk" value="Найти" /></form></td>
			<!-- Телефон -->
			<td class="posl" style="width:20%"><div class="tel">8 (800) 555-35-35<small>ежедневно 9:00 – 21:00</small></div></td>
		</tr>
		</table>
		<!-- Меню сайта -->
		<div class="menu">
			<a href="index.php"<?php if (basename($_SERVER["PHP_SELF"]) == "index.php") echo ' class="aktiv"'; ?>>Главная</a>
			<a>Регистрация</a>
			<a>Кабинет</a>
			<a>Каталог</a>
			<a href="contact.php"<?php if (basename($_SERVER["PHP_SELF"]) == "contact.php") echo ' class="aktiv"'; ?>>Контакты</a>
		</div>
	</div>
</div>
</td></tr>
