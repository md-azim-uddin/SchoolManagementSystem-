<?php 
        include('admin_header.php');
        session_start();
        $id=$_SESSION['id'];
        $_SESSION['id']=$id;
    ?>
                <fieldset>
                    <legend><h2><b>Password Change</b></h2></legend>
                    <form action="../controller/admin_info_update.php" method="POST">
                        <table border="0">
                            
                            <tr>
                                <td>name</td>
                                <td>:
                                    <input type="text" name="name" value=""id=""> <button title="sample@example.com"><b> i</b></button>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2"><hr></td>
                            </tr>
                            <tr>
                                <td>Designation</td>
                                <td>:
                                    <input type="text" name="designation" value="">
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2"><hr></td>
                            </tr>
                            
                            <tr>
                                <td>Email</td>
                                <td>:
                                    <input type="email" name="email" value=""id=""> <button title="sample@example.com"><b> i</b></button>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2"><hr></td>
                            </tr>
                            
                            <tr>
                                <td>Phone</td>
                                <td>:
                                    <input type="tel" name="phone" value=""id=""> 
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2"><hr></td>
                            </tr>
                            <tr>
                                <td>Address</td>
                                <td>:
                                    <input type="text" value=""name="address" id=""> 
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2"><hr></td>
                            </tr>
                            <tr>
                                <td>Qualification</td>
                                <td>:
                                    <input type="text" name="qualification" value="" >
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2"><hr></td>
                            </tr>
                            <tr>
                           
                            <tr>
                                <td align="right" colspan="2">
                                    <input type="submit" name="submit" value="Update">
                                    <input type="reset" value="reset">
                                </td>
                            </tr>
                        </table>
                    </form>
                </fieldset>
    <?php 
        include('admin_footer.php');
    ?>