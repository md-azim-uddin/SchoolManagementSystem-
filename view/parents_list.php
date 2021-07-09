<?php 
        include('admin_header.php');
        require_once('../model/parents_model.php');
    ?>
                <table border="1" width="100%">
                    <tr>
                        <td>ID</td>
                        <td>NAME</td>
                        <td>EMAIL</td>
                        <td>BLOODGROUP</td>
                        <td>PHONE</td>
                        <td>GENDER</td>
                        <td>DATE OF BIRTH</td>
                        <td>PROFILE PIC</td>
                    </tr>
                    <?php
                        $Parents=getAllparents();
                        $i=1;
                        $Type='P';
                        foreach($Parents as $Parent)
                        {
                            echo '<tr>
                            <td>'.$Parent['p_id'].'</td>
                            <td>'.$Parent['name'].'</td>
                            <td>'.$Parent['email'].'</td>
                            <td>'.$Parent['bloodGroup'].'</td>
                            <td>'.$Parent['phone'].'</td>
                            <td>'.$Parent['gender'].'</td>
                            <td>'.$Parent['dob'].'</td>
                            <td>'.$Parent['profilePic'].'</td>
                            </tr>';
                        }
                    ?>
                </table>

                <?php 
    include('admin_footer.php');
    session_start();
    ?>