$(document).ready(main);

$('#noticeContainer').delay(3000).animate({
  opacity: '0'
}, 100);
var getOffset = function(el) {
    var el2 = el;
    var curtop = 0;
    var curleft = 0;
    if (document.getElementById || document.all) {
        do {
            curleft += el.offsetLeft - el.scrollLeft;
            curtop += el.offsetTop - el.scrollTop;
            el = el.offsetParent;
            el2 = el2.parentNode;
            while (el2 != el) {
                curleft -= el2.scrollLeft;
                curtop -= el2.scrollTop;
                el2 = el2.parentNode;
            }
        } while (el.offsetParent);

    } else if (document.layers) {
        curtop += el.y;
        curleft += el.x;
    }
    return {
        top: curtop,
        left: curleft
    }
};

window.addEventListener("load", function(){
  // $("#loader").delay(500).fadeOut();
  // $("#loader-content").delay(500).fadeOut();
}, false)

function main() {

    /* disparition barre + change nav */
    var nav = document.getElementsByClassName("navbar-container")[0];
    var blocs = document.getElementsByClassName("bloc");
    var blocsActions = document.getElementsByClassName("blocAction");
    if (window.innerHeight < $(document).scrollTop()) {
        nav.className = nav.className.replace("bg-transparent", "bg-grey");
    }

    $(window).scroll(function() {
        var y = $(this).scrollTop();
        if (y > window.innerHeight) {
            nav.className = nav.className.replace("bg-transparent", "bg-grey");
        } else {
            nav.className = nav.className.replace("bg-grey", "bg-transparent");
        }
        // .offset().top
        for (i = 0; i < blocs.length; i++) {
            if (y > getOffset(blocs[i]).top - 100 && y < getOffset(blocs[i]).top + window.innerHeight) {
                for (j = 0; j < blocsActions.length; j++) {
                    blocsActions[j].className = blocsActions[j].className.replace("active", "");
                }
                blocsActions[i].className += " active";
            }
        }
    });

    /* Disparition */
    $(window).on('scroll', function() {
        var st = $(this).scrollTop();
        var title = $('#title');
        var name = $('#name');
        var arrow = $('#arrow');
        var bloc = $('#bloc');
        name.css({
            'opacity': (1 - st / 200)
        });
        title.css({
            'opacity': (1 - st / 160)
        });
        arrow.css({
            'opacity': (1 - st / 420)
        });

        bloc.css({
            'opacity': (1 - st / 800)
        });
    });

    /*  smooth scroll */

    $('a[href^="#"]').click(function() {
        var the_id = $(this).attr("href");

        $('html, body').animate({
            scrollTop: $(the_id).offset().top
        }, 'slow');
        return false;
    });

};
