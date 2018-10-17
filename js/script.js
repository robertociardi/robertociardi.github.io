$(document).ready(function() {

    /* cookie button */
    $('#cookie-toggler').click(function(){
       $('#cookies').hide();
    });

    //$('#desc-player-0').hide();
    /*change img on hover for squadra page 
    $('img#player-'+i).hover(function(){
        $('#player-'+i).attr("src","img/players/player-"+i+".png");
    }, function(){
        console.log("ciao");
        $('#vaglio').attr("src","img/squadra/vaglio.png");
    });*/

});

/* to show details for the player with index i*/
function details(i) {
    var img_dir = "img/squadra/";
    var img = $('#img-player-'+i);
    var desc = $('#desc-player-'+i);
    var s1 = img.attr("src");
    var s2 = img_dir+"player-"+i+"a.png";

    /* change the image */
    if(s1 == s2)
        img.attr("src",img_dir+"player-"+i+"b.png");
    else
        img.attr("src",img_dir+"player-"+i+"a.png");

    /* show description */

    console.log(desc);
    desc.toggle();

};
