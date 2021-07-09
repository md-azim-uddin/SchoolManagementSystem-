<?php 
    if (isset($_POST['submit'])) {
        
        if ($_FILES["ufile"]["size"] > 6291456) {
            echo "file is too large.";
            echo" file size should not be more than 6MB";
          }
          else{
            if (move_uploaded_file($_FILES['ufile']['tmp_name'], '../assets/student_upload/'.$_FILES['ufile']['name'])) {
                echo"uploaded";
            }
            else{
                echo"error or null submission";
            }
          }
    }
?>