<?php 
    include('teacher_header.php');
    include_once('../model/db_function.php');

    $class=$_GET['class'];
    $data=getStudentbyClass($class);

?>


<h2>Student Details</h2>

<fieldset style="width:600px">
    <legend></legend>
            <?php 
               echo "<table border='0'>
               <tr>
                   <td width='90px'><b>ID</b></td>
                   <td width='90px'><b>Name</b></td>
                   <td width='90px' ><b>Class</b></td>
                   <td width='90px'><b>Email</b></td>
                   <td width='90px'>phone</td>
                   <td>picture</td>
               </tr>";

               foreach($data as $var){
			
                echo "
                        <tr>
                            <td>{$var['ID']}</td>
                            <td>{$var['name']}</td>
                            <td>{$var['class']}</td>
                            <td>{$var['email']}</td>
                            <td>{$var['phone']}</td>
                            <td><img src='{$var['picture']}' width='40px' height='40px'></td>
                            </td> 
                    ";
            }
    
                echo "</table>";
    

            ?>   
            <br>
</fieldset>
<b></b>