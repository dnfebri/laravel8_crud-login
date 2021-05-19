const btnHapus = document.querySelectorAll('#btn-hapus');
btnHapus.forEach(function (hapus) {
  hapus.onclick = function () {
    return confirm("Apakah anda yakin?")
  };
  // hapus.addEventListener('click', function () {
  //   return confirm("Apakah anda yakin?")
  // });
});