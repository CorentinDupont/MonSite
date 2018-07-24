var filterIsOpen = false;
var heightBar = $("#blog #filtre #bar").height();

//if(filterIsOpen){
//    var heightFilterContentBlock = $("#blog #filtre #filterContentBlock").height();
//}

 var heightFilterContentBlock = "4.5vw"


//$("#blog #filtre").css("transform": "translate(calc(100% - "+heightBar+"))");

$("#blog #filtre #bar").click(function(){ 
    if(filterIsOpen){
        filterIsOpen=false;
        //$("#blog #filtre #filterContentBlock").animate({height: 0}).fadeOut();
        console.log("Fermeture");
        $("#blog #filtre #filterContentBlock").css("height","0");
        $("#blog #filtre #filterContentBlock > *").css("opacity","0");
        $("#blog #filtre #filterContentBlock > *").css("pointer-events","none");
        $("#blog #filtre #bar p").text("ouvrir");
        $("#blog #filtre #bar svg").css("transform","rotate(0)");
    }else{
        console.log("Ouverture");
        filterIsOpen=true;
        $("#blog #filtre #filterContentBlock > *").css("opacity","1");
        $("#blog #filtre #filterContentBlock > *").css("pointer-events","auto");
        $("#blog #filtre #filterContentBlock").css("height", heightFilterContentBlock);
        $("#blog #filtre #bar p").text("fermer");
        $("#blog #filtre #bar svg").css("transform","rotate(180deg)");
    
        //$("#blog #filtre #filterContentBlock").fadeIn().animate({height: heightFilter});
    }
});

$("#blog #allArticles a .articleBody .articleBodyHover").each(function( index ) {
    console.log( index + ": " + $( this ).text() );
    var pText = $( this ).text();
    pText = pText.substr(0,320) + "...";
    console.log( index + ": " + pText );
    $( this ).text(pText);
});

