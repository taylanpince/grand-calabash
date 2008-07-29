/*
*	Grand Calabash
*	Contains utility / interface functions for grandcalabash.com
*	
*	Requires jQuery library (http://www.jquery.com),
*	sIFR 3 (http://wiki.novemberborn.net/sifr3)
*	
*	Taylan Pince (taylanpince at gmail dot com) - July 28, 2008
*/

GrandCalabash = {
    
    init_sifr : function() {
        var bickham_bold = {
            src : "/fla/bickham-bold.swf"
        };
        
        sIFR.activate(bickham_bold);
        
        sIFR.replace(bickham_bold, {
            selector : "h1",
            css : {
                ".sIFR-root" : {
                    "color" : "#999b9e"
                }
            }
        });
    },
    
    init : function() {
        this.init_sifr();
    }
    
};

$(function() {
    GrandCalabash.init();
});