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
            <left>DATA PENERIMAAN</left>  
            </h3>  
            <br />  
            <a href="form_input2.html"> + TAMBAH DATA PENERIMAAN</a>  
            <br />  
            <br />  
            <table>  
            <tr>  
                 <th>ID_PENERIMAAN</th>  
                 <th>TANGGAL</th>  
                 <th>NAMA</th>  
                 <th>JUMLAH</th>  
                 <th>AKSI</th>
             </tr>  
   
             <?php  
             include 'koneksi.php';  
             $query = "select * from penerimaan";  
             $data = mysqli_query($mysqli, $query);  
             while ($d = mysqli_fetch_array($data)) {  
             ?>  
                 <tr>  
                     <td><?php echo $d['id_penerimaan']; ?></td>  
                     <td><?php echo $d['tanggal']; ?></td>  
                     <td><?php echo $d['nama']; ?></td>
                     <td><?php echo $d['jumlah']; ?></td>  
                     <td>  
                         <a href="form_edit2.php?id_penerimaan=<?php echo $d['id_penerimaan']; ?>">EDIT</a> 
                         <a href="hapus2.php?id_penerimaan=<?php echo $d['id_penerimaan']; ?>" 
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