<?php 
        include('admin_header.php');
        session_start();
    ?>
            <table border="1" align="center" height="250px" width ="">
            <tr>
                <td align="left" width="375px">
                    <form method="Post" action="../controller/teacher_searching.php" enctype="multipart/form-data">
                        <fieldset>
                            <legend>Teacher Id Search</legend>
                            <table>
                                <tr>
                                    <td>teacher id</td>
                                    <td>:
                                    <input type="text" name="t_id">
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2"><hr></td>
                                </tr>
                    
                                    <td>
                                        <input type="submit" name="submit"  value="Search"id="">
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2"><hr></td>
                                </tr>
                                
                                
                            </table>
                        </fieldset>
                    </form>
                    
            </tr>
        </table>
        
    
<?php 
    include('admin_footer.php');
?>