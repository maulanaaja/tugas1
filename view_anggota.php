
<table class="table table-bordered">
	<tr>
		<td>nama</td>
		<td>anggota</td>
		<td>no_tlpn</td>
	</tr>
<?php
$no=1;
include ("koneksi.php");
$tp = mysql_query($server, "select * from anggota");
while ($r = mysql_fetch_array($tp)){?>
	<tr>
		<td></td>
		<td></td>
		<td></td>
	</tr>
<?php }?> 
</table>