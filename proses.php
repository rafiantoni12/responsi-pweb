<?php
	$Username    = $_POST['Username'];
	$Alamat	     = $_POST['Alamat'];
	$NoHandphone = $_POST["NoHandphone"];
	$Jenis       = $_POST['Jenis'];
	$Estimasi    = $_POST['Estimasi'];



	echo "<head><title>orderan</head></title>";
	$fp = fopen("orderan.txt", "a+" );
	fputs($fp, "$Username|$Alamat|$NoHandphone|$Jenis|$Estimasi\n");
	fclose($fp);

	echo "Terimakasih Sudah Mengisi Format Registrasi";
	echo "<a href=Registrasi.php>Registrasi Kembali </a><br>";
?>