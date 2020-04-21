<div class="panel panel-primary">
<div class="panel-heading">
	Tambah Data 
</div>
 


 <div class="panel-body">

                            <div class="row">
                                <div class="col-md-12">
                                  
                                    <form method="POST" action="?page=data_sirkulasi_obat&aksi=simpan">
                                        

                                       <div class="form-group">
                                  
                                         <label>Id Obat</label>
                                            

<select name="id_obat" id="id_obat" class="form-control" required> <option value="">-- Pilih ID obat --</option> 
    <?php 
  
  $tampils=$koneksi->query("select * from tb_obat where tgl_kadaluarsa > Now()"); 

  while ($data=mysqli_fetch_assoc($tampils)){ echo"<option value='$data[id_obat]'>$data[id_obat] ($data[nama_obat]) (Kadaluarsa: $data[tgl_kadaluarsa]) (Stok: $data[stok])</option>"; } 
     ?>


      </select>
                                        </div>

                                        <div class="form-group">
                                         <label>Id Karyawan</label>
                                            

<select name="id_karyawan" id="id_karyawan" class="form-control" required> <option value="">-- Pilih ID Karyawan --</option> 
    <?php 
  
  $tampils=$koneksi->query("select * from tb_karyawan"); 

  while ($data=mysqli_fetch_assoc($tampils)){ echo"<option value='$data[id_karyawan]'>$data[id_karyawan] ($data[nama_karyawan]) </option>"; } 
     ?>


      </select>
                                        </div>

								
                                         <div class="form-group">
                                            <label>Jumlah Obat</label>
                                          	<input class="form-control" type="number" name="jml_obat"/>
                                        </div>

                                          <div class="form-group">
                                            <label>Tanggal</label>
                                          	<input type="date" class="form-control" name="tanggal"/>
                       
                                       </div>
                      <label>Deskripsi</label>                                                      
<div class="form-group">
  
  <textarea class="form-control" name="deskripsi"></textarea>
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

