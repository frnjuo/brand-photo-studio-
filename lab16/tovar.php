<?php session_start(); ?>
<?php if (isset($_POST['otzivtext'])) {
$urls=parse_url($_SERVER['REQUEST_URI']);
parse_str($urls['query'],$params);
$link=mysqli_connect("localhost", "root", NULL, "strukov") or die("Could not connect: ".mysqli_connect_error());
mysqli_set_charset($link, "utf8");
$query0 = mysqli_query($link,"INSERT INTO `strukov`.`otzivi` (`client`,`date`,`text`,`tovar`) VALUES ('".$_SESSION['id']."', '".date("y.m.d")."', '".$_POST['otzivtext']."', '".$params['id']."')");
header('Location: tovar.php?id='.$params['id']);
exit;
} ?>
<?php include("head.php");?>
<tr><td>
<style>
/* Стили страницы товара */
.hleb { margin: 6px 0 18px 0; font-size: 14px; color: #6f737b; }
.hleb a { color: #8b1e3f; }
.tovar_foto { padding: 20px; text-align: center; }
.tovar_foto img { display: block; width: 100%; height: 340px; object-fit: contain; }
.tovar_kat { margin-bottom: 6px; font-size: 13px; color: #6f737b; text-transform: uppercase; letter-spacing: 0.04em; }
.tovar_nazv { margin: 0 0 12px 0; font-size: 28px; line-height: 1.25; }
.tovar_har { margin: 0 0 22px 0; font-size: 16px; color: #4a4e56; }
.tovar_cena { margin-bottom: 6px; font-size: 34px; font-weight: bold; }
.tovar_nal { margin-bottom: 22px; font-size: 14px; color: #1e6b3a; font-weight: bold; }
.tovar_info td { padding: 10px 0; border-bottom: 1px solid #e4e6ea; font-size: 15px; }
.tovar_info td.nazv_polya { width: 40%; color: #6f737b; }
/* Стили отзывов */
.otziv { margin-bottom: 12px; }
.otziv_avtor { font-weight: bold; }
.otziv_data { margin-left: 8px; font-size: 13px; color: #6f737b; }
.otziv p { margin: 8px 0 0 0; }
.forma label { display: block; margin: 0 0 6px 0; font-size: 14px; color: #6f737b; }
.forma .pole_formy { display: block; width: 100%; height: 110px; margin: 0 0 16px 0; padding: 10px 12px; border: 1px solid #d5d8dd; border-radius: 8px; font-family: Arial, sans-serif; font-size: 15px; box-sizing: border-box; resize: vertical; }
.forma .knopka { display: inline-block; border: none; font-size: 15px; cursor: pointer; }
#err { display: block; margin-top: 14px; font-weight: bold; color: #8b1e3f; }
.net_otzivov { color: #6f737b; }
.net_otzivov a { color: #8b1e3f; font-weight: bold; }
</style>

<?php $urls=parse_url($_SERVER['REQUEST_URI']); parse_str($urls['query'],$params); ?>
<?php $link=mysqli_connect("localhost", "root", NULL, "strukov") or die("Could not connect: ".mysqli_connect_error()); ?>
<?php mysqli_set_charset($link, "utf8"); ?>
<?php $query0 = mysqli_query($link,"SELECT * FROM tovar WHERE id=".$params['id']); ?>
<?php $data=mysqli_fetch_array($query0); ?>

<div class="soderzhanie">
<div class="wrap">

	<div class="hleb"><a href="catalog.php">Каталог</a> / <?php echo $data['description'];?></div>

	<!-- Фото и основная информация о товаре -->
	<table class="setka">
	<tr>
		<td style="width:45%">
			<div class="blok tovar_foto"><img src="tovar/<?php echo $data['image'];?>" alt="<?php echo $data['name'];?>" /></div>
		</td>
		<td class="posl" style="width:55%">
			<div class="blok">
				<div class="tovar_kat"><?php echo $data['category'];?> · <?php echo $data['description'];?></div>
				<h1 class="tovar_nazv"><?php echo $data['name'];?></h1>
				<p class="tovar_har">Цвет: <?php echo $data['color'];?></p>
				<div class="tovar_cena"><?php echo $data['price'];?> ₽</div>
				<div class="tovar_nal"><?php echo $data['availability'];?></div>
				<a class="knopka">Добавить в корзину</a>
			</div>
		</td>
	</tr>
	</table>

	<!-- Характеристики -->
	<h1>Характеристики</h1>
	<div class="blok">
		<table class="tovar_info" style="width:100%">
			<tr><td class="nazv_polya">Категория</td><td><?php echo $data['category'];?></td></tr>
			<tr><td class="nazv_polya">Тип</td><td><?php echo $data['description'];?></td></tr>
			<tr><td class="nazv_polya">Цвет</td><td><?php echo $data['color'];?></td></tr>
			<tr><td class="nazv_polya">Наличие</td><td><?php echo $data['availability'];?></td></tr>
			<tr><td class="nazv_polya">Рассрочка</td><td><?php echo $data['credit'];?></td></tr>
			<tr><td class="nazv_polya">Доставка</td><td><?php echo $data['delivery'];?></td></tr>
			<tr><td class="nazv_polya">Артикул</td><td><?php echo $data['id'];?></td></tr>
		</table>
	</div>

	<!-- Отзывы на товар -->
	<h1>Отзывы покупателей</h1>
	<div>
		<?php $query0 = mysqli_query($link,"SELECT * FROM `otzivi`, `clients` WHERE `otzivi`.`client`=`clients`.`id` AND `otzivi`.`tovar`=".$params['id']); ?>
		<?php if (mysqli_num_rows($query0)>0) {
		$data=mysqli_fetch_array($query0);
		do{ ?>
		<div class="blok otziv">
			<span class="otziv_avtor"><?php echo $data['first name']; ?> <?php echo $data['last name']; ?></span>
			<span class="otziv_data"><?php echo date("d.m.Y", strtotime($data['date'])); ?></span>
			<p><?php echo $data['text']; ?></p>
		</div>
		<?php } while($data=mysqli_fetch_array($query0));
		} else { ?>
		<div class="blok net_otzivov">У этого товара пока нет отзывов. Будьте первым!</div>
		<?php } ?>
	</div>

	<!-- Форма добавления отзыва (только для авторизованных пользователей) -->
	<h1>Оставить отзыв</h1>
	<div class="blok">
	<?php if(isset($_SESSION['id'])) { ?>
		<form method="post" id="otzivforma" class="forma">
			<label>Ваш отзыв о товаре</label>
			<textarea name="otzivtext" class="pole_formy" placeholder="Расскажите о своем опыте использования"></textarea>
			<input type="submit" class="knopka" value="Отправить отзыв" />
		</form>
		<a id="err"></a>
		<script type="text/javascript">
		otzivforma.onsubmit = function() {
		if (otzivforma.otzivtext.value == "") {err.innerHTML="Введите текст отзыва"; return false;}
		if (otzivforma.otzivtext.value.length < 10) {err.innerHTML="Отзыв должен содержать не менее 10 символов"; return false;}
		}
		</script>
	<?php } else { ?>
		<div class="net_otzivov">Чтобы оставить отзыв, <a href="cabinet.php">войдите в личный кабинет</a> или <a href="reg.php">зарегистрируйтесь</a>.</div>
	<?php } ?>
	</div>

</div>
</div>
</td></tr>
<?php include("foot.php");?>
