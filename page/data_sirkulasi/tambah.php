<div class="panel panel-primary">
<div class="panel-heading">
	Tambah Data 
</div>
 


 <div class="panel-body">

                            <div class="row">
                                <div class="col-md-12">
                                  
                                    <form method="POST" action="?page=data_sirkulasi&aksi=simpan">
                                        

                                       <div class="form-group">
                                  
                                         <label>Id Pakan</label>
                                            

<select name="id_pakan" id="id_pakan" class="form-control" required> <option value="">-- Pilih ID Pakan --</option> 
    <?php 
  
  $tampils=$koneksi->query("SELECT id_pakan, nama_pakan, stok, id_suplier, id_kategori, tgl_masuk, tgl_kadaluarsa FROM `tb_pakan` where stok >'0'  GROUP BY id_pakan order by tgl_kadaluarsa ASC "); 

  while ($data=mysqli_fetch_assoc($tampils)){ echo"<option value='$data[id_pakan]'>$data[id_pakan] ($data[nama_pakan]) (Tanggal Kadaluarsa: $data[tgl_kadaluarsa])(Stok: $data[stok])</option>"; } 
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
T

      </select>
                                        </div>

								
                                         <div class="form-group">
                                            <label>Jumlah Pakan</label>
                                          	<input class="form-control" type="number" name="jml_pakan"/>
                                        </div>

                                          <div class="form-group">
                                            <label>Tanggal</label>
                                          	<input type="date" class="form-control" name="tanggal"/>
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

