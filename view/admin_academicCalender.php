<?php 
        include('admin_header.php');
    ?>
        <table border="1" align="center">
            <tr>
                <td align="left" width="375px">
                    <form method="POST" action="" enctype="multipart/form-data" onsubmit="return ajax()">
                        <fieldset>
                            <legend>Academic Calender</legend>
                            <table>
                                <tr>
                                    <td>:
                                        <input type="file" name="AcademicCalender" id="AcademicCalender">
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
            

    <?php 
        include('admin_footer.php');
    ?>