<?php 
include("koneksi.php");
$query_view=mysqli_query($koneksi,"select * from anggota");
// var_dump($query_view);
// die;

?>
</br>
<a href="input_anggota.php" class="btn btn-danger">Tambah Anggota</a>
<table class="table table-bordered" border="1">
	<tr>
		<td>No</td>
		<td>Nama</td>
		<td>Alamat</td>
		<td>No_Tlpn</td>
		<td colspan="4"></td>
	</tr>
<?php 
$no=1;
while($tampil=mysqli_fetch_array($query_view)){?>
	<tr>
		<td><?php echo $no++;?></td>
		<td><?php echo $tampil['nama'];?></td>
		<td><?php echo $tampil['alamat'];?></td>
		<td><?php echo $tampil['no_tlpn'];?></td>
		<td><a href="edit_anggota.php?id_anggota=<?php echo $tampil['id_anggota'];?>">Edit</a><td>
		<td><a href="hapus_anggota.php?id_anggota=<?php echo $tampil['id_anggota'];?>">Hapus</a><td>
	</tr>
<?php }?>
</table>