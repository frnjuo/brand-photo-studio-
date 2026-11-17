<?php include("head.php");?>
<tr><td>
<div class="soderzhanie">
<div class="wrap">

	<h1 style="margin-top:10px">Контакты</h1>

	<!-- Информация о контактах и карта -->
	<table class="setka">
	<tr>
		<td style="width:35%">
			<div class="blok kontakty">
				<h3>Адрес магазина</h3>
				<p>г. Москва, ул. Тверская, д. 7</p>
				<h3>Телефон</h3>
				<p>8 (800) 555-35-35</p>
				<h3>Электронная почта</h3>
				<p>info@soket-shop.ru</p>
				<h3>Режим работы</h3>
				<p>Ежедневно с 9:00 до 21:00</p>
				<h3>Как добраться</h3>
				<p style="margin-bottom:0">Метро «Охотный Ряд», 3 минуты пешком</p>
			</div>
		</td>
		<td class="posl" style="width:65%">
			<div class="blok karta">
				<iframe src="https://yandex.ru/map-widget/v1/?ll=37.610818%2C55.757718&z=16&pt=37.610818%2C55.757718%2Cpm2rdm" allowfullscreen="true"></iframe>
			</div>
		</td>
	</tr>
	</table>

	<!-- Форма отправки сообщения -->
	<h1>Напишите нам</h1>
	<div class="blok">
		<form class="forma">
			<label for="mailtema">Тема сообщения</label>
			<input id="mailtema" class="pole_formy" placeholder="Например: подбор комплектующих" />
			<label for="mailtext">Текст сообщения</label>
			<textarea id="mailtext" class="pole_formy" placeholder="Опишите ваш вопрос"></textarea>
			<input type="button" class="knopka" value="Отправить сообщение" onclick="sendmail()" />
		</form>
		<script type="text/javascript">
		function sendmail() {
		window.open("mailto:info@soket-shop.ru?subject="+mailtema.value+"&body="+mailtext.value);
		}
		</script>
	</div>

</div>
</div>
</td></tr>
<?php include("foot.php");?>
