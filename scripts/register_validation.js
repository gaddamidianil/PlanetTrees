// Javascript for Login page

// validating registration form fields
// Author: Anil Goud

var re = /^([a-zA-Z]+\s)*[a-zA-Z]+$/;

function register_validate()
{

user_name = document.getElementById("username").value;
password = document.getElementById("password").value;
confpassword = document.getElementById("confpassword").value;

document.getElementById("register_valid").innerHTML="";


if(!re.test(user_name)){
	  document.getElementById("register_valid").innerHTML = "<span style='color:red'>Invalid Name. Only letters are allowed</span>";
	  return false;
	 }

if(user_name.length == 0){
  document.getElementById("register_valid").innerHTML = "<span style='color:red'>Please enter username</span>";
  return false;
}

if(user_name.length < 6) {
  document.getElementById("register_valid").innerHTML = "<span style='color:red'>Username cannot be less than 6digits</span>";
  return false;
}	
	
if(password.length == 0 || confpassword.length == 0) {
  document.getElementById("register_valid").innerHTML = "<span style='color:red'>Please enter password</span>";
  return false;
}	
/*if(user_name.trim() == "" || password.trim() == "" || fname.trim() == "" || lname.trim() == "" || addr1.trim() == "" || city.trim() == "" || state.trim() == "" || country.trim() == "" || zip.trim() == ""){
  document.getElementById("register_valid").innerHTML = "<span style='color:red'>Please Fill all the details</span>";
  //e.preventDefault();
  return false;
 }*/
if(password !== confpassword) {
  document.getElementById("register_valid").innerHTML = "<span style='color:red'>Passwords does not match, please re-enter</span>";
  return false;
}
	
	
 if(password.length<6 || confpassword.length<6) {
  document.getElementById("register_valid").innerHTML = "<span style='color:red'>Username and password cannot be lessthan 6 letters	.</span>";
  return false;
}
return true;
}

//Jquery function to check the user availability in database while registering

$(document).ready(function() {
//	$('checkuname').load('checkuname.php').show();
	
	$('#username').keyup(function() {

	$.post('checkuser.php', { username: register_form.username.value },
	function(result){
		$('#checkuname').html(result).show(); //#checkuname is the id value of <span> in register.php for error display
	//show() method shows the hidden, selected elements.	
		//jquery html() is similar to innerHTML
	});
	});
});

