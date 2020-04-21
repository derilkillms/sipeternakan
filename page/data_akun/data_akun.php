<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                             Data Akun
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Id User</th>
                                            <th>Nama User</th>
                                            <th>Username</th>
                                            <th>Password</th>
                                           
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>




                                    <?php
                                    $no = 1;


                                    $sql = $koneksi->query("select * from tb_user");

                                    while ($data= $sql->fetch_assoc()){
                                    ?>




                                    <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $data['id']; ?></td>
                                    <td><?php echo $data['nama']; ?></td>
                                    <td><?php echo $data['username']; ?></td>
                                    <td><?php echo $data['password']; ?></td>
                                   
                                  
                                    <td>

                                     <a href="?page=data_akun&aksi=ubah&id=<?php echo $data['id'];?>"  class="btn btn-info">Ubah</a>
                                    <a onclick="return confirm('Anda Yakin Akan Menghapus Data Ini?')" href="?page=data_akun&aksi=hapus&id=<?php echo $data['id']; ?>" class="btn btn-danger">Hapus</a>
                                    </td>
                                    </tr>



                                    <?php } ?>
                                    </tbody>

                                    </table>

                                    </div> 

                                    <a href="?page=data_akun&aksi=tambah" class="btn btn-success" style="margin-bottom: : 8px";><i class="fa fa-plus"></i>Tambah Data</a>

                                     
                                       </div>   
                                       
                                        </div>   
                                        
                                         </div>   

                                          </div>