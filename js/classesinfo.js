function ajax() {
    "use strict";
    const Class = document.getElementById('Class').value;
    const classStartTime = document.getElementById('classStartTime').value;
    const classEndTime = document.getElementById('classEndTime').value;
    const t_id = document.getElementById('t_id').value;
    const subjectName = document.getElementById('subjectName').value;

    const xhttp = new XMLHttpRequest();

    xhttp.open('POST', '../controller/Classesinfocheck.php', true);

    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById('result').innerHTML = this.responseText;
        }
    }

    xhttp.send('Class=' + Class + '&classStartTime=' + classStartTime + '&classEndTime=' + classEndTime + '&t_id=' + t_id + '&subjectName=' + subjectName);

    return false;
}