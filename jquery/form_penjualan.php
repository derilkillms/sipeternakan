<!DOCTYPE html> <html> <head> <title>INPUT DATA PENGGAJIAN</title> 


<link rel="stylesheet" type="text/css" href="style.css">

  <script src="jquery.js"></script>
 <script>
  $(document).ready(function(){ 

  //Memanggil data dari json_barang untuk menampilkan data barang
   $("#kode_barang").change(function(){ var kode_barang=$("#kode_barang").val(); $.ajax({ type:"POST", data:"kode_barang="+kode_barang, url :"json_penjualan.php", dataType:"json", success:function(data){ $("#nama_barang").val(data.nama_barang); $("#satuan").val(data.satuan); $("#stok").val(data.stok); $("#harga_jual").val(data.harga_jual); hitung(); } }); }); 
   //Fungsi untuk menghitung jumlah gaji bersih
    function hitung(){
     var total_bayar=0; 
     var harga_jual = parseInt($("#harga_jual").val(),10); 
     var jumlah = parseInt($("#jumlah").val(),10);
      var potongan= parseInt($("#potongan").val(),10);
       total_bayar=harga_jual*jumlah-potongan ;
        $("#total_bayar").val(total_bayar);
         }

     $("#jumlah").on("keyup keypress blur change focus",function(){ hitung(); });
          $("#potongan").on("keyup keypress blur change focus",function(){ hitung(); });

         function pembayaran(){

          var kembali=0;
          var total = parseInt($("#total").val(),10);
          var bayar = parseInt($("#bayar").val(),10);
          kembali=bayar-total;
           $("#kembali").val(kembali);
         }
         $("#bayar").on("keyup keypress blur change focus",function(){ pembayaran(); });
          function kosong(){
             var kembali = parseInt($("#kembali").val(),10);
             if(kembali<0){
              kembali=0;
             }
              $("#kembali").val(kembali);
          }
$("#kembali").on("keyup keypress blur change focus",function(){ kosong(); });
         


           });



  
  

</script> 
</head>
 <body>
  <h2 align='center'> INPUT DATA PENJUALAN </h2> 
  <form method="POST" action="simpansementara.php" enctype='multipart/form-data'>
  	<table align='center'> <tr> <td>Tanggal</td> <td><?php echo date("d/m/Y"); ?></td>
</tr>
<tr> 
  <?php
  if(!empty($_GET['kode'])){
$kode=$_GET['kode'];
}else{
$kode="";
}
  ?>
    <td>Kode Transaksi</td>
     <td><input type="text" name="kode_transaksi" id="kode_transaksi" value='<?php echo"$kode"; ?>' required/></td>
      </tr>
 <tr> <td>Kode Barang</td>
  <td><select name="kode_barang" id="kode_barang" required> <option value="">-- Pilih Kode Barang --</option> 
  	<?php 
  include "koneksi.php";
  $tampil=mysqli_query($koneksi,"select * from t_barang"); 
  while ($data=mysqli_fetch_array($tampil)){ echo"<option value='$data[kode_barang]'>$data[kode_barang]</option>"; } 
  	 ?> </select>
  	</td> 
  </tr> 
  <tr> 
  	<td>Nama Barang</td>
  	 <td><input type="text" name="nama_barang" id="nama_barang" required readonly style="background-color:silver;"></td>
  	  </tr>
  	   <tr>
  	   	<td>Satuan</td>
  	   	 <td><input type="text" name="satuan" id="satuan" required readonly style="background-color:silver;"></td> </tr> 

  	   	 <tr>
  	   	  <td>Stok</td> 
  	   	  <td><input type="number" name="stok" id="stok" required readonly style="background-color:silver;"></td> </tr> 
  	   	  <tr>
  	   	   <td>Harga Jual</td> 
  	   	   <td><input type="number" name="harga_jual" id="harga_jual" required readonly style="background-color:silver;">
  	   	   </td> </tr>
  	   	    <tr> <td>QTY</td> 
  	   	    	<td><input type="number" name="jumlah" id="jumlah" value="0" required></td> </tr>
  	   	    	 <tr> <td>Potongan (Rp.)</td>
  	   	    	 <td><input type="number" name="potongan" id="potongan" value="0" required></td> </tr> <tr> <td>Total Bayar (Rp.)</td> 
  	   	    	 	<td><input type="number" name="total_bayar" id="total_bayar" required readonly style="background-color:silver;"></td> </tr> 
  	   	    	 	<tr> 
  	   	    	 		<td><a href="index.php">Kembali</a></td>
  	   	    	 		 <td> <input type="submit" name="tambahkan" value="Tambahkan" />

  	   	    	</td> 
  	   	    	</tr> 
  	   	    </table>
  	   	</form>

<table width='50%' id="tabeldata" border="1" class="table1" align="center" >
  <tr>
    <th>No</th>
    <th>Nama Barang</th>
    <th>Jumlah</th>
    <th>Total</th>
       <th>Aksi</th>
  
  </tr>

  <tbody id='baris'>
    <?php
    
$tampil=mysqli_query($koneksi,"SELECT * FROM t_sementara");


  $i=0;

while($data=mysqli_fetch_array($tampil)){

  $i++;
  echo"
  <tr>
  <td>$i</td>
  <td>$data[nama_barang] 

</td>
  <td>$data[jumlah]</td>
  <td>Rp.$data[total]</td>
  <td><a href='batal.php?kode=$data[kode_barang]&kt=$data[kode_transaksi]'>Hapus</a></td>
  </tr>
";
  
}
?>



  </tbody>
  <?php
$total=mysqli_query($koneksi,"SELECT SUM(total) AS totallaba FROM t_sementara");




$sum=mysqli_fetch_array($total);
?>
   <form method="POST" action="simpantransaksi.php" enctype='multipart/form-data'>
<tr>

  <td colspan="5">
   Tanggal : <input type="date" name="tanggal" required/> 
  </td>

</tr>
<tr>

  


 <input type="hidden" name="kode_transaksii" value='<?php echo"$kode"; ?>'>
  <td colspan="5" >Total: Rp. <input type="number" id="total" name="total" value='<?php echo "$sum[totallaba]"; ?>' readonly style="background-color:silver;"/></td>

</tr>
<tr><td colspan="5" >Bayar: Rp. <input type="number" id="bayar" name="bayar"  required/></td>
</tr>
<tr><td colspan="5" >Kembalian: Rp. <input type="number" id="kembali" name="kembali" readonly style="background-color:silver;" /></td>

</tr>
  <tr>

   <td colspan="4"></td>
    <td  ><input type="submit" name="simpantransaksi" value="Simpan Transaksi">
      </form>
   

    </td>

  </tr>


<center></center>

  </center>
  </table>
 

  	   </body> 
  	   </html>