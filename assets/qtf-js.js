(function($) {
    $(document).ready(function() {
        $('.qtf-language-button').click(function(e) {
            e.preventDefault();
            var lang = $(this).data('language');
            $('.qtf-language-button').removeClass('is-current');
            $('.qtf-language-button[data-language=' + lang + ']').addClass('is-current');
            $('.qtf-input').removeClass('is-current');
            $('.qtf-input[data-language=' + lang + ']').addClass('is-current');
        });
    });
})(jQuery);
