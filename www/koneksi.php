<?php
error_reporting(E_ALL ^ E_DEPRECATED);

$kon=mysqli_connect("172.24.0.1", "root","pass");
if(!$kon)
	die("Gagal koneksi...");
$hasil=mysqli_select_db($kon, $db);
if(!$hasil){
	$hasil=mysqli_query($kon, "CREATE DATABASE $db");
	if($hasil)
		die("gagal buat database");
	else
		$hasil=mysqli_select_db($kon, $db);
		if(!hasil) die("gagal konek database");
}
$sqltabelBarang="create table if not exists barang(
				idbarang int auto_increment not null primary key,
				nama varchar(40) not null,
				harga int not null default 0,
				stok int not null default 0,
				foto varchar(70) not null default '',
				KEY(nama) )";
mysqli_query($kon, $sqltabelBarang) or die("gagal buat tabel barang");
?>
