<!DOCTYPE html>
<html lang="el">
     <head>
     <title>ATLAS

     </title>
     <meta charset="utf-8">
     <meta name = "format-detection" content = "telephone=no" />
     <link rel="icon" href="images/atlas_logo.png">
     <link rel="shortcut icon" href="images/atlas_logo_2.png" />
     <link rel="stylesheet" href="css/stuck.css">
     <link rel="stylesheet" href="css/touchTouch.css">
     <link rel="stylesheet" href="css/camera.css">
     <link rel="stylesheet" href="css/style.css">
     <link rel="stylesheet" href="css_i/all.css">
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
     <!--[if (gt IE 9)|!(IE)]><!-->
     <script src="js/jquery.mobile.customized.min.js"></script>
     <script src="https://kit.fontawesome.com/63e49b2b95.js" crossorigin="anonymous"></script>
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
        
   
    <!--[if lt IE 8]>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
           <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
         </a>
      </div>
    <![endif]-->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <link rel="stylesheet" media="screen" href="css/ie.css">


    <![endif]-->
     </head>
     <body class="page1" id="top">
     <?php
       include ("connection.php");
       $username=$_GET['user'];
       $sql = "SELECT * FROM `company` where NAME='$username'";
       $result = mysqli_query($conn,$sql);
      ?>
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
       <div class="grid_4">
         <div class="grid_5">
          <h4>Σύστημα Κεντρικής Υποστήριξης της Πρακτικής Άσκησης Φοιτητών ΑΕΙ </h4> 
         </div> 
        </div>
        <!-- <div class="espa">
          <a href="https://www.espa.gr/el/Pages/default.aspx"><img src="images/espa_header_1.jpg">
        </div>
        <div class="ee">
          <a href="https://commission.europa.eu/funding-tenders/find-funding/funding-management-mode/2014-2020-european-structural-and-investment-funds_el"><img src="images/ee_header_1.jpg">
        </div> -->
      <div class="grid_5">
        <div class="autor"><span> </span><i class="fa-solid fa-globe"></i><a href="#"><span1>  </span1>English</a><span>  </span><a href="#">Επικοινωνία</a><span>  </span><a href="#"><i class="fa-solid fa-user"></i> Προφίλ</a><span> </span> <a href="index.php"><i class="fa-solid fa-arrow-right-from-bracket"></i></a><span> </span><i class="fa-solid fa-magnifying-glass"></i></div><spam>
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
  <!-- <div class="gray"> -->
  <div class="container">
    <!-- <div class="row"> -->
    <div class="abstract">
   <div class="row">
     <div class="grid_5">
     <?php
       if ($result->num_rows > 0) {
       // output data of each row
        while($row = $result->fetch_assoc()) {
          $name[] = $row["NAME"];
          $sur[]= $row["SURNAME"];
          $company[]= $row["company_name"];
          $phone[]=$row["Phone"];
          $email[]=$row["email"];
        }
      }      else {
        echo "0 results";
        }
      ?>
      <h3> Τα στοιχεία μου </h3>
      <div class="box1">
      <?php
      $items = count($name);
        for($num = 0; $num < $items; $num += 1){
      ?>
      <p class="p1">
        Όνομα: <?php echo $name[$num]. "\n"; ?> <br> <br> 
        Επώνυμο: <?php echo $sur[$num]. "\n"; ?> <br> <br>
        <!-- Όνομα Φορέα:  -->
        <!-- <br> <br> -->
        Τηλέφωνο:<?php echo $phone[$num]. "\n"; ?> <br> <br>
        Email: <?php echo $email[$num]. "\n"; ?> <br>
        <a href="upadating_company.php?user=$username" class="btn">Επεξεργασία</a>
     </p>
     <?php
           }
          ?>
    </div>
    <div class="grid_6">
      <h3> Αγγελίες </h3>
      <!-- <div class="box1"> -->
      <a href="new_pa.php" class="btn"><i class="fa-solid fa-plus"></i> Προσθήκη Νέας Αγγελίας για Πρακτική Άσκηση</a>
      <a href="posted_pa.php" class="btn"><i class="fa-solid fa-eye"></i> Προεπισκόπιση Δημοσιευμένων Αγγελίων</a>
      <a href="unposted_pa.php" class="btn"><i class="fa-solid fa-pen-to-square"></i> Επεξεργασία Αποθηκευμένων Αγγελιών</a> <br>
      
      <div class="grid_6">
      <h3> Αιτήσεις Φοιτητών </h3>
      <a href="com_app_control.php?id=<?php echo $_GET['user'] ?>" class="btn"> <i class="fa-solid fa-eye"></i> Παρακολούθηση Αιτήσεων </a>
     </div>
   </div>
  </div>
    </div>
 <!-- </div> -->
    <!-- </div> -->
</div>
<!--==============================footer=================================-->
<footer> 
  <div class="container">
    <div class="row">
      <div class="grid_12">  
          <!-- <div class="copy"><strong>copyright</strong> &copy;  -->
          <!-- <span id="copyright-year"></span> <a href="index-6.html">Privacy Policy</a> {%FOOTER_LINK} -->
          </div>
      </div>
    </div>
  </div>  
</footer>
</body>
</html>