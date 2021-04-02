$(document).ready(async () => {
	$("#nav-nama-admin").html(localStorage.getItem("name"))
  $("#nav-jenis-instansi").html(localStorage.getItem("jenis_instansi"))
	$("#nav-avatar-admin").attr("src", localStorage.getItem("avatar"))
});
