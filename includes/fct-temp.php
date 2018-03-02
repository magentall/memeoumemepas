<?php
// creation d'une url html return url.html
function create_url($cnx){
  $rand=rand(0,700000000);
  $url_meme=$rand.".html";
  return $url_meme;
}
// vérif si url dans la base return une url valide
function crea_check_url($cnx){
  $query="SELECT URL_mm FROM IMG_rdr";
  $resURL_MEME=mysqli_query($cnx,$query);
  $url_meme=create_url();
  $sam=0;
  if(mysqli_num_rows($resURL_MEME) > 0){
    while ($row =mysqli_fetch_assoc($resModAuteur)){
      for ($i = 0; $i<sizeof($row['URL_mm']); $i++){
        if (strcmp($url_meme,$row['URL_mm'])==0) {
          $sam=1;
        }
      }
    }
  }
  else {
    return $url_meme;
  }
  if ($sam==1) {
    return crea_check_url($cnx);
  }
  else {
    return $url_meme;
  }
}
// vérif si url dans la base return une url valide plus rapide
function crea_check_url_v2($cnx){
  $query="SELECT URL_mm FROM IMG_rdr";
  $resURL_MEME=mysqli_query($cnx,$query);
  $url_meme=create_url();
  if(mysqli_num_rows($resURL_MEME) > 0){
    while ($row =mysqli_fetch_assoc($resModAuteur)){
      for ($i = 0; $i<sizeof($row['URL_mm']); $i++){
        if (strcmp($url_meme,$row['URL_mm'])==0) {
          return crea_check_url_v2($cnx);
        }
      }
    }
  }
  return $url_meme;
}

///////// CREA MULTI URL //////////////
// creation d'une url
function create_url_mul($cnx,$type,$nomfic){
  if (in_array($type, array("jpg", "jpeg", "png"))) {
    $rand=rand(0,700000000);
    $url_meme="img/".$nomfic.$rand.".".$type;
    return $url_meme;
  }
  if (in_array($type, array("htm", "html", "php"))) {
    $rand=rand(0,700000000);
    $url_meme=$nomfic.$rand.".".$type;
    return $url_meme;
  }

}
// vérif si url dans la base return une url valide
function crea_check_url($cnx,$type,$nomfic,$SELECT,$FROM){
  $query="SELECT ".$SELECT." FROM ".$FROM;
  $resURL_MEME=mysqli_query($cnx,$query);
  $url_meme=create_url_mul($cnx,$type,$nomfic);
  $sam=0;
  if(mysqli_num_rows($resURL_MEME) > 0){
    while ($row =mysqli_fetch_assoc($resModAuteur)){
      for ($i = 0; $i<sizeof($row[$SELECT]); $i++){
        if (strcmp($url_meme,$row[$SELECT])==0) {
          $sam=1;
        }
      }
    }
  }
  else {
    return $url_meme;
  }
  if ($sam==1) {
    return crea_check_url($cnx,$type,$nomfic,$SELECT,$FROM);
  }
  else {
    return $url_meme;
  }
}

function crea_check_url_v2($cnx,$type,$nomfic,$SELECT,$FROM){
  $query="SELECT ".$SELECT." FROM ".$FROM;
  $resURL_MEME=mysqli_query($cnx,$query);
  $url_meme=create_url_mul($cnx,$type,$nomfic);
  if(mysqli_num_rows($resURL_MEME) > 0){
    while ($row =mysqli_fetch_assoc($resModAuteur)){
      for ($i = 0; $i<sizeof($row[$SELECT]); $i++){
        if (strcmp($url_meme,$row[$SELECT])==0) {
          return crea_check_url_v2($cnx,$type,$nomfic,$SELECT,$FROM);
        }
      }
    }
  }
  return $url_meme;
}


?>
