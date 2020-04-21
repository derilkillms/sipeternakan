<div class="panel panel-primary">
<div class="panel-heading">
Cetak Data Telur
</div>
 
 <div class="panel-body">

                            <div class="row">
                                <div class="col-md-12">
                                  
                                    <form method="POST" action="./laporan/laporan_telur.php">
                                        
                                     <div class="form-group">
                                            <label>Pilih Karyawan:</label>
                                           <select name="id_karyawan" id="id_karyawan" class="form-control" required>
                                            <option value="">-- Pilih ID Karyawan --</option> 
                                            <option value="tb_karyawan.id_karyawan">Semua Karyawan</option>
    <?php 
  
  $tampils=$koneksi->query("select * from tb_karyawan"); 

  while ($data=mysqli_fetch_assoc($tampils)){ echo"<option value='$data[id_karyawan]'>$data[id_karyawan] ($data[nama_karyawan])</option>"; } 
     ?>


      </select>
                                        </div>

                                        <div class="form-group">
                                            <label>Dari Tanggal:</label>
                                          	<input class="form-control" type="date" name="daritanggal"/>
                                        </div>

								
                                         <div class="form-group">
                                            <label>Sampai Tanggal</label>
                                          	<input class="form-control" type="date" name="sampaitanggal"/>
                                        </div>





                                        <div>
                                       			 <input type="submit" name="simpan" value="Cetak" class="btn btn-primary">
     									</div>

					</div>

					</form>
				</div>
    
</div>

</div>
    
</div>

