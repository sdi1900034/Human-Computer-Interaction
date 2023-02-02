
     <?php
       include ("connection.php");
       $titl=$_GET['pos_title'];
    //    $dep=$_GET['source'];
    //    $dur=$_GET['duration'];
    //    if($_GET["fp"]=="Πλήρες"){
    //     $fp= 1;
    //     }else{
    //     $fp=0;
    //     }
    
        $loc =$_GET['location'];
        $date = $_GET['start'];
        $salary = $_GET['salary'];
        // $company_id = $_GET['company_id'];
        $company_name = $_GET['company_name'];
        $name = $_GET['name'];
        $surname = $_GET['surname'];
        $sql = "INSERT INTO `position`(`position_id`, `pos_title`, `duration`, `FullOrPart`, `location`, `startdate`, `department_id`, `salary`, `approved`, `application_id`, `company_id`, `student_id`, `posted`) VALUES 
        (901,'$titl','3 μήνες','Μερική','$loc','$date','Τμήμα Πληροφορικής και Τηλεπικοινωνιών','$salary',0,' ',1,' ',0)";
        $res = mysqli_query($conn, $sql);

        if($res){
            echo"something happened";
            header("Location: profil_company.php?msg = New record created succesfully");
        }
        else{
            echo "Failed: " . mysqli_error($conn);
        }
        $sqld = "SELECT NAME FROM `department`";
        $resultd = mysqli_query($conn,$sqld);
    ?>