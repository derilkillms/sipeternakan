<?php

$pakan_id = $_GET['id'];

$sql = $koneksi->query("select * from stok_pakan where pakan_id = '$pakan_id'");

$tampil = $sql->fetch_assoc();




?>




  <script src="jquery/jquery.js"></script>

<div class="panel panel-primary">
<div class="panel-heading">
	Ubah Data 
</div>
 
 <div class="panel-body">

                            <div class="row">
                                <div class="col-md-12">
                                  
                                    <form method="POST" action="?page=view_stok_pakan&aksi=simpan_ubah">
                                        <div class="form-group">
                                           
                                          	<input class="form-control" type="hidden" name="pakan_id" value="<?php echo $tampil['pakan_id']?>" readonly/>
                                        </div>


                                        <div class="form-group">
                                            <label>Nama Pakan</label>
                                           
<select name="nama_pakan" id="nama_pakan" class="form-control" required> <option value="">-- Pilih Nama Pakan --</option> 
    <?php 
  
  $tampils=$koneksi->query("select * from t_kategoripakan"); 

  while ($data=mysqli_fetch_assoc($tampils)){ echo"<option value='$data[id_kategori].$data[nama_pakan]'>$data[id_kategori] ($data[nama_pakan])</option>"; } 
     ?>


      </select>

                                        </div>  




                                       <div class="form-group">
                                            <label>Stok</label>
                                          	<input class="form-control" name="stok" type="number" value="<?php echo $tampil['stok']?>"/>
                                        </div>

                                        <div class="form-group">
                                           

                                            <label>Id Suplier</label>
                                          	

<select name="id_suplier" id="id_suplier" class="form-control" required> <option value="<?php echo $tampil['id_suplier']?>"><?php echo $tampil['id_suplier']?></option> 
    <?php 
  
  $tampils=$koneksi->query("select * from tb_suplier"); 

  while ($data=mysqli_fetch_assoc($tampils)){ echo"<option value='$data[id_suplier]'>$data[id_suplier] ($data[nama_suplier])</option>"; } 
     ?>


      </select>
    

                                        </div>

                                        <div class="form-group">
                                            <label>Tanggal Masuk</label>
                                            <input class="form-control" type="date" name="tgl_masuk" value="<?php echo $tampil['tgl_masuk']?>"/>
                                        </div>


                                        <div class="form-group">
                                            <label>Tanggal Kadaluarsa</label>
                                            <input class="form-control" type="date" name="tgl_kadaluarsa" value="<?php echo $tampil['tgl_kadaluarsa']?>"/>
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
