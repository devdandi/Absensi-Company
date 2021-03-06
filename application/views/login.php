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
    <title>Masuk</title>
  </head>
  <body>
  	<div class="container">
    <div class="row">
    	<div class="card mx-auto p-5 mt-5 shadow p-3 mb-5 bg-white rounded rounded-top">
    		<div class="card-body">
    			<h2 class="text-center">Masuk</h2>
    			<?php 
    			if (isset($_GET['l'])) {
    				echo '<small style="color: red">Email atau password salah</small>';
    			}else if(isset($_GET['m'])) {
    				echo '<small style="color: red">Login terlebih dahulu</small>';
    			}else if(isset($_GET['o'])) {
    				echo '<small style="color: green">Berhasil logout</small>';
    			}
    			 ?>
    			<form method="post" action="<?php echo base_url('/') ?>">
				  <div class="form-group">
				    <input type="text" name="email" id="email" placeholder="Email atau Username" required="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
				    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
				  </div>
				  <div class="form-group">
				    <input type="password" id="password" name="password" class="form-control" required="" placeholder="Password" id="exampleInputPassword1">
				  </div>
				  <div class="form-group form-check">
				    <input type="checkbox" class="form-check-input" name="remember" id="exampleCheck1">
				    <label class="form-check-label" for="exampleCheck1">Ingat Saya ?</label>
				  </div>
				  <button type="submit" name="submit" class="btn btn-primary form-control">Masuk</button>
				  <a href="<?php echo base_url('forgot-password') ?>">Lupa Password</a>
				</form>
    		</div>
    		<!-- <small style="color: red">* Khusus untuk karyawan Dandi Ramdani S.Cbl, M.Kom</small> -->
    	</div>
    </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>