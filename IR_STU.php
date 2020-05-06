<?php
     //include_once 'CR_STU.php';
$Servername = "localhost";
$Username = "root";
$Password = "";
$name = "Student";

$conn = mysqli_connect($Servername,$Username,$Password,$name);

$target_dir = "Uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["certi"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
if(isset($_POST["SubmitBtn"]))
{
$id = $_POST['id'];
$name = $_POST['name'];
$gender = $_POST['gender'];
$address = $_POST['address'];
$phone_num = $_POST['phone'];
$CGPA = $_POST['cgpa'];
$nob = $_POST['Bgs'];
$skills = $_POST['skills'];
$email = $_POST['email'];
$pwd = $_POST['psw'];
$rePWD = $_POST['psw-r'];
 $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }

     echo $id;
$sql = "INSERT INTO S_Info(id,name,gender,address,phone_num,
    CGPA,nob,skills,email,pwd,rePWD) VALUES ('$id','$name','$gender','$address',$phone_num,'$CGPA','$nob','$skills','$email','$pwd','$rePWD');";   
mysqli_query($conn,$sql);
header("Location: http://localhost/abc/R_STU.php");
die();
}

?>
