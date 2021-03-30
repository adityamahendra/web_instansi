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
    $("#nama-instansi").html(data.masyarakat.banjar.desa_adat.name)

    $("#admin-avatar").attr("src", data.masyarakat.avatar)
    $("#admin-name").html(data.masyarakat.name)
    $("#admin-username").html(data.masyarakat.username)
    $("#admin-phone").val(data.masyarakat.phone)
    $("#admin-gender").val(data.masyarakat.gender)
    $("#admin-category").val(data.masyarakat.category)
    $("#admin-birth").val(data.masyarakat.date_of_birth)
    $("#admin-nik").val(data.masyarakat.nik)

    $("#admin-banjar").val(data.masyarakat.banjar.name)
    $("#admin-desa").val(data.masyarakat.banjar.desa_adat.name)
    $("#admin-kecamatan").val(data.masyarakat.banjar.desa_adat.kecamatan.name)
    $("#admin-kabupaten").val(data.masyarakat.banjar.desa_adat.kecamatan.kabupaten.name)

	 $("#edit-nama").val(data.masyarakat.name)
	 $("#edit-phone").val(data.masyarakat.phone)
	 $("#edit-category").val(data.category === "Krama Wid" ? 0 : obj.category === "Krama Tamiu" ? 1 : 2)
    $("#edit-banjar").val(data.masyarakat.banjar.name)
    $("#edit-desa").val(data.masyarakat.banjar.desa_adat.name)
    $("#edit-kecamatan").val(data.masyarakat.banjar.desa_adat.kecamatan.name)
    $("#edit-kabupaten").val(data.masyarakat.banjar.desa_adat.kecamatan.kabupaten.name)
	 
  }
});
