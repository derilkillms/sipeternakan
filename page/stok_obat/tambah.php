<div class="panel panel-primary">
<div class="panel-heading">
	Tambah Data 
</div>
 
 <div class="panel-body">

                            <div class="row">
                                <div class="col-md-12">

                             
                                  
                                    <form method="POST" action="?page=view_stok_obat&aksi=simpan">
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
                                          	<input type="number" class="form-control" name="stok"/>
                                        </div>

                                        <div class="form-group">
                                             <label>Id Suplier</label>
                                            

<select name="id_suplier" id="id_suplier" class="form-control" required> <option value="">-- Pilih Kode Suplier --</option> 
    <?php 
  
  $tampils=$koneksi->query("select * from tb_suplier"); 

  while ($data=mysqli_fetch_assoc($tampils)){ echo"<option value='$data[id_suplier]'>$data[id_suplier] ($data[nama_suplier])</option>"; } 
     ?>


      </select>
    

                                        </div>

                                          <div class="form-group">
                                            <label>Tanggal Masuk</label>
                                            <input class="form-control" type="date" name="tgl_masuk"/>
                                        </div>
                                         <div class="form-group">
                                            <label>Tanggal Kadaluarsa</label>
                                            <input class="form-control" type="date" name="tgl_kadaluarsa"/>
                                        </div>
<div>
                                         <label>Deskripsi</label>
                        <textarea class="form-control" name="deskripsi">
        
                         </textarea>
                                        </div><br/>
<div class="">
                                             <input type="submit" name="simpan" value="Simpan" style="margin-top:" class="btn btn-primary">  

                                        </div>

                                       
                                        
                                        
					</form>
				</div>
    
</div>

</div>
    
</div>
              

