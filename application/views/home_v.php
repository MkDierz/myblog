<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>
		<?php foreach ($artikel->result() as $a) {?>

		<?php echo $a->artikel_judul ;?>
		<br>
		<?php echo $a->artikel_nama ;?>
		<br>
		<?php echo $a->artikel_isi ;?>
		<br>
		<?php echo $a->artikel_tanggal ;?>
		<br>

	<?php } ?>
	</body>
</html>
