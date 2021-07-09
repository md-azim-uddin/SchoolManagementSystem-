<?php 
        include('../view/admin_header.php');
        require_once('../model/teacher_model.php');
    ?>
                <table border="1" width="100%">
                    <tr>
                        <td>ID</td>
                        <td>NAME</td>
                        <td>EMAIL</td>
                        <td>BLOODGROUP</td>
                        <td>PHONE</td>
                        <td>GENDER</td>
                        <td>ADDRESS</td>
                        <td>QUALIFICATION</td>
                        <td>DATE OF BIRTH</td>
                        <td>DESIGNATION</td>
                        <td>PROFILE PIC</td>
                        
                    </tr>
                    <?php
                        $teachers=getAllteachers();
                        foreach($teachers as $teacher)
                        {
                            echo '<tr>
                            <td>'.$teacher['t_id'].'</td>
                            <td>'.$teacher['name'].'</td>
                            <td>'.$teacher['email'].'</td>
                            <td>'.$teacher['bloodGroup'].'</td>
                            <td>'.$teacher['phone'].'</td>
                            <td>'.$teacher['gender'].'</td>
                            <td>'.$teacher['address'].'</td>
                            <td>'.$teacher['qualification'].'</td>
                            <td>'.$teacher['dob'].'</td>
                            <td>'.$teacher['designation'].'</td>
                            <td>'.$teacher['profilePic'].'</td>
                            
                            </tr>';
                        }
                    ?>
                </table>
                <?php 
        include('../view/admin_footer.php');
    ?>