<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="navbar">
    <ul>
        <li class="nav"><a href="login.php">Login</a></li>
        <li class="nav"><a href="#">Transaksi</a>
        <ul>
          <li><a href="transaksi2.php">Kas Keluar</a></li>
          <li><a href="transaksi1.php">Kas Masuk</a></li>
        </ul>
        </li>
        <li class="nav"><a href="profil.php">Profil</a></li>
        <li class="nav"><a href="donasi.php">Donasi</a></li>
        <li class="nav"><a class="active" href="index.php">Beranda</a></li>
        <img src="logo.png"  width="230" height="70" float="left" padding="10">
    </ul>
    </div>

    <div class="up">
        <center>
        <h2>CAHAYA HATI</h2>
        <p class="p1"><i>Yayasan Panti Asuhan Penebar Kebahagiaan</i></p>
        </center>
    </div>
    <br><br>

    <div class="don">
        <h3 class="h-don">  
             <left>Transaksi Pengeluaran</left>  
         </h3>  
         <table>  
         <tr>  
                 <th>ID_PENGELUARAN</th>  
                 <th>TANGGAL</th>  
                 <th>NAMA</th>  
                 <th>JUMLAH</th>  
                 <th>CATATAN</th>
             </tr>  
   
             <?php  
             include 'koneksi.php';  
             $query = "select * from pengeluaran";  
             $data = mysqli_query($mysqli, $query);  
             while ($d = mysqli_fetch_array($data)) {  
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
         <br></br>
         <a href="cetak2.php" target="_blank">CETAK LAPORAN PENGELUARAN</a>
         <br></br> 
     </div>
    </div>
    <br><br>

    <br><br>
    <footer class="foot">
        <center>
        <h4>Kontak</h4>
        <p>Telepon : 085741283765  |  Email : cahaya_hati@gmail.com  |  Alamat : Jalan Pelita No.14 Purwokerto</p>
        </center>
    </footer>
</body>
