<?php
include 'includes/fct-temp.php';
//var_dump($_POST);

//Affichage de l'image finale
if (isset($_POST['submit'])){
  $img = './img/futurama1';
  $txt_up = $_POST['textht'];
  $txt_down = $_POST['textbas'];
  var_dump($_POST);


  //$fileDisk = saveImg($cnx, $img);

  function imgMagick($txt_up, $txt_down, $img) {


     /* Create imagickdraw object */
     $draw = new ImagickDraw();

     /* Start a new pattern called "gradient" */
     $draw->pushPattern('gradient', 0, 0, 50, 50);

     /* Close the pattern */
     $draw->popPattern();

     /* Set font size to 52 */
     $draw->setFontSize(30);

     /* Set font color */
     $draw->setFillColor('white');

     /* Annotate some text */
     $draw->annotation(40, 50, $txt_up);

     $draw->annotation(40, 470, $txt_down);

     /* Create a new canvas object and a white image */
     $canvas = new Imagick($img);

     /* Draw the ImagickDraw on to the canvas */
     $canvas->drawImage($draw);

     /* 1px black border around the image */
     $canvas->borderImage('black', 1, 1);

     /* Set the format to PNG */
     $canvas->setImageFormat('png');

          //header("Content-Type:imgage/png");

       return $canvas;
  }
    $meme = imgMagick($txt_up, $txt_down, $img);
    imgMagick();
    echo $canvas;
    //file_put_contents ('./img/futurama1', $canvas);
    //echo $img;
  /*
  function crea_img($img, $txt){
       //Définie le type de contenu
       header('Content-type: image');
       //Crée image depuis contenu existant
       $jpg_image = imagecreatefromjpeg($img);
       // Couleur du texte
       $white = imagecolorallocate($jpg_image, 255, 255, 255);
       // Chemin vers la police d'ecriture
       $font_path = '/usr/share/fonts/truetype/dejavu/DejaVuSansCondensed-Bold.ttf'; // A Verifier!!!
       // Définie le texte inseré

       // Print Text On Image
       imagettftext($jpg_image, 20, 0, 2, 30, $white, $font_path, $txt_up);
       // Send Image to Browser
       imagejpeg($jpg_image);
       // Creation d'une url html return url.html
       create_url($cnx);
       // Vérif si url dans la base return une url valide
       crea_check_url($cnx);
       //Enregistre l'image dans un dossier specifique
       file_put_contents('img_rdr/'.$jpg_image, $jpg_image);
       // Clear Memory
       imagedestroy($jpg_image);
  }
  //crea_img($img, $txt);
  */
}
?>
