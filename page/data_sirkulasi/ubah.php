<?php

$kode_pakan = $_GET['kode_pakan'];

$sql = $koneksi->query("select * from ts_pakan where kode_pakan = '$kode_pakan'");

$tampil = $sql->fetch_assoc();




?>




<div class="panel panel-primary">
<div class="panel-heading">
  Ubah Data 
</div>
 
 <div class="panel-body">

                            <div class="row">
                                <div class="col-md-12">
                                  
                                    <form method="POST" action="?page=data_sirkulasi&aksi=simpan_ubah">
                                      

                                        <div class="form-group">
                                            
                                            <input type="hidden" class="form-control" name="kode_pakan" value="<?php echo $tampil['kode_pakan']?>" readonly/>
                                        </div>

                                        <div class="form-group">
                                            <label>Id Pakan</label>
                                            

<select name="id_pakan" id="id_pakan" class="form-control" required> <option value='<?php echo "$tampil[id_pakan] "; ?>'><?php echo "$tampil[id_pakan] "; ?></option> 
    <?php 
  
  $tampils=$koneksi->query("select * from tb_pakan"); 

  while ($data=mysqli_fetch_assoc($tampils)){ echo"<option value='$data[id_pakan]'>$data[id_pakan] ($data[nama_pakan])</option>"; } 
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
                                            <label>Jumlah Pakan</label>
                                            <input class="form-control" type="number" name="jml_pakan" value="<?php echo $tampil['jml_pakan']?>"/>
                                        </div>

                                        <div class="form-group">
                                            <label>Tanggal</label>
                                            <input class="form-control" type="date" name="tanggal" value="<?php echo $tampil['tanggal']?>"/>
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
