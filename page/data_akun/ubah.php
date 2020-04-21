<?php

$id = $_GET['id'];

$sql = $koneksi->query("select * from tb_user where id = '$id'");

$tampil = $sql->fetch_assoc();




?>




<div class="panel panel-primary">
<div class="panel-heading">
  Ubah Data 
</div>
 
 <div class="panel-body">

                            <div class="row">
                                <div class="col-md-12">
                                  
                                    <form method="POST" action="?page=data_akun&aksi=simpan_ubah">
                                        


                
                                         <div class="form-group">
                                            <label>Nama User</label>
                                            <input type="text" class="form-control" name="nama" value="<?php echo $tampil['nama']; ?>" />
                                        </div>

                                          <div class="form-group">
                                            <label>Username</label>
                                            <input type="text" class="form-control" name="username" value="<?php echo $tampil['username']; ?>"/>
                       
                                       </div>

                                          <div class="form-group">
                                            <label>Password</label>
                                            <input type="text" class="form-control" name="password" />
                       
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
