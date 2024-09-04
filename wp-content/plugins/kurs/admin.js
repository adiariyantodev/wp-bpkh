jQuery(document).ready(function($) {
    $('.add-kurs').click(function() {
        var row = '<tr>' +
            '<td><input type="text" name="currencies[new][currency]" value="" placeholder="Mata Uang"></td>' +
            '<td><input type="number" name="currencies[new][jual]" value=""></td>' +
            '<td><input type="number" name="currencies[new][beli]" value=""></td>' +
            '<td><input type="text" name="currencies[new][image]" value=""><button class="button select-image">Pilih Gambar</button></td>' +
            '</tr>';
        $('#kurs-table').append(row);
    });

    $(document).on('click', '.select-image', function(e) {
        e.preventDefault();
        var button = $(this);
        var custom_uploader = wp.media({
            title: 'Pilih Gambar',
            button: {
                text: 'Gunakan gambar ini'
            },
            multiple: false
        }).on('select', function() {
            var attachment = custom_uploader.state().get('selection').first().toJSON();
            button.prev('input').val(attachment.url);
        }).open();
    });
});
