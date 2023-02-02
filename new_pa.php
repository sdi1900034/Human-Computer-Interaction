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
     <link rel="stylesheet" href="css_boostrap">
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
        $sqld = "SELECT NAME FROM `department`";
        $resultd = mysqli_query($conn,$sqld);
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
        <div class="autor"><span> </span><i class="fa-solid fa-globe"></i><a href="#"><span1>  </span1>English</a><span>  </span><a href="#">Επικοινωνία</a><span>  </span><a href="#"><i class="fa-solid fa-user"></i> Προφίλ</a><span> </span><a href="index.php"><i class="fa-solid fa-arrow-right-from-bracket"></i></a></div><spam>
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
             <li><a href="index.php"><i class="fa-solid fa-house"></i> Αρχική</a></li>
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
   <div class="row">
    <div class="grid_7">
     <h3><i class="fa-solid fa-chalkboard"></i> Προσθήκη Νέας Αγγελίας για Πρακτική Άσκηση</h3>
     </div>
     <div class="grid_8">
     <?php
       if ($resultd->num_rows > 0) {
     // output data of each row
        while($row = $resultd->fetch_assoc()){
          $depart_name[]=$row["NAME"];
        }
       }  
      ?>
      <div class="box1">
      <form name="form" action="new_paf.php" onsubmit="return isvalid()" method="get">
     <p class="p1">
         <div class="form-group">
            <label for="pos_title"><p style="font-weight: bold;">Τίτλος Νέας θέσης: </p></label>
            <input
             type="text"
             class="form-control"
             id="pos_title"
             name="pos_title"
            />
          </div>
      </p>
       <p style="font-weight: bold;">
        Τμήματα Φοίτησης που απευθύνεται:
       </p>
        <fieldset>
          <div>
          <input type="checkbox" name="source">
          <?php
          foreach($depart_name as $item){
            //  
            echo " $item";
            }
            ?>
          </div>
        </fieldset>
          <p style="font-weight: bold;">
           <br>
         Διάρκεια:<br>
       </p>
       <select name = "duration">
        <option value = "duration1" name="duration" selected>3 μήνες</option>
        <option value = "duration2"name="duration">6 μήνες</option>
       </select>
       <p style="font-weight: bold;">
        <br>
         Ωράριο εργασίας:<br>
       </p>
       <select name = "fp">
        <option value = "fp1" selected>Πλήρες</option>
        <option value = "fp2">Μερικό</option>
       </select>
        <p class="p1">
        <p style="font-weight: bold;">Τοποθεσία Εργασίας</p>
         <div class="form-group">
                <label for="location">Πόλη: </label>
                <input
                  type="text"
                  class="form-control"
                  id="location"
                  name="location"
                />
            </div>
        <br>
        <p style="font-weight: bold;">Ημερομηνίες Διάρκειας Πρακτικής Άσκησης:</p>
        <label for="start">Ημερομηνία έναρξης:</label>
         <input type="date" id="start" name="start">
         <br><br>
        </p>
        <p class="p1">
         <div class="form-group">
            <label for="salary"> Μηνιαία αμοιβή: </label>
            <input
             type="text"
             class="form-control"
             id="salary"
             name="salary"
            />
          </div>
          <br>
          <p style="font-weight: bold;">Φορέας Υποδοχής:</p>
            <label for="start">Όνομα:</label>
            <input type="text" id="company_name" name="company_name">
            <br><br>
            <p style="font-weight: bold;">Υπεύθυνος Αίτησης :</p>
            <label for="start">Όνομα:</label>
            <input type="text" id="name" name="name">
            <br><br>
            <label for="start">Επώνυμο:</label>
            <input type="text" id="surname" name="surname">
            <br><br>
          </p>
          <button type="submit" class="btn" role="button" value="0" name = "submit"> Ανάρτηση</button>
         </form>
        <!-- <input type="submit" id="btn" value="Οριστική Υποβολή" name = "submit"/> -->
        <?php
        ?>
      </div>
    </div>
     </div>
    </div>
   </div>
  </div>
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