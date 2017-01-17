var core = {
    init: function() {
        console.log("Hello World");
    },

    // Reload SVG - For IOS
    rl_svg: function(_elm) {
        var svgs = $(_elm).find('svg use');
        $.each(svgs, function(_idx, _elm) {
            var elm = $(_elm);
            elm.attr('xlink:href', elm.attr('xlink:href'));
        });
    },
};
core.init();
