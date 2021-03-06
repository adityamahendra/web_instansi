$("#form-edit-petugas").submit(async (e) => {
  e.preventDefault();
  startLoading()
  await updatePetugas()
});

const updatePetugas = async () => {
  const id = $("#edit-id").val();
  const id_instansi = $("#edit-id-instansi").val();
  const nama = $("#edit-name").val();
  const phone = $("#edit-phone").val();
  const birth = $("#edit-birth").val();
  const nik = $("#edit-nik").val();
  const gender = $("#edit-gender").val();
  const active_status = $("#edit-active-status").val();
  const avatar = $("#edit-avatar-img").prop("files");

  const fd = new FormData();
  fd.append("id", id);
  fd.append("id_instansi", id_instansi);
  fd.append("name", nama);
  fd.append("phone", phone);
  fd.append("date_of_birth", birth);
  fd.append("nik", nik);
  fd.append("gender", gender);
  fd.append("active_status", JSON.parse(active_status));
  if (avatar.length > 0) {
    fd.append("avatar", avatar[0]);
  }
  fd.append("XAT", `Bearer ${localStorage.getItem("access_token")}`);

  const req = await fetch(
    "https://api-sipandu-beradat.000webhostapp.com/petugas/update/", {
      method: "POST",
      body: fd,
    }
  );
  const {
    status_code,
    message
  } = await req.json();

  if (status_code === 200) {
    await read_petugas();
    stopLoading()
    Swal.fire({
      title: "Proses berhasil",
      text: message,
      icon: "success",
      confirmButtonText: "Tutup"
    })
  } else if (status_code === 400) {
    stopLoading()
    Swal.fire({
      title: "Terjadi Kesalahan",
      text: message,
      icon: "warning",
      confirmButtonText: "Tutup"
    })
  } else if (status_code === 401) {
    refreshToken(updatePetugas)
  }
};