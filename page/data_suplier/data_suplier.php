<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                             Data Suplier
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Id</th>
                                            <th>Nama</th>
                                            <th>Alamat</th>
                                            <th>Telpon</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    <?php
                                    $no = 1;


                                    $sql = $koneksi->query("select * from tb_suplier");

                                    while ($data= $sql->fetch_assoc()){
                                    ?>




                                    <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $data['id_suplier']; ?></td>
                                    <td><?php echo $data['nama_suplier']; ?></td>
                                    <td><?php echo $data['alamat_suplier']; ?></td>
                                    <td><?php echo $data['tlp_suplier']; ?></td>
                                    <td>
                                    <a href="?page=data_suplier&aksi=ubah&id_suplier=<?php echo $data['id_suplier'];?>"  class="btn btn-info">Ubah</a>
                                    <a onclick="return confirm('Anda Yakin Akan Menghapus Data Ini?')" href="?page=data_suplier&aksi=hapus&id=<?php echo $data['id_suplier']; ?>" class="btn btn-danger">Hapus</a>
                                    </td>
                                    </tr>



                                    <?php } ?>
                                    </tbody>

                                    </table>

                                    </div> 

                                    <a href="?page=data_suplier&aksi=tambah" class="btn btn-success" style="margin-bottom: : 8px";><i class="fa fa-plus"></i>Tambah Data</a>

                                    <a href="./laporan/laporan_suplier.php" target="blank" class="btn btn-default" style="margin-bottom: : 8px";><i class="fa fa-print"></i>Cetak Laporan</a>
                                      
                                       </div>   
                                       
                                        </div>   
                                        
                                         </div>   

                                          </div>