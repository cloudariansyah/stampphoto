<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHOTO Stamp</title>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php">PHOTO STAMP</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
   <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="https://photostamp.ariansyahcenter.com/">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="wa.me/6285697187214">Kontak</a>
      </li>
      
    </ul>
  </div>
</nav>


<!-- Features Section -->
<section class="container">
   <!-- page start -->
 
 <!--select2 start-->
              <div class="row" onLoad="getLocation()">
                  <div class="col-md-12">
                      <section class="card">
                          <header class="card-header">
                             HASIL FOTO
                          <span class="tools pull-right">
                            <a href="javascript:;" class="fa fa-chevron-down"></a>
                            <a href="javascript:;" class="fa fa-times"></a>
                          </span>
                          </header>
                          <div class="card-body">
                              
      
<?php
if (isset($_POST['submit'])){
       $upload = 'err'; 
    ini_set('upload_max_filesize', 1024);
      $aplikasi=$_POST['aplikasi']; 
     $judul	=$_POST['judul'];
      $user	=$_POST['user'];
     $time=$_POST['thetime'];	
     $tipefile="photo";
      
      // SET DIRECTORY 
      $targetDir = "upload/image/prewatermark/";
      $finalDir = "upload/image/watermark/";
      $finalName = date('ymdhis')."_".$user."_pic.";
    
    // SET TEXT WATERMARK
     $txt =$user."\n \n".$judul."\n ".$aplikasi. "
          \n Time: ".$time. " 
     \n GPS: ".$_POST['lat'].','.$_POST['long'];
    
   
    // SET PROPERTIES 
    $fontFile = "fonts/arial/arial.ttf"; 
    $quality = 70; // 0 to 100 p
    $fontSize = 18;
    $posX = 60;
    $posY = 60;
    $angle = 0;
    $allowTypes = array('jpg', 'png', 'jpeg', 'gif'); 
       
      $fileName = date('ymdhis').'_'.basename($_FILES['file']['name']); 
      $targetFilePath = $targetDir.$fileName; 
       
      // Check whether file type is valid 
      $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION); 
      
      
      
      if(in_array($fileType, $allowTypes)){ 
          // Upload file to the server 
           if(move_uploaded_file($_FILES['file']['tmp_name'], $targetFilePath)){ 
               
                 
              $upload = 'ok';
              
                                      // (A) OPEN IMAGE
                                                                        
                                    switch($fileType){ 
                                        case 'jpg': 
                                            $img = imagecreatefromjpeg($targetFilePath); 
                                            break; 
                                        case 'jpeg': 
                                            $img = imagecreatefromjpeg($targetFilePath); 
                                            break; 
                                        case 'png': 
                                            $img = imagecreatefrompng($targetFilePath); 
                                            break; 
                                        default: 
                                            $img = imagecreatefromjpeg($targetFilePath); 
                                    } 
                                      




                                    // Create some colors
                                    $white = imagecolorallocate($img, 255, 255, 255);
                                    $black = imagecolorallocate($img, 0, 0, 0);
                                     
                                     imagettftext($img, $fontSize, $angle, $posX+1, $posY+1, $black, $fontFile, $txt); //shadow color
                                     imagettftext($img, $fontSize, $angle, $posX, $posY, $white, $fontFile, $txt); //font color
             
                                     
                                     imagejpeg($img, $finalDir.$finalName.$fileType, $quality);
                                    $filelampiran=$finalName.$fileType;
                                      
                                     
              
                                           
           unlink($targetDir.$fileName); //delete the file source for save the storage
              
              
          } 
      } 
    
      

 
    
}

?>

<div width="100%" align="center"><img width="100%" src="<?=$finalDir.$finalName.$fileType;?>">
<a href="<?=$finalDir.$finalName.$fileType;?>" download="<?=$finalDir.$finalName.$fileType;?>" class="btn btn-primary mt-3">Download</a></div> 
<h3>Peta Lokasi </h3>
 
<iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.openstreetmap.org/export/embed.html?bbox=<?=$_POST['long']?>%2C<?=$_POST['lat']?>%2C<?=$_POST['long']?>%2C<?=$_POST['lat']?>&amp;layer=mapnik" style="border: 1px solid black"></iframe><br/><small><a href="https://www.openstreetmap.org/#map=16/<?=$_POST['lat']?>/<?=$_POST['long']?>">View Larger Map</a></small>
 <br><i><a href="geo:<?=$_POST['lat']?>,<?=$_POST['long']?>?z=17">GEO link</a></i>
 <a href='https://nominatim.openstreetmap.org/search?q=<?=$_POST['lat'].','.$_POST['long']?>&format=json&polygon=1&addressdetails=1'> Detail Map</a>
 
                        </div>
                      </section>
                  </div>
              </div>
              <!--select2 end-->
         <!-- page end -->
</section>


<!-- Footer -->
<footer class="bg-light text-center py-3">
  <p>&copy; 2023 ariansyahcenter</p>
</footer>

<!-- Masukkan link ke JavaScript Bootstrap di sini -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>