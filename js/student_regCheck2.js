function validateForm(){

	var name = document.getElementById("name").value;
	if(name==""){
        document.getElementById('msg1').innerHTML="**name cannot be empty";
        return false;
    }
    else{
        if(name.split(" ").length<2){
            document.getElementById('msg1').innerHTML="**name must contain at least 2 words";
            return false;  
         }
         else{
            if(name.charAt(0)=="0" || name.charAt(0)=="1" || name.charAt(0)=="2" || name.charAt(0)=="3" || name.charAt(0)=="4" || name.charAt(0)=="5" || name.charAt(0)=="6" || 
            name.charAt(0)=="7" || name.charAt(0)=="8" || name.charAt(0)=="9" || name.charAt(0)=="!" ||
            name.charAt(0)=="@" || name.charAt(0)=="$" || name.charAt(0)=="%" || name.charAt(0)=="&" || name.charAt(0)=="*")
            {
                document.getElementById('msg1').innerHTML="**must start with a letter";
                return false;
            }
        }
    }

    var id=document.getElementById('id').value;
    if(id==""){
        document.getElementById('msg2').innerHTML="**id cannot be empty";
        return false;
    }

    var email=document.getElementById('email').value;
    if(email==""){
        document.getElementById('msg3').innerHTML="**must provide email";
        return false;
    }

    var bloodGroup=document.getElementById('bloodGroup').value;
    if(bloodGroup==""){
        document.getElementById('msg4').innerHTML="**bloodgroup cannot be empty";
        return false;
    }

    var phone=document.getElementById('phone').value;
    if(phone==""){
        document.getElementById('msg5').innerHTML="**phone cannot be empty";
        return false;
    }
    else{
        if(phone.length!=11){
            document.getElementById('msg5').innerHTML="**phone no. must contain 11 digit";
            return false;
        }
    }

    var address=document.getElementById('address').value;
    if(address==""){
        document.getElementById('msg6').innerHTML="**address cannot be empty";
        return false;
    }

    var password=document.getElementById('pass').value;
    if(password==""){
        document.getElementById('msg7').innerHTML="**password cannot be empty";
        return false;
    }

    var cPass=document.getElementById('cPass').value;
    if(cPass==""){
        document.getElementById('msg8').innerHTML="**confirm_pass cannot be empty";
        return false;
    }
    else{
        if(password!=cPass){
            document.getElementById('msg8').innerHTML="**'Confirm Password' and 'Password' do not match";
            return false;
        }
    }

    var gender=document.getElementById('gender');
    if(gender.checked==false){
        document.getElementById('msg9').innerHTML="**must select your gender";
        return false;
    }

    var dob=document.getElementById('dob').value;
    if(dob==""){
        document.getElementById('msg10').innerHTML="**Please provide your Date of Birth";
        return false;
    }

    var profilePic=document.getElementById('profilePic').value;
    if(profilePic==""){
        document.getElementById('msg11').innerHTML="**Please upload a Profile Picture";
        return false;
    }


}