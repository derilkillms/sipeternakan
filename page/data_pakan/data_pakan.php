
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
                                            <th>Id Pakan</th>
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


                                    $sql = $koneksi->query("select tb_pakan.id_pakan,tb_pakan.nama_pakan, tb_pakan.stok, tb_pakan.id_suplier, tb_pakan.tgl_masuk, tb_pakan.tgl_kadaluarsa, tb_suplier.nama_suplier,IF(DATEDIFF(NOW(),tgl_kadaluarsa)>0,'Kadaluarsa','Belum Kadaluarsa') AS kadaluarsa from tb_pakan INNER JOIN tb_suplier ON tb_pakan.id_suplier=tb_suplier.id_suplier WHERE id_kategori=$_GET[id]");

                                    while ($data= $sql->fetch_assoc()){
                                   
                                        


                                        
                                    ?>



                                    <tr>
                                    <td><?php echo $no++; ?></td>
                                     <td><?php echo $data['id_pakan']; ?></td>
                                    <td><?php echo $data['nama_pakan']; ?></td>
                                    <td><?php echo $data['stok']; ?> kg</td>
                                    <td><?php echo $data['nama_suplier']; ?></td>
                                    <td><?php echo $data['tgl_masuk']; ?></td>
                                    <td><?php echo $data['tgl_kadaluarsa']; ?></td>
                                   
                                    <td><?php echo $data['kadaluarsa']; ?></td>    
                                
                                    <td>
                                    <a href="?page=view_pakan&aksi=ubah&id=<?php echo $data['id_pakan'];?>"  class="btn btn-info">Ubah</a>
                                   
                                    <a onclick="return confirm('Anda Yakin Akan Menghapus Data Ini?')" href="?page=view_pakan&aksi=hapus&id=<?php echo $data['id_pakan']; ?>&kategori=<?php echo $_GET[id]; ?>" class="btn btn-danger">Hapus</a>
                                    </td>
                                    </tr>




                                    <?php } ?>
                                    </tbody>

                                    </table>

                                    </div> 

                                  
<form method="POST" action="./laporan/laporan_pakan.php">

<input type="hidden" value="<?php echo $_GET[id]; ?>" name="id_kategori">
    <a href="?page=view_pakan" class="btn btn-success" style="margin-bottom: : 8px";><i class="fa fa-back"></i>Kembali</a>
  <input type="submit" name="submit" value="Cetak Laporan" target="blank" class="btn btn-default" style="margin-bottom: : 8px"><li class=" fa fa-print"></li>

</form>
                                 
                                      
                                       </div>   
                                       
                                        </div>   
                                        
                                         </div>   

                                          </div>