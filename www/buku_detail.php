<?php 
	if(isset($_GET['id']))
		$id = $_GET['id'];
	include "koneksi.php";
	$sql = "select * from buku where idbuku=’$id’";
	$hasil = mysqli_query($kon, $sql);
	if (!$hasil) {
		die("Gagal query..".mysqli_error($kon));
	}
?>
 <a href="buku_isi.php">INPUT BUKU</a>
 &nbsp; &nbsp; &nbsp;
 <a href="buku_cari.php">CARI BUKU</a>
 &nbsp; &nbsp; &nbsp;
 <a href="buku_tampil.php">DAFTAR BUKU</a>
 <h2>INFORMASI BUKU</h2>
 <table border="1" width="355">
 	<?php 
 		$no = 0;
 		while($row = mysqli_fetch_assoc($hasil))
 		{
 	?>
 	<tr>
 		<td colspan="2" align="center"><a href="pict/<?php echo $row['foto']; ?>">
 			<img src="thumb/<?php echo $row['foto']; ?>" width="100" />
 			</a>
 		</td>
 	</tr>
 	<tr>
 		<td>Kode Buku</td>
 		<td><?php echo $row['kode'] ?></td>
 	</tr>
 	<tr>
 		<td>Judul Buku</td>
 		<td><?php echo $row['judul'] ?></td>
 	</tr>
	<tr>
 		<td>Pengarang</td>
 		<td><?php echo $row['pengarang'] ?></td>
 	</tr>
 	<tr>
 		<td>Penerbit</td>
 		<td><?php echo $row['penerbit'] ?></td>
 	</tr>
 	<?php } ?>
 </table>
