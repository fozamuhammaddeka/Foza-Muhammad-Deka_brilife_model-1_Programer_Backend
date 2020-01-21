<?php
include"koneksi.php";

if(isset($_POST['simpan']))
{
	mysqli_query($koneksi,"insert into list_kontrasepsi set Id_Kontrasepsi='$_POST[Id_Kontrasepsi]', 

												  Nama_Kontrasepsi='$_POST[Nama_Kontrasepsi]',
												  Jumlah_Pemakai='$_POST[Jumlah_Pemakai]'");
	}
?>


<table border="2">
  <tr>
      <td rowspan="2">No</td>
    <td rowspan="2">Propinsi</td>
    <td colspan="3">Pemakai Alat Kontrasepsi</td>
    <tr>
        <th> PIL</th>
    	<th> KONDOM</th>
    	<th> IUD</th>
    
    <td ro>Jumlah</td>
  </tr>
  
  <?php 
  $no=0;
  $manggil= mysqli_query($koneksi,"select * from list_propinsi");
  while($data=mysqli_fetch_array($manggil))
  {
	
$pil=mysqli_fetch_array (mysqli_query($koneksi,"select*from list_pemakai_kontrasepsi where Id_Propinsi='$data[Id_Propinsi]' and Id_Kontrasepsi='1'"));

$kondom=mysqli_fetch_array (mysqli_query($koneksi,"select*from list_pemakai_kontrasepsi where Id_Propinsi='$data[Id_Propinsi]' and Id_Kontrasepsi='2'"));
	
$iud=mysqli_fetch_array (mysqli_query($koneksi,"select*from list_pemakai_kontrasepsi where Id_Propinsi='$data[Id_Propinsi]' and Id_Kontrasepsi='3'"));
	
$jumlah=$pil['Jumlah_Pemakai']+$kondom['Jumlah_Pemakai']+$iud['Jumlah_Pemakai'];
	
$no++;
	  echo"<tr>
    <td>$no</td>
    <td>$data[Nama_Propinsi]</td>
	<td>$pil[Jumlah_Pemakai]</td> 	
	<td>$kondom[Jumlah_Pemakai]</td>
	<td>$iud[Jumlah_Pemakai]</td>
	<td>$jumlah</td>

  </tr>
  ";
	  
  }
  ?>
</table>
