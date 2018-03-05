<?php
include 'includes/fct-temp.php';
var_dump($_POST);
//Affichage de l'image finale
if (isset($_POST['submit'])){
  $img = $_POST['#inputGroupSelect03'];
  $txt_up = $_POST['#basic-url-ht'];
  $txt_down = $_POST['#basic-url-bas'];

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

}
?>
