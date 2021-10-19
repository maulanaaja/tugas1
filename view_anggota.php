<?php
include("koneksi.php");

$tp=query_view($koneksi, "select * from anggota");

?>
<table class="table table-bordered">
	<tr>
		<td>nama</td>
		<td>anggota</td>
		<td>no_tlpn</td>
	</tr>
<?php
$no=1;
while (mysql_fetch_array($query_view)){?>
	<tr>
		<td></td>
		<td></td>
		<td></td>
	</tr>
<?php }?> 
</table>