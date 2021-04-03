$(document).ready(async () => {
  await readAllPelaporan();
});

const readPelaporanDarurat = async () => {
  const idInstansi = localStorage.getItem("id_instansi");
  const req = await fetch(
    `https://api-sipandu-beradat.000webhostapp.com/pelaporan-darurat/?id_instansi=${idInstansi}`
  );
  const { status_code, data } = await req.json();

  if (status_code === 200) {
    return data;
  } else {
    readPelaporanDarurat();
  }
};

const readPelaporan = async () => {
  const idInstansi = localStorage.getItem("id_instansi");
  const req = await fetch(
    `https://api-sipandu-beradat.000webhostapp.com/pelaporan/?id_instansi=${idInstansi}`
  );
  const { status_code, data } = await req.json();

  if (status_code === 200) {
    return data;
  } else {
    readPelaporan();
  }
};

const readAllPelaporan = async () => {
  const darurats = await readPelaporanDarurat();
  const keluhans = await readPelaporan();
  const data = [...darurats, ...keluhans];

  $("#tabel-pelaporan tbody").html("");
  data.map((obj, i) => {
    const row = `
                   <tr>
             <td style="text-transform:capitalize;">${
               obj.jenis_pelaporan.name
             }</td>
             ${
               obj.jenis_pelaporan.emergency_status
                 ? '<td><i class="fas in fa-circle fa-xs text-danger mr-2"></i><span>Darurat</span></td>'
                 : '<td><i class="fas in fa-circle fa-xs text-primary mr-2"></i><span>Keluhan</span></td>'
             }
             <td>${obj.masyarakat.name}</td>
             <td>${obj.masyarakat.category}</td>
             <td>${obj.time}</td>
             ${
               obj.status === "Menunggu Validasi"
                 ? '<td><i class="fas in fa-circle fa-xs text-secondary mr-2"></i><span>Menunggu Validasi</span></td>'
                 : obj.status === "Sedang Diproses"
                 ? '<td><i class="fas in fa-circle fa-xs text-warning mr-2"></i><span>Sedang Diprosses</span></td>'
                 : obj.status === "Selesai"
                 ? '<td><i class="fas in fa-circle fa-xs text-success mr-2"></i><span>Valid</span></td>'
                 : '<td><i class="fas in fa-circle fa-xs text-danger mr-2"></i><span>Tidak Valid</span></td>'
             }
             
             <td>
              <div class="d-flex justify-content-center" style="gap:14px;">
                <a href="detail_pelaporan.html?name=${
                  obj.masyarakat.name
                }&category=${obj.masyarakat.category}&gender=${
      obj.masyarakat.gender
    }&phone=${obj.masyarakat.phone}&avatar=${obj.masyarakat.avatar}&status-${
      obj.status
    }&jenis-pelaporan=${obj.jenis_pelaporan.name}&description=${
      obj.description
    }&photo=${obj.photo}&desa-adat=${obj.desa_adat.name}&kecamatan=${
      obj.desa_adat.kecamatan.name
    }&kabupaten=${obj.desa_adat.kecamatan.kabupaten.name}&time=${
      obj.time
    }&emergency-status=${obj.jenis_pelaporan.emergency_status}&latitude=${
      obj.latitude
    }&longitude=${obj.longitude}" class="btn btn-success btn-icon-split btn-sm">
                  <span class="icon text-white-50">
                    <i class="fas fa-file"></i>
                  </span>
                  <span class="text">Detail</span>
                </a>
              </div>
              </td>
                   </tr>
           `;
    $("#tabel-pelaporan tbody").append(row);
  });
};
