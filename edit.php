<?php
 include ("connection.php");
 $id = $_GET['id'];
 if(isset($_POST['submit'])){
    $myfile = $_POST['myfile'];
    $mytext = $_POST['FormText'];

    $sql = "UPDATE `application` SET `file`='$myfile',`paragraph`='$mytext' WHERE `application_id`= $id";

    $result = mysqli_query($conn, $sql);

    if($result){
        echo"something happened";
        header("Location: std_app_control.php?msg = New record created succesfully");
    }
    else{
        echo "Failed: " . mysqli_error($conn);
    }
 }
?>
<!DOCTYPE html>
<html lang="en">
     <head>
     <title>ATLAS</title>
     <meta charset="utf-8">
     <meta name = "format-detection" content = "telephone=no" />
     <link rel="icon" href="images/favicon.ico">
     <link rel="shortcut icon" href="images/favicon.ico" />
     <link rel="stylesheet" href="css/stuck.css">
     <link rel="stylesheet" href="css/touchTouch.css">
     <link rel="stylesheet" href="css/camera.css">
     <link rel="stylesheet" href="css/style.css">


     <link rel="stylesheet" href="css_bootstrap/bootstrap-grid.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

     <script src="js/jquery.js"></script>
     <script src="js/jquery-migrate-1.1.1.js"></script>
     <script src="js/script.js"></script> 
     <script src="js/superfish.js"></script>
     <script src="js/jquery.equalheights.js"></script>
     <script src="js/jquery.mobilemenu.js"></script>
     <script src="js/jquery.easing.1.3.js"></script>
     <script src="js/tmStickUp.js"></script>
     <script src="js/jquery.ui.totop.js"></script>
     <script src="js/touchTouch.jquery.js"></script>
     <script src="js/camera.js"></script>

     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
     <script src="https://kit.fontawesome.com/63e49b2b95.js" crossorigin="anonymous"></script>
     <!--[if (gt IE 9)|!(IE)]><!-->
     <script src="js/jquery.mobile.customized.min.js"></script>
     <!--<![endif]-->
     <script>
       $(document).ready(function(){
        jQuery('#camera_wrap').camera({
            loader: false,
            pagination: false ,
            minHeight: '250',
            thumbnails: false,
            height: '39.3125%',
            caption: false,
            navigation: true,
            fx: 'mosaic'
          });
        $().UItoTop({ easingType: 'easeOutQuart' });
        $('#stuck_container').tmStickUp({});
        $('.gallery a.gal').touchTouch();
     }); 

     </script>
        
     </head>
     <body class="page1" id="top">
        <!--==============================header=================================-->
<header>
  <div class="container">
    <div class="row">
      <div class="grid_2">
        <h1>
        <div style="float: left; position: relative; left: -30px; top: 5px">
        <a href="index.php"><img src="images/atlas_logo.png" alt="atlas-Logo"></a>
        </div>
       </div>
       <div class="grid_5">
          <h4>Σύστημα Κεντρικής Υποστήριξης της Πρακτικής Άσκησης Φοιτητών ΑΕΙ </h4> 
        </div>
        <!-- <div class="espa">
          <a href="https://www.espa.gr/el/Pages/default.aspx"><img src="images/espa_header_1.jpg">
        </div>
        <div class="ee">
          <a href="https://commission.europa.eu/funding-tenders/find-funding/funding-management-mode/2014-2020-european-structural-and-investment-funds_el"><img src="images/ee_header_1.jpg">
        </div> -->
      <div class="grid_5">
        <div class="autor"><span> </span><i class="fa-solid fa-globe"></i><a href="#"><span1>  </span1>English</a><span>  </span><a href="#">Επικοινωνία</a><span>  </span><a href="#">Εγγραφή</a><span1>  | </span1><a href="#">Σύνδεση</a><span> </span> <a href="#"><i class="fa-solid fa-magnifying-glass"></i> Αναζήτηση</a></div><spam>
      </div>
    </div>
  </div>
  <div id="stuck_container">
  <div class="container">
    <div class="row">
      <div class="grid_12">
        <!-- <div class="autor"><a href="#">Εγγραφή</a><span>  |  </span><a href="#">Σύνδεση</a></div> -->
        <div class="menu_block ">
          <nav class="horizontal-nav full-width horizontalNav-notprocessed">
            <ul class="sf-menu">
             <li class="current"><a href="index.php"><i class="fa-solid fa-house"></i> Αρχική</a></li>
             <li><a href="\EAM\site\plirofories.php">Πληροφορίες</a></li>
             <li><a href="#">Φοιτητές/Φοιτήτριες</a>
             <!-- DEN VGAINEI SWSTA TO DROPDOWN-->
               <!-- <ul>
                  <li><a href="#">Αναζήτηση Θέσεων Πρακτικής άσκησης</a></li>   
                  <li><a href="#">Γενικές Πληροφορίες</a></li>
               </ul> -->
             </li>
             <li><a href="#">Φορείς Υποδοχής</a></li>
             <li><a href="#">Γραφεία Πρακτικής Άσκησης</a></li>
             <!-- <li><a href="index-2.html">Επικοινωνία</a></li>
             <li><a href="index-3.html">Ανακοινώσεις</a></li> -->
           </ul>
          </nav>
          <!-- <div class="clear"></div>       
        </div>  
        <div class="clear"></div>         -->
    </div>
   </div>
  </div>    
 </div>        
</header>

<!--=====================Content======================-->

<div class="content">
  <div class="container">
    <div class="grid_12">
      <h3>Αίτηση για Πρακτική Άσκηση</h3>
    </div>
  </div>
  
  <?php
  
  $sql = "SELECT * FROM `application` WHERE 'application_id' = $id LIMIT 1";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);
  ?>

  <div class="container">
    <form action="" method="post" style="width:50vw; min-width 300px;">
    <div class="mb-3 row">
    <label for="staticName" class="col-sm-2 col-form-label">Όνοματεπώνυμο</label>
    <div class="col-sm-10">
      <input type="text" readonly class="form-control-plaintext" id="staticName" value="Αλεξάνδρα Κοπαλίδη">
    </div>
    </div>
  
    <div class="mb-3 row">
    <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="email@example.com">
    </div>
    </div>

    <div class="mb-3">
    <label for="myfile" class="form-label">Αναλυτική Βαθμολογία</label>
    <input class="form-control" type="file" name="myfile" value="<?php echo $row['file'] ?>">
    </div>

    <div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">Σύντομη Παράγραφος (Γιατί ενδιαφέρεστε για αυτή τη θέση;)</label>
    <textarea class="form-control" name="FormText" rows="3" value="<?php echo $row['paragraph'] ?>"></textarea>
    </div>

    <button type="submit" class="btn btn-success" name="submit">Αποθήκευση αλλαγών</button>
    <a href="std_app_control.php" class="btn btn-danger">Cancel</a>
    </form>
  </div>
    
</div>  
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
     </body> 
     </html>  