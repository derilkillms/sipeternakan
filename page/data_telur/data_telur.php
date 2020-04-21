<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                             Data Telur
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                        	<th>No</th>
                                            <th>Id Telur</th>
                                            <th>Id Karyawan</th>
                                            <th>Jumlah Telur</th>
                                            <th>Berat</th>
                                            <th>Tanggal</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    <?php
                                    $no = 1;


                                    $sql = $koneksi->query("select tb_telur.*,tb_karyawan.* from tb_telur INNER JOIN tb_karyawan ON tb_telur.id_karyawan=tb_karyawan.id_karyawan");

                                    while ($data= $sql->fetch_assoc()){


                                    	
                                    ?>



                                    <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $data['id_telur']; ?></td>
                                    <td><?php echo $data['nama_karyawan']; ?></td>
                                    <td><?php echo $data['jml_telur']; ?></td>
                                    <td><?php echo $data['berat']; ?> kg</td>
                                    <td><?php echo $data['tanggal']; ?></td>
                                    
                                    
                                    <td>
                                    <a href="?page=data_telur&aksi=ubah&id=<?php echo $data['id_telur'];?>"  class="btn btn-info">Ubah</a>
                                    <a onclick="return confirm('Anda Yakin Akan Menghapus Data Ini?')" href="?page=data_telur&aksi=hapus&id=<?php echo $data['id_telur']; ?>" class="btn btn-danger">Hapus</a>
                                    </td>
                                    </tr>



                                    <?php } ?>
                                    </tbody>

                                    </table>

                                    </div> 

                                    <a href="?page=data_telur&aksi=tambah" class="btn btn-success" style="margin-bottom: : 8px";><i class="fa fa-plus"></i>Tambah Data</a>

                                    <a href="?page=data_telur&aksi=laporan" target="blank" class="btn btn-default" style="margin-bottom: : 8px";><i class="fa fa-print"></i>Cetak Laporan</a>
                                      
                                       </div>   
                                       
                                        </div>   
                                        
                                         </div>   

                                          </div>