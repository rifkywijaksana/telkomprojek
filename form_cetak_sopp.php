<center>
    <h2 class="page-header">
        Cetak Pendapatan SOPP
    </h2>
    <div class="panel panel-primary">
        <div class="panel-heading">
            <center>Berikut adalah halaman <strong>Cetak Pendapatan SOPP</strong> silakan masukan Tanggal yang akan dilihat.</center>
        </div>
    <br>
    <br>
<form action="proses_cetak_sopp.php" method="post">
                <table>
                    <tr>
                        <td>
                            <input class="datepicker form-control" type="text" name="nilai" placeholder="Tanggal Awal">
                        </td>
                        <td class="col-md-3">  
                        </td>
                        <td>
                            <input class="datepicker2 form-control" type="text" name="nilai2" placeholder="Tanggal Akhir">
                        </td>
                    </tr>
                </table>
                <br>
                <button type="submit" class="btn btn-primary" name="filter">Cetak PendapatanSOPP</button>
</form>