<?php
 include('connection.php');
 if (isset($_POST['submit'])) {
	//student
	$student_id = $_POST['student_id'];
	$NAME = $_POST['NAME'];
	$SURNAME = $_POST['SURNAME'];
	$EMAIL = $_POST['EMAIL'];
	$phone = $_POST['phone'];
	$user_id = $_POST['user_id'];
	$department_id = $_POST['department_id'];
	//user
	$password = $_POST['password'];
	$usertype = $_POST['usertype'];
	$username = $_POST['username'];
	$UserID = $_POST['UserID'];

	$stmt = $conn->prepare("insert into student(student_id, NAME, SURNAME, EMAIL, phone, user_id, department_id) values(?, ?, ?, ?, ?, ?)");
	$stmt->bind_param("sssssi", $student_id, $NAME, $SURNAME, $EMAIL, $phone, $user_id,$department_id);
	$stmt1 = $conn->prepare("insert into user(UserID, username, password, usertype) values(?, ?, ?, ?)");
	$stmt1->bind_param("sssssi", $student_id, $username, $password, "student");
	$execval = $stmt->execute();
	echo $execval;
	echo "Registration successfully...";
	$stmt->close();

}
?>