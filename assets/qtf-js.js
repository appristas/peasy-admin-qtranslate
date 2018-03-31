(function($) {

    $(document).ready(function() {
        $('.qtf-language-button').click(function(e) {
            e.preventDefault();
            $('.qtf-language-button').removeClass('is-current');
            $(this).addClass('is-current');
            var lang = $(this).data('language');
            $('.qtf-input').removeClass('is-current');
            $('.qtf-input[data-language=' + lang + ']').addClass('is-current');
        });
    });
})(jQuery);
