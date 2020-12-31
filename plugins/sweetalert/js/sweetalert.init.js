function swalSuccess(message, redirectLocation) {
  swal(
    {
      title: "Berhasil",
      text: message,
      type: "success",
    },
    function () {
      window.location.replace(redirectLocation);
    }
  );
}

function swalError(message) {
  swal({
    title: "Gagal", 
    text: message.length == 0 ? "Upss... terjadi kegagalan, coba lagi nanti" : message, 
    type: "error"
  });
}

function swalConfirmation(message, redirectLocation) {
  swal(
    {
      title: "Apakah kamu yakin ingin menghapus?",
      text: message,
      type: "warning",
      showCancelButton: !0,
      confirmButtonText: "Ya",
      cancelButtonText: "Tidak",
      closeOnConfirm: !1,
      closeOnCancel: true,
    },
    function (e) {
      if (e) {
        window.location.href = redirectLocation
      }
    }
  );
}
