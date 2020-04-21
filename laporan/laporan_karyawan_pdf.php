<?php

	$koneksi = new mysqli ("localhost","root","","db_peternakan");
	$content = '
		<style type="text/css">
			.tabel{border-collapse: collapse; }
			.tabel th{padding: 8px 5px; background-color: #cccccc;}


		</style>
';
	$content .='

	<page>
		<h2>Laporan Data Karyawan Asmahill Farm</h2>
	<table border="1">
		<tr>
			<th>No</th>
            <th>id_karyawan</th>
            <th>nama_karyawan</th>
          	<th>alamat</th>
            <th>telepon</th>
            <th>Jabatan</th>
                                      
	</tr>';

			$no = 1;

            $sql = $koneksi->query("select * from tb_karyawan");

            while ($data= $sql->fetch_assoc()){

	        $jabatan_karyawan =$data['jabatan_karyawan'];
                                    
	        $content .='

	         <tr>
                <td>'.$no++.'></td>
                <td><?php echo $data['id_karyawan']; ?></td>
                <td><?php echo $data['nama_karyawan']; ?></td>
                <td><?php echo $data['alamat_karyawan']; ?></td>
                <td><?php echo $data['telepon_karyawan']; ?></td>
                <td><?php If($jabatan_karyawan=="kr"){
                            Echo "Karyawan";
                        }Else if($jabatan_karyawan=="kpg"){
                            Echo "Kepala Gudang";
                      
                        }?></td>
              </tr>
                                    
             ';                    
			}
		$content .='
	
	</table>

	</page>';

require_once('../assets/html2pdf/html2pdf.class.php');
$html2pdf = new HTML2PDF('P', 'A4', 'fr');
$html2pdf->WriteHTML($content);
$html2pdf->Output('exemple.pdf');
?>