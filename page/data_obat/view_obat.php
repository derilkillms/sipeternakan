
 <script src="jquery/jquery.js"></script>
<div class="row">

                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                             Data obat
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                        
                                            <th>Nama obat</th>
                                            <th>Stok Kadaluarsa</th>
                                            <th>Stok Tersedia</th>
                                            <th>Deskirpsi</th>
                                           
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    <?php error_reporting(E_ALL ^ E_NOTICE);
                                    $no = 1;


                                    $sql = $koneksi->query("select * from view_obat");

                                    while ($data= $sql->fetch_assoc()){
                                   
                                        


                                        
                                    ?>



                                    <tr>
                                    <td><?php echo $no++; ?></td>
                              
                                    <td><?php echo $data['nama_obat']; ?></td>
                                    <td><?php echo $data['kadaluarsa']; ?> </td>
                                     <td><?php echo $data['tersedia']; ?></td>
                                    <td><?php echo $data['deskripsi']; ?></td>
                                   
                                     
                                
                                    <td>
                                    <a href="?page=view_obat&aksi=data_obat&id=<?php echo $data['id_kategori'];?>"  class="btn btn-info">Detail</a>
                                   
                                     </td>
                                    </tr>




                                    <?php } ?>
                                    </tbody>

                                    </table>

                                    </div> 

                                    <a href="?page=view_obat&aksi=tambah" class="btn btn-success" style="margin-bottom: : 8px";><i class="fa fa-plus"></i>Tambah Data</a>

                                    <a href="./laporan/laporan_view_obat.php" target="blank" class="btn btn-default" style="margin-bottom: : 8px";><i class="fa fa-print"></i>Cetak Laporan</a>

                                 
                                      
                                       </div>   
                                       
                                        </div>   
                                        
                                         </div>   

                                          </div>