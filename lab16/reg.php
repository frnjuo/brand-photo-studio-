<?php if (isset($_POST['login'])) {
$link=mysqli_connect("localhost", "root", NULL, "strukov") or die("Could not connect: ".mysqli_connect_error());
mysqli_set_charset($link, "utf8");
$query0 = mysqli_query($link,"INSERT INTO `strukov`.`clients` (`login`, `pass`, `email`, `phone`, `country`, `city`, `avatar`, `first name`, `last name`) VALUES ('".$_POST['login']."', '".$_POST['pass']."', '".$_POST['email']."', '".$_POST['phone']."', '".$_POST['country']."', '".$_POST['city']."', '".$_POST['avatar']."', '".$_POST['first_name']."', '".$_POST['last_name']."')");
header('Location: reg.php?ok=1');
exit;
} ?>
<?php include("head.php");?>
<tr><td>
<style>
/* Стили форм */
.forma label { display: block; margin: 0 0 6px 0; font-size: 14px; color: #6f737b; }
.forma .pole_formy { display: block; width: 100%; margin: 0 0 16px 0; padding: 10px 12px; border: 1px solid #d5d8dd; border-radius: 8px; font-family: Arial, sans-serif; font-size: 15px; box-sizing: border-box; }
.forma .knopka { display: inline-block; border: none; font-size: 15px; cursor: pointer; }
#err { display: block; margin-top: 14px; font-weight: bold; color: #8b1e3f; }
.soobshenie { margin-bottom: 16px; padding: 14px 18px; border-radius: 10px; background-color: #e7f5ec; color: #1e6b3a; font-weight: bold; }
.podskazka { margin: 0 0 20px 0; color: #6f737b; }
</style>
<div class="soderzhanie">
<div class="wrap">

	<h1 style="margin-top:10px">Регистрация</h1>
	<p class="podskazka">Создайте аккаунт, чтобы оставлять отзывы о товарах и пользоваться личным кабинетом. Поля со звездочкой обязательны.</p>

	<?php if (isset($_GET['ok'])) { ?>
	<div class="soobshenie">Регистрация прошла успешно! Теперь вы можете <a href="cabinet.php" style="color:#1e6b3a; text-decoration:underline">войти в личный кабинет</a>.</div>
	<?php } ?>

	<!-- Форма регистрации -->
	<div class="blok">
		<form method="post" id="regforma" class="forma">
			<table class="setka">
			<tr>
				<td style="width:50%">
					<label>Логин *</label><input name="login" class="pole_formy" />
					<label>Пароль *</label><input name="pass" type="password" class="pole_formy" />
					<label>Повторите пароль *</label><input name="pass2" type="password" class="pole_formy" />
					<label>Имя *</label><input name="first_name" class="pole_formy" />
					<label>Фамилия *</label><input name="last_name" class="pole_formy" />
				</td>
				<td class="posl" style="width:50%">
					<label>Электронная почта *</label><input name="email" class="pole_formy" />
					<label>Телефон * (10 цифр без +7)</label><input name="phone" maxlength="10" class="pole_formy" placeholder="9061234567" />
					<label>Страна</label><input name="country" class="pole_formy" placeholder="Россия" />
					<label>Город</label><input name="city" class="pole_formy" />
					<label>Аватар (имя файла в папке images)</label><input name="avatar" class="pole_formy" placeholder="например, 11.jpg" />
				</td>
			</tr>
			</table>
			<input type="submit" class="knopka" value="Зарегистрироваться" />
		</form>
		<a id="err"></a>
		<script type="text/javascript">
		regforma.onsubmit = function() {
		if (regforma.login.value.length < 3) {err.innerHTML="Логин должен содержать не менее 3 символов"; return false;}
		if (regforma.pass.value.length < 4) {err.innerHTML="Пароль должен содержать не менее 4 символов"; return false;}
		if (regforma.pass.value != regforma.pass2.value) {err.innerHTML="Пароли не совпадают"; return false;}
		if (regforma.first_name.value == "") {err.innerHTML="Введите имя"; return false;}
		if (regforma.last_name.value == "") {err.innerHTML="Введите фамилию"; return false;}
		if (regforma.email.value.indexOf("@") == -1) {err.innerHTML="Введите корректный адрес электронной почты"; return false;}
		if (!/^[0-9]{10}$/.test(regforma.phone.value)) {err.innerHTML="Телефон должен состоять из 10 цифр, например 9061234567"; return false;}
		}
		</script>
	</div>

</div>
</div>
</td></tr>
<?php include("foot.php");?>
