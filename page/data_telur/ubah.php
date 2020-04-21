<?php

$id_telur = $_GET['id'];

$sql = $koneksi->query("select * from tb_telur where id_telur = '$id_telur'");

$tampil = $sql->fetch_assoc();




?>





<div class="panel panel-primary">
<div class="panel-heading">
  Ubah Data 
</div>


 <div class="panel-body">

                            <div class="row">
                                <div class="col-md-12">
                                  
                                    <form method="POST" action="?page=data_telur&aksi=simpan_ubah">
                                      

                                       <input type="hidden" name="id_telur" value="<?php echo $tampil['id_telur']?>">

                              
                                        <div class="form-group">
                                             <label>Id Karyawan</label>
                                            

<select name="id_karyawan" id="id_karyawan" class="form-control" required> <option value="<?php echo $tampil['id_karyawan'] ?>"><?php echo $tampil['id_karyawan'] ?></option>

    <?php 
  
  $tampils=$koneksi->query("select * from tb_karyawan"); 

  while ($data=mysqli_fetch_assoc($tampils)){ echo"<option value='$data[id_karyawan]'>$data[id_karyawan] ($data[nama_karyawan])</option>"; } 
     ?>


      </select>
                                        </div>
                                       
                                        <div class="form-group">
                                            <label>Jumlah Telur</label>
                                            <input class="form-control"  name="jml_telur" value="<?php echo $tampil['jml_telur']?>"/>
                                        </div>


                                        <div class="form-group">
                                            <label>Berat</label>
                                            <input class="form-control"  name="berat" value="<?php echo $tampil['berat']?>"/>
                                        </div>


                                         <div class="form-group">
                                            <label>Tanggal</label>
                                            <input class="form-control"  name="tanggal" value="<?php echo $tampil['tanggal']?>"/>
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
