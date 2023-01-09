<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style-a.css">
    <title>Web Admin</title>
</head>
<body>
<div class="container">
        <div class="sidebar">
            <nav>
                <ul>
                    <li><a href="a-penerimaan.php">Laporan Penerimaan</a></li>
                    <li><a href="a-pengeluaran.php">Laporan Pengeluaran</a></li>
                    <li><a href="keluar.php">Keluar</a></li>
                </ul>
            </nav>
        </div>
        <main class="content">
            <section class="hero">
            <div class="hero-content">
            <h3>  
            <left>EDIT DATA PENERIMAAN</left>  
            </h3>  
            <br />  
            <a href="a-penerimaan.php">KEMBALI</a>  
            <br />  
            <?php  
            include 'koneksi.php';  
            $sql = "SELECT * FROM penerimaan WHERE id_penerimaan = " . $_GET['id_penerimaan'];  
            $data = mysqli_query($mysqli, $sql);  
            $d = mysqli_fetch_assoc($data);  
            ?>  
            <form method="post" action="edit2.php">  
                <table>  
                 <tr>  
                     <td>Tanggal</td>  
                     <td>  
                         <input type="hidden" name="id_penerimaan" value="<?php echo $d['id_penerimaan']; ?>">  
                         <input type="date" name="tanggal" value="<?php echo $d['tanggal']; ?>">  
                     </td>  
                 </tr>  
                 <tr>  
                     <td>Nama</td>  
                     <td>  
                         <input type="hidden" name="id_penerimaan" value="<?php echo $d['id_penerimaan']; ?>">  
                         <input type="text" name="nama" value="<?php echo $d['nama']; ?>">  
                     </td>  
                 </tr>
                 <tr>  
                     <td>Jumlah</td>  
                     <td>  
                         <input type="hidden" name="id_penerimaan" value="<?php echo $d['id_penerimaan']; ?>">  
                         <input type="text" name="jumlah" value="<?php echo $d['jumlah']; ?>">  
                     </td>  
                 </tr>  
                 <tr>  
                     <td></td>  
                     <td><input type="submit" value="SIMPAN"></td>  
                 </tr>  
                </table>  
            </form>  
            </div>
            </section>
        </div>
    </div>    
</body>
</html