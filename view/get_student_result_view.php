<?php 
    include('teacher_header.php');
    include_once('../model/db_function.php');

    $class=$_GET['class'];
    $data=getStudentResultbyClass($class);
?>


<h2>Result Details</h2>
<a href=""></a>
<fieldset style="width:600px">
    <legend></legend>
        <form action="../controller/teacher_upload_check.php" method="POST" enctype="multipart/form-data">
            <?php 
               echo "<table border='0'>
               <tr>
                   <td width='90px'><b>ID</b></td>
                   <td width='90px'><b>Name</b></td>
                   <td width='90px' ><b>Class</b></td>
                   <td width='90px'><b>Result</b></td>
                   <td>picture</td>
               </tr>";

               foreach($data as $var){
			
                echo "
                        <tr>
                            <td>{$var['ID']}</td>
                            <td>{$var['name']}</td>
                            <td>{$var['class']}</td>
                            <td>{$var['result']}</td>
                            <td><img src='{$var['picture']}' width='40px' height='40px'></td>
                            </td> 
                    ";
            }
    
                echo "</table>";
    

            ?>   
            <br>

        </form>
</fieldset>
<b></b>