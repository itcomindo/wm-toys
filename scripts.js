window.addEventListener('DOMContentLoaded', (event) => {
    jQuery(function () {
        //JQuery start below.

        // when user types in #judul get what they type then update the #value-judul
        jQuery('#judul').on('input', function () {
            jQuery('#value-judul').text(jQuery(this).val());
        });


        // summary and value-summary
        jQuery('#summary').on('input', function () {
            jQuery('#value-summary').text(jQuery(this).val());
        });

        //audience and value-audience
        jQuery('#audience').on('input', function () {
            jQuery('#value-audience').text(jQuery(this).val());
        });


        //sub-topik and value-sub-topik
        jQuery('#sub-topik').on('input', function () {
            //keep text formatting when user types which is follow new line
            var text = jQuery(this).val();
            var lines = text.split(/\r|\r\n|\n/);
            var html = '';
            for (var i = 0; i < lines.length; i++) {
                html += '<span>' + lines[i] + '</span>';
            }
            jQuery('#value-sub-topik').html(html);
            jQuery('#value-struktur-artikel').html(html);
        });

        //When #copy is clicked then highlight all text within #prev-wr.
        // jQuery('#copy').on('click', function () {
        //     var range = document.createRange();
        //     range.selectNodeContents(jQuery('#prev-wr')[0]);
        //     var selection = window.getSelection();
        //     selection.removeAllRanges();
        //     selection.addRange(range);
        //     document.execCommand('copy');
        //     selection.removeAllRanges();
        // });
        jQuery('#copy').on('click', function () {
            var range = document.createRange();
            range.selectNodeContents(jQuery('#prev-wr')[0]);
            var selection = window.getSelection();
            selection.removeAllRanges();
            selection.addRange(range);
            document.execCommand('copy');
            selection.removeAllRanges();
        });



        jQuery('#reset').on('click', function () {
            jQuery('#prev-wr .prev-value').text('');
            jQuery('#judul').val('');
            jQuery('#summary').val('');
            jQuery('#audience').val('');
            jQuery('#sub-topik').val('');

        });















































        //JQuery end above.
    });
});