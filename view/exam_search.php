<?php 
        include('admin_header.php');
        session_start();
    ?>
            <table border="1" align="center" height="250px" width ="">
            <tr>
                <td align="left" width="375px">
                    <form method="Post" action="../controller/teacher_searching.php" enctype="multipart/form-data">
                        <fieldset>
                            <legend>Exam Search</legend>
                            <table>
                                <tr>
                                    <td>exam Description</td>
                                    <td>:
                                    <input type="text" name="ExamDescription" id="ExamDescription"  onkeyup="ajax()">
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2"><hr></td>
                                </tr>
                    
                                    <td>
                                        <input type="submit" name="submit"  value="Search"id="" onclick="">
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
        <div border="1" width="100px" id='result' style="background-color:lightgrey; border-style:solid"></div>
        <script type="text/javascript" src="../js/examsearch.js"></script>
        
    
<?php 
    include('admin_footer.php');
?>