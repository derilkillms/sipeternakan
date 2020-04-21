<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                             Data Sirkulasi Pakan
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode Pakan</th>
                                            <th>Nama Pakan</th>
                                            <th>Nama Karyawan</th>
                                            <th>Jumlah Pakan</th>
                                            <th>Tanggal</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>




                                    <?php
                                    $no = 1;


                                    $sql = $koneksi->query("select ts_pakan.kode_pakan,ts_pakan.id_pakan, ts_pakan.id_karyawan, ts_pakan.jml_pakan, ts_pakan.tanggal, tb_pakan.id_pakan, tb_pakan.nama_pakan, tb_karyawan.id_karyawan, tb_karyawan.nama_karyawan from ts_pakan INNER JOIN tb_pakan ON ts_pakan.id_pakan=tb_pakan.id_pakan INNER JOIN tb_karyawan ON ts_pakan.id_karyawan=tb_karyawan.id_karyawan");

                                    while ($data= $sql->fetch_assoc()){
                                    ?>




                                    <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $data['kode_pakan']; ?></td>
                                    <td><?php echo $data['nama_pakan']; ?></td>
                                    <td><?php echo $data['nama_karyawan']; ?></td>
                                    <td><?php echo $data['jml_pakan']; ?> Kg</td>
                                    <td><?php echo $data['tanggal']; ?></td>
                                    <td>

                                     <a href="?page=data_sirkulasi&aksi=ubah&kode_pakan=<?php echo $data['kode_pakan'];?>"  class="btn btn-info">Ubah</a>
                                    <a onclick="return confirm('Anda Yakin Akan Menghapus Data Ini?')" href="?page=data_sirkulasi&aksi=hapus&id=<?php echo $data['kode_pakan']; ?>" class="btn btn-danger">Hapus</a>
                                    </td>
                                    </tr>



                                    <?php } ?>
                                    </tbody>

                                    </table>

                                    </div> 

                                    <a href="?page=data_sirkulasi&aksi=tambah" class="btn btn-success" style="margin-bottom: : 8px";><i class="fa fa-plus"></i>Tambah Data</a>

                                    <a href="?page=data_sirkulasi&aksi=laporan" target="blank" class="btn btn-default" style="margin-bottom: : 8px";><i class="fa fa-print"></i>Cetak Laporan</a>
                                      
                                       </div>   
                                       
                                        </div>   
                                        
                                         </div>   

                                          </div>