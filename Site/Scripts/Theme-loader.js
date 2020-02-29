$(document).ready(function () {
        try {
            var $theme = $('#theme');
            var $cookie = $.cookie('theme');
            
            if ($cookie === 'light') {
                    $theme.attr('href', '../Styles/theme-light.css');
            }
            if ($cookie === 'dark') {
                    $theme.attr('href', '../Styles/theme-dark.css');
            }
        } catch {}
});