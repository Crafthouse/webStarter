var core={init:function(){console.log("Hello World")},rl_svg:function(n){var r=$(n).find("svg use");$.each(r,function(n,r){var i=$(r);i.attr("xlink:href",i.attr("xlink:href"))})}};core.init();