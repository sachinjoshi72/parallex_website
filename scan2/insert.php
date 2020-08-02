<?php
echo "hi";
$Name = $_POST['name'];
$Email = $_POST['email'];
$Phone = $_POST['number'];
$Website  = $_POST['website'];
$Message = $_POST['message'];

if (!empty($Name) || !empty($Email) || !empty($phone) || !empty($Website ) || !empty($message)) 
 {
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "user";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     $query = "Create database feedback";
        if(mysqli_query($conn,$query))
       {
           echo "<br>passed";
       }
       else{
           echo "<br>failed";
       }
    $query = "use feedback";
         if(mysqli_query($conn,$query))
       {
           echo "<br>passed";
       }
       else{
           echo "<br>failed";
       }
    $query = "create table user (id int,name varchar(255),email varchar(255),phone bigint(10),website varchar(255),message varchar(255))";
        if(mysqli_query($conn,$query))
       {
           echo "<br>passed";
       }
       else{
           echo "<br>failed";
       }
     /*$SELECT = "SELECT email From user Where email =  Limit 1";
     $INSERT = "INSERT Into user (name, email, number, website, message) values(sachin, sachinjh72@gmail.com, 9702701637, facebook.com, helloworld)";
     //Prepare statement
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s", $email);
     $stmt->execute();
     $stmt->bind_result($email);
     $stmt->store_result();
     $rnum = $stmt->num_rows;
     if ($rnum==0) {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("ssiss", $Name, $Email, $phone, $Website , $message);
      $stmt->execute();
      echo "New record inserted sucessfully";*/
        $query = "insert into user (name, email, phone, website, message) values ('".$Name."','".$Email."',".$Phone.",'".$Website."','".$Message."')";
        echo $query;
       if(mysqli_query($conn,$query))
       {
           header("Location:trial.html");
       }
     /*} else {
      echo "Someone already register using this email";
     }
     $stmt->close();
     $conn->close();
    }*/
}
}/*else {
 echo "All field are required";
 die();
}*/
?>