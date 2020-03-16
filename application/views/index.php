<?php  ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style type="text/css">
    	body {
    		background-color:  #eaecee;
    	}
    </style>
    <title>Dashboard</title>
  </head>
  <body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	<div class="container">
  <a class="navbar-brand" href="#">Dashboard</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#">Pengaturan Akun</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Riwayat</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Logout</a>
      </li>
    </ul>
  </div>
</div>
</nav>



<div class="container">
	<div class="row mx-auto mt-1">
		<div class="col-md-4">
			<div class="card">
				<div class="card-body">
					<p style="color: red"> * Anda Belum Absen</p>
<!-- Y-m-d H:i:s -->
					
					<small id="jam"></small>

					<hr>
					<p>Email : Dandi Ramdani</p>
					<p>NIK : 2832938437289378</p>
					<p>Perusahaan : <?php echo $data_perusahaan[0]['nama']; ?></p>
					<small>Jarak anda ke perusahaan : 500 meter</small>
					<p></p>
					<small style="color: red">*Jika jarak anda lebih dari 100 meter, maka anda tidak bisa melalukan absen</small>
					<hr>
					<form method="post" action="<?php echo base_url('dashboardcontroller/absen') ?>">
						<input type="text" name="email" hidden="" value="<?php echo $this->session->email; ?>">
						<button class="btn btn-primary w-100" name="absen">Absen Masuk</button><br/>
					</form>
					<hr>
					<!-- <button class="btn btn-warning">Absen Pulang</button> -->
					<a class="btn btn-danger w-100" href="/reportcontroller/buttonerr">Lapor Error</a>

				</div>
			</div>
		</div>
	</div>
</div>



<!-- <script type="text/javascript">
	window.setTimeout("waktu()",1000);  
	function waktu() {   
	var tanggal = new Date();  
	setTimeout("waktu()",1000);  
	document.getElementById("jam").innerHTML = tanggal.getHours()+":"+tanggal.getMinutes()+":"+tanggal.getSeconds();

	}
</script>	 -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>