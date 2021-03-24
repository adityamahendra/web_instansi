$(document).ready(async () => {
	const req = await fetch("https://sipandu-beradat.000webhostapp.com/Auth/captcha/captcha_image.php");
	const {
	  status_code,
	  data,
	  message
	} = await req.json();

	if (status_code === 200) {
	  sessionStorage.setItem("captcha_id", data.id)
	  $("#captcha-image").attr("src", data.link_image)
	}
 });

 $("form").submit(async (e) => {
	e.preventDefault();
	console.log("submit");
	const username = $("#username").val();
	const password = $("#password").val();
	const captcha = $("#captcha").val();

	const fd = new FormData();
	fd.append("username", username);
	fd.append("password", password);
	fd.append("id_captcha", sessionStorage.getItem("captcha_id"));
	fd.append("captcha", captcha);

	const req = await fetch("https://sipandu-beradat.000webhostapp.com/Auth/instansi_petugas/login.php", {
	  method: "POST",
	  body: fd
	});
	const {
	  status_code,
	  data,
	  message
	} = await req.json();

	if (status_code === 200) {
	  localStorage.setItem("access_token", data.access_token);
	  localStorage.setItem("refresh_token", data.refresh_token);
	  alert("Login berhasil");
	  window.location.href = "index.php";
	} else if (status_code === 400){
	  alert("Mohon inputkan data dengan benar")
	}
 });