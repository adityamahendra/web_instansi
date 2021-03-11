function showPassword() {
	// Get the checkbox
	var checkBox = document.getElementById("show-password");
	// Get the output text
	var text = document.getElementById("password");
 
	// If the checkbox is checked, display the output text
	if (checkBox.checked == true){
	  text.style.display = "block";
	} else {
	  text.style.display = "none";
	}
 }