<?php 
        include('admin_header.php');
        session_start();
    ?>
            <table border="1" align="center" height="250px" width ="" style="background-color:limegreen; border-style:solid;border-color:black">
            <tr>
                <td align="left" width="375px">
                    <form method="Post" action="../controller/funds&fees_validation.php" enctype="multipart/form-data" onsubmit="return fundsupdating()">
                        <fieldset>
                            <legend>Funds</legend>
                            <table>
                                <tr>
                                    <td>teacher fund</td>
                                    <td>:
                                    <input type="text" name="teacherfund" id="tf">
                                    <br><span id="msg1" style="color: blue;"></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2"><hr></td>
                                </tr>
                                <tr>
                                    <td>Student fund</td>
                                    <td>:<input type="text" name="studentfund" id="sf">
                                    <br><span id="msg2" style="color: blue;"></span>
                                </td>
                                </tr>
                                <tr>
                                    <td colspan="2"><hr></td>
                                </tr>
                                <tr>
                                    <td>Total</td>
                                    <td>:
                                    <input type="text" name="Total" id="ttf">
                                    <br><span id="msg3" style="color: blue;"></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2"><hr></td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="submit" name="submit" id="">
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
        <script src="../js/funds&fees.js"></script>    
    
<?php 
    include('admin_footer.php');
?>