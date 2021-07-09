<?php 
        include('../view/admin_header.php');
    ?>
<form method="POST" action="../controller/admin_PicChange.php" enctype="multipart/form-data">

    <fieldset>
        <legend><b><h3>Profile Picture Updating</h3></b></legend>
        <table>
            <tr>
                <td>ID No</td>
                <td>: <input type="text" name="id"></td>
            </tr>
            <tr>
                <td>New Profile Picture:</td>
                <td>: <input type="file" name="profilePic"></td>
            </tr>
            <tr>
                <td colspan="2">
                    <hr>
                </td>
            </tr>

            <tr>
                <td colspan="2">

                </td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" name="submit" value="Change Picture" style="border-color: rgb(228, 9, 9); padding: 5px 110px; ">
                </td>
            </tr>

            <tr>
                <td colspan="2" align="right">

                </td>
            </tr>
        </table>
    </fieldset>
</form>
<?php 
        include('admin_footer.php');
    ?>