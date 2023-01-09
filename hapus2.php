<?php  
   
 include 'koneksi.php';  
   
 $id_penerimaan = $_GET['id_penerimaan'];  
   
 $sql = "DELETE FROM penerimaan WHERE id_penerimaan = " . $id_penerimaan;  
   
 mysqli_query($mysqli, $sql);  
   
 if (mysqli_affected_rows($mysqli) > 0) {  
     echo "<script> alert('Berhasil menghapus data!');    
     document.location.href = 'a-penerimaan.php';     
     </script>";   
 }  else  {
     echo "<script> alert('Gagal menghapus data!');    
     document.location.href = 'a-penerimaan.php';
     </script>";  
 }
   
 ?>  