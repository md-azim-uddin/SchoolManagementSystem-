<?php 
        include('admin_header.php');
    ?>
    
    
                <table border="0" width="100%">
                    <tr>
                        <td width="300px"></td>
                        <td>
                            <form method="POST" action="../controller/admin_regcheck.php"  enctype="multipart/form-data" onsubmit="return validating()">
                                <fieldset style="background-color:lemonchiffon;">
                                    <legend><b>Admin Registration</b></legend>
                                    <table border="0">
                                    <tr>
                                <td>Name</td>
                                <td>:
                                    <input type="text" name="name" id="Aname"><br><span id="msg1" style="color: red;"></span>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2"><hr></td>
                            </tr>
                            <tr>
                                <td>Designation</td>
                                <td>:
                                    <input type="text" name="designation" id="designation"><br><span id="msg2" style="color: red;"></span>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2"><hr></td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>:
                                    <input type="email" name="email" id="email" > <button title="sample@example.com"><b> i</b></button><span id="msg3" style="color: red;"></span>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2"><hr></td>
                            </tr>
                            <tr>
                                <td>Blood Group</td>
                                <td>:
                                    <select name="bloodGroup" id="bd" ><br>
                                        <option value=""></option>
                                        <option value="A+">A+</option>
                                        <option value="B+">B+</option>
                                        <option value="AB+">AB+</option>
                                        <option value="O+">O+</option>
                                        <option value="A-">A-</option>
                                        <option value="AB-">AB-</option>
                                    </select>
                                    <span id="msg4" style="color: red;"></span>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2"><hr></td>
                            </tr>
                            <tr>
                                <td>Phone</td>
                                <td>:
                                    <input type="tel" name="phone" id="phone"><br><span id="msg5" style="color: red;"></span> 
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2"><hr></td>
                            </tr>
                            <tr>
                                <td>Address</td>
                                <td>:
                                    <input type="text" name="address" id="address"><br><span id="msg6" style="color: red;"></span>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2"><hr></td>
                            </tr>
                            <tr>
                                <td>Password</td>
                                <td>:
                                    <input type="password" name="pass" id="pass"><br><span id="msg7" style="color: red;"></span>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2"><hr></td>
                            </tr>
                            <tr>
                                <td>Confirm Password</td>
                                <td>:
                                    <input type="password" name="cPass" id="cPass"><br><span id="msg8" style="color: red;"></span>
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
                                    <br><span id="msg9" style="color: red;"></span>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2"><hr></td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <fieldset>
                                        <legend>Date Of Birth</legend>
                                        <input type="date" name="dob" id="dob">
                                    </fieldset>
                                    <br><span id="msg10" style="color: red;"></span>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2"><hr></td>
                            </tr>
                            
                            <tr>
                                <td colspan="2">
                                    <fieldset>
                                        <legend>Picture Upload</legend>
                                     <input type="file" name="profilePic" id="profilePic">
                                    </fieldset>
                                    <br><span id="msg11" style="color: red;"></span>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2"><hr></td>
                            </tr>
                            <tr>
                                <td>Qualification</td>
                                <td>
                                    <textarea name="qualification" id="qualification" ></textarea>
                                    <br><span id="msg12" style="color: red;"></span>
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
            <script src="../js/admin_regcheck.js"></script>
            <?php 
        include('admin_footer.php');
    ?>