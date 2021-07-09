function eventvalidate() {
    let ed = document.getElementById('ed').value;
    if (ed == "") {
        document.getElementById('msg1').innerHTML = "*event date can not be empty";
        return false;
    }
    let et = document.getElementById('et').value;
    if (et == "") {
        document.getElementById('msg2').innerHTML = "*event time can not be empty";
        return false;
    }
    let eds = document.getElementById('eds').value;
    if (eds == "") {
        document.getElementById('msg3').innerHTML = "*event description can not be empty";
        return false;
    } else {
        if (eds.split(" ").length > 10) {
            document.getElementById('msg3').innerHTML = "*exam description length exceeded 10 words";
            return false;
        }
    }

}