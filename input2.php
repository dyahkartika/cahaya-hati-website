<?php  
   
 include 'koneksi.php';  
   
 $id_penerimaan = $_POST['id_penerimaan'];  
 $tanggal = $_POST['tanggal'];  
 $nama = $_POST['nama'];  
 $jumlah = $_POST['jumlah'];
   
   
 $sql = "INSERT INTO penerimaan (id_penerimaan, tanggal, nama, jumlah) VALUES ('$id_penerimaan', '$tanggal', 
'$nama', '$jumlah')";  
   
 if (mysqli_query($mysqli, $sql)) {  
     header('location: a-penerimaan.php');  
 } else {  
     echo "Error: " . mysqli_error($mysqli);  
 }  
   
 ?>