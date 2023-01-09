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
            <left>DATA PENGELUARAN</left>  
            </h3>  
            <br />  
            <a href="form_input3.html"> + TAMBAH DATA PENGELUARAN</a>  
            <br />  
            <br />  
            <table>  
            <tr>  
                 <th>ID_PENGELUARAN</th>  
                 <th>TANGGAL</th>  
                 <th>NAMA</th>  
                 <th>JUMLAH</th>  
                 <th>CATATAN</th>
                 <th>AKSI</th>
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
                     <td>  
                         <a href="form_edit3.php?id_pengeluaran=<?php echo $d['id_pengeluaran']; ?>">EDIT</a> 
                         <a href="hapus3.php?id_pengeluaran=<?php echo $d['id_pengeluaran']; ?>" 
onclick="return confirm('Hapus data?')">HAPUS</a>  
                     </td>   
                 </tr>  
             <?php  
             }
             ?>  
         </table>
            </div>
            </section>
        </div>
    </div>    
</body>
</html