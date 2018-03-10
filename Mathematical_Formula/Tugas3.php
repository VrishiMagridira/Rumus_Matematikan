
<?php 
	@$atas = $_POST['atas'];
	@$bawah = $_POST['bawah'];
	@$tinggi = $_POST['tinggi'];
	@$kanan= $_POST['kanan'];
	@$kiri = $_POST['kiri'];
	@$jumlah = $atas + $bawah;
	@$luas =  	$jumlah * $tinggi /2;
	@$keliling = $jumlah  + $kanan + $kiri;

	?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <title>Volume & Luas Permukaan Limas segiempat</title>

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
                        <h2>Volume & Luas Permukaan Limas segiempat</h2></center>
                </div>

                <br>

                <br>
				
			<center>	<img id="myImage" src="https://vignette.wikia.nocookie.net/gcse/images/7/7f/Trapesium.png/revision/latest?cb=20080223184400" width="30%" height="30%"> </center>
			<br><br>
                <div style="margin-left:70px;margin-right:60px">
                    
                        <form  method="POST">
                            <div class="row">
                                <div class="form-group">
                                    <label class="col-sm-3">Sisi Sejajar Atas (DC)</label>
                                    <div class="col-sm-5">
                                        <input value="<?php echo @$atas; ?>" type="text" placeholder="Masukan Sisi Sejajar Atas" class="form-control" name="atas" required>
                                    </div>

                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="form-group">
                                    <label for="pwd" class="col-sm-3">Sisi Sejajar Bawah (AB)</label>
                                    <div class="col-sm-5">
                                        <input name="bawah" value="<?php echo @$bawah; ?>" type="text" class="form-control" placeholder="Masukan Panjang Sisi Sejajar Bawah" required>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="form-group">
                                    <label for="pwd" class="col-sm-3">Tinggi Trapesium (h)</label>
                                    <div class="col-sm-5">
                                        <input value="<?php echo @$tinggi; ?>" name="tinggi" class="form-control" placeholder="Masukan Tinggi Trapesium" required>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="form-group">
                                    <label for="pwd" class="col-sm-3">Sisi Kanan Trapesium (BC)</label>
                                    <div class="col-sm-5">
                                        <input value="<?php echo @$kanan; ?>" name="kanan" class="form-control" placeholder="Masukan Sisi Kanan Trapesium" required>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="form-group">
                                    <label for="pwd" class="col-sm-3">Sisi Kiri Trapesium (AD) </label>
                                    <div class="col-sm-5">
                                        <input value="<?php echo @$kiri; ?>" name="kiri" class="form-control" placeholder="Masukan Sisi Kiri Trapesium" required>
                                    </div>
                                </div>
                            </div>
<br><br>
                           <center> <button class="btn btn-default" style="background-color:#4CAF50;color:white" name="tombol"> Lihat Hasil</button></center>
                            <div class="row">
                                <br>
                                <br>
                                <div class="form-group">
                                    <label class="col-sm-3">Luas Trapesium</label>
                                    <div class="col-sm-5">
                                        <input value="<?php echo @$luas?>" id="volume" class="form-control">

                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <br>
                                <br>
                                <div class="form-group">
                                    <label class="col-sm-3">Keliling Trapesium</label>
                                    <div class="col-sm-5">
                                        <input value="<?php echo @$keliling?>" id="volume" class="form-control">

                                    </div>
                                </div>

                            </div>
                        </form>

                </div>

            </div>

            </form>
         
        </div>
        </div>
    </body>

    </html>