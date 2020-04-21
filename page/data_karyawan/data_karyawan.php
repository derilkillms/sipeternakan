<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                             Data Karyawan
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
                                            <th>Telepon</th>
                                            <th>Jabatan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    <?php
                                    $no = 1;


                                    $sql = $koneksi->query("select * from tb_karyawan");

                                    while ($data= $sql->fetch_assoc()){


                                    	 $jabatan_karyawan =$data['jabatan_karyawan'];
                                    ?>




                                    <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $data['id_karyawan']; ?></td>
                                    <td><?php echo $data['nama_karyawan']; ?></td>
                                    <td><?php echo $data['alamat_karyawan']; ?></td>
                                    <td><?php echo $data['telepon_karyawan']; ?></td>
                                    <td><?php If($jabatan_karyawan=="kr"){
                                                Echo "Karyawan";
                                            }Else if($jabatan_karyawan=="kpg"){
                                                Echo "Kepala Gudang";
                                          
                                            }?></td>
                                    
                                    <td>
                                    <a href="?page=data_karyawan&aksi=ubah&id=<?php echo $data['id_karyawan'];?>"  class="btn btn-info">Ubah</a>
                                    <a onclick="return confirm('Anda Yakin Akan Menghapus Data Ini?')" href="?page=data_karyawan&aksi=hapus&id=<?php echo $data['id_karyawan']; ?>" class="btn btn-danger">Hapus</a>
                                    </td>
                                    </tr>



                                    <?php } ?>
                                    </tbody>

                                    </table>

                                    </div> 

                                    <a href="?page=data_karyawan&aksi=tambah" class="btn btn-success" style="margin-bottom: : 8px";><i class="fa fa-plus"></i>Tambah Data</a>

                                    <a href="./laporan/laporan_karyawan.php" target="blank" class="btn btn-default" style="margin-bottom: : 8px";><i class="fa fa-print"></i>Cetak Laporan</a>

                                 
                                      
                                       </div>   
                                       
                                        </div>   
                                        
                                         </div>   

                                          </div>