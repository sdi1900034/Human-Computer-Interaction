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
     <link rel="stylesheet" href="css_boostrap">
     
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
      
     </head>
     <body class="page1" id="top">
     <?php
       include ("connection.php");
       $sqls = "SELECT * FROM `position`";
        $result = mysqli_query($conn,$sqls);
        $sqld = "SELECT * FROM `department`";
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
          <h4>?????????????? ?????????????????? ?????????????????????? ?????? ?????????????????? ?????????????? ???????????????? ?????? </h4> 
        </div>
        <!-- <div class="espa">
          <a href="https://www.espa.gr/el/Pages/default.aspx"><img src="images/espa_header_1.jpg">
        </div>
        <div class="ee">
          <a href="https://commission.europa.eu/funding-tenders/find-funding/funding-management-mode/2014-2020-european-structural-and-investment-funds_el"><img src="images/ee_header_1.jpg">
        </div> -->
      <div class="grid_5">
        <div class="autor"><span> </span><i class="fa-solid fa-globe"></i><a href="#"><span1>  </span1>English</a><span>  </span><a href="#">??????????????????????</a><span>  </span><a href="#">??????????????</a><span1>  | </span1><a href="#">??????????????</a><span> </span> <a href="#"><i class="fa-solid fa-magnifying-glass"></i></a></div><spam>
      </div>
    </div>
  </div>
  <div id="stuck_container">
  <div class="container">
    <div class="row">
      <div class="grid_12">
        <!-- <div class="autor"><a href="#">??????????????</a><span>  |  </span><a href="#">??????????????</a></div> -->
        <div class="menu_block ">
          <nav class="horizontal-nav full-width horizontalNav-notprocessed">
            <ul class="sf-menu">
             <li><a href="index.php"><i class="fa-solid fa-house"></i> ????????????</a></li>
             <li><a href="\EAM\site\plirofories.php">??????????????????????</a></li>
             <li><a href="#">????????????????/????????????????????</a>
             <!-- DEN VGAINEI SWSTA TO DROPDOWN-->
               <!-- <ul>
                  <li><a href="#">?????????????????? ???????????? ?????????????????? ??????????????</a></li>   
                  <li><a href="#">?????????????? ??????????????????????</a></li>
               </ul> -->
             </li>
             <li><a href="#">???????????? ????????????????</a></li>
             <li><a href="#">?????????????? ?????????????????? ??????????????</a></li>
             <!-- <li><a href="index-2.html">??????????????????????</a></li>
             <li><a href="index-3.html">????????????????????????</a></li> -->
           </ul>
          </nav>
          <!-- <div class="clear"></div>       
        </div>  
        <div class="clear"></div>         -->
    </div>
   </div>
  </div>    
 </div> 
 <div class="container">
   <div class="row">
     <div class="grid_12">
      <ul class="breadcrumbs">
        <li class="breadcrumbs__item">
          <a href="" class="breadcrumbs__link  "> ???????????? </a>
        </li>
        <li class="breadcrumbs__item">
          <a href="" class="breadcrumbs__link breadcrumbs__link--active "> ?????????????????? ?????????? ?????????????????? </a>
        </li>
      </ul>
    </div>
  </div>
 </div>   
</header>
<!--=====================Content======================-->
<div class="content">
  <div class="container">
   <div class="row">
   <form name="form" action="results.php" onsubmit="return isvalid()" method="get">
    <div class="grid_7">
     <h3><i class="fa-solid fa-chalkboard"></i> ?????????????????? ???????????? ?????????????????? ??????????????</h3>
     <div class="grid_8">
      <div class="box1">
      <?php
      if ($result->num_rows > 0) {
     // output data of each row
        while($row = $result->fetch_assoc()) {
          $title[] = $row["pos_title"];
          $dur[]= $row["duration"];
          $fp[]= $row["FullOrPart"];
          $department[]=$row["department_id"];
        }
        while($row = $resultd->fetch_assoc()){
          $depart_name[]=$row["NAME"];
          $uni[]=$row["university_name"];
        }
      }      else {
        echo "0 results";
        }
      ?>
        <p class="p1">
       <p style="font-weight: bold;">???????????? ?????????? ????????????????</p>
         <div class="form-group">
                <label for="pos_title">????????????: </label>
                <input
                  type="text"
                  class="form-control"
                  id="pos_title"
                  name="pos_title"
                  <?php 
                    $titlep = "pos_title";
                  ?>
                />
                <?php
                  $titlep = "pos_title";
                  ?>
            </div>
        </p>
       <br><br>
       <p style="font-weight: bold;">
        ?????????? ????????????????:
       </p>
       <form>
        <select>
       <option selected="selected"> E?????????????? </option>
        <?php
        foreach($depart_name as $item){
          echo "<option value='strtolower($item)'> $item </option>";
          $depart=$item;
        }
        ?>
        </select>
      </form>
        <br>
       <div>
       <div class="form-group">
                <label for="duration"><p style="font-weight: bold;">
         ???????????????? ?????????????????? ??????????????: </p></label>
                <input
                  type="text"
                  class="form-control"
                  id="duration"
                  name="duration"
                />
            </div>
            <div class="form-group">
        <label for="FullOrPart"><p style="font-weight: bold;">
          ???????????? ?????????????????? ??????????????: </p></label>
                <input
                  type="text"
                  class="form-control"
                  id="FullOrPart"
                  name="FullOrPart"
                />
            </div>
       <!-- <select name = "duration">
        <option value = "3 ??????????" selected>3 ??????????</option>
        <option value = "6 ??????????">6 ??????????</option>
       </select> -->

       <!-- <p style="font-weight: bold;">
        <br>
         ???????????? ????????????????:<br>
       </p>
       <select name = "FullOrPart">
        <option value = "????????????" >????????????</option>
        <option value = "????????????">????????????</option>
       </select> -->
        <p class="p1">
        <p style="font-weight: bold;">?????????????????? ????????????????</p>
         <div class="form-group">
                <label for="location">????????: </label>
                <input
                  type="text"
                  class="form-control"
                  id="location"
                  name="location"
                />
            </div>
        <br>
        <p style="font-weight: bold;">?????????????????????? ?????????????????? ?????????????????? ??????????????:</p>
        <label for="start">???????????????????? ??????????????:</label>
         <input type="date" id="start" name="start">
         <br><br>
        <!-- <input type="search" id="btn" value="????????????" name = "search"/> -->
        <div class="search">
        <!-- <input type="text" class="searchTerm" placeholder="T?????????? ??????????"> -->
            <button type="submit" class="button" class="button" name="submit">
              ???????????? <i class="fa fa-search"></i>
           </button>
         </div>
         </div>
        </div>
      </div>
     </div>
    </div>
    </form>
    <script>
            function isvalid(){
                var location = document.form.location.value;
                var start = document.form.start.value;
                // if(location.length=="" && start.length==""){
                //     alert(" locatiom and date field is empty!!!");
                //     return false;
                // }
                // else if(location.length==""){
                //     alert(" location field is empty!!!");
                //     return false;
                // }
                // if(start.length==""){
                //     alert(" date field is empty!!!");
                //     return false;
                // }   
            }
        </script>
    <?php
     include('connection.php');
         $sql = "select * from position p, department d where p.pos_title = '$titlep'and d.NAME='$depart' and 
         p.department_id=d.department_id";  
         $result = mysqli_query($conn,$sql);

         if ($result->num_rows > 0) {
          // output data of each row
             while($row = $result->fetch_assoc()) {
               $title[] = $row["pos_title"];
               $dur[]= $row["duration"];
               $fp[]= $row["FullOrPart"];
               $department[]=$row["NAME"];
               // echo "<br> ???????????? ??????????: ". $row["pos_title"]. " ????????????????: ". $row["duration"]. "???????????? " . $row["FullOrPart"] . "<br>";
             }
           }  
          //  foreach($title as $item){
          //   if($title=="pos_title") {
          //     echo $item  ."\n";
          //   }
          // } 
      ?>
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