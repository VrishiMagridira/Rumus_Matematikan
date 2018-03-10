<!DOCTYPE html>
<html lang="en">

<head>
    <title>Fomulir Pendaftaran Beasiswa</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container" style="background-image: url(https://buonline.beasiswaunggulan.kemdikbud.go.id/assets/img/pattern_1.png);
background-repeat: repeat;
background-attachment: scroll;
background-clip: border-box;
background-origin: padding-box;
background-position-x: 100%;
background-position-y: 100%;
background-size: auto auto;">

        <div style="margin-top:50px;
margin-bottom:50px;
margin-right:60px;
margin-left:60px;" class="row">
      <div class=row style="background-color:#DDD6FF;background-position: 100%;
background-position-y: 100%;
background-size: auto auto;">		
		<center>
                <h2>Fomulir Pendaftaran Beasiswa</h2></center></div>
            
            <br>
			
			           
            <br>
			<div style="margin-left:10px:margin-right:10px">
            <h3> A. Data Pribadi</h3>
            <form action="TugasIsi.php" method="POST" enctype="multipart/form-data">
                <div class="row">
                    <div class="form-group">
                        <label class="col-sm-2">Nama Lengkap </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="nama" required>
                        </div>

                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="form-group">
                        <label for="pwd" class="col-sm-2">NIM</label>
                        <div class="col-sm-10">
                            <input name="nim" id="pwd" class="form-control">
                        </div>
                    </div>
                </div>

                <br>

                <div class="row">
                    <div class="form-group">
                        <label class="col-sm-2">Tanggal Lahir</label>
                        <div class="col-sm-4">
                            <input name="ttg" type="date" id="pwd" class="form-control" required>
                        </div>

                    </div>
                </div>
                <br>

                <div class="row">
                    <div class="form-group">
                        <label class="col-sm-2">Jenis Kelamin </label>
                        <div class="col-sm-10">
                            <input type="radio" name="Jenis_kelamin" value="laki-laki" id="laki-laki" />
                            <label for="laki-laki">Laki-Laki</label>
                            <input type="radio" name="Jenis_kelamin" value="perempuan" id="perempuan" />
                            <label for="perempuan">Perempuan</label>
                        </div>
                    </div>
                </div>
                <br>

                <div class="row">
                    <div class="form-group">
                        <label class="col-sm-2">Agama </label>
                        <div class="col-sm-10">
                            <select name="agama">
                                <option value="" selected="selected">--Agama--</option>
                                <option value="Islam">Islam</option>
                                <option value="Protestan">Protestan</option>
                                <option value="Khatolik">Khatolik</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Budha">Budha</option>

                            </select>

                        </div>
                    </div>
                </div>
                <br>

                <br>

                <div class="row">
                    <div class="form-group">
                        <label class="col-sm-2">Email </label>
                        <div class="col-sm-10">
                            <input name="email" type="email" class="form-control">
                        </div>

                    </div>
                </div>

                <br>

                <div class="row">
                    <div class="form-group">
                        <label class="col-sm-2">Nomor HP </label>
                        <div class="col-sm-10">
                            <input name="nomor"type="text" class="form-control">
                        </div>

                    </div>
                </div>
                <BR>

                <div class="row">
                    <div class="form-group">
                        <label class="col-sm-2">Motto Hidup </label>
                        <div class="col-sm-10">
                            <input name="motto" type="text" class="form-control">
                        </div>

                    </div>
                </div>
				<br>
  <div class="row">
                    <div class="form-group">
                        <label class="col-sm-2">Alamat</label>
                        <div class="col-sm-10">
                            <input name="alamat" type="text" class="form-control">
                        </div>

                    </div>
                </div>
     
           
          
            <br>
         <h3> B. Riwayat Pendidikan</h3>
		 <br>
                <div class="row">
                    <div class="form-group">
                        <label class="col-sm-2">Sekolah Dasar </label>
                        <div class="col-sm-10">
                            <input name="sd"type="text" class="form-control">
                        </div>

                    </div>
                </div>
                <br>

                <div class="row">
                    <div class="form-group">
                        <label class="col-sm-2">Sekolah Menengah Pertama </label>
                        <div class="col-sm-10">
                            <input name = "smp"type="text" class="form-control">
                        </div>

                    </div>
                </div>
                <br>

                <div class="row">
                    <div class="form-group">
                        <label class="col-sm-2">Sekolah Menengah Atas </label>
                        <div class="col-sm-10">
                            <input name="sma" type="text" class="form-control">
                        </div>

                    </div>
                </div>
                <br>

                <div class="row">
                    <div class="form-group">
                        <label class="col-sm-2">Perguruan Tinggi </label>
                        <div class="col-sm-10">
                            <input name="pt" type="text" class="form-control">
                        </div>

                    </div>
                </div>
                <br>

                <h3>C. Data Orang Tua</h3>
                <div class="row">
                    <div class="form-group">
                        <label class="col-sm-2">Nama Ayah </label>
                        <div class="col-sm-10">
                            <input name= "ayah" type="text" class="form-control">
                        </div>

                    </div>
                </div>
                <br>

                <div class="row">
                    <div class="form-group">
                        <label class="col-sm-2">Pekerjaan </label>
                        <div class="col-sm-10">
                            <input name="pekerjaanAyah"type="text" class="form-control">
                        </div>

                    </div>
                </div>
                <br>

                <div class="row">
                    <div class="form-group">
                        <label class="col-sm-2">Penghasilan perbulan </label>
                        <div class="col-sm-10">
                            <input name="penghasilanAyah"type="text" class="form-control">
                        </div>

                    </div>
                </div>
                <br>

                <div class="row">
                    <div class="form-group">
                        <label class="col-sm-2">Nama Ibu </label>
                        <div class="col-sm-10">
                            <input name="ibu" type="text" class="form-control">
                        </div>

                    </div>
                </div>
                <br>

                <div class="row">
                    <div class="form-group">
                        <label class="col-sm-2">Pekerjaan </label>
                        <div class="col-sm-10">
                            <input name="pekerjaanIbu"type="text" class="form-control">
                        </div>

                    </div>
                </div>
                <br>

                <div class="row">
                    <div class="form-group">
                        <label class="col-sm-2">Penghasilan per bulan </label>
                        <div class="col-sm-10">
                            <input name="penghasilanIbu" type="text" class="form-control">
                        </div>

                    </div>
                </div>

                <br>
                <br>
				
				   <h3> D. Berkas Pendukung</h3>
				   
				<div class="row">
                    <div class="form-group">
                        <label class="col-sm-5">Pas Photo</label>
                        <div >
                            <input name="file" type="file" class="col-sm-5">
                        </div>

                    </div>
                </div>
				<br>
                <div class="form-group">

                    <center>
                        <div>

                            <button type="submit" class="btn btn-default"style="background-color:#4CAF50;color:white">Submit</button>

                        </div>
                    </center>
					</DIV>
                </div>
            </form>

        </div>
</div>
</body>

</html>