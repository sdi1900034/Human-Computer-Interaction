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

     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
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
          <h4>?????????????? ?????????????????? ?????????????????????? ?????? ?????????????????? ?????????????? ???????????????? ?????? </h4> 
        </div>
        <!-- <div class="espa">
          <a href="https://www.espa.gr/el/Pages/default.aspx"><img src="images/espa_header_1.jpg">
        </div>
        <div class="ee">
          <a href="https://commission.europa.eu/funding-tenders/find-funding/funding-management-mode/2014-2020-european-structural-and-investment-funds_el"><img src="images/ee_header_1.jpg">
        </div> -->
      <div class="grid_5">
        <div class="autor"><span> </span><i class="fa-solid fa-globe"></i><a href="#"><span1>  </span1>English</a><span>  </span><a href="#">??????????????????????</a><span>  </span><a href="#">??????????????</a><span1>  | </span1><a href="#">??????????????</a><span> </span> <a href="#"><i class="fa-solid fa-magnifying-glass"></i> ??????????????????</a></div><spam>
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
             <li class="current"><a href="index.php"><i class="fa-solid fa-house"></i> ????????????</a></li>
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
</header>

<!--=====================Content======================-->

<div class="content">
  <div class="container">
    <div class="grid_12">
      <h3>?????????????????????????? ???????????????? ??????????????</h3>
    </div>
    

    <table class="table table-hover text-center">
  <thead class="table-light">
    <tr>
      <th scope="col">??????????????</th>
      <th scope="col">???????????? ??????????</th>
      <th scope="col">??????????????????</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody class="table-group-divider">
     <?php
        include ("connection.php");
        $sql = "SELECT * FROM  `application`";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)){
          if ($_GET['id']==$row['student_id']){
            echo $_GET['id'];
            ?>
            <tr>
             <td><a scope="row" href="myapp.php?id=<?php echo $row['application_id'] ?>" class="link" ><?php echo $row['application_id'] ?></a></th>
             <td ><a href="#" class="link" ><?php echo $row['position_name'] ?></a></td>
             <td><?php echo $row['stage'] ?></td>
             <th>
               <a href="edit.php?id=<?php echo $row['application_id'] ?>" class="btn btn-primary"><i class="fa-solid fa-pen-to-square fs-5 "></i></a>
               <a href="delete.php?id=<?php echo $row['application_id'] ?>" class="btn btn-danger"><i class="fa-solid fa-trash fs-5 "></i></a>
             </th>
            </tr>
        
        <?php
          }
        }
     ?>
  </tbody>
</table>

  </div>
</div>  
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
     </body> 
     </html>  