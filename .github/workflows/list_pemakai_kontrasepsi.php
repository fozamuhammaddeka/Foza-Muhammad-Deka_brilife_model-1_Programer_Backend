<?php
include"koneksi.php";
if(isset($_POST['simpan']))
{
	mysqli_query($koneksi,"insert into list_pemakai_kontrasepsi set Id_List='$_POST[Id_List]', 
												  Id_Propinsi='$_POST[Id_Propinsi]',
												  Id_Kontrasepsi='$_POST[Id_Kontrasepsi]',
												  Jumlah_Pemakai='$_POST[Jumlah_Pemakai]'");
	}
?>

<form action="" method="post">
<table border="1">
  <tr>
    <td>Id List</td>
    <td><input name="Id_List" type="text"></td>
  </tr>
  <tr>
    <td>Id Propinsi</td>
    <td><input name="Id_Propinsi" type="text"></td>
  </tr>
  <tr>
    <td>Id Kontrasepsi</td>
    <td><input name="Id_Kontrasepsi" type="text"></td>
  </tr>
  <tr>
    <td>Jumlah Pemakai</td>
    <td><input name="Jumlah_Pemakai" type="text"></td>
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
    <td>Id List</td>
    <td>Id Propinsi</td>
    <td>Id Kontrasepsi</td>
    <td>Jumlah Pemakai</td>
    
  </tr>
  
  <?php 
  $manggil= mysqli_query($koneksi,"select * from list_pemakai_kontrasepsi");
  while($data=mysqli_fetch_array($manggil))
  {
	  echo"<tr>
    <td>$data[Id_List]</td>
    <td>$data[Id_Propinsi]</td>
	<td>$data[Id_Kontrasepsi]</td>
    <td>$data[Jumlah_Pemakai]</td>
  </tr>
  ";
	  }
  
  ?>
</table>
