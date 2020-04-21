
 <script src="jquery/jquery.js"></script>
<div class="row">

                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                             Data Pakan
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                          
                                            <th>Nama Pakan</th>
                                            <th>Stok Kadaluarsa</th>
                                            <th>Stok Tersedia</th>
                                           
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    <?php error_reporting(E_ALL ^ E_NOTICE);
                                    $no = 1;


                                    $sql = $koneksi->query("select * from view_pakan");

                                    while ($data= $sql->fetch_assoc()){
                                   
                                        


                                        
                                    ?>



                                    <tr>
                                    <td><?php echo $no++; ?></td>
                                     
                                    <td><?php echo $data['nama_pakan']; ?></td>
                                    <td><?php echo $data['kadaluarsa']; ?> </td>
                                    <td><?php echo $data['tersedia']; ?></td>
                                   
                                     
                                
                                    <td>
                                    <a href="?page=view_pakan&aksi=data_pakan&id=<?php echo $data['id_kategori'];?>"  class="btn btn-info">Detail</a>
                                   
                                     </td>
                                    </tr>




                                    <?php } ?>
                                    </tbody>

                                    </table>

                                    </div> 

                                    <a href="?page=view_pakan&aksi=tambah" class="btn btn-success" style="margin-bottom: : 8px";><i class="fa fa-plus"></i>Tambah Data</a>

                                    <a href="./laporan/laporan_pakan.php" target="blank" class="btn btn-default" style="margin-bottom: : 8px";><i class="fa fa-print"></i>Cetak Laporan</a>

                                 
                                      
                                       </div>   
                                       
                                        </div>   
                                        
                                         </div>   

                                          </div>