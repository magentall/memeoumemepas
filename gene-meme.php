<?php
include 'includes/fct-temp.php';
include 'includes/fcts.php';
include 'includes/cnx.php';
var_dump($_POST);
//Affichage de l'image finale
if (isset($_POST['submit'])){
  $img = $_POST['imghidename'];
  $img = "img/".$img.".jpg";
  $txt_up = $_POST['textht'];
  $txt_down = $_POST['textbas'];

  $img_rdr=crea_img($img,$txt_up,25,25);
  $img_rdr=crea_img($img_rdr,$txt_down,25,300);

  echo $img_rdr;

  $cnx=conex();
  $url_img=create_url($cnx,$_POST['imghidename']);
  imagejpeg($img_rdr,$url_img);
  $url_meme=crea_check_url_v2_old($cnx);
  ins_2_meme($cnx,$url_img,$url_meme);
  $inside_html="<img src=\"".$url_img."\" />";
  $f=fopen($url_meme,"x+");
  fputs($f,$inside_html);
  fclose($f);
  $redirect="Location: ".$url_meme;
  header($redirect);
  exit;
}
?>
