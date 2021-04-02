$(document).ready(() => {
  read_petugas();
});

const read_petugas = async () => {
  const idInstansi = localStorage.getItem("id_instansi")
  const req = await fetch(`https://api-sipandu-beradat.000webhostapp.com/petugas/?id_instansi=${idInstansi}`);
  const {
    status_code,
    data
  } = await req.json();

  if (status_code === 200) {
    $("#tabel-petugas tbody").html("")
    data.map((obj, i) => {
      const row = `
				 <tr>
					 <td>${i + 1}</td>
           <td style="text-transform:capitalize;">${obj.name}</td>
           <td>${obj.gender}</td>
           <td>${obj.phone}</td>
           <td>${obj.nik}</td>
           ${obj.active_status ? '<td><i class="fas in fa-circle fa-xs text-success mr-2"></i><span>Aktif</span></td>' : '<td><i class="fas in fa-circle fa-xs text-secondary mr-2"></i><span>Tidak Aktif</span></td>'}
           <td>
            <div class="d-flex justify-content-center" style="gap:14px;">
              <a href="detail_petugas.html" class="btn btn-success btn-icon-split btn-sm">
                <span class="icon text-white-50">
                  <i class="fas fa-file"></i>
                </span>
                <span class="text">Detail</span>
              </a>
              <a href="#" class="btn btn-primary btn-icon-split btn-sm btn-edit-petugas" data-toggle="modal"
                data-target="#modal-edit-petugas"
                data-id="${obj.id}"
                data-id-instansi="${obj.instansi_petugas.id}"
                data-name="${obj.name}"
                data-phone="${obj.phone}"
                data-birthday="${obj.date_of_birth}"
                data-nik="${obj.nik}"
                data-gender="${obj.gender === "Laki-laki" ? "l" : "p"}"
                data-active-status="${Number(obj.active_status)}"
                data-avatar="${obj.avatar}">
                <span class="icon text-white-50">
                  <i class="fas fa-edit"></i>
                </span>
                <span class="text">Edit</span>
              </a>
              <a href="#" class="btn btn-danger btn-icon-split btn-sm btn-hapus-petugas" data-toggle="modal"
                data-target="#modal-hapus-petugas"
                data-id="${obj.id}">
                <span class="icon text-white-50">
                  <i class="fas fa-trash"></i>
                </span>
                <span class="text">Hapus</span>
              </a>
            </div>
            </td>
				 </tr>
		 `;
      $("#tabel-petugas tbody").append(row);
    });

    $(".btn-edit-petugas").click(e => {
      const id = $(e.currentTarget).attr("data-id");
      const id_instansi = $(e.currentTarget).attr("data-id-instansi");
      const name = $(e.currentTarget).attr("data-name");
      const phone = $(e.currentTarget).attr("data-phone");
      const birth = $(e.currentTarget).attr("data-birthday");
      const nik = $(e.currentTarget).attr("data-nik");
      const gender = $(e.currentTarget).attr("data-gender");
      const active_status = $(e.currentTarget).attr("data-active-status");
      const avatar = $(e.currentTarget).attr("data-avatar");

      $("#edit-id").val(id)
      $("#edit-id-instansi").val(id_instansi)
      $("#edit-name").val(name)
      $("#edit-phone").val(phone)
      $("#edit-birth").val(birth)
      $("#edit-nik").val(nik)
      $("#edit-gender").val(gender)
      $("#edit-avatar").attr("src", avatar);
      $("#edit-active-status").val(active_status)
    })

    $(".btn-hapus-petugas").click(e => {
      const id = $(e.currentTarget).attr("data-id");
      $("#hapus-id").val(id)
    })

  }
};