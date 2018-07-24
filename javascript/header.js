$("header a").click(function(){
    $("header .headerLink").removeClass('navIsActive');
});

$("header .headerLink").click(function(){
    console.log($(this).index());
    $("header .headerLink").removeClass('navIsActive');
    $(this).addClass('navIsActive');
});

