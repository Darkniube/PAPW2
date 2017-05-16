$(".clearfix").hover(function(){
    $("#post-re").fadeIn(500);
     }, function(){
    $("#post-re").fadeOut(500);    
});

$("#post-edit-button").stop(true , true ).click(function(){

    var text = $("h2.post-title").text();
    var text2 = $("p.post-contenido").text();
        
    $("#edit-titulo").val(text);
        
    $("#edit-contenido").val(text2);
});