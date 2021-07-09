function validateForm(){

	var id=document.getElementById('id').value;
  if(id==""){
    document.getElementById('msg1').innerHTML="**id cannot be empty";
    return false;
  }

  var password=document.getElementById('pass').value;
  if(password==""){
    document.getElementById('msg2').innerHTML="**password cannot be empty";
    return false;
  }

}