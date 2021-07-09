<?php 
        include('admin_header.php');
        session_start();
    ?>
    
            <table border="1" align="center" height="450px" width ="" style="border-style: solid;background-color:aquamarine">
            <h3 ><a href="exam_search.php" style="position: fixed; left: 600px;bottom: 500px; color:violet">Exam list</a></h3>
            <tr>
                <td align="left" width="375px">
                    <form method="Post" action="../controller/exam_validation.php" enctype="multipart/form-data" onsubmit="return examvalidate()">
                        <fieldset>
                            <legend>Exams</legend>
                            <table>
                                <tr>
                                    <td>Exam Date</td>
                                    <td>:
                                        <input type="date" name="ExamDate" id="ed">
                                        <br><span id="msg1" style="color: blue;"></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2"><hr></td>
                                </tr>
                                <tr>
                                    <td>Exam Time</td>
                                    <td>:
                                        <input type="time" name="ExamTime" id="et">
                                        <br><span id="msg2" style="color: blue;"></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2"><hr></td>
                                </tr>
                                <tr>
                                    <td>Exam notice</td>
                                    <td>:
                                        <textarea rows="5" cols="50" name="ExamDescription" id="eds"></textarea>
                                        <br><span id="msg3" style="color: blue;"></span>
                                    </td>
                                
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
        <script src="../js/exams.js"></script>
        
    
<?php 
    include('admin_footer.php');
?>