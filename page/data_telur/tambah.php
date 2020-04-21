<div class="panel panel-primary">
<div class="panel-heading">
	Tambah Data 
</div>
 
 <div class="panel-body">

                            <div class="row">
                                <div class="col-md-12">
                                  
                                    <form method="POST" action="?page=data_telur&aksi=simpan">
                                        


                                        <div class="form-group">
                                            <label>id_karyawan</label>
                                            

<select name="id_karyawan" id="id_karyawan" class="form-control" required> <option value="">-- Pilih ID Karyawan --</option> 
    <?php 
  
  $tampils=$koneksi->query("select * from tb_karyawan"); 

  while ($data=mysqli_fetch_assoc($tampils)){ echo"<option value='$data[id_karyawan]'>$data[id_karyawan] ($data[nama_karyawan])</option>"; } 
     ?>


      </select>
                                        </div>

								
                                         <div class="form-group">
                                            <label>Jumlah Telur</label>
                                          	<input class="form-control" name="jml_telur"/>
                                        </div>


                                        <div class="form-group">
                                            <label>Berat</label>
                                          	<input class="form-control"  name="berat"/>
                                        </div>


                                        <div class="form-group">
                                            <label>Tanggal</label>
                                          	<input class="form-control" type="date" name="tanggal"/>
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

