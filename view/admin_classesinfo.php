<?php 
        include('admin_header.php');
    ?>
        <table border="1" align="center">
            <tr>
                <td align="left" width="375px">
                    <form method="POST" action="" onsubmit="return ajax()">
                        <fieldset>
                            <legend>Classes Info</legend>
                            <table>
                                <tr>
                                    <td>Class</td>
                                    <td>:
                                        <select name="Class" id="Class">
                                            <option value=""></option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                        </select>
                                        <br><span id="msg1" style="color: blue;"></span>
                                    </td>
                                </tr>

                                <tr>
                                    <td colspan="2"><hr></td>
                                </tr>

                                <tr>
                                    <td>
                                        Class Start Time
                                    </td>

                                    <td>:
                                        <input type="time" name="classStartTime" id="classStartTime">
                                        <br><span id="msg2" style="color: blue;"></span>
                                    </td>

                                </tr>

                                <tr>
                                    <td colspan="2"><hr></td>
                                </tr>

                                <tr>
                                    <td>
                                        Class End Time
                                    </td>

                                    <td>:
                                        <input type="time" name="classEndTime" id="classEndTime">
                                        <br><span id="msg3" style="color: blue;"></span>
                                    </td>

                                </tr>

                                <tr>
                                    <td colspan="2"><hr></td>
                                </tr>

                                <tr>
                                    <td>
                                        Teacher_id:
                                    </td>

                                    <td>:
                                        <input type="text" name="Teacher_id" id="t_id">
                                        <br><span id="msg4" style="color: blue;"></span>
                                    </td>
                                </tr>

                                <tr>
                                    <td colspan="2"><hr></td>
                                </tr>
                                <tr>
                                    <td>
                                        Subject name
                                    </td>
                                    <td>:
                                        <input type="text" name="subjectName" id="subjectName">
                                        <br><span id="msg5" style="color: blue;"></span>
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
                            </table>
                        </fieldset>
                    </form>
            </tr>
        </table>
        <div border="1" width="100px" id='result' style="background-color:skyblue; border-style:solid"></div>
 <script src="../js/classesinfo.js"></script>
    <?php 
        include('admin_footer.php');
    ?>