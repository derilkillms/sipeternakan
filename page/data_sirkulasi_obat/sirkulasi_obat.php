<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                             Data Sirkulasi Obat
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode Obat</th>
                                            <th>Nama Obat</th>
                                            <th>Nama Karyawan</th>
                                            <th>Jumlah Obat</th>
                                            <th>Tanggal</th>
                                            <th>Deskripsi</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>




                                    <?php
                                    $no = 1;


                                    $sql = $koneksi->query("select ts_obat.kode_obat,ts_obat.id_obat, ts_obat.id_karyawan, ts_obat.jml_obat, ts_obat.tanggal, tb_obat.id_obat, tb_obat.nama_obat, tb_karyawan.id_karyawan, tb_karyawan.nama_karyawan , ts_obat.deskripsi from ts_obat INNER JOIN tb_obat ON ts_obat.id_obat=tb_obat.id_obat INNER JOIN tb_karyawan ON ts_obat.id_karyawan=tb_karyawan.id_karyawan");

                                    while ($data= $sql->fetch_assoc()){
                                    ?>




                                    <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $data['kode_obat']; ?></td>
                                    <td><?php echo $data['nama_obat']; ?></td>
                                    <td><?php echo $data['nama_karyawan']; ?></td>
                                    <td><?php echo $data['jml_obat']; ?></td>
                                   
                                    <td><?php echo $data['tanggal']; ?></td>
                                     <td><?php echo $data['deskripsi']; ?></td>
                                    <td>

                                     <a href="?page=data_sirkulasi_obat&aksi=ubah&kode_obat=<?php echo $data['kode_obat'];?>"  class="btn btn-info">Ubah</a>
                                    <a onclick="return confirm('Anda Yakin Akan Menghapus Data Ini?')" href="?page=data_sirkulasi_obat&aksi=hapus&id=<?php echo $data['kode_obat']; ?>" class="btn btn-danger">Hapus</a>
                                    </td>
                                    </tr>



                                    <?php } ?>
                                    </tbody>

                                    </table>

                                    </div> 

                                    <a href="?page=data_sirkulasi_obat&aksi=tambah" class="btn btn-success" style="margin-bottom: : 8px";><i class="fa fa-plus"></i>Tambah Data</a>

                                    <a href="?page=data_sirkulasi_obat&aksi=laporan" target="blank" class="btn btn-default" style="margin-bottom: : 8px";><i class="fa fa-print"></i>Cetak Laporan</a>
                                      
                                       </div>   
                                       
                                        </div>   
                                        
                                         </div>   

                                          </div>