<?php

$id_suplier = $_GET['id_suplier'];

$sql = $koneksi->query("select * from tb_suplier where id_suplier = '$id_suplier'");

$tampil = $sql->fetch_assoc();




?>





<div class="panel panel-primary">
<div class="panel-heading">
  Ubah Data 
</div>
 
 <div class="panel-body">

                            <div class="row">
                                <div class="col-md-12">
                                  
                                    <form method="POST" action="?page=data_suplier&aksi=simpan_ubah">
                                      

                                        <div class="form-group">
                                            
                                            <input type="hidden" class="form-control" name="id_suplier" value="<?php echo $tampil['id_suplier']?>" readonly/>
                                        </div>

                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input class="form-control"  name="nama_suplier" value="<?php echo $tampil['nama_suplier']?>"/>
                                        </div>


                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <input class="form-control"  name="alamat_suplier" value="<?php echo $tampil['alamat_suplier']?>"/>
                                        </div>
                                       
                                       <div class="form-group">
                                            <label>Telepon</label>
                                            <input class="form-control" type="number" name="tlp_suplier" value="<?php echo $tampil['tlp_suplier']?>"/>
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
