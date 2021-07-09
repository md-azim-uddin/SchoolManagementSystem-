function fundsupdating() {

    let tf = document.getElementById("tf").value;
    if (tf == "") {
        document.getElementById('msg1').innerHTML = "*null input";
        return false;
    } else {
        if (tf.length < 4) {
            document.getElementById('msg1').innerHTML = "*fund money can not be less than 1000";
            return false;
        }
    }
    let sf = document.getElementById("sf").value;
    if (sf == "") {
        document.getElementById('msg2').innerHTML = "*null input";
        return false;
    } else {
        if (sf.length < 4) {
            document.getElementById('msg2').innerHTML = "*fund money can not be less than 1000";
            return false;
        }
    }
    let tfn = parseInt(tf);
    let sfn = parseInt(sf);
    let ttfn = tfn + sfn;
    console.log(tfn)
    console.log(sfn)
    console.log(ttfn)



    let ttf = document.getElementById("ttf").value;
    if (ttf == "") {
        document.getElementById('msg3').innerHTML = "*null input";
        return false;

    } else {
        if (ttf > ttfn) {
            document.getElementById('msg3').innerHTML = "*bigger input !! must be equal proper total";
            return false;
        } else if (ttf < ttfn) {
            document.getElementById('msg3').innerHTML = "*smaller input !! must be equal proper total";
            return false;
        }
    }

}