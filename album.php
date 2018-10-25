<!DOCTYPE>
<html>
<head>
	<title>Latiihan Bootstrap</title>
	<link rel ="stylesheet" type = "text/css" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
	<link rel ="stylesheet" type = "text/css" href ="css/style.css">
	<link rel="stylesheet" type="text/css" href="fluid/fluid-gallery.css">
</head>
<body>
	
	<div class="container">
		<div class = "row">
			<div class ="col-md-12">
				<div class="item active">
					 <img src ="img/header.jpg" width="100%">
				</div>
				<nav class = "navbar navbar-default">

					<div class = "collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class ="nav navbar-nav">
							<li class=""><a href="index.php">Beranda
							<span class = "sr-only">(current)</span></a></li>
							<li><a href ="datamhs.php"> Data Mahasiswa</a></li>
							<li class="dropdown">
								<a href= "#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
							Profil <span class ="caret"></span></a>
							<ul class ="dropdown-menu">
								<li><a href="visi.php">Visi</a></li>
								<li><a href="misi.php">Misi</a></li>
								<li role="separator" class = "divider"></li>
								<li><a href ="album.php">Album</a></li>
							</ul>
								</li>
								</ul>
						</div>
					</nav>

					
<div class="container gallery-container">

    <h1>ALBUM</h1>

    <p class="page-description text-center">Kampus-kampus Gunadarma</p>
    
    <div class="tz-gallery">

        <div class="row">

            <div class="col-sm-12 col-md-4">
                <a class="lightbox" href="img/ee.jpg">
                    <img src="img/ee.jpg" alt="Bridge">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/e.jpg">
                    <img src="img/e.jpg" alt="Park">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/kampus E.jpg">
                    <img src="img/kampus E.jpg" alt="Tunnel">
                </a>
            </div>
            <div class="col-sm-12 col-md-8">
                <a class="lightbox" href="img/kampus h.jpg">
                    <img src="img/kampus h.jpg" alt="Traffic">
                </a>
            </div>
            <div class="form-group">
    <label for="exampleFormControlFile1">File input</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1">
  </div>
  <div class="col-auto">
      <button type="submit" class="btn btn-primary" onclick="alert('Berhasil diupload')">Upload</button>
</div>

        </div>

    </div>

</div>
	</div>
<script src ="jquery-3.1.1.min.js"></script>
<script src ="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
<script>
    baguetteBox.run('.tz-gallery');
</script>
</body>
</html>