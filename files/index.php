<?php

error_reporting (0);

$have_access = FALSE;

include_once '../hasAccess.php';

//$have_access = TRUE;


//var_dump($_SERVER);

//echo $image_folder = substr($_SERVER['SCRIPT_FILENAME'], 0,-9) ;

$file =  explode('/', $_SERVER["PATH_INFO"])[1];

$file_parts = pathinfo($file);

//echo $file_parts['extension'];

if ($file_parts['extension']  == 'jpg') {
	//func img
	//echo $file_parts['extension'];
	/////////////////////////////////////////////

		$image = $file_parts['extension'];

		$image_file = $file;
	//$image_file = base64_decode($image_file);

	#
	#Change Image folder directory ****
	#uncomment line bellow
	#
	//$image_folder = '/var/www/html/ui/image/img/';
	#
	#auto detect
	#
	$image_folder = substr($_SERVER['SCRIPT_FILENAME'], 0,-9) . 'img/' ;


	//echo $image_dir = $image_folder . 'img/' . $image_file;
	$image_dir = $image_folder  . $image_file;

	if ( file_exists( $image_dir ) == false  || empty($image_file) ) {
	       echo '<br><br><h1 align= "center" style="color:red;">Have not permission to access</h1>';
	       //echo 'Cannot Access - dir';
	       //echo $image_dir;
	    } else {

	    	if($have_access === TRUE){
		    	//$image_64 = file_get_contents($image_dir);

		    	
		    	$imageData = base64_encode(file_get_contents($image_dir));

				// Format the image SRC:  data:{mime};base64,{data};
				$src = 'data: '.mime_content_type($image).';base64,'.$imageData;

				// Echo out a sample image
				echo '<img src="' . $src . '">';

			}else{
	          echo '<br><br><h1 align= "center" style="color:red;">Have not permission to access</h1>';
	    	}
		}


	/////////////////////////////////////////////

}elseif ($file_parts['extension']  == 'pdf') {
	// func pdf
	/////////////////////////////////////////////

	$pdf_file = $file;
	//$image_file = base64_decode($image_file);

	#
	#Change Image folder directory ****
	#uncomment line bellow
	#
	//$pdf_folder = '/var/www/html/ui/file/pdf/';
	#
	#auto detect
	#
	$pdf_folder = substr($_SERVER['SCRIPT_FILENAME'], 0,-9) . 'pdf/' ;


	//echo $pdf_dir = $image_folder . 'img/' . $image_file;
	$pdf_dir = $pdf_folder  . $pdf_file;

	if ( file_exists( $pdf_dir ) == false  || empty($pdf_file) ) {
	        echo '<br><br><h1 align= "center" style="color:red;">Have not permission to access</h1>';
	       //echo 'Cannot Access - dir';
	       //echo $pdf_dir;
	    } else {

	    	if($have_access === TRUE){
		    	
		    	header('Content-Type: application/pdf');
				$content =  file_get_contents($pdf_dir);


				echo $content;

			}else{
	           echo '<br><br><h1 align= "center" style="color:red;">Have not permission to access</h1>';
	    	}
		}


	/////////////////////////////////////////////
}else{
	echo '<br><br><h1 align= "center" style="color:red;">Have not permission to access</h1>';
	//echo 'Cannot Access - file type';
}









?>
