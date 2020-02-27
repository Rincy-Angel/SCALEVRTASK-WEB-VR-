<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8" />
<title>UPLOAD</title>
<style type="text/css">
    .gallery img{
        width: 20%;
        height: auto;
        border-radius: 5px;
        cursor: pointer;
        transition:.3s;
    }
    .gallery img {
  border: 1px solid #ddd; /* Gray border */
  border-radius: 4px;  /* Rounded border */
  padding: 5px; /* Some padding */
  width: 75px;
height:75px;/* Set a small width */
}
   input[type=file]{
  
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
/* Style the label to display next to the inputs */


/* Style the submit button */
input[type=submit] {
  background-color:lightblue;
  color: black;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  align-content:center;
    text-decoration-color: black;
    
}



/* Add a hover effect (blue shadow) */
.gallery img:hover {
  box-shadow: 0 0 2px 1px rgba(0, 140, 186, 0.5);
}
    
    </style>
</head>
<body>
<div class="container">
    <div class="upfrm">
<form action="upload.php" method="post" enctype="multipart/form-data">
    <h1>SCALE VR TASK</h1>
    <hr>
    <h2> Select an image to upload</h2><br>
    <input type="file" name="file" style="background-color: lightsalmon; text-decoration-color: aliceblue;"><br><br>
    <input type="submit" name="submit" value="Upload" >
</form>
    </div>
    <div class="gallery">
    <h2>UPLOADED IMAGES</h2>
        <?php
        include 'dbConfig.php';
        $query = $db->query("SELECT * FROM images ORDER BY uploaded_on DESC");
        
        if($query->num_rows > 0){
            while($row = $query->fetch_assoc()){
               $imageURL = 'uploads/'.$row['file_name'];
                include 'sm1.html';
                
        ?>
        
        <a href="aframe1.html">
         <img  src="<?php echo $imageURL; ?>" />
        
        </a> 
           
        <?php
                
            }
        }else{
            ?>
        <p> No image found</p>
        <?php } ?>
    
    </div>
    </div>
    <script type="text/javascript">
    function changeImage(event){
        event=event || window.event;
        
        var targetElement=event.target || event.srcElement;
        
            document.getElementById("gallery").src = targetElement.getAttribute("src");
        
    }
    </script>
</body>
</html>
