<center>
    <h2 class="page-header">
        View dan Edit Harga Pulsa
    </h2>
<style type="text/css">
	table td,th 
	{
		font-size: 11pt!important;
	}
</style>
<form method="POST" action="?id=138">
<table class="table-responsive table-bordered table">
<tr>
	<th>Kode Pulsa</th>
	<th>Produk</th>
	<th>Harga Arindo</th>
	<th>Harga Jual</th>
	<th>Fee Kopeg</th>
	<th>Penyedia</th>
</tr>
<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$koneksi = mysql_connect($dbhost, $dbuser, $dbpass);
$konek = mysqli_connect('localhost','root','','kopeg');
		mysql_select_db('kopeg');
$edit = $_POST['edit'];
$query = "Select * from harga_pulsa order by kode_pulsa,produk";
$eksekusi = mysql_query($query,$koneksi);
while ($row=mysql_fetch_array($eksekusi,MYSQL_ASSOC))
{
	echo "<tr>";
	echo "<td>{$row['kode_pulsa']}</td>";
	echo "<td>{$row['produk']}</td>";
	echo "<td>{$row['harga_arindo']}</td>";
	echo "<td>{$row['harga_jual']}</td>";
	echo "<td>{$row['fee_kopeg']}</td>";
	echo "<td>{$row['penyedia']}</td>";
	echo "<td><input type=radio name=edit value='{$row[kode_pulsa]}'></td>";
	echo "</tr>";
}
?>
<tr><td colspan="3"><input type="submit" class="btn btn-info"></td></tr>
</table></form>