<?php  
   
 include 'koneksi.php';  
   
 $id_pengeluaran = $_POST['id_pengeluaran'];  
 $tanggal = $_POST['tanggal'];  
 $nama = $_POST['nama'];
 $jumlah = $_POST['jumlah']; 
 $catatan = $_POST['catatan'];
   
 $sql = "UPDATE pengeluaran SET id_pengeluaran = '$id_pengeluaran', tanggal = '$tanggal', nama = '$nama', 
 jumlah = '$jumlah', catatan = '$catatan' WHERE id_pengeluaran = $id_pengeluaran";  
 $data = mysqli_query($mysqli, $sql);  
 if (mysqli_affected_rows($mysqli) > 0) {  
     echo "<script> alert('Berhasil mengupdate data!');  
     document.location.href = 'a-pengeluaran.php';  
     </script>";  
 } else {  
     echo "Error: Gagal update data. " . mysqli_error($mysqli);  
     echo "<br><a href=a-pengeluaran.php>KEMBALI</a>";  
 }  
   
 ?>