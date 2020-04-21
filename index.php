<?php
session_start();

include "function.php";

$koneksi = new mysqli ("localhost","root","","db_peternakan");


if(empty($_SESSION['username']) AND empty($_SESSION['password'])){
  header("location: login.php");
}else{
  $wellcone = "Selamat Datang ";

}

?>


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SISTEM INFORMASI GUDANG ASMAHILL FARM</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

    <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" /> 
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
               
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;">  &nbsp; <a href="logout.php" class="btn btn-danger square-btn-adjust">logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="assets/img/asmahill.png" class="user-image img-responsive"/><br/>
                   <h4><font color="white">Selamat Datang <?php echo $_SESSION['nama']; ?>,</font></h4>    
					</li>
         
                 <li>
                        <a  href="index.php"> <i class="fa fa-desktop fa-3x"> </i> Dashboard</a>
                    </li>


 <li>
                        <a href="#"><i class="fa fa-sitemap fa-3x"></i> Penyetokan<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">

                   
     
                      <li>
                        <a  href="?page=view_stok_pakan"><i class="fa fa-table fa-3x"></i> Penyetokan Pakan</a>
                    </li>
                     <li>
                        <a  href="?page=view_stok_obat"><i class="fa fa-table fa-3x"></i> Penyetokan Obat</a>
                    </li>
</ul></li>
                 <li>
                        <a href="#"><i class="fa fa-sitemap fa-3x"></i> Data Master<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">

                 

                     
                    <li>
                        <a  href="?page=data_jadwal"><i class="fa fa-table fa-3x"></i> Data Jadwal</a>
                    </li>
                     <li>
                        <a  href="?page=data_suplier"><i class="fa fa-users fa-3x"></i> Data Suplier</a>
                    </li>

                    <li>
                        <a  href="?page=data_karyawan"><i class="fa fa-users fa-3x"></i> Data karyawan</a>
                    </li>


                     <li>
                        <a  href="?page=view_pakan"> <i class="fa fa-table fa-3x"></i> Data Pakan</a>
                    </li>



                      <li>
                        <a  href="?page=data_telur"><i class="fa fa-table fa-3x"></i> Data Telur</a>
                    </li>



                     <li>
                        <a  href="?page=view_obat"><i class="fa fa-table fa-3x"></i> Data Obat</a>
                    </li>
</ul>
</li>
                     <li>
                        <a  href="?page=data_sirkulasi"><i class="fa fa-bar-chart-o fa-3x"></i> Sirkulasi Pakan</a>
                    </li>

                    <li>
                        <a  href="?page=data_sirkulasi_obat"><i class="fa fa-bar-chart-o fa-3x"></i> Sirkulasi Obat</a>
                    </li>





                    <li>
                        <a href="#"><i class="fa fa-sitemap fa-3x"></i> Database<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">

                   

                      <li>
                        <a  href="?page=backup"><i class="fa fa-table fa-3x"></i> Backup Data</a>
                    </li>



                     <li>
                        <a  href="?page=restore"><i class="fa fa-table fa-3x"></i> Restore Data</a>
                    </li>

                     <li>
                        <a  href="?page=resetdata"><i class="fa fa-table fa-3x"></i> Reset Data</a>
                    </li>
</ul>
</li>

 <li>
                        <a  href="?page=data_akun"><i class="fa fa-users fa-3x"></i> Data Akun</a>
                    </li>
 <li>
                        <a  href="?page=manual_book"><i class="fa fa-users fa-3x"></i> Manual Book</a>
                    </li>




                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->

        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">

                    <?php error_reporting(0);

                        $page = $_GET['page'];
                        $aksi = $_GET['aksi'];


                        if ($page == "data_suplier") {
                          if ($aksi == ""){
                            include "page/data_suplier/data_suplier.php";
                          }elseif ($aksi == "tambah"){
                            include "page/data_suplier/tambah.php";
                          }elseif ($aksi == "simpan"){
                            include "page/data_suplier/simpan.php";
                          }elseif ($aksi == "ubah"){
                            include "page/data_suplier/ubah.php";
                          }elseif ($aksi == "hapus"){
                            include "page/data_suplier/hapus.php";
                          }elseif ($aksi == "simpan_ubah"){
                            include "page/data_suplier/simpan_ubah.php";
                          }
                          

                          }elseif ($page == "data_karyawan"){
                          if ($aksi == ""){
                            include "page/data_karyawan/data_karyawan.php";
                          }elseif ($aksi == "tambah"){
                            include "page/data_karyawan/tambah.php";
                          }elseif ($aksi == "ubah"){
                            include "page/data_karyawan/ubah.php";
                          }elseif ($aksi == "hapus"){
                            include "page/data_karyawan/hapus.php";
                          }
                          elseif ($aksi == "simpan_ubah"){
                            include "page/data_karyawan/simpan_ubah.php";
                          }
                          elseif ($aksi == "simpan"){
                            include "page/data_karyawan/simpan.php";
                          }



                        }elseif ($page == "view_pakan"){
                          if ($aksi == ""){
                            include "page/data_pakan/view_pakan.php";
                          }elseif ($aksi == "tambah"){
                            include "page/data_pakan/tambah.php";
                          }elseif ($aksi == "ubah"){
                            include "page/data_pakan/ubah.php";
                          }elseif ($aksi == "hapus"){
                            include "page/data_pakan/hapus.php";
                          }
                          elseif ($aksi == "simpan_ubah"){
                            include "page/data_pakan/simpan_ubah.php";
                          }
                          elseif ($aksi == "simpan"){
                            include "page/data_pakan/simpan.php";
                          }
                           elseif ($aksi == "data_pakan"){
                            include "page/data_pakan/data_pakan.php";
                          }



                        }elseif ($page == "view_stok_pakan"){
                          if ($aksi == ""){
                            include "page/stok_pakan/stok_pakan.php";
                          }elseif ($aksi == "tambah"){
                            include "page/stok_pakan/tambah.php";
                          }elseif ($aksi == "ubah"){
                            include "page/stok_pakan/ubah.php";
                          }elseif ($aksi == "hapus"){
                            include "page/stok_pakan/hapus.php";
                          }
                          elseif ($aksi == "simpan_ubah"){
                            include "page/stok_pakan/simpan_ubah.php";
                          }
                          elseif ($aksi == "simpan"){
                            include "page/stok_pakan/simpan.php";
                          }
                           elseif ($aksi == "stok_pakan"){
                            include "page/stok_pakan/stok_pakan.php";
                          }

   }elseif ($page == "view_stok_obat"){
                          if ($aksi == ""){
                            include "page/stok_obat/stok_obat.php";
                          }elseif ($aksi == "tambah"){
                            include "page/stok_obat/tambah.php";
                          }elseif ($aksi == "ubah"){
                            include "page/stok_obat/ubah.php";
                          }elseif ($aksi == "hapus"){
                            include "page/stok_obat/hapus.php";
                          }
                          elseif ($aksi == "simpan_ubah"){
                            include "page/stok_obat/simpan_ubah.php";
                          }
                          elseif ($aksi == "simpan"){
                            include "page/stok_obat/simpan.php";
                          }
                           elseif ($aksi == "stok_obat"){
                            include "page/stok_obat/stok_obat.php";
                          }


                           }elseif ($page == "view_obat"){
                          if ($aksi == ""){
                            include "page/data_obat/view_obat.php";
                          }elseif ($aksi == "tambah"){
                            include "page/data_obat/tambah.php";
                          }elseif ($aksi == "ubah"){
                            include "page/data_obat/ubah.php";
                          }elseif ($aksi == "hapus"){
                            include "page/data_obat/hapus.php";
                          }
                           elseif ($aksi == "data_obat"){
                            include "page/data_obat/data_obat.php";
                          }elseif ($aksi == "simpan"){
                            include "page/data_obat/simpan.php";
                          }elseif ($aksi == "simpan_ubah"){
                            include "page/data_obat/simpan_ubah.php";
                          }


                       

                          }elseif ($page == "data_jadwal"){
                          if ($aksi == ""){
                            include "page/data_jadwal/data_jadwal.php";
                          }elseif ($aksi == "tambah"){
                            include "page/data_jadwal/tambah.php";
                          }elseif ($aksi == "ubah"){
                            include "page/data_jadwal/ubah.php";
                          }elseif ($aksi == "hapus"){
                            include "page/data_jadwal/hapus.php";
                          }
                          elseif ($aksi == "simpan_ubah"){
                            include "page/data_jadwal/simpan_ubah.php";
                          }
                          elseif ($aksi == "simpan"){
                            include "page/data_jadwal/simpan.php";
                          }

                           }elseif ($page == "data_telur"){
                          if ($aksi == ""){
                            include "page/data_telur/data_telur.php";
                          }elseif ($aksi == "tambah"){
                            include "page/data_telur/tambah.php";
                          }elseif ($aksi == "ubah"){
                            include "page/data_telur/ubah.php";
                          }elseif ($aksi == "hapus"){
                            include "page/data_telur/hapus.php";
                          }
                          elseif ($aksi == "simpan_ubah"){
                            include "page/data_telur/simpan_ubah.php";
                          }
                          elseif ($aksi == "simpan"){
                            include "page/data_telur/simpan.php";
                          } elseif ($aksi == "laporan"){
                            include "page/data_telur/laporan.php";
                          }


                        
                            }elseif ($page == "data_sirkulasi"){
                          if ($aksi == ""){
                            include "page/data_sirkulasi/sirkulasi_pakan.php";
                          }elseif ($aksi == "tambah"){
                            include "page/data_sirkulasi/tambah.php";
                          }elseif ($aksi == "ubah"){
                            include "page/data_sirkulasi/ubah.php";
                          }elseif ($aksi == "hapus"){
                            include "page/data_sirkulasi/hapus.php";
                          }
                          elseif ($aksi == "simpan_ubah"){
                            include "page/data_sirkulasi/simpan_ubah.php";
                          }
                          elseif ($aksi == "simpan"){
                            include "page/data_sirkulasi/simpan.php";
                          }elseif ($aksi == "laporan"){
                            include "page/data_sirkulasi/laporan.php";
                          }

  }elseif ($page == "data_akun"){
                          if ($aksi == ""){
                            include "page/data_akun/data_akun.php";
                          }elseif ($aksi == "tambah"){
                            include "page/data_akun/tambah.php";
                          }elseif ($aksi == "ubah"){
                            include "page/data_akun/ubah.php";
                          }elseif ($aksi == "hapus"){
                            include "page/data_akun/hapus.php";
                          }
                          elseif ($aksi == "simpan_ubah"){
                            include "page/data_akun/simpan_ubah.php";
                          }
                          elseif ($aksi == "simpan"){
                            include "page/data_akun/simpan.php";
                          }elseif ($aksi == "laporan"){
                            include "page/data_akun/laporan.php";
                          }




}elseif ($page == "manual_book"){
                          if ($aksi == ""){
                            include "page/manualbook/index.php";
                          }elseif ($aksi == "tambah"){
                            include "page/data_akun/tambah.php";
                          }elseif ($aksi == "ubah"){
                            include "page/data_akun/ubah.php";
                          }elseif ($aksi == "hapus"){
                            include "page/data_akun/hapus.php";
                          }
                          elseif ($aksi == "simpan_ubah"){
                            include "page/data_akun/simpan_ubah.php";
                          }
                          elseif ($aksi == "simpan"){
                            include "page/data_akun/simpan.php";
                          }elseif ($aksi == "laporan"){
                            include "page/data_akun/laporan.php";
                          }




                            }elseif ($page == "data_sirkulasi_obat"){
                          if ($aksi == ""){
                            include "page/data_sirkulasi_obat/sirkulasi_obat.php";
                          }elseif ($aksi == "tambah"){
                            include "page/data_sirkulasi_obat/tambah.php";
                          }elseif ($aksi == "ubah"){
                            include "page/data_sirkulasi_obat/ubah.php";
                          }elseif ($aksi == "hapus"){
                            include "page/data_sirkulasi_obat/hapus.php";
                          }
                          elseif ($aksi == "simpan_ubah"){
                            include "page/data_sirkulasi_obat/simpan_ubah.php";
                          }
                          elseif ($aksi == "simpan"){
                            include "page/data_sirkulasi_obat/simpan.php";
                          }
                          elseif ($aksi == "laporan"){
                            include "page/data_sirkulasi_obat/laporan.php";
                          }

                }elseif($page=="backup"){
                    include "page/backup/index.php";
                      if ($aksi == "download"){
                            include "page/backup/backup.php";
                          }
                  }

        elseif($page=="restore"){
                    include "page/restore/index.php";
                  }

              elseif($page=="resetdata"){
                   include "page/resetdata/index.php";

                   if ($aksi == "reset"){
                            include "page/resetdata/reset.php";
                          }
                  }



                  elseif($page==""){
                    include "home.php";
                  }

                    ?>
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
    <script>
      
      $(document).ready(function() {
        $('#dataTables-example').dataTable();

      });
    </script>
   <!>
   <script src="assets/js/custom.js"></script>
  
        
 
    <script src="js/jquery.eventCalendar.js" ></script>

  </body>
</html>
