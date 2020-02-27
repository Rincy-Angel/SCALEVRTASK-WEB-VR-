<html>
<head><title></title>
    <style>
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



    </style> 
    
    
    </head>
    <body>
        <h1>SCALE VR TASK</h1>
    <hr>
       
        <h2> <a href='form.php' >View</a></h2>
       
            </body>
</html>
<?php
// Include the database configuration file
include 'dbConfig.php';
$statusMsg = '';

// File upload path
$targetDir = "uploads/";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){
    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg','gif','pdf');
    if(in_array($fileType, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
            // Insert image file name into database
            $insert = $db->query("INSERT into images (file_name, uploaded_on) VALUES ('".$fileName."', NOW())");
            if($insert){
                $statusMsg = "The file ".$fileName. " has been uploaded successfully.";
            }else{
                $statusMsg = "File upload failed, please try again.";
            } 
        }else{
            $statusMsg = "Sorry, there was an error uploading your file.";
        }
    }else{
        $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
    }
}else{
    $statusMsg = 'Please select a file to upload.';
}

// Display status message
echo $statusMsg;
?>
