jQuery.validator.addMethod("noSpace", function(value, element) { 
    return value.indexOf(" ") < 0 && value != ""; 
}, "No space please and don't leave it empty");

jQuery(".form-valide").validate({
    rules: {
        "val-angka": {
            required: true,
            digits: !0,
            min: 1
        },
        "val-jumlah": {
            required: true,
            digits: !0,
            min: 1
        },
        "val-harga": {
            required: true,
            digits: !0,
            min: 1
        },
        "val-nama": {
            required: true,
            minlength: 2
        },
        "val-jenis-kandang": {
            required: true
        },
        "val-username": {
            required: true,
            minlength: 5,
            noSpace: true
        },
        "val-email": {
            required: !0,
            email: !0
        },
        "val-password": {
            required: true,
            minlength: 6
        },
        "val-jenis-hewan": {
            required: true
        },
        "val-kandang": {
            required: true
        },
        "val-radio": {
            required: true
        },
        "val-gambar": {
            required: true
        },
        "val-confirm-password": {
            required: !0,
            equalTo: "#val-password"
        },
        "val-select2": {
            required: !0
        },
        "val-select2-multiple": {
            required: !0,
            minlength: 2
        },
        "val-suggestions": {
            required: !0,
            minlength: 5
        },
        "val-skill": {
            required: !0
        },
        "val-currency": {
            required: !0,
            currency: ["$", !0]
        },
        "val-website": {
            required: !0,
            url: !0
        },
        "val-phoneus": {
            required: !0,
            phoneUS: !0
        },
        "val-number": {
            required: !0,
            number: !0
        },
        "val-range": {
            required: !0,
            range: [1, 5]
        },
        "val-terms": {
            required: !0
        }
    },
    messages: {
        "val-angka": {
            required: "Masukan data berupa angka!",
            min: "Masukan angka yang lebih dari 0!",
        },
        "val-jumlah": {
            required: "Masukan data berupa angka!",
            min: "Masukan angka yang lebih dari 0!",
        },
        "val-harga": {
            required: "Masukan data berupa angka!",
            min: "Masukan angka yang lebih dari 0!",
        },
        "val-nama": {
            required: "Masukan data nama!",
            minlength: "Nama harus lebih dari 2 karakter"
        },
        "val-jenis-kandang": "Tolong pilih jenis kandang!",
        "val-username": {
            required: "Masukan data username!",
            minlength: "Username harus 5 karakter atau lebih!",
            noSpace: "Username tidak boleh mengandung spasi!"
        },
        "val-email": "Please enter a valid email address",
        "val-password": {
            required: "Masukan data password!",
            minlength: "Password harus 6 karakter atau lebih!"
        },
        "val-jenis-hewan": "Tolong pilih jenis hewan!",
        "val-kandang": "Tolong pilih kandang!",
        "val-radio": "Tolong pilih jenis kelamin!",
        "val-gambar": "Tolong masukan gambar hewan!",
        "val-confirm-password": {
            required: "Please provide a password",
            minlength: "Your password must be at least 5 characters long",
            equalTo: "Please enter the same password as above"
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
        "val-terms": "You must agree to the service terms!"
    },

    ignore: [],
    errorClass: "invalid-feedback animated fadeInUp",
    errorElement: "div",
    errorPlacement: function(e, a) {
        jQuery(a).parents(".form-group > div").append(e)
    },
    highlight: function(e) {
        jQuery(e).closest(".form-group").removeClass("is-invalid").addClass("is-invalid")
    },
    success: function(e) {
        jQuery(e).closest(".form-group").removeClass("is-invalid"), jQuery(e).remove()
    },
});


jQuery(".form-valide-with-icon").validate({
    rules: {
        "val-username": {
            required: !0,
            minlength: 3
        },
        "val-password": {
            required: !0,
            minlength: 5
        }
    },
    messages: {
        "val-username": {
            required: "Please enter a username",
            minlength: "Your username must consist of at least 3 characters"
        },
        "val-password": {
            required: "Please provide a password",
            minlength: "Your password must be at least 5 characters long"
        }
    },

    ignore: [],
    errorClass: "invalid-feedback animated fadeInUp",
    errorElement: "div",
    errorPlacement: function(e, a) {
        jQuery(a).parents(".form-group > div").append(e)
    },
    highlight: function(e) {
        jQuery(e).closest(".form-group").removeClass("is-invalid").addClass("is-invalid")
    },
    success: function(e) {
        jQuery(e).closest(".form-group").removeClass("is-invalid").addClass("is-valid")
    }




});