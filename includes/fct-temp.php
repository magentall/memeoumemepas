<?php
// creation d'une url html return url.html
function create_url($cnx){
  $rand=rand(0,700000000);
  $date_crea = date("Y-m-d");
  $url_meme="img/".$date_crea.$nomfic.$rand.".".$type;
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
    $date_crea = date("Y-m-d");
    $url_meme="img/".$date_crea.$nomfic.$rand.".".$type;
    return $url_meme;
  }
  if (in_array($type, array("htm", "html", "php"))) {
    $rand=rand(0,700000000);
    $date_crea = date("Y-m-d");
    $url_meme=$date_crea.$nomfic.$rand.".".$type;
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

function ins_2_meme($cnx,$URL_img,$URL_mm){
  $query = "INSERT INTO IMG_rdr (URL_img,URL_mm) VALUES ('$URL_img','$URL_mm')";
  $stmt = mysqli_query($cnx, $query);
       if ($stmt==1) {
         echo "MEME ajouté";
       }
       else {
         echo "Erreur: déjà existant, veuillez contacter, rebranchez!";
       }
}
// UPLOAD FILES
function up_fil(){
  $target_dir = "uploads/";
  $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
  $uploadOk = 1;
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  // Check if image file is a actual image or fake image
  if(isset($_POST["submit"])) {
      $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
      if($check !== false) {
          echo "File is an image - " . $check["mime"] . ".";
          $uploadOk = 1;
      } else {
          echo "File is not an image.";
          $uploadOk = 0;
      }
  }
  // Check if file already exists
  if (file_exists($target_file)) {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
  }
  // Check file size
  if ($_FILES["fileToUpload"]["size"] > 500000) {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
  }
  // Allow certain file formats
  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
  && $imageFileType != "gif" ) {
      echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
      $uploadOk = 0;
  }
  // Check if $uploadOk is set to 0 by an error
  if ($uploadOk == 0) {
      echo "Sorry, your file was not uploaded.";
  // if everything is ok, try to upload file
  } else {
      if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
          echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
      } else {
          echo "Sorry, there was an error uploading your file.";
      }
  }
}

function up_fil_2(){
  $file_upload="true";
  $file_up_size=$_FILES['file_up'][size];
  echo $_FILES[file_up][name];
  if ($_FILES[file_up][size]>250000){$msg=$msg."Your uploaded file size is more than 250KB
   so please reduce the file size and then upload.<BR>";
  $file_upload="false";}

  if (!($_FILES[file_up][type] =="image/jpeg" OR $_FILES[file_up][type] =="image/gif"))
  {$msg=$msg."Your uploaded file must be of JPG or GIF. Other file types are not allowed<BR>";
  $file_upload="false";}

  $file_name=$_FILES[file_up][name];
  $add="upload/$file_name"; // the path with the file name where the file will be stored

  if($file_upload=="true"){

  if(move_uploaded_file ($_FILES[file_up][tmp_name], $add)){
  // do your coding here to give a thanks message or any other thing.
  }else{echo "Failed to upload file Contact Site admin to fix the problem";}

  }else{
  echo $msg;
  }
}
?>
