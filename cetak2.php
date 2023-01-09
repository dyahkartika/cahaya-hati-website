<!DOCTYPE html>
<html>
<head>
    <title>Cetak Data</title>
</head>
<body>
    <center>
        <h2>LAPORAN DATA PENGELUARAN</h2>
        <hr />
    </center>
    <table border="1" style="width: 100%">
        <tr>
            <th>ID_Pengeluaran</th>
            <th>Tanggal</th>
            <th>Nama</th>
            <th>Jumlah</th>
            <th>Catatan</th>
        </tr>
        <?php 
        include 'koneksi.php';
        $query = "select * from pengeluaran";  
        $data = mysqli_query($mysqli, $query);  
        while($d = mysqli_fetch_array($data)){
        ?>
        <tr>
            <td><?php echo $d['id_pengeluaran']; ?></td>
            <td><?php echo $d['tanggal']; ?></td>
            <td><?php echo $d['nama']; ?></td>
            <td><?php echo $d['jumlah']; ?></td>
            <td><?php echo $d['catatan']; ?></td>
        </tr>
        <?php 
        }
        ?>
    </table>
    <script>
        window.print();
    </script>
</body>
</html>