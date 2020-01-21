<?php session_start();
error_reporting(0);
include"koneksi.php";

$halaman=$_GET[halaman];




?>
<?php ?>


           <a href="?halaman=list_propinsi"><li <?php if($halaman=="list_propinsi"){echo" class='active'";} ?>>&raquo; List Propinsi</li></a><br>
           <a href="?halaman=list_kontrasepsi"><li <?php if($halaman=="list_kontrasepsi"){echo" class='active'";} ?>>&raquo; list kontrasepsi</li></a><br>
           <a href="?halaman=list_pemakai_kontrasepsi"><li <?php if($halaman=="list_pemakai_kontrasepsi"){echo" class='active'";} ?>>&raquo; list_pemakai_kontrasepsi</li></a><br>
<a href="?halaman=report"><li <?php if($halaman=="report"){echo" class='active'";} ?>>&raquo; Report</li></a><br>
           
           <?php
            if($halaman=="list_propinsi"){include"list_propinsi.php";}
			elseif($halaman=="list_kontrasepsi"){include"list_kontrasepsi.php";}
			elseif($halaman=="list_pemakai_kontrasepsi"){include"list_pemakai_kontrasepsi.php";}
			elseif($halaman=="report"){include"report.php";}
			