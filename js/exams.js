function examvalidate() {
    let ed = document.getElementById('ed').value;
    if (ed == "") {
        document.getElementById('msg1').innerHTML = "*exam date can not be empty";
        return false;
    }
    let et = document.getElementById('et').value;
    if (et == "") {
        document.getElementById('msg2').innerHTML = "*exam time can not be empty";
        return false;
    }
    let eds = document.getElementById('eds').value;
    if (eds == "") {
        document.getElementById('msg3').innerHTML = "*exam description can not be empty";
        return false;
    } else {
        if (eds.split(" ").length > 5) {
            document.getElementById('msg3').innerHTML = "*exam description length exceeded 5 words";
            return false;
        }
    }

}