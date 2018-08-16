/*
    ACTION BUTTONS
*/

var stickyButtonsBlock = $('#newArticle #actionButtonBlock');

//sticky buttons top coordinate
var stickyButtonsBlockTop = stickyButtonsBlock.scrollTop();
var editionBlock = $('#newArticle form #edition');

//top coordinate of edition block
var editionBlockTop = editionBlock.position().top;

//Init sticky buttons position
stickyButtonsBlock.css("top", editionBlockTop);
stickyButtonsBlock.css("left", editionBlock.position().left - stickyButtonsBlock.width() - 10);

var isFixed = false;
var informationsFormBlock = $('#newArticle #informationsForm');


//When window is resize
$(window).resize(function () {
  if (!isFixed) {
    editionBlockTop = editionBlock.position().top;
    stickyButtonsBlock.css("top", editionBlockTop);
    stickyButtonsBlock.css("left", editionBlock.position().left - stickyButtonsBlock.width() - 10);
  }
});

//When user scroll the page
$(window).scroll(function () {
  //current scroll
  var scroll = $(window).scrollTop();

  //if sticky button are not fixed
  if (!isFixed) {
    //set params as the beginning
    editionBlockTop = editionBlock.position().top;
    stickyButtonsBlock.css("top", editionBlockTop);
  }

  //get top position of sticky buttons
  stickyButtonsBlockTop = stickyButtonsBlock.position().top;

  //get position to stick the button
  var positionToStick = editionBlockTop - parseInt(informationsFormBlock.css("margin-bottom")) - $("header").height();

  //test if the current scroll is bigger or equal than position to stick
  if (scroll >= positionToStick) {
    //set sticky properties
    stickyButtonsBlock.css("position", "fixed");
    stickyButtonsBlock.css("top", parseInt(informationsFormBlock.css("margin-bottom")) + $("header").height());
    stickyButtonsBlock.css("left", editionBlock.position().left - stickyButtonsBlock.width() - 10);
    //console.log(stickyButtonsBlock.css("position"));
    isFixed = true;
  } else {
    stickyButtonsBlock.css("position", "absolute");
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
$('#newArticle form #edition #sheet').on("click", '.addTextBlock', function () {
  makeReappearaddH2Div();
  makeReappearaddTextDiv();

  //console.log($(this));

  lastClickedDiv = $(this);
  var textBlockId = $(this).attr('id').split('_')[1];
  lastClickedDivId = textBlockId;
  $(this).css("display", "none");
  $('#textBlock_' + textBlockId).css("display", "inline");
  currentFocusedTextArea = $('#textBlock_' + textBlockId).find('textarea');
  currentFocusedTextArea.focus();
  //console.log('cliked : '+lastClickedDivId);
});

$('#newArticle form #edition #sheet').on("mousedown", '.textBlock textarea', function () {
  if ($(this).parent().attr('id').split('_')[1] != lastClickedDivId) {
    currentFocusedTextArea.blur();
  }
  makeReappearaddH2Div();
  makeReappearaddTextDiv();
  lastClickedDivId = $(this).parent().attr('id').split('_')[1];
  currentFocusedTextArea = $('#textBlock_' + lastClickedDivId).find('textarea');
  //console.log("click in textarea ! "+lastClickedDivId);
});

$(document).on("click", function () {
  makeReappearaddTextDiv();
});

//Au clique du bouton "ajouter un texte", ajoute un bloc html de texte 
$("#newArticle #actionButtonBlock #addTextButton").click(function () {
  var newId = $('#newArticle form #edition #sheet .addTextBlock').length + 1;
  console.log(newId);
  $("#newArticle form #edition #sheet").append("<div class='addTextBlock' id='addTextBlock_" + newId + "'><svg version='1.1' id='Capa_1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' x='0px' y='0px' viewBox='0 0 512 512' style='enable-background:new 0 0 512 512;' xml:space='preserve'><g><path d='M0,80h512v32H0V80z M0,144h352v32H0V144z M0,208h512v32H0V208z M0,272h352v32H0V272z M0,336h512v32H0V336z M0,400h352v32H0V400z'/></g></svg><p>Write your news here</p><button type='button' class='deleteButton'>x</button></div><div class='textBlock' id='textBlock_" + newId + "'><textarea name='textarea1'></textarea><button type='button' class='deleteButton'>x</button></div>");
});


function makeReappearaddTextDiv() {
  //console.log('reappearition ? '+lastClickedDivId);
  if (currentFocusedTextArea != null && !currentFocusedTextArea.is(":focus") && currentFocusedTextArea.val() == "") {
    //console.log("make reappear the div bro !");
    $('#textBlock_' + lastClickedDivId).css("display", "none");
    $('#addTextBlock_' + lastClickedDivId).css("display", "flex");
  }
}
/*
    IMAGE BLOCK
*/

$("#newArticle form #edition #sheet").on('change', '.addImageBlock input', function () {
  var imageBlockId = $(this).parent().attr('id').split('_')[1];
  /*console.log(imageBlockId);
  console.log($(this));*/
  previewImage($(this), imageBlockId);
  $(this).parent().css('display', 'none');
  $('#newArticle form #edition #sheet #imageBlock_' + imageBlockId).css('display', 'inline');


});

$("#newArticle form #edition #sheet").on('change', '.imageBlock input', function () {
  var imageBlockId = $(this).parent().attr('id').split('_')[1];
  /*console.log(imageBlockId);
  console.log($(this));*/
  previewImage($(this), imageBlockId);
  $(this).parent().css('display', 'none');
  $('#newArticle form #edition #sheet #imageBlock_' + imageBlockId).css('display', 'inline');


});

$("#newArticle #actionButtonBlock #addImageButton").click(function () {
  var newId = $('#newArticle form #edition #sheet .addImageBlock').length + 1;
  //console.log(newId);
  $("#newArticle form #edition #sheet").append("<div class='addImageBlock' id='addImageBlock_" + newId + "'><label for='image" + newId + "'><svg version='1.1' id='Capa_1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' x='0px' y='0px' viewBox='0 0 58 58' style='enable-background:new 0 0 58 58;' xml:space='preserve'><g><path d='M57,6H1C0.448,6,0,6.447,0,7v44c0,0.553,0.448,1,1,1h56c0.552,0,1-0.447,1-1V7C58,6.447,57.552,6,57,6z M56,50H2V8h54V50z'/><path d='M16,28.138c3.071,0,5.569-2.498,5.569-5.568C21.569,19.498,19.071,17,16,17s-5.569,2.498-5.569,5.569C10.431,25.64,12.929,28.138,16,28.138z M16,19c1.968,0,3.569,1.602,3.569,3.569S17.968,26.138,16,26.138s-3.569-1.601-3.569-3.568S14.032,19,16,19z'/><path d='M7,46c0.234,0,0.47-0.082,0.66-0.249l16.313-14.362l10.302,10.301c0.391,0.391,1.023,0.391,1.414,0s0.391-1.023,0-1.414l-4.807-4.807l9.181-10.054l11.261,10.323c0.407,0.373,1.04,0.345,1.413-0.062c0.373-0.407,0.346-1.04-0.062-1.413l-12-11c-0.196-0.179-0.457-0.268-0.72-0.262c-0.265,0.012-0.515,0.129-0.694,0.325l-9.794,10.727l-4.743-4.743c-0.374-0.373-0.972-0.392-1.368-0.044L6.339,44.249c-0.415,0.365-0.455,0.997-0.09,1.412C6.447,45.886,6.723,46,7,46z'/></g></svg><p>Add an image</p><button type='button' class='deleteButton'>x</button></label><input id='image" + newId + "' name='image" + newId + "' type='file'/></div><div class='imageBlock' id='imageBlock_" + newId + "'><img src='#'/><button type='button' class='deleteButton'>x</button><label for='editImage" + newId + "'>change</label><input id='editImage" + newId + "' name='editImage" + newId + "' type='file'/></div>");
});

function previewImage(input, imageBlockId) {
  var oFReader = new FileReader();
  oFReader.readAsDataURL(input.get(0).files[0]);

  oFReader.onload = function (oFREvent) {
    $('#newArticle form #edition #sheet #imageBlock_' + imageBlockId + ' img').attr('src', oFREvent.target.result);
  };
};

/*
    H2 BLOCK
*/

var currentFocusedInput = null;

$('#newArticle form #edition #sheet').on("click", '.addH2Block', function () {

  makeReappearaddH2Div();
  makeReappearaddTextDiv();

  // console.log($(this));

  lastClickedDiv = $(this);
  var h2BlockId = $(this).attr('id').split('_')[1];
  lastClickedDivId = h2BlockId;

  $(this).css("display", "none");
  $('#h2Block_' + h2BlockId).css("display", "inline");

  currentFocusedInput = $('#h2Block_' + h2BlockId).find('input');
  currentFocusedInput.focus();
  // console.log('cliked : '+lastClickedDivId);
});

$('#newArticle form #edition #sheet').on("mousedown", '.h2Block input', function () {
  if ($(this).parent().attr('id').split('_')[1] != lastClickedDivId) {
    currentFocusedInput.blur();
  }
  makeReappearaddH2Div();
  makeReappearaddTextDiv();
  lastClickedDivId = $(this).parent().attr('id').split('_')[1];
  currentFocusedInput = $('#h2Block_' + lastClickedDivId).find('input');
  // console.log("click in input ! "+lastClickedDivId);
});

$(document).on("click", function () {
  makeReappearaddH2Div();
});

//Au clique du bouton "ajouter un h2", ajoute un bloc h2 
$("#newArticle #actionButtonBlock #addH2Button").click(function () {
  var newId = $('#newArticle form #edition #sheet .addH2Block').length + 1;
  // console.log("newiD : ",newId);
  $("#newArticle form #edition #sheet").append("<div class='addH2Block' id='addH2Block_" + newId + "'><svg xmlns='http://www.w3.org/2000/svg' viewBox='8842.593 -2291.594 64.786 53.594'><g id='h2' transform='translate(8842 -2338.26)'><path id='Tracé_28' data-name='Tracé 28' class='cls-1' d='M2.593-21.167H6.257V-5.786H24.929V-21.167h3.665V15.5H24.929V-2.2H6.257V15.5H2.593ZM38.965-9.7H35.45a12.592,12.592,0,0,1,3.627-8.907,11.658,11.658,0,0,1,8.588-3.483,10.822,10.822,0,0,1,8.189,3.267,10.774,10.774,0,0,1,3.129,7.706,12.014,12.014,0,0,1-1.492,5.849A42.1,42.1,0,0,1,51.7,2.127l-9.135,9.837H59.481V15.5h-24.9L48.587.362a45.243,45.243,0,0,0,5.547-6.774,9.118,9.118,0,0,0,1.284-4.653,7.16,7.16,0,0,0-2.306-5.327,7.809,7.809,0,0,0-5.646-2.233,7.907,7.907,0,0,0-5.846,2.343A10.074,10.074,0,0,0,38.965-9.7Z' transform='translate(-2 68.757)'/><path id='Tracé_29' data-name='Tracé 29' class='cls-1' d='M0,112.189H64.379v4.024H0Zm0,8.047H44.26v4.024H0Z' transform='translate(1 -24)'/></g></svg><p>Sub Title</p><button type='button' class='deleteButton'>x</button></div><div class='h2Block' id='h2Block_"+newId+"'><input type='text' name='subtitleInput"+newId+"'/><button type='button' class='deleteButton'>x</button></div>");
});


function makeReappearaddH2Div() {
  // console.log('reappearition ? '+lastClickedDivId);
  if (currentFocusedInput != null && !currentFocusedInput.is(":focus") && currentFocusedInput.val() == "") {
    //console.log("make reappear the div bro !");
    $('#h2Block_' + lastClickedDivId).css("display", "none");
    $('#addH2Block_' + lastClickedDivId).css("display", "flex");
  }
}

/*
    DELETE BUTTON
*/
$("#newArticle form #edition #sheet").on("click", '.deleteButton', function () {
  //If it's a text
  if(($(this).parent().attr("class") != undefined && $(this).parent().attr("class").includes("textBlock")) || ($(this).parent().attr("class") != undefined && $(this).parent().attr("class").includes("addTextBlock"))){
    // console.log("you try to delete a text")
    const deletedDivId = $(this).parent().attr("id").split('_')[1]
    $("#textBlock_" + deletedDivId).remove();
    $("#addTextBlock_" + deletedDivId).remove();
  }else if(($(this).parent().attr("class") != undefined && $(this).parent().attr("class").includes("imageBlock")) || ($(this).parent().parent().attr("class") != undefined && $(this).parent().parent().attr("class").includes("addImageBlock"))){
    // console.log("you try to delete an image")
    let deletedDivId = -1;
    if($(this).parent().attr("class") != undefined){
      deletedDivId = $(this).parent().attr("id").split('_')[1];
    }else{
      deletedDivId = $(this).parent().parent().attr("id").split('_')[1];
    }
    $("#imageBlock_" + deletedDivId).remove();
    $("#addImageBlock_" + deletedDivId).remove();
  }else if(($(this).parent().attr("class") != undefined && $(this).parent().attr("class").includes("h2Block")) || ($(this).parent().attr("class") != undefined && $(this).parent().attr("class").includes("addH2Block"))){
    // console.log("you try to delete an h2")
    const deletedDivId = $(this).parent().attr("id").split('_')[1]
    $("#h2Block_" + deletedDivId).remove();
    $("#addH2Block_" + deletedDivId).remove();
  }
});


/*
    SUBMIT POST ARTICLE BUTTON
*/
$("#newArticle form #postArticleSubmit").on("click", function () {
  console.log("click lolaaaa");
  //Récup infos global article
  $titleInput = $('#newArticle form #informationsForm input[name="articleTitle"]');
  $authorInput = $('#newArticle form #informationsForm input[name="articleAuthor"]');
  $dateInput = $('#newArticle form #informationsForm input[name="articleDate"]');

  var articleDatas = new Array();
  $title = $titleInput.val();
  $author = $authorInput.val();
  $date = $dateInput.val();

  //Test if there is a value in inputs

  $anInputIsNotCompleted = false;
  if ($title.trim() == '') {
    $anInputIsNotCompleted = true;
    $titleInput.css('background-color', '#FF4747');
  }
  if ($author.trim() == '') {
    $anInputIsNotCompleted = true;
    $authorInput.css('background-color', '#FF4747');
  }
  if ($date.trim() == '') {
    $anInputIsNotCompleted = true;
    $dateInput.css('background-color', '#FF4747');
  }

  // if all inputs are completed
  if (!$anInputIsNotCompleted) {
    articleDatas.push($title);
    articleDatas.push($author);
    articleDatas.push($date);
    console.log($('#newArticle form #informationsForm input[name="articleDate"]').val());

    //Récupération de tout les éléments de l'article
    var articleContent = new Array();

    $("#newArticle form #edition #sheet>*").each(function (index) {
      if ($(this).attr('class') != undefined && $(this).attr('class') == 'textBlock' && $(this).find('textarea').val().trim() != '') {
        // TEXT
        $text = $(this).find('textarea').val();
        console.log(index + " - text :: " + $text);
        $oneContent = ['text', $(this).find('textarea').val()];
        articleContent.push($oneContent);
      } else if ($(this).attr('class') != undefined && $(this).attr('class') == 'imageBlock' && $(this).find('img')[0].src.includes('#') == false) {
        // IMAGE
        console.log(index + ' - image : ' + $(this).find('img')[0].src);
        $oneContent = ['image', $(this).find('img')[0].src];
        articleContent.push($oneContent);
      } else if ($(this).attr('class') != undefined && $(this).attr('class') == 'h2Block' && $(this).find('input').val().trim() != ''){
        // H2
        $text = $(this).find('input').val();
        console.log(index + " - h2 :: " + $text);
        $oneContent = ['h2', $(this).find('input').val()];
        articleContent.push($oneContent);
      }
    });
    var button = $(this);
    var buttonHover = $("#newArticle form #postArticleSubmit:hover");
    $.ajax({
      type: "POST",
      url: "new_article_submit.php",
      data: {
        articleContent: articleContent,
        articleDatas: articleDatas
      },
      beforeSend: function (xhr) {
        button.html("Please wait...");
      },
      error: function (data) {
        console.log(data.status);
        if (data.status == '200') {
          button.css('background-color', 'lightgrey');
          button.prop('disabled', true);
          button.html("Article posté.");
          buttonHover.css('cursor', 'auto');
        } else {
          button.html(data.status);
        }

      }
    });
    console.log("fin de la méthode");
  }

});

$("#newArticle form #informationsForm input").on("click", function () {
  if ($(this).attr('type') == 'text' || $(this).attr('type') == 'date') {
    $(this).css('background-color', 'white');
  }
});


//Footer
function correctFooterPosition(body) {
  if (body.height() + $('footer').height() > $(window).height()) {
    $('footer').css('position', 'relative');
    $('footer').css('bottom', 'auto');
    $('footer').css('left', 'auto');
  } else {
    $('footer').css('position', 'absolute');
    $('footer').css('bottom', '0');
    $('footer').css('left', '0');
  }
}