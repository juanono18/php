<!doctype html>
<html lang="en">

<head>
	<title>Nuevo Post</title>
	<link rel="shortcut icon" href="img/descarga.png">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="styleback.css">

</head>

<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-lg-10">
					<div class="wrapper">
						<div class="row no-gutters">
							<div class="col-md-6 d-flex align-items-stretch">
								<div class="contact-wrap w-100 p-md-5 p-4 py-5">
									<h3 class="mb-4">Publicar nuevo post</h3>
									<div id="form-message-warning" class="mb-4"></div>
									<form method="POST" enctype="multipart/form-data" id="contactForm" name="contactForm" class="contactForm" action="upload.php">
										<div class="row">
										<div class="col-md-12">
												<div class="form-group">
													<input type="text" class="form-control" name="pais" id="subject" placeholder="Pais">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<input type="text" class="form-control" name="title" id="subject" placeholder="Titulo">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<input type="text" class="form-control" name="stitle" id="subject" placeholder="Subtitulo">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<textarea name="message" class="form-control" id="message" cols="30" rows="6" placeholder="Pie de foto"></textarea>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<input type="file" class="form-control" name="IMGupload" id="subject" placeholder="Subir imagen principal" accept="image/*">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<input type="file" class="form-control" name="IMGupload2" id="subject" placeholder="Subir imagen secundaria" accept="image/*">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<input type="submit" value="Enviar" class="btn btn-primary">
													<a href="front.php"><input type="button" value="Ir a la web" class="btn btn-primary"></a>
													<a href="index.php"><input type="button" value="Cerrar Sesi??n" class="btn btn-primary"></a>
													<div class="submitting"></div>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<h3 class="mb-4">Actualizar fotos</h3>

												</div>
											</div>
											


										</div>
									</form>
									<?php

									$conex= mysqli_connect('localhost', 'root', '', 'IMGEuro');
									$query = mysqli_query($conex, "SELECT * FROM contenido");
									$posta[] = mysqli_fetch_array($query);
									$counter=0;
									foreach($query as $posta){
										$TITLE = $posta['TITLE'];
										$STITLE = $posta['SUBTITLE'];
										$TEXTO = $posta['TEXTO'];
										$IMG1 =$posta['IMG1'];
										$IMG2 =$posta['IMG2'];

										//$extension = pathinfo($archivo, PATHINFO_EXTENSION);
										//$nombre = basename($archivo,'.',$extension);
										// $filename = pathinfo($archivo, PATHINFO_FILENAME);

										echo "  
										<head>
											<style>
												
											
												img{
													
													display: flex;
													flex-wrap: wrap;
												
												}


											</style>


										</head>
										<form method='POST' enctype='multipart/form-data' id='UpdateForm' name='UpdateForm' class='UpdateForm' action='update.php'>
										<div class='col-md-12'>	
											<input type='file' class='form-control' name='IMGupload' id='subject'  accept='image/*'>
											<div class='form-group'>
												<img name='updatedIMG' src='$IMG1' style='width:100%;height:100%;'>";
												$IMG[$counter]=$IMG1;
												$counter++;
												echo"
												<input type='submit' name='img".$counter,"' value='Enviar' class='btn btn-primary'>
											</div>
										</div>
										</form>
										<form method='POST' enctype='multipart/form-data' id='UpdateForm' name='UpdateForm' class='UpdateForm' action='update.php'>
										<div class='col-md-12'>	
											<input type='file' class='form-control' name='IMGupload' id='subject'  accept='image/*'>
											<div class='form-group'>
												<img name='updatedIMG' src='$IMG2' style='width:100%;height:100%;'>";
												$IMG[$counter]=$IMG2;
												$counter++;
												echo"
												<input type='submit' name='img1".$counter,"' value='Enviar' class='btn btn-primary'>
											</div>
										</div>
										</form>
									
									";
									}
									?>
								</div>
							</div>
							<div class="col-md-6 d-flex align-items-stretch" id="postimg">

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.validate.min.js"></script>
	<script src="js/main.js"></script>

</body>

</html>