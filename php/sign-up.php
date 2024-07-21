<?php
include 'connection.php';
if($conn){
    $f_name=$_POST['first_name'];
    $m_name=$_POST['middle_name'];
    $l_name=$_POST['last_name'];
    $email=$_POST['email'];
    $username=$_POST['user_name'];
    $pass=$_POST['pwd'];
    $sql= "INSERT INTO user_info VALUES('$f_name','$m_name','$l_name','$email','$username' ,'$pass')";
    $res=mysqli_query($conn, $sql);
    $sql2="insert into basic_info values ('$username','','','','')";
    $res2=mysqli_query($conn,$sql2);
    if($res){
        echo "<script>window.location.href='../HTML/dashboard.html'</script>"; 
    }
}