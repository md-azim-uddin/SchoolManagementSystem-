function logcheck() {
    let id = document.getElementById("id").value;
    if (id == "") {
        document.getElementById('msg1').innerHTML = "**id can not be empty";
        return false;
    }
    let pass = document.getElementById("pass").value;
    if (pass == "") {
        document.getElementById('msg2').innerHTML = "**pass can not be empty";
        return false;
    }
}