/*
    ACTION BUTTON
*/

var stickyButton = $('#deleteArticle #actionButtonBlock');
var stickyButtonTop = stickyButton.scrollTop();
var listArticle= $('#deleteArticle #listArticle');
var listArticleTop = listArticle.position().top;
stickyButton.css("top", listArticleTop);
stickyButton.css("left", "250px");
var isFixed =false;
var searchBlock = $('#deleteArticle #searchBlock');

$( window ).resize(function() {
    if(!isFixed){
        listArticleTop = listArticle.position().top;
        stickyButton.css("top", listArticleTop); 
    }
});

$(window).scroll(function(){
    var scroll = $(window).scrollTop();
    if(!isFixed){
        listArticleTop = listArticle.position().top;
        stickyButton.css("top", listArticleTop);
        
    }
    stickyButtonTop = stickyButton.position().top;
    var positionToStick = listArticleTop - parseInt(searchBlock.css("margin-bottom")) - $("header").height();
    if(scroll >= positionToStick){
        stickyButton.css("position","fixed");
        stickyButton.css("top",parseInt(searchBlock.css("margin-bottom")) + $("header").height());
        stickyButton.css("left","250px");
        isFixed = true;
    }else{
        stickyButton.css("position","absolute");
        listArticleTop = listArticle.position().top;
        stickyButton.css("top", listArticleTop);
        isFixed = false;
    }
});

/*
    ARTICLES
*/
var selectedArticleCount = 0;

$('#deleteArticle #listArticle').on('click', '.article', function(){
    if($(this).find('.transparentDeleteLayer').css('opacity')=='0'){
        $(this).find('.transparentDeleteLayer').animate({
            opacity:1
        }, 200);
        selectedArticleCount++;
        changeDeleteButtonText(selectedArticleCount);
    }else{
        makeDisappearDeleteLayer($(this).find('.transparentDeleteLayer'));
    }
});

function changeDeleteButtonText(count){
    $("#deleteSelectedArticles").html('Supprimer les éléments sélectionnés ('+count+')');
}

function makeDisappearDeleteLayer(transparentDeleteLayer){
    transparentDeleteLayer.animate({
        opacity:0
    }, 200);
    selectedArticleCount--;
    changeDeleteButtonText(selectedArticleCount);
}

$("#deleteSelectedArticles").on('click', function(){
    console.log("fin de la méthode");
    var allDeleteArticlesIDs = new Array();
    if(selectedArticleCount!=0){
        $('#deleteArticle #listArticle .article').each(function(index){
           if($(this).find('.transparentDeleteLayer').css('opacity')==1){
               allDeleteArticlesIDs.push($(this).attr('id'));
               $(this).hide('slow', function(){
                   $(this).remove();
               });
           } 
        });
        $.ajax({
                type : "POST",
                url: "delete_article_submit.php",
                data: {allDeleteArticlesIDs: allDeleteArticlesIDs},
                beforeSend: function(xhr){
                   
                },
                error: function(data){
                    console.log(data.status);
                    if(data.status == '200'){
                        console.log("Suppression OK");
                    }else{
                        console.log("erreur lors de la suppression");
                    }

                }
            });
            console.log("fin de la méthode");
        selectedArticleCount = 0;
        changeDeleteButtonText(selectedArticleCount);
    }
    
    
});

/*
    SEARCH BAR
*/

$("#searchBlock p").on('click', function(){
    var searchText = $('#searchBlock input').val();
    console.log(searchText);
    if(searchText.trim() != ''){
        $('#deleteArticle #listArticle .article').each(function(index){
            console.log($(this).find('h2').html());
            if(!$(this).find('h2').html().includes(searchText)){
                $(this).hide('slow');
                if($(this).find('.transparentDeleteLayer').css('opacity')==1){
                    makeDisappearDeleteLayer($(this).find('.transparentDeleteLayer'));
                }
            }else{
                $(this).show('slow');
            }
        });
    }else{
         $('#deleteArticle #listArticle .article').each(function(index){
             $(this).show('slow');
         });
    }
   
});















