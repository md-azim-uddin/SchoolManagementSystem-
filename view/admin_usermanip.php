<?php 
        include('admin_header.php');
    ?>

                <table border="1">
                    <tr>
                        <td align="left" width="375px">
                            <h2><u>Teacher</u></h2>
                            <a href="../view/admin_addteacher.php"><button>Add Teacher</button></a><br>
                            <a href="../view/teachers_list.php"><button>Teachers List</button></a><br>
                            <a href="../view/teacher_search.php"><button>Teacher Info Update</button></a><br>
                            <a href="../view/teacher_delete.php"><button>Delete teacher</button></a><br>
                            <a href="../view/search_teacher.php"><button>Search Teacher</button></a><br>
                            
                            
                        </td>
                        <td align="left"  width="375px">
                            <h2><u>Students</u></h2>
                            <a href="../view/admin_addStudents.php"><button>Add Students</button></a><br>
                            <a href="../view/Students_List.php"><button>Students List</button></a><br>
                            <a href="../view/student_search.php"><button>Students Info Update</button></a><br>
                            <a href="../view/students_delete.php"><button>Delete students</button></a><br>
                            <a href="../view/search_student.php"><button>Search Student</button></a><br>
                        </td>
                        <td align="left" width="375px">
                            <h2><u>Parents</u></h2>
                            <a href="../view/admin_addparents.php"><button>Add Parents</button></a><br>
                            <a href="../view/Parents_List.php"><button>Parents List</button></a><br>
                            <a href="../view/parents_search.php"><button>Parents Info Update</button></a><br>
                            <a href="../view/parents_delete.php"><button>Delete Parents</button></a><br>
                            <a href="../view/search_parents.php"><button>Search Parents</button></a><br>
                        </td>
                    </tr>
                </table>
<?php 
        include('admin_footer.php');
    ?>