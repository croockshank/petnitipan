jQuery.validator.addMethod(
  "noSpace",
  function (value, element) {
    return value.indexOf(" ") < 0 && value != "";
  },
  "No space please and don't leave it empty"
);

jQuery.validator.addMethod(
  "phoneID",
  function (phone_number, element) {
    phone_number = phone_number.replace(/\s+/g, "");
    return (
      this.optional(element) ||
      (phone_number.length > 9 &&
        phone_number.match(/\+?([ -]?\d+)+|\(\d+\)([ -]\d+)/))
    );
  },
  "Masukan nomor telepon yang valid."
);

jQuery.validator.addMethod("minReplaced", function(value, element, param) {
  var value = this.elementValue(element).replace('.', '').replace(',', '').trim();
  return this.optional(element) || value > param;
}, 'Masukan angka yang lebih dari {0}!');

jQuery(".form-valide").validate({
  rules: {
    "val-luas": {
      required: true,
      digits: !0,
      min: 1,
      remote: {
        url: "pages/shelter/kandang/check-jenis-kandang.php",
        type: "post",
      },
    },
    "val-jumlah": {
      required: true,
      digits: !0,
      min: 1,
    },
    "val-harga": {
      required: true,
      digits: !0,
      min: 1,
    },
    "val-nama-kandang": {
      required: true,
      minlength: 2,
    },
    "val-jenis-kandang": {
      required: true,
    },
    "val-nama-administrator": {
      required: true,
      minlength: 2,
    },
    "val-username": {
      required: true,
      minlength: 5,
      noSpace: true,
      remote: {
        url: "pages/shelter/check-username-administrator.php",
        type: "post",
      },
    },
    "val-password-required": {
      required: true,
      minlength: 6,
    },
    "val-nama-jenis-hewan": {
      required: true,
      minlength: 2,
      remote: {
        url: "pages/hewan/check-jenis-hewan.php",
        type: "post",
      },
    },
    "val-jenis-hewan": {
      required: true,
    },
    "val-nama-hewan": {
      required: true,
      minlength: 2,
    },
    "val-jenis-kelamin-hewan": {
      required: true,
    },
    "val-panjang-hewan": {
      required: true,
      digits: !0,
      decimal: true,
      min: 1,
    },
    "val-berat-hewan": {
      required: true,
      digits: !0,
      decimal: true,
      min: 1,
    },
    "val-gambar-hewan-required": {
      required: true,
      extension: "jpg|jpeg|png|webp",
    },
    "val-gambar-hewan-required": {
      required: true,
      extension: "jpg|jpeg|png|webp",
    },
    "val-nama-makanan": {
      required: true,
      minlength: 2,
    },
    "val-jumlah-makanan-validated": {
      required: true,
      digits: !0,
      min: 1,
    },
    "val-jumlah-makanan": {
      required: true,
      digits: !0,
      min: 1,
    },
    "val-waktu":{
      required: true,
    },
    "val-biaya-makanan": {
      required: true,
      minReplaced: 1
    },
    "val-nama-vaksin": {
      required: true,
      minlength: 2,
    },
    "val-jumlah-vaksin": {
      required: true,
      digits: !0,
      min: 1,
    },
    "val-jumlah-vaksin-validated": {
      required: true,
      digits: !0,
      min: 1,
    },
    "val-biaya-vaksin": {
      required: true,
      minReplaced: 1
    },
    "val-kandang": {
      required: true,
    },
    "val-radio": {
      required: true,
    },
    "val-gambar": {
      required: true,
    },
    "val-nama-pengadopsi": {
      required: true,
      minlength: 2,
    },
    "val-email-pengadopsi": {
      required: !0,
      email: !0,
    },
    "val-nama-pengadopsi-autocomplete": {
      required: true,
      minlength: 2,
    },
    "val-nama-hewan-autocomplete": {
      required: true,
      minlength: 2,
    },
    "val-no-telepon-pengadopsi": {
      required: !0,
      phoneID: !0,
    },
    "val-alamat-pengadopsi": {
      required: true,
      minlength: 2,
    },
    "val-confirm-password": {
      required: !0,
      equalTo: "#val-password",
    },
    "val-select2": {
      required: !0,
    },
    "val-select2-multiple": {
      required: !0,
      minlength: 2,
    },
    "val-suggestions": {
      required: !0,
      minlength: 5,
    },
    "val-skill": {
      required: !0,
    },
    "val-currency": {
      required: !0,
      currency: ["$", !0],
    },
    "val-website": {
      required: !0,
      url: !0,
    },
    "val-number": {
      required: !0,
      number: !0,
    },
    "val-range": {
      required: !0,
      range: [1, 5],
    },
    "val-terms": {
      required: !0,
    },
  },
  messages: {
    "val-luas": {
      required: "Masukan data berupa angka!",
      min: "Masukan angka yang lebih dari 0!",
      remote: "Luas kandang telah terdaftar, silahkan tambah luas yang lain!",
    },
    "val-jumlah": {
      required: "Masukan data berupa angka!",
      min: "Masukan angka yang lebih dari 0!",
    },
    "val-harga": {
      required: "Masukan data berupa angka!",
      min: "Masukan angka yang lebih dari 0!",
    },
    "val-nama-kandang": {
      required: "Masukan data nama kandang!",
      minlength: "Nama harus lebih dari 2 karakter",
    },
    "val-jenis-kandang": "Tolong pilih jenis kandang!",
    "val-nama-administrator": {
      required: "Masukan data nama administrator!",
      minlength: "Nama harus lebih dari 2 karakter",
    },
    "val-username": {
      required: "Masukan data username!",
      minlength: "Username harus 5 karakter atau lebih!",
      noSpace: "Username tidak boleh mengandung spasi!",
      remote: "Username telah digunakan, silahkan menggunakan username lain!",
    },
    "val-password-required": {
      required: "Masukan data password!",
      minlength: "Password harus 6 karakter atau lebih!",
    },
    "val-nama-jenis-hewan": {
      required: "Masukan data nama jenis hewan!",
      minlength: "Nama harus lebih dari 2 karakter",
      remote: "Jenis hewan telah terdaftar, silahkan tambah jenis hewan lain!",
    },
    "val-jenis-hewan": "Tolong pilih jenis hewan!",
    "val-nama-makanan": {
      required: "Masukan data nama makanan!",
      minlength: "Nama harus lebih dari 2 karakter",
    },
    "val-jumlah-makanan": {
      required: "Masukan data berupa angka!",
      min: "Masukan angka yang lebih dari 0!",
      max: "Jumlah yang anda masukan melebihi jumlah yang tersedia!"
    },
    "val-waktu": "Masukan data waktu berupa tanggal dan jam!",
    "val-biaya-makanan": "Masukan data berupa angka!",
    "val-nama-vaksin": {
      required: "Masukan data nama vaksin!",
      minlength: "Nama harus lebih dari 2 karakter",
    },
    "val-jumlah-vaksin": {
      required: "Masukan data berupa angka!",
      min: "Masukan angka yang lebih dari 0!",
    },
    "val-biaya-vaksin": "Masukan data berupa angka!",
    "val-nama-hewan": {
      required: "Masukan data nama hewan!",
      minlength: "Nama harus lebih dari 2 karakter",
    },
    "val-jenis-kelamin-hewan": "Masukan data berupa angka!",
    "val-panjang-hewan": {
      required: "Masukan data berupa angka!",
      min: "Masukan angka yang lebih dari 0!",
    },
    "val-berat-hewan": {
      required: "Masukan data berupa angka!",
      min: "Masukan angka yang lebih dari 0!",
    },
    "val-gambar-hewan-required": {
      required: "Masukan data berupa gambar!",
      extension:
        "File yang dimasukan harus berekstensi jpg, jpeg, png, atau webp",
    },
    "val-gambar-hewan-required": {
      required: "Masukan data berupa gambar!",
      extension:
        "File yang dimasukan harus berekstensi jpg, jpeg, png, atau webp",
    },
    "val-nama-pengadopsi": {
      required: "Masukan data nama pengadopsi!",
      minlength: "Nama harus lebih dari 2 karakter",
    },
    "val-email-pengadopsi": "Tolong masukan email yang valid!",
    "val-no-telepon-pengadopsi": "Tolong nomor telepon yang valid!",
    "val-nama-pengadopsi-autocomplete": "Masukan nama pengadopsi!",
    "val-nama-hewan-autocomplete": "Masukan nama hewan!",
    "val-biaya-adopsi": {
      required: "Masukan data berupa angka!",
      min: "Masukan angka yang lebih dari 0!",
    },
    "val-alamat-pengadopsi": {
      required: "Masukan data alamat pengadopsi!",
      minlength: "Nama harus lebih dari 2 karakter",
    },
    "val-kandang": "Tolong pilih kandang!",
    "val-radio": "Tolong pilih jenis kelamin!",
    "val-gambar": "Tolong masukan gambar hewan!",
    "val-confirm-password": {
      required: "Please provide a password",
      minlength: "Your password must be at least 5 characters long",
      equalTo: "Please enter the same password as above",
    },
    "val-select2": "Please select a value!",
    "val-select2-multiple": "Please select at least 2 values!",
    "val-suggestions": "What can we do to become better?",
    "val-skill": "Please select a skill!",
    "val-currency": "Please enter a price!",
    "val-website": "Please enter your website!",
    "val-phoneus": "Please enter a US phone!",
    "val-number": "Please enter a number!",
    "val-range": "Please enter a number between 1 and 5!",
    "val-terms": "You must agree to the service terms!",
  },

  ignore: [],
  errorClass: "invalid-feedback animated fadeInUp",
  errorElement: "div",
  errorPlacement: function (e, a) {
    jQuery(a).parents(".form-group > div").append(e);
  },
  highlight: function (e) {
    jQuery(e)
      .closest(".form-group")
      .removeClass("is-invalid")
      .addClass("is-invalid");
  },
  success: function (e) {
    jQuery(e).closest(".form-group").removeClass("is-invalid"),
      jQuery(e).remove();
  },
});

//Validate when jumlah changes
jQuery('#val-jumlah-makanan-validated').focus(function(){
  jQuery('#val-jumlah-makanan-validated').rules("add", {
    max: parseInt($('#val-label-jumlah-makanan').text())
  })
})

jQuery('#val-jumlah-vaksin-validated').focus(function(){
  jQuery('#val-jumlah-vaksin-validated').rules("add", {
    max: parseInt($('#val-label-jumlah-vaksin').text())
  })
})

jQuery('.tab-pane').change(function(){
  console.log($(this))
  if($(this).hasClass('active')){
    jQuery('#val-nama-pengadopsi-autocomplete').rules("add", {
      required: false
    })
  }
})

jQuery(".form-valide-with-icon").validate({
  rules: {
    "val-username": {
      required: !0,
      minlength: 3,
    },
    "val-password": {
      required: !0,
      minlength: 5,
    },
  },
  messages: {
    "val-username": {
      required: "Please enter a username",
      minlength: "Your username must consist of at least 3 characters",
    },
    "val-password": {
      required: "Please provide a password",
      minlength: "Your password must be at least 5 characters long",
    },
  },

  ignore: [],
  errorClass: "invalid-feedback animated fadeInUp",
  errorElement: "div",
  errorPlacement: function (e, a) {
    jQuery(a).parents(".form-group > div").append(e);
  },
  highlight: function (e) {
    jQuery(e)
      .closest(".form-group")
      .removeClass("is-invalid")
      .addClass("is-invalid");
  },
  success: function (e) {
    jQuery(e)
      .closest(".form-group")
      .removeClass("is-invalid")
      .addClass("is-valid");
  },
});
