<?php
	require_once('../model/parents_model.php');
    session_start();
    include('admin_header.php');
    $id=$_SESSION['p_id'];
    $_SESSION['p_id']=$id;
?>
                <table border="0" width="100%">
                    <tr>
                        <td width="300px"></td>
                        <td>
                            <form method="POST" action="../controller/parents_info_Update.php" enctype="multipart/form-data">
                                <fieldset style="background-color:lemonchiffon;">
                                    <legend><b>Update parents</b></legend>
                                    <table border="0">
                            
                            <tr>
                                <td>Email</td>
                                <td>:
                                    <input type="email" name="email" value="<?php echo $_SESSION['email']?>" "id=""> <button title="sample@example.com"><b> i</b></button>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2"><hr></td>
                            </tr>
                            
                            <tr>
                                <td>Phone</td>
                                <td>:
                                    <input type="tel" name="phone" value="<?php echo $_SESSION['phone']?>"id=""> 
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2"><hr></td>
                            </tr>
                           
                            <tr>
                                <td>Password</td>
                                <td>:
                                    <input type="password" value="<?php echo $_SESSION['pass']?>" name="pass" >
                                </td>
                            </tr>
                                <td colspan="2"><hr></td>
                            </tr>
                            <td colspan="2">
                                    <input type="submit" name="submit" value="Update">
                                    <input type="reset" value="reset">
                                </td>
                                        </tr>
                                    </table>
                                </fieldset>
                            </form>
                            <td width="300px"></td>
                        </td>
                        <td width="100px"></td>
                    </tr>
            </table>
            <?php 
        include('admin_footer.php');
    ?>