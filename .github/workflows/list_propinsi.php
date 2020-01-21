<?php
include"koneksi.php";

if(isset($_POST['simpan']))
{
	mysqli_query($koneksi,"insert into list_propinsi set Id_Propinsi='$_POST[Id_Propinsi]', 
												  Nama_Propinsi='$_POST[Nama_Propinsi]'");
	}
?>

<form action="" method="post">
<table border="1">
  <tr>
    <td>Id Propinsi</td>
    <td><input name="Id_Propinsi" type="text"></td>
  </tr>
  <tr>
    <td>Nama Propinsi</td>
    <td><input name="Nama_Propinsi" type="text"></td>
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
    <td>Id Propinsi</td>
    <td>Nama Propinsi</td>
    
  </tr>
  
  <?php 
  $manggil= mysqli_query($koneksi,"select * from list_propinsi");
  while($data=mysqli_fetch_array($manggil))
  {
	  echo"<tr>
    <td>$data[Id_Propinsi]</td>
    <td>$data[Nama_Propinsi]</td>
  </tr>
  ";
	  }
  
  ?>
</table>
