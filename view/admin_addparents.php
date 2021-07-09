<?php 
        include('admin_header.php');
    ?>
    <script src="../js/parents_regcheck.js"></script>
                <table border="0" width="100%">
                    <tr>
                        <td width="300px"></td>
                        <td>
                            <form method="POST" action="../controller/Parents_regCheck.php" enctype="multipart/form-data" onsubmit="return validateParents()">
                                <fieldset style="background-color:lemonchiffon;">
                                    <legend><b>Add Parents</b></legend>
                                    <table border="0">
                                    
                                        <tr>
                                            <td>Name</td>
                                            <td>:
                                                <input type="text" name="name" id="name"><br><span id="msg1" style="color: red;"></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2"><hr></td>
                                        </tr>
                                        
                                        <tr>
                                            <td>Email</td>
                                            <td>:
                                                <input type="email" name="email" id="email"> <button title="sample@example.com"><b> i</b></button><br><span id="msg2" style="color: red;"></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2"><hr></td>
                                        </tr>
                                        <tr>
                                            <td>BloodGroup</td>
                                            <td>:
                                                <select name="bloodGroup" id="bloodGroup">
                                                    <option value=""></option>
                                                    <option value="A+">A+</option>
                                                    <option value="A-">A-</option>
                                                    <option value="B+">B+</option>
                                                    <option value="B-">B-</option>
                                                    <option value="AB+">AB+</option>
                                                    <option value="AB-">AB-</option>
                                                    <option value="O+">O+</option>
                                                    <option value="O-">O-</option>                                           
                                                </select>
                                                <br><span id="msg3" style="color: red;"></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2"><hr></td>
                                        </tr>
                                        <tr>
                                            <td>Phone</td>
                                            <td>:
                                                <input type="tel" name="phone" id="phone"> <br><span id="msg4" style="color: red;"></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2"><hr></td>
                                        </tr>
                                        <tr>
                                            <td>Password</td>
                                            <td>:
                                                <input type="password" name="pass" id="pass"><br><span id="msg5" style="color: red;"></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2"><hr></td>
                                        </tr>
                                        <tr>
                                            <td>Confirm Password</td>
                                            <td>:
                                                <input type="password" name="cPass" id="cPass"><br><span id="msg6" style="color: red;"></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2"><hr></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <fieldset>
                                                    <legend>Gender</legend>
                                                    <input type="radio" name="gender" value="Male" id="gender">Male
                                                    <input type="radio" name="gender" value="Female" id="gender">Female
                                                    <input type="radio" name="gender" value="Other" id="gender">Other
                                                </fieldset>
                                                <br><span id="msg7"style="color: red;"></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2"><hr></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <fieldset>
                                                    <legend>Date Of Birth</legend>
                                                    <input type="date" name="dob" id="dob"><br><span id="msg8" style="color: red;"></span>
                                                </fieldset>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2"><hr></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <fieldset>
                                                    <legend>profilePic</legend>
                                                 <input type="file" name="profilePic" id="profilePic"><br><span id="msg9" style="color: red;"></span>
                                                </fieldset>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2"><hr></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <input type="submit" name="submit" value="Submit">
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
            <script src="../js/parents_regcheck.js"></script>
            
    <?php 
        include('admin_footer.php');
    ?>