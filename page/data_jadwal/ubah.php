<?php

$id = $_GET['id'];

$sql = $koneksi->query("select * from jadwalku where jadwal_id = '$id'");

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
                                  
                                    <form method="POST" action="?page=data_jadwal&aksi=simpan_ubah">
                                        <div class="form-group">
                                           
                                          	<input class="form-control" type="hidden" name="jadwal_id" value="<?php echo $tampil['jadwal_id']?>" readonly/>
                                        </div>


                                      <div class="form-group">
                                            <label>Tanggal</label>
                                            <input class="form-control" type="date" name="tanggal" value="<?php echo $tampil['date(date)']?>"/>
                                        </div>

                                       <div class="form-group">
                                            <label>Jam</label>
                                            <input type="time" class="form-control" name="jam" value="<?php echo $tampil['date(time)']?>"/>
                                        </div>

                                        <div class="form-group">
                                             <label>Judul</label>
                                            

<input type="text" name="title" class="form-control" value="<?php echo $tampil['title']?>" >    

                                        </div>

                                          <div class="form-group">
                                            <label>Deskripsi</label>
                                            <textarea name="description" class="form-control" value=""><?php echo $tampil['description']?></textarea>

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
