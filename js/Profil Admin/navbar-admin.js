$(document).ready(async () => {
  const fd = new FormData();
  fd.append("XAT", `Bearer ${localStorage.getItem("access_token")}`);

  const req = await fetch("https://api-sipandu-beradat.000webhostapp.com/admin-desa-adat/me/", {
    method: "POST",
    body: fd
  });
  const {
    status_code,
    message,
    data
  } = await req.json();

  if (status_code === 200) {
	$("#nama-admin").html(data.masyarakat.name)
	$("#avatar-admin").attr("src", data.masyarakat.avatar)
  }
});
