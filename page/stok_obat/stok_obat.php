
 <script src="jquery/jquery.js"></script>
<div class="row">

                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                             Penyetokan obat
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>obat Id</th>
                                            <th>Nama obat</th>
                                            <th>Stok</th>
                                            <th>Suplier</th>
                                            <th>Tanggal Masuk</th>
                                            <th>Tanggal Kadaluarsa</th>
                                            <th>Status</th>
                                            <th>Deskripsi</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    <?php error_reporting(E_ALL ^ E_NOTICE);
                                    $no = 1;


                                    $sql = $koneksi->query("select stok_obat.obat_id,stok_obat.nama_obat, stok_obat.stok, stok_obat.id_suplier, stok_obat.tgl_masuk, stok_obat.tgl_kadaluarsa, tb_suplier.nama_suplier,IF(DATEDIFF(NOW(),tgl_kadaluarsa)>0,'Kadaluarsa','Belum Kadaluarsa') AS kadaluarsa, stok_obat.deskripsi from stok_obat INNER JOIN tb_suplier ON stok_obat.id_suplier=tb_suplier.id_suplier ");

                                    while ($data= $sql->fetch_assoc()){
                                   
                                        


                                        
                                    ?>



                                    <tr>
                                    <td><?php echo $no++; ?></td>
                                     <td><?php echo $data['obat_id']; ?></td>
                                    <td><?php echo $data['nama_obat']; ?></td>
                                    <td><?php echo $data['stok']; ?></td>
                                    <td><?php echo $data['nama_suplier']; ?></td>
                                    <td><?php echo $data['tgl_masuk']; ?></td>
                                    <td><?php echo $data['tgl_kadaluarsa']; ?></td>
                                   
                                    <td><?php echo $data['kadaluarsa']; ?></td>    
                                     <td><?php echo $data['deskripsi']; ?></td>    
                                    
                                
                                    <td>
                                    <a href="?page=view_stok_obat&aksi=ubah&id=<?php echo $data['obat_id'];?>"  class="btn btn-info">Ubah</a>
                                   
                                    <a onclick="return confirm('Anda Yakin Akan Menghapus Data Ini?')" href="?page=view_stok_obat&aksi=hapus&id=<?php echo $data['obat_id']; ?>&kategori=<?php echo $_GET[id]; ?>" class="btn btn-danger">Hapus</a>
                                    </td>
                                    </tr>




                                    <?php } ?>
                                    </tbody>

                                    </table>

                                    </div> 

                                    <a href="?page=view_stok_obat&aksi=tambah" class="btn btn-success" style="margin-bottom: : 8px";><i class="fa fa-back"></i>Tambah Data</a>

                                    <a href="./laporan/laporan_stok_obat.php" target="blank" class="btn btn-default" style="margin-bottom: : 8px";><i class="fa fa-print"></i>Cetak Laporan</a>

                                 
                                      
                                       </div>   
                                       
                                        </div>   
                                        
                                         </div>   

                                          </div>