$(document).ready(() => {
  const name = getParameterByName("name");
  const category = getParameterByName("category");
  const gender = getParameterByName("gender");
  const phone = getParameterByName("phone");
  const avatar = getParameterByName("avatar");
  const jenis_pelaporan = getParameterByName("jenis-pelaporan");
  const description = getParameterByName("description");
  const photo = getParameterByName("photo");
  const desa_adat = getParameterByName("desa-adat");
  const kecamatan = getParameterByName("kecamatan");
  const kabupaten = getParameterByName("kabupaten");
  const status = getParameterByName("status");
  const time = getParameterByName("time");
  const emergency_status = getParameterByName("emergency-status");

  if (JSON.parse(emergency_status)) {
    $("#formGroupDeskripsi").hide();
    $("#formGroupFotoKeluhan").hide();
  }

  $("#avatarUser").attr("src", avatar);
  $("#namaPelapor").text(name);
  $("#statusPelaporan").text(status);
  $("#statusPelapor").text(category);
  $("#kategoriPelaporan").text(
    JSON.parse(emergency_status) ? "Darurat" : "Keluhan"
  );
  $("#waktuPelaporan").text(time);
  $("#nama").val(name);
  $("#jenisPelaporan").val(jenis_pelaporan);
  $("#deskripsiPelaporan").val(description);
  $("#noTelpPelapor").val(phone);
  $("#jenisKelaminPelapor").val(gender);
  $("#fotoPelaporan").attr("src", photo);
  $("#desaAdatPelaporan").val(desa_adat);
  $("#kecamatanPelaporan").val(kecamatan);
  $("#kabupatenPelaporan").val(kabupaten);
});
