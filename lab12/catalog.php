<?php include("head.php");?>
<tr><td>
<div class="soderzhanie">
<div class="wrap">

	<h1 style="margin-top:10px">Каталог комплектующих</h1>

	<!-- Подключение к базе данных и запрос товаров -->
	<?php $link=mysqli_connect("localhost", "root", NULL, "strukov") or die("Could not connect: ".mysqli_connect_error()); ?>
	<?php mysqli_set_charset($link, "utf8"); ?>
	<?php $query0 = mysqli_query($link,"SELECT * FROM tovar"); ?>
	<?php $data=mysqli_fetch_array($query0); ?>

	<!-- Набор карточек товаров -->
	<div style="display: flex; flex-wrap: wrap; justify-content: center;">
	<?php do{ ?>
		<div class="card">
			<div class="card_foto"><img src="tovar/<?php echo $data['image'];?>" alt="<?php echo $data['name'];?>" /></div>
			<div class="card_kat"><?php echo $data['description'];?></div>
			<div class="card_nazv"><?php echo $data['name'];?></div>
			<div class="card_har">Цвет: <?php echo $data['color'];?></div>
			<div class="card_cena"><?php echo $data['price'];?> ₽</div>
			<div class="card_nal"><?php echo $data['availability'];?></div>
			<a class="knopka card_knopka">Подробнее</a>
		</div>
	<?php } while($data=mysqli_fetch_array($query0)); ?>
	</div>

</div>
</div>
</td></tr>
<?php include("foot.php");?>
