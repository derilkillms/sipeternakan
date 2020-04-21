
 <script src="jquery/jquery.js"></script>
<div class="row">

                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                             Penyetokan Pakan
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Pakan Id</th>
                                            <th>Nama Pakan</th>
                                            <th>Stok</th>
                                            <th>Suplier</th>
                                            <th>Tanggal Masuk</th>
                                            <th>Tanggal Kadaluarsa</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    <?php error_reporting(E_ALL ^ E_NOTICE);
                                    $no = 1;


                                    $sql = $koneksi->query("select stok_pakan.pakan_id,stok_pakan.nama_pakan, stok_pakan.stok, stok_pakan.id_suplier, stok_pakan.tgl_masuk, stok_pakan.tgl_kadaluarsa, tb_suplier.nama_suplier,IF(DATEDIFF(NOW(),tgl_kadaluarsa)>0,'Kadaluarsa','Belum Kadaluarsa') AS kadaluarsa from stok_pakan INNER JOIN tb_suplier ON stok_pakan.id_suplier=tb_suplier.id_suplier ");

                                    while ($data= $sql->fetch_assoc()){
                                   
                                        


                                        
                                    ?>



                                    <tr>
                                    <td><?php echo $no++; ?></td>
                                     <td><?php echo $data['pakan_id']; ?></td>
                                    <td><?php echo $data['nama_pakan']; ?></td>
                                    <td><?php echo $data['stok']; ?> kg</td>
                                    <td><?php echo $data['nama_suplier']; ?></td>
                                    <td><?php echo $data['tgl_masuk']; ?></td>
                                    <td><?php echo $data['tgl_kadaluarsa']; ?></td>
                                   
                                    <td><?php echo $data['kadaluarsa']; ?></td>    
                                
                                    <td>
                                    <a href="?page=view_stok_pakan&aksi=ubah&id=<?php echo $data['pakan_id'];?>"  class="btn btn-info">Ubah</a>
                                   
                                    <a onclick="return confirm('Anda Yakin Akan Menghapus Data Ini?')" href="?page=view_stok_pakan&aksi=hapus&id=<?php echo $data['pakan_id']; ?>&kategori=<?php echo $_GET[id]; ?>" class="btn btn-danger">Hapus</a>
                                    </td>
                                    </tr>




                                    <?php } ?>
                                    </tbody>

                                    </table>

                                    </div> 

                                    <a href="?page=view_stok_pakan&aksi=tambah" class="btn btn-success" style="margin-bottom: : 8px";><i class="fa fa-back"></i>Tambah Data</a>

                                    <a href="./laporan/laporan_stok_pakan.php" target="blank" class="btn btn-default" style="margin-bottom: : 8px";><i class="fa fa-print"></i>Cetak Laporan</a>

                                 
                                      
                                       </div>   
                                       
                                        </div>   
                                        
                                         </div>   

                                          </div>