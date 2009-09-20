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
            src : "/media/fla/bickham-bold.swf"
        };
        
        sIFR.activate(bickham_bold);
        
        sIFR.replace(bickham_bold, {
            selector : "h1",
            css : {
                ".sIFR-root" : {
                    "color" : "#999b9e",
                    "font-size": "42px"
                }
            }
        });
    },
    
    init_lightbox : function() {
        if ($("#Gallery").size() > 0) {
            $("#Gallery a").lightBox();
        }
    },
    
    init_slideshow : function() {
        if ($("#SlideShow.home").size() > 0) {
            swfobject.embedSWF("/media/fla/slideshow.swf", "SlideShow", "400", "305", "7.0.0");
        } else if ($("#SlideShow.facts").size() > 0) {
            swfobject.embedSWF("/media/fla/facts_slideshow.swf", "SlideShow", "400", "305", "7.0.0");
        }
    },
    
    init : function() {
        this.init_sifr();
        this.init_lightbox();
        this.init_slideshow();
    }
    
};

$(function() {
    GrandCalabash.init();
});