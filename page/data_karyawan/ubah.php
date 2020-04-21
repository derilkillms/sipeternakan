<?php

$id_karyawan = $_GET['id'];

$sql = $koneksi->query("select * from tb_karyawan where id_karyawan = '$id_karyawan'");

$tampil = $sql->fetch_assoc();




?>





<div class="panel panel-primary">
<div class="panel-heading">
  Ubah Data 
</div>
 
 <div class="panel-body">

                            <div class="row">
                                <div class="col-md-12">
                                  
                                    <form method="POST" action="?page=data_karyawan&aksi=simpan_ubah">
                                      

                                       <input type="hidden" name="id_karyawan" value="<?php echo $tampil['id_karyawan']?>"

                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input class="form-control"  name="nama_karyawan" value="<?php echo $tampil['nama_karyawan']?>"/>
                                        </div>


                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <input class="form-control"  name="alamat_karyawan" value="<?php echo $tampil['alamat_karyawan']?>"/>
                                        </div>
                                       
                                       <div class="form-group">
                                            <label>Telepon</label>
                                            <input class="form-control"  name="telepon_karyawan" value="<?php echo $tampil['telepon_karyawan']?>"/>
                                        </div>

                                         <div class="form-group">
                                            <label>Jabatan</label>
                                            <select class="form-control" name="jabatan_karyawan"/>
                                                <option value="kr">Karyawan Reguler</option>
                                                 <option value="kpg">Kepala Gudang</option>
                                            
                                            </select>
                                        </div>


                                        

                                        <div>
                                             <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
                      </div>

          </div>

          </form>
        </div>
    
</div>

</div>
    
</div>
