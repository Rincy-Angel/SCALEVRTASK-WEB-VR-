<?php
include 'dbh.inc.php';
    $uid = $_POST['uid'];
    $password = $_POST['pwd'];

    $link = mysqli_connect("localhost", "root", "", "commentsection");
    $result = mysqli_query($link,"select * from user1 where uid = '$uid' and pwd = '$password'") 
                or die("Failed to query database".mysqli_error($link));
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    if($uid==''||$password==''){
        $alertmsg= "Fill The Required Fields!!! ";
        echo "<script type='text/javascript'>alert('$alertmsg');</script>";
    }
    else if ($row['uid'] == $uid && $row['pwd'] == $password ){
        $redirect_page = 'http://localhost/form.html';
        header('Location: '.$redirect_page);
    } 
    

else {
        $alertmsg= "Login Failed.Invalid mail and password combination.Please Try Again!!! ";
        echo "<script type='text/javascript'>alert('$alertmsg');</script>";
        
    }


?>