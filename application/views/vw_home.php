<!doctype html>
<html lang="en">
    <head>
        <title>Home</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css"/>
		<style>
        .navbar-nav {
            margin-left: 680px;
        }
		.jumbotron {
			height: 300px;
			background-color: #D4DAFF;
		}
		.jumbotron img {
			display: flex;
			width: 180px;
			margin-top: -60px;
			margin-left: 700px;
		}
		.jumbotron p {
			font-size: 30px;
			text-decoration: solid;
		}
		.jumbotron .box {
			background-color: white;
			width: 200px;
			height: 30px;
			border-radius: 5px;
			margin-top: 20px;
		}
		.box_info{
			border: black 2px solid;
			margin-left: 125px;
			background-color: white;
			width: 400px;
			height: 170px;
			border-radius: 5px;
			margin-top: 20px;
		}
    	</style>   
    </head>
    <body>
        <nav class="navbar navbar-expand-sm">
            <div class="container">
			<div class="logo">
                <img src="<?= base_url('assets/bahan/logo.png') ?>" alt="">
            </div>
                <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                    aria-expanded="false" aria-label="Toggle navigation"></button>
                <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">                        
						<li><a href="/"><i class="fa fa-user" aria-hidden="true"></i> Edit Account</a></li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url(); ?>index.php/login/logout">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container mt-5">
            <div class="jumbotron">
                <h3 >Hi <?php echo $this->session->userdata('nama'); ?>, Have a nice day!</h3>
				<div class="box"><h5>Account Information</h5></div>
				<img src="<?= base_url('assets/bahan/illustration-2.png') ?>" alt="">
            </div>
        </div>

		<div class="box_info">
			<h5>Your current information</h5>
			<p>Username : <?php echo $this->session->userdata('username'); ?></p>
			<p>Name : <?php echo $this->session->userdata('nama'); ?></p>
			<p>Address : <?php echo $this->session->userdata('address'); ?></p>
		</div>
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </body>
</html>
