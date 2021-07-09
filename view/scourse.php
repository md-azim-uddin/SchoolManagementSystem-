<?php
	include('student_header.php');
	
?>

<td align="center" colspan="2">
	<table border="1" align="center" height="250px" width ="">
            <tr>
                <td align="left" width="375px">
                    <form method="Post" action="" enctype="multipart/form-data">
                        <fieldset>
                            <legend>Course Search</legend>
                            <table>
                                <tr>
                                    <td>Course name</td>
                                    <td>:
                                    <input type="text" name="name" id="name" placeholder="Type your course name" onkeyup="ajaxcourse()">
                                    </td>
                                </tr>
                            </table>
                        </fieldset>
                    </form>
                </td>  
            </tr>
            
        </table>
        <div border="1" width="100px" id='result' style="background-color:lightgrey; border-style:solid"></div>
        <script type="text/javascript" src="../js/ajax.js"></script>
 </td>
<?php 
 	include('student_footer.php');
 ?>
