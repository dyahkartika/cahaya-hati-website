<?php  
   
 include 'koneksi.php';  
   
 $id_pengeluaran = $_POST['id_pengeluaran'];  
 $tanggal = $_POST['tanggal'];  
 $nama = $_POST['nama'];  
 $jumlah = $_POST['jumlah'];
 $catatan = $_POST['catatan'];
   
   
 $sql = "INSERT INTO pengeluaran (id_pengeluaran, tanggal, nama, jumlah, catatan) VALUES ('$id_pengeluaran', '$tanggal', 
'$nama', '$jumlah', '$catatan')";  
   
 if (mysqli_query($mysqli, $sql)) {  
     header('location: a-pengeluaran.php');  
 } else {  
     echo "Error: " . mysqli_error($mysqli);  
 }  
   
 ?>