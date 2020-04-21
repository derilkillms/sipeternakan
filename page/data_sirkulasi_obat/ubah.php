<?php

$kode_obat = $_GET['kode_obat'];

$sql = $koneksi->query("select * from ts_obat where kode_obat = '$kode_obat'");

$tampil = $sql->fetch_assoc();




?>




<div class="panel panel-primary">
<div class="panel-heading">
  Ubah Data 
</div>
 
 <div class="panel-body">

                            <div class="row">
                                <div class="col-md-12">
                                  
                                    <form method="POST" action="?page=data_sirkulasi_obat&aksi=simpan_ubah">
                                      

                                        <div class="form-group">
                                            
                                            <input type="hidden" class="form-control" name="kode_obat" value="<?php echo $tampil['kode_obat']?>" readonly/>
                                        </div>

                                        <div class="form-group">
                                            <label>Id Obat</label>
                                            

<select name="id_obat" id="id_obat" class="form-control" required> <option value='<?php echo "$tampil[id_obat] "; ?>'><?php echo "$tampil[id_obat] "; ?></option> 
    <?php 
  
  $tampils=$koneksi->query("select * from tb_obat"); 

  while ($data=mysqli_fetch_assoc($tampils)){ echo"<option value='$data[id_obat]'>$data[id_obat] ($data[nama_obat])</option>"; } 
     ?>


      </select>
                                        </div>


                                        <div class="form-group">
                                             <label>Id Karyawan</label>
                                            

<select name="id_karyawan" id="id_karyawan" class="form-control" required> <option value='<?php echo "$tampil[id_karyawan] "; ?>'><?php echo "$tampil[id_karyawan] "; ?></option> 
    <?php 
  
  $tampils=$koneksi->query("select * from tb_karyawan"); 

  while ($data=mysqli_fetch_assoc($tampils)){ echo"<option value='$data[id_karyawan]'>$data[id_karyawan] ($data[nama_karyawan])</option>"; } 
     ?>


      </select>
                                        </div>
                                       
                                       <div class="form-group">
                                            <label>Jumlah Obat</label>
                                            <input class="form-control" type="number" name="jml_obat" value="<?php echo $tampil['jml_obat']?>"/>
                                        </div>

                                        <div class="form-group">
                                            <label>Tanggal</label>
                                            <input class="form-control" type="date" name="tanggal" value="<?php echo $tampil['tanggal']?>"/>
                                        </div>

<div class="form-group">
  
  <textarea class="form-control" name="deskripsi"><?php echo $tampil['deskripsi']?></textarea>
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
