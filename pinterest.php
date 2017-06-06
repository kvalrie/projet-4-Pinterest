<!DOCTYPE html>
<html lang="en">
<head>  

		<link rel="stylesheet" href="./Remodal-1.1.1/dist/remodal.css">
		<link rel="stylesheet" href="./Remodal-1.1.1/dist/remodal-default-theme.css">

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="stylesheet" href="pinterest.css">
		
		<meta charset="UTF-8">
		<title>Pinterest</title>
</head>
<body>
	<header>
		<div>
			
			<img class="logo" src="logo.png">
			
			<form class="form-inline" method="post" action="pinterest.php" enctype="multipart/form-data"	>
				
				<input type="file" name="image" class="form-control input-lg" id="image">
    			<input type="submit" class="btn btn-primary btn-lg" value="Upload Image" name="submit">
	    		
			
				
				<button type="button" class="btn btn-success btn-lg">Success</button>
			
			</form>

		</div>
	</header>


<section >
<div class="grid  remodal-bg" data-isotope='{ "itemSelector": ".grid-item", "masonry": { "columnWidth": 200, "fitWidth": true } }'>
	<?php

	require 'src/claviska/SimpleImage.php';


//VERRIFICATION

//test si mon fichier a bien été envoyé et si il n'y a pas de message d'erreur .

if (isset($_POST['submit'] )) {
	

		if (isset($_FILES['image']) AND $_FILES['image'][error] == 0 ) {
		//test de la taille de mon fichier

			if ($_FILES['image']['size'] <= 1000000) {	
					
					$info_image=pathinfo($_FILES['image']['name']);
					$extension_image=$info_image['extension'];
					$valid_extension=array('jpg', 'jpeg', 'png', 'gif', 'WebP','JPG');
						//si l'extention de l'image se trouve dans le tableau des extensions autorisé:
					
							if (in_array($extension_image, $valid_extension)) {
						//je nomme la variable pour l'emplacement du fichir de stock final
							$fichier_definitif= './fichierdefinitif/'.$_FILES['image']['name'];
						//transfert du fichier si tout va bien de TMp au fichier d stockage definitif
							move_uploaded_file($_FILES['image']['tmp_name'],$fichier_definitif);
						
							echo "tout va bien";
						//AFFICHAGE SCANDIR 
						//scandir est la pour afficher les elements de mon dossier definitif sous forme de tableau
							
							$dir='./fichierdefinitif/' ;


							$imgaff=scandir($dir);
							unset($imgaff[0],$imgaff[1],$imgaff[2]);

						//ici une fois recup je les affiches 
						//print_r($imgaff);

							foreach($imgaff as $img) {

							echo '  <div  class="grid-item" >
										<a href="#" data-remodal-target="'.$img.'"><img src="fichierdefinitif/'.$img.'" alt="..." class="img-thumbnail" class="img-responsive" >
									</div> 
									<div class="remodal" data-remodal-id="'.$img.'" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc">
									<button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>
									<img src="fichierdefinitif/'.$img.'"> 
							 		</div> ' ;


						//SIMPLEIMAGE
						$maxWidth=250;	
						$maxHeight=400;

							$Simple_image = new \claviska\SimpleImage(); 

							$Simple_image->fromfile($fichier_definitif);
							$Simple_image->bestfit($maxWidth,$maxHeight);
							$Simple_image->toFile($fichier_definitif);

						}



					}else{echo "extension pas valide";}
			
			}else {echo "image trop grande";}



		}else{echo "probleme d'upload";}

}



?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="./Remodal-1.1.1/dist/remodal.js"></script>
		<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.js"></script>
</body>
</html>