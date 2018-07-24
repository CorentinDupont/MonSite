/*
    ACTION BUTTONS
*/

var stickyButtonsBlock = $('#newArticle #actionButtonBlock');
var stickyButtonsBlockTop = stickyButtonsBlock.scrollTop();
var editionBlock= $('#newArticle form #edition');
var editionBlockTop = editionBlock.position().top;
stickyButtonsBlock.css("top", editionBlockTop);
stickyButtonsBlock.css("left", "2.5vw");
var isFixed =false;
var informationsFormBlock = $('#newArticle #informationsForm');




$( window ).resize(function() {
    if(!isFixed){
        editionBlockTop = editionBlock.position().top;
        stickyButtonsBlock.css("top", editionBlockTop); 
    }
});

$(window).scroll(function(){
    var scroll = $(window).scrollTop();
    if(!isFixed){
        editionBlockTop = editionBlock.position().top;
        stickyButtonsBlock.css("top", editionBlockTop);
        
    }
    stickyButtonsBlockTop = stickyButtonsBlock.position().top;
    var positionToStick = editionBlockTop - parseInt(informationsFormBlock.css("margin-bottom"));
    /*console.log(informationsFormBlock);
    console.log(informationsFormBlock.css('margin-bottom'));
    console.log(editionBlockTop);
    console.log(positionToStick);*/
    if(scroll >= positionToStick){
        stickyButtonsBlock.css("position","fixed");
        stickyButtonsBlock.css("top",parseInt(informationsFormBlock.css("margin-bottom")));
        stickyButtonsBlock.css("left","2.5vw");
        //console.log(stickyButtonsBlock.css("position"));
        isFixed = true;
    }else{
        stickyButtonsBlock.css("position","absolute");
        editionBlockTop = editionBlock.position().top;
        stickyButtonsBlock.css("top", editionBlockTop);
        //console.log(stickyButtonsBlock.css("position"));
        isFixed = false;
    }
});

/*
    TEXT BLOCK
*/
var lastClickedDiv = null;
var currentFocusedTextArea = null;
var lastClickedDivId = 0;
$('#newArticle form #edition #sheet').on("click", '.addTextBlock', function(){
    
    makeReappearaddTextDiv();
    
    //console.log($(this));
    
    lastClickedDiv = $(this);
    var textBlockId = $(this).attr('id').split('_')[1];
    lastClickedDivId = textBlockId;
    $(this).css("display","none");
    $('#textBlock_'+textBlockId).css("display","inline");
    currentFocusedTextArea = $('#textBlock_'+textBlockId).find('textarea');
    currentFocusedTextArea.focus();
    //console.log('cliked : '+lastClickedDivId);
});

$('#newArticle form #edition #sheet').on("mousedown", '.textBlock textarea', function(){
    if($(this).parent().attr('id').split('_')[1] != lastClickedDivId){
        currentFocusedTextArea.blur();
    }
    makeReappearaddTextDiv();
    lastClickedDivId= $(this).parent().attr('id').split('_')[1];
    currentFocusedTextArea = $('#textBlock_'+lastClickedDivId).find('textarea');
    //console.log("click in textarea ! "+lastClickedDivId);
});

$(document).on("click", function(){
    makeReappearaddTextDiv();
});



$("#newArticle #actionButtonBlock #addTextButton").click(function(){
    var newId= $('#newArticle form #edition #sheet .addTextBlock').length+1;
    //console.log(newId);
    $("#newArticle form #edition #sheet").append("<div class='addTextBlock' id='addTextBlock_"+newId+"'><svg version='1.1' id='Capa_1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' x='0px' y='0px' width='432.544px' height='432.544px' viewBox='0 0 432.544 432.544' style='enable-background:new 0 0 432.544 432.544;' xml:space='preserve'><g><g><path d='M0,313.775v118.77h118.771l237.541-237.541L237.539,76.232L0,313.775z M103.638,395.999L103.638,395.999l-30.55,0.004v-36.546H36.545v-30.553l25.981-25.981l67.093,67.092L103.638,395.999z M246.683,124.77c4.182,0,6.276,2.095,6.276,6.28c0,1.906-0.664,3.521-1.999,4.856L96.214,290.651c-1.333,1.328-2.952,1.995-4.854,1.995c-4.184,0-6.279-2.098-6.279-6.279c0-1.906,0.666-3.521,1.997-4.856l154.747-154.743C243.154,125.436,244.773,124.77,246.683,124.77z'/><path d='M421.976,77.654l-67.091-66.806C347.653,3.619,338.992,0,328.903,0c-10.283,0-18.842,3.619-25.693,10.848l-47.394,47.109l118.773,118.77l47.394-47.392c7.042-7.043,10.561-15.608,10.561-25.697C432.54,93.743,429.022,85.08,421.976,77.654z'/></g></g></svg><p>Write your news here</p><button type='button' class='deleteButton'>x</button></div><div class='textBlock' id='textBlock_"+newId+"'><textarea name='textarea1'></textarea><button type='button' class='deleteButton'>x</button></div>");
});
    

function makeReappearaddTextDiv(){
    //console.log('reappearition ? '+lastClickedDivId);
    if(currentFocusedTextArea !=null && !currentFocusedTextArea.is(":focus") && currentFocusedTextArea.val()==""){
        //console.log("make reappear the div bro !");
        $('#textBlock_'+lastClickedDivId).css("display","none");
        $('#addTextBlock_'+lastClickedDivId).css("display","flex");
    }
}
/*
    IMAGE BLOCK
*/

$("#newArticle form #edition #sheet").on('change', '.addImageBlock input', function(){
    var imageBlockId = $(this).parent().attr('id').split('_')[1];
    /*console.log(imageBlockId);
    console.log($(this));*/
    previewImage($(this), imageBlockId);
    $(this).parent().css('display','none');
    $('#newArticle form #edition #sheet #imageBlock_'+imageBlockId).css('display', 'inline');

    
});

$("#newArticle form #edition #sheet").on('change', '.imageBlock input', function(){
    var imageBlockId = $(this).parent().attr('id').split('_')[1];
    /*console.log(imageBlockId);
    console.log($(this));*/
    previewImage($(this), imageBlockId);
    $(this).parent().css('display','none');
    $('#newArticle form #edition #sheet #imageBlock_'+imageBlockId).css('display', 'inline');

    
});

$("#newArticle #actionButtonBlock #addImageButton").click(function(){
    var newId= $('#newArticle form #edition #sheet .addImageBlock').length+1;
    //console.log(newId);
    $("#newArticle form #edition #sheet").append("<div class='addImageBlock' id='addImageBlock_"+newId+"'><label for='image"+newId+"'><svg version='1.1' id='Capa_1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' x='0px' y='0px' viewBox='0 0 58 58' style='enable-background:new 0 0 58 58;' xml:space='preserve'><g><path d='M57,6H1C0.448,6,0,6.447,0,7v44c0,0.553,0.448,1,1,1h56c0.552,0,1-0.447,1-1V7C58,6.447,57.552,6,57,6z M56,50H2V8h54V50z'/><path d='M16,28.138c3.071,0,5.569-2.498,5.569-5.568C21.569,19.498,19.071,17,16,17s-5.569,2.498-5.569,5.569C10.431,25.64,12.929,28.138,16,28.138z M16,19c1.968,0,3.569,1.602,3.569,3.569S17.968,26.138,16,26.138s-3.569-1.601-3.569-3.568S14.032,19,16,19z'/><path d='M7,46c0.234,0,0.47-0.082,0.66-0.249l16.313-14.362l10.302,10.301c0.391,0.391,1.023,0.391,1.414,0s0.391-1.023,0-1.414l-4.807-4.807l9.181-10.054l11.261,10.323c0.407,0.373,1.04,0.345,1.413-0.062c0.373-0.407,0.346-1.04-0.062-1.413l-12-11c-0.196-0.179-0.457-0.268-0.72-0.262c-0.265,0.012-0.515,0.129-0.694,0.325l-9.794,10.727l-4.743-4.743c-0.374-0.373-0.972-0.392-1.368-0.044L6.339,44.249c-0.415,0.365-0.455,0.997-0.09,1.412C6.447,45.886,6.723,46,7,46z'/></g></svg><p>Add an image</p><button type='button' class='deleteButton'>x</button></label><input id='image"+newId+"' name='image"+newId+"' type='file'/></div><div class='imageBlock' id='imageBlock_"+newId+"'><img src='#'/><button type='button' class='deleteButton'>x</button><label for='editImage"+newId+"'>change</label><input id='editImage"+newId+"' name='editImage"+newId+"' type='file'/></div>");
});

function previewImage(input, imageBlockId) {
    var oFReader = new FileReader();
    oFReader.readAsDataURL(input.get(0).files[0]);

    oFReader.onload = function (oFREvent) {
         $('#newArticle form #edition #sheet #imageBlock_'+imageBlockId+' img').attr('src', oFREvent.target.result);
    };
};

/*
    DELETE BUTTON
*/
$("#newArticle form #edition #sheet").on("click", '.deleteButton', function(){
    var deletedDivId = $(this).parent().attr("id");
    if(deletedDivId != undefined && (deletedDivId.includes("textBlock") || deletedDivId.includes("addTextBlock"))){
        deletedDivId = deletedDivId.split('_')[1];
        $("#textBlock_"+deletedDivId).remove();
        $("#addTextBlock_"+deletedDivId).remove();
    }else{
        if($(this).parent().attr("class") != undefined && $(this).parent().attr("class").includes("imageBlock")){
            deletedDivId = $(this).parent().attr("id").split('_')[1];
        }else{
            deletedDivId = $(this).parent().parent().attr("id").split('_')[1];
        }
        $("#imageBlock_"+deletedDivId).remove();
        $("#addImageBlock_"+deletedDivId).remove();
    }
});


/*
    SUBMIT POST ARTICLE BUTTON
*/
$("#newArticle form #postArticleSubmit").on("click", function(){
    console.log("click lolaaaa");
    //Récup infos global article
    $titleInput = $('#newArticle form #informationsForm input[name="articleTitle"]');
    $authorInput = $('#newArticle form #informationsForm input[name="articleAuthor"]');
    $dateInput = $('#newArticle form #informationsForm input[name="articleDate"]');
    
    var articleDatas = new Array();
    $title = $titleInput.val();
    $author = $authorInput.val();
    $date = $dateInput.val();
    
    $anInputIsNotCompleted = false;
    if($title.trim() == ''){
        $anInputIsNotCompleted = true;
        $titleInput.css('background-color', '#da0013');
    }
    if($author.trim() == ''){
        $anInputIsNotCompleted = true;
        $authorInput.css('background-color', '#da0013');
    }
    if($date.trim() == ''){
        $anInputIsNotCompleted = true;
        $dateInput.css('background-color', '#da0013');
    }
    
    if(!$anInputIsNotCompleted){
        articleDatas.push($title);
        articleDatas.push($author);
        articleDatas.push($date);
        console.log($('#newArticle form #informationsForm input[name="articleDate"]').val());
        //Récupération de tout les éléments.
        var articleContent = new Array();

        $("#newArticle form #edition #sheet>*").each(function(index){
            if($(this).attr('class') != undefined && $(this).attr('class') == 'textBlock' && $(this).find('textarea').val().trim() != ''){
                $text = $(this).find('textarea').val();
                console.log(index+" - text :: "+$text);
                $oneContent = ['text',$(this).find('textarea').val()];
                articleContent.push($oneContent);
            }else if($(this).attr('class') != undefined && $(this).attr('class') == 'imageBlock' && $(this).find('img')[0].src.includes('#') == false){
                console.log(index+' - image : '+$(this).find('img')[0].src);
                $oneContent = ['image',$(this).find('img')[0].src];
                articleContent.push($oneContent);
            }
        });
        var button = $(this);
        var buttonHover = $("#newArticle form #postArticleSubmit:hover");
        $.ajax({
            type : "POST",
            url: "new_article_submit.php",
            data: {articleContent: articleContent, articleDatas: articleDatas},
            beforeSend: function(xhr){
                button.html("Please wait...");
            },
            error: function(data){
                console.log(data.status);
                if(data.status == '200'){
                    button.css('background-color', 'lightgrey');
                    button.prop('disabled', true);
                    button.html("Article posté.");
                    buttonHover.css('cursor', 'auto');
                }else{
                    button.html(data.status);
                }

            }
        });
        console.log("fin de la méthode");
    }
   
});

$("#newArticle form #informationsForm input").on("click", function(){
    if($(this).attr('type')=='text' || $(this).attr('type')=='date'){
        $(this).css('background-color', 'white');
    }
});


//Footer
function correctFooterPosition(body){
    if (body.height()+$('footer').height() > $(window).height()) {
        $('footer').css('position', 'relative');
        $('footer').css('bottom', 'auto'); 
        $('footer').css('left', 'auto'); 
    }else{
        $('footer').css('position', 'absolute'); 
        $('footer').css('bottom', '0'); 
        $('footer').css('left', '0'); 
    }
}























