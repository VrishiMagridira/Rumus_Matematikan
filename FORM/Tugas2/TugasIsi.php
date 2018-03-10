<!DOCTYPE html>
<html lang="en">

<head>
    <title>Biodata</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
<?php 
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$ttg = $_POST['ttg'];
$email = $_POST['email'];
$nomor = $_POST['nomor'];
$motto= $_POST['motto'];
@$Jenis_kelamin = $_POST['Jenis_kelamin'];
$sd = $_POST['sd'];
$smp = $_POST['smp'];
$sma = $_POST['sma'];
$ayah = $_POST['ayah'];
$pekerjaanAyah=$_POST['pekerjaanAyah'];
$penghasilanAyah = $_POST['penghasilanAyah'];
$ibu = $_POST['ibu'];
$pekerjaanIbu=$_POST['pekerjaanIbu'];
$penghasilanIbu = $_POST['penghasilanIbu'];
$alamat = $_POST['alamat'];
$pt=$_POST['pt'];
$agama=$_POST['agama'];

//Script file
$extension = strtolower(pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION));
$photo = "uploaded." . $extension;
if (file_exists($photo)) {
    unlink($photo);
}
move_uploaded_file($_FILES['file']['tmp_name'], $photo);
?>

<br>
      <div class="container" style="background-image: url(https://buonline.beasiswaunggulan.kemdikbud.go.id/assets/img/pattern_1.png);
background-repeat: repeat;
background-attachment: scroll;
background-clip: border-box;
background-origin: padding-box;
background-position-x: 100%;
background-position-y: 100%;
background-size: auto auto;">
        <div class="container">
		<br>
		<p>Data telah berhasil di Inputkan..<p>
		  
  <div class=row style="background-color:#DDD6FF;background-position: 90%;
background-position-y: 100%;
background-size: auto auto;">		
		<center>
                <h2>Biodata</h2></center></div>
				<br>
			<center>	<div class="row">
                    <div class="form-group">
					<tbody>
					<tr>
                        <td>  <td>
                      <td>
						<img width= "20%" src="<?php echo $photo?>">
					  </td>
                        
						</tr>
</tbody>
                    </div>
                </div></center>

            <h3>A. Data Pribadi</h3>
            <table class="table table-hover" style="background-color:#E9EBF0;width:720px">
                <tbody>
                    <tr>

                        <row>
                            <td width="200">Nama </td>
                            <td>: <?php echo $nama?></td>
                        </row>
                    </tr>
                    <tr>
                        <td>NIM</td>

                        <td>: <?php echo $nim?></td>

                    </tr>
                    <tr>
                        <td>Tangal lahir</td>

                        <td>: <?php echo $ttg?></td>

                    </tr>

                    <tr>
                        <td>Jenis Kelamin</td>

                        <td>:<?php echo $Jenis_kelamin?></td>

                    </tr>

                    <tr>
                        <td>Agama</td>

                        <td>: <?php 
						echo $agama?></td>

                    </tr>

                    <tr>
                        <td>Email</td>

                        <td>: <?php echo $email?></td>

                    </tr>

                    <tr>
                        <td>No HP</td>

                        <td>: <?php echo $nomor?></td>

                    </tr>

                    <tr>
                        <td>Motto Hidup</td>

                        <td>: <?php echo $motto?></td>

                    </tr>
                    <tr>
                        <td>Alamat</td>

                        <td>:<?php echo $alamat?></td>

                    </tr>
                </tbody>
            </table>

            <h3>B. Riwayat Pendidikan</h3>
            <div class="container">

                <table class="table table-hover" style="background-color:#E9EBF0;width:720px">

                    <tbody>
                        <tr>
                            <td width="200">Sekolah Dasar</td>
                            <td>: <?php echo $sd?></td>

                        </tr>
                        <td>Sekolah Menengah Pertama </td>
                        <td>: <?php echo $smp?></td>
                        </tr>
                        <tr>
                            <td>Sekolah Menengah Atas</td>
                            <td>: <?php echo $sma?></td>

                        </tr>
                        <tr>
                            <td>Perguruan Tinggi</td>
                            <td>: <?php echo $pt?></td>

                        </tr>
                    </tbody>
                </table>
            </div>
            <h3>C. Data Orang Tua</h3>
            <div class="container">

                <table class="table table-hover" style="background-color:#E9EBF0;width:720px">

                    <tbody>
                        <tr>
                            <td width="200">Nama Ayah </td>
                            <td>: <?php echo $ayah?></td>

                        </tr>
                        <td>Pekerjaan </td>
                        <td>: <?php echo $pekerjaanAyah?></td>
                        </tr>
                        <tr>
                            <td>Penghasilan per Bulan</td>
                            <td>: <?php echo $penghasilanAyah?></td>

                        </tr>
                        <tr>
                            <td>Nama Ibu</td>
                            <td>: <?php echo $ibu?></td>

                        </tr>
                        <td>Pekerjaan </td>
                        <td>: <?php echo $pekerjaanIbu?></td>
                        </tr>
                        <tr>
                            <td>Penghasilan per Bulan</td>
                            <td>:<?php echo $penghasilanIbu?></td>

                        </tr>

                    </tbody>
                </table>
            </div>
			
			
        </div>
    </div>
	</div>
</body>

</html>