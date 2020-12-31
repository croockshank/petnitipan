$('#val-nama-hewan-autocomplete').autocomplete({
    source: 'pages/perawatan/list-hewan.php',
    select: function(event, ui){
        $('#val-nama-hewan-autocomplete').val(ui.item.label)
        $('#val-id-hewan-autocomplete').val(ui.item.id)
        $('#val-id-jenis-hewan-autocomplete').val(ui.item.id_jenis_hewan)
        $('#val-biaya-adopsi-disabled').val(ui.item.biaya_adopsi.toString().replace(/\B(?=(\d{3})+(?!\d))/g, "."))
        $('#val-biaya-adopsi').val(ui.item.biaya_adopsi)

        $('#val-nama-makanan-autocomplete').removeAttr('disabled')
        $('#val-nama-makanan-autocomplete').val('')

        $('#val-nama-vaksin-autocomplete').removeAttr('disabled')
        $('#val-nama-vaksin-autocomplete').val('')
    },
    change: function(event, ui){
        if(ui.item === null || !ui.item){
            $('#val-nama-makanan-autocomplete').prop('disabled', true)
            $('#val-nama-vaksin-autocomplete').prop('disabled', true)
            $(this).val('');
        }

    }
});

$('#val-nama-makanan-autocomplete').autocomplete({
    source: function(request, response){
        $.getJSON('pages/perawatan/list-makanan.php', {
            'id-jenis-hewan': $('#val-id-jenis-hewan-autocomplete').val()
        }, response)
    },
    select: function(event, ui){
        $('#val-nama-makanan-autocomplete').val(ui.item.label)
        $('#val-id-makanan').val(ui.item.id)
        $('#val-label-jumlah-makanan').text(ui.item.jumlah)

        $('#val-jumlah-makanan-validated').removeAttr('disabled')
        $('#val-jumlah-makanan-validated').val('')
    },
    change: function(event, ui){
        if(ui.item === null || !ui.item){
            $('#val-jumlah-makanan-validated').prop('disabled', true)
            $(this).val('');
        }
    }
});

$('#val-nama-vaksin-autocomplete').autocomplete({
    source: function(request, response){
        $.getJSON('pages/perawatan/list-vaksin.php', {
            'id-jenis-hewan': $('#val-id-jenis-hewan-autocomplete').val()
        }, response)
    },
    select: function(event, ui){
        $('#val-nama-vaksin-autocomplete').val(ui.item.label)
        $('#val-id-vaksin').val(ui.item.id)
        $('#val-label-jumlah-vaksin').text(ui.item.jumlah)

        $('#val-jumlah-vaksin-validated').removeAttr('disabled')
        $('#val-jumlah-vaksin-validated').val('')
    },
    change: function(event, ui){
        if(ui.item === null || !ui.item){
            $('#val-jumlah-vaksin-validated').prop('disabled', true)
            $(this).val('');
        }
    }
});

$('.val-nama-hewan-autocomplete').autocomplete({
    source: 'pages/perawatan/list-hewan.php',
    select: function(event, ui){
        $('.val-nama-hewan-autocomplete').val(ui.item.label)
        $('.val-id-hewan-autocomplete').val(ui.item.id)
        $('.val-biaya-adopsi-disabled').val(ui.item.biaya_adopsi.toString().replace(/\B(?=(\d{3})+(?!\d))/g, "."))
        $('.val-biaya-adopsi').val(ui.item.biaya_adopsi)

        $('.val-nama-hewan').removeAttr('disabled')
        $('.val-nama-hewan').val('')
    },
    change: function(event, ui){
        if(ui.item === null || !ui.item){
            $('.val-nama-makanan').prop('disabled', true)
            $('.val-nama-vaksin').prop('disabled', true)
            $(this).val('');
        }

    }
});

$('#val-nama-pengadopsi-autocomplete').autocomplete({
    source: function(request, response){
        $.getJSON('pages/pengadopsian/list-pengadopsi.php', {}, response)
    },
    select: function(event, ui){
        $('.val-nama-pengadopsi-autocomplete').val(ui.item.label)
        $('.val-id-pengadopsi').val(ui.item.id)

        $('.val-nama-hewan-autocomplete').removeAttr('disabled')
        $('.val-nama-hewan-autocomplete').val('')
    },
    change: function(event, ui){
        if(ui.item === null || !ui.item){
            $('.val-nama-hewan-autocomplete').prop('disabled', true)
            $(this).val('');
        }
    }
});