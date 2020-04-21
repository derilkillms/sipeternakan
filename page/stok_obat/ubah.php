<?php

$obat_id = $_GET['id'];

$sql = $koneksi->query("select * from stok_obat where obat_id = '$obat_id'");

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
                                  
                                    <form method="POST" action="?page=view_stok_obat&aksi=simpan_ubah">
                                        <div class="form-group">
                                           
                                          	<input class="form-control" type="hidden" name="obat_id" value="<?php echo $tampil['obat_id']?>" readonly/>
                                        </div>


                                        <div class="form-group">
                                            <label>Nama obat</label>
                                           
<select name="nama_obat" id="nama_obat" class="form-control" required> <option value="">-- Pilih Nama obat --</option> 
    <?php 
  
  $tampils=$koneksi->query("select * from t_kategoriobat"); 

  while ($data=mysqli_fetch_assoc($tampils)){ echo"<option value='$data[id_kategori].$data[nama_obat]'>$data[id_kategori] ($data[nama_obat])</option>"; } 
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
                                       
 <div class="form-group"> 

                        <label>Deskripsi</label>
                        <textarea class="form-control" name="deskripsi">
        <?php echo $tampil['deskripsi']; ?>
                         </textarea>
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
