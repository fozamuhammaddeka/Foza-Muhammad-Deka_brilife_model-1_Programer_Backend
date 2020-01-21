<?php
include"koneksi.php";

if(isset($_POST['simpan']))
{
	mysqli_query($koneksi,"insert into list_kontrasepsi set Id_Kontrasepsi='$_POST[Id_Kontrasepsi]', 
												  Nama_Kontrasepsi='$_POST[Nama_Kontrasepsi]'");
	}
?>

<form action="" method="post">
<table border="1">
  <tr>
    <td>Id Kontrasepsi</td>
    <td><input name="Id_Kontrasepsi" type="text"></td>
  </tr>
  <tr>
    <td>Nama Kontrasepsi</td>
    <td><input name="Nama_Kontrasepsi" type="text"></td>
  </tr>
  <tr>
    
    
  </tr>
    <tr>
     <td></td>
    <td><input name="simpan" type="submit" value="Simpan"></td>
   
    
  </tr>
</table>

</form>

<table border="1">
  <tr>
    <td>Id Kontrasepsi</td>
    <td>Nama Kontrasepsi</td>
    
  </tr>
  
  <?php 
  $manggil= mysqli_query($koneksi,"select * from list_kontrasepsi");
  while($data=mysqli_fetch_array($manggil))
  {
	  echo"<tr>
    <td>$data[Id_Kontrasepsi]</td>
    <td>$data[Nama_Kontrasepsi]</td>
  </tr>
  ";
	  }
  
  ?>
</table>
