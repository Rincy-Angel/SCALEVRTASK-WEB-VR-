<?php
  date_default_timezone_set('Europe/Copenhagen');
include 'dbh.inc.php';  

  session_start();
 ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF_8">
  <title>COmment</title>
  <link rel="stylesheet" type="text/css" href="style.css">
    <style>
    input[type=text]{
  
  padding: 12px;
  border: 1px solid #ffcc89;
  border-radius: 4px;
  float:center;
        align-content: center;
  
}
        input[type=password]{
  
  padding: 12px;
  border: 1px solid #ffcc89;
  border-radius: 4px;
  float:center;
        align-content: center;
  
}
    body{
          background:url(uploads/bg.jpg);
        
         
  text-align: center;
      }
      h1{
         text-align: center;
      }
    </style>
     <style>
    #button {
  background-color:#ffcc89; 
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}
        </style>
</head>
<body>
  <h1>SCALE VR TASK</h1>
<?php
echo "<form method='POST' action='form.html'>
  USERID:    
  <input type='text' name='uid' id='uid' ><br><br>
  PASSWORD:
  <input type='password' name='pwd' id='pwd'><br><br>
    <button type='submit' name='loginSubmit' id='button'>LOGIN</button>
  </form><br>";
  echo "<form method='POST' action='logout.html'>
  <button type='submit' name='logoutSubmit' id='button'>LOGOUT</button>
  </form>";
    if(isset($_SESSION['id'])){
      echo "You Are Logged in";
    }
    else{
      echo "You Are NOT Logged in";
    }
  ?>
  

</body>
</html>
