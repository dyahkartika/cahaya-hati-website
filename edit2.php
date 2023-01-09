<?php  
   
 include 'koneksi.php';  
   
 $id_penerimaan = $_POST['id_penerimaan'];  
 $tanggal = $_POST['tanggal'];  
 $nama = $_POST['nama'];
 $jumlah = $_POST['jumlah']; 
   
 $sql = "UPDATE penerimaan SET id_penerimaan = '$id_penerimaan', tanggal = '$tanggal', nama = '$nama', jumlah = '$jumlah' 
 WHERE id_penerimaan = $id_penerimaan";  
 $data = mysqli_query($mysqli, $sql);  
 if (mysqli_affected_rows($mysqli) > 0) {  
     echo "<script> alert('Berhasil mengupdate data!');  
     document.location.href = 'a-penerimaan.php';  
     </script>";  
 } else {  
     echo "Error: Gagal update data. " . mysqli_error($mysqli);  
     echo "<br><a href=a-penerimaan.php>KEMBALI</a>";  
 }  
   
 ?>