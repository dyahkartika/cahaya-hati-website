<?php  
   
 include 'koneksi.php';  
   
 $id_pengeluaran = $_GET['id_pengeluaran'];  
   
 $sql = "DELETE FROM pengeluaran WHERE id_pengeluaran = " . $id_pengeluaran;  
   
 mysqli_query($mysqli, $sql);  
   
 if (mysqli_affected_rows($mysqli) > 0) {  
     echo "<script> alert('Berhasil menghapus data!');    
     document.location.href = 'a-pengeluaran.php';     
     </script>";   
 }  else  {
     echo "<script> alert('Gagal menghapus data!');    
     document.location.href = 'a-pengeluaran.php';
     </script>";  
 }
   
 ?>  