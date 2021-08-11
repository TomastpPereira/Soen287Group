
const first = document.getElementById("first-name");
const last = document.getElementById("last-name");
const email = document.getElementById("email");
const confirmEmail = document.getElementById("confirm-email");
const password = document.getElementById("password");
const confirmPassword = document.getElementById("confirm-password");

function empty()
{
	last.classList.remove('error');
	if (first.value === ""){
		first.classList.add('error');
		alert("Please enter all fields");
		return false;
	}
	else {
		first.classList.remove('error');
	}

	if (last.value === ""){
		last.style.borderColor = "red";
		alert("Please enter all fields");
		return false;
	}
	else {
		last.classList.remove('error');
	}

	if (email.value === ""){
		email.style.borderColor = "red";
		alert("Please enter all fields");
		return false;
	}
	else {
		email.classList.remove('error');
	}

	if (confirmEmail.value === ""){
		confirmEmail.style.borderColor = "red";
		alert("Please enter all fields");
		return false;
	}
	else {
		confirmEmail.classList.remove('error');
	}

	if (password.value === ""){
		password.style.borderColor = "red";
		alert("Please enter all fields");
		return false;
	}
	else {
		password.classList.remove('error');
	}

	if (confirmPassword.value === ""){
		confirmPassword.style.borderColor = "red";
		alert("Please enter all fields");
		return false;
	}
	else {
		confirmPassword.classList.remove('error');
	}

	if (document.getElementById("checkbox").checked === false){
		alert("Please agree to Terms & Conditions");
		return false;
	}
}

function checkPassword(){
	if (password.value == confirmPassword.value) {
		password.style.borderColor = "green";
		confirmPassword.style.borderColor = "green";
		return true;
	}
	else {
		password.style.borderColor = "red";
		confirmPassword.style.borderColor = "red";
		return false;
	}
}
function checkEmail(){
	if (email.value == confirmEmail.value) {
		email.style.borderColor = "green";
		confirmEmail.style.borderColor = "green";
		return true;
	}
	else {
		email.style.borderColor = "red";
		confirmEmail.style.borderColor = "red";
		return false;
	}
}
