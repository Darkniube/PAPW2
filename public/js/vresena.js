$(".clearfix").hover(function(){
    $("#post-re").fadeIn(500);
     }, function(){
    $("#post-re").fadeOut(500);    
});

$("#post-edit-button").click(function(){

    var text = $("h2.post-title").text();
    var text2 = $("p.post-contenido").text();
        
    $("#edit-titulo").val(text);
        
    $("#edit-contenido").val(text2);
});


    function archivo(evt) {
        var files = evt.target.files; // FileList object     
        // Obtenemos la imagen del campo "file".
        for (var i = 0, f; f = files[i]; i++) {
            //Solo admitimos imágenes.
            if (!f.type.match('image.*')) {
              continue;
            }    
            var reader = new FileReader();   
                reader.onload = (function(theFile) {
                    return function(e) {
                                // Insertamos la imagen
                    document.getElementById("list").innerHTML = ['<img class="preview" src="', e.target.result,'" title="', escape(theFile.name), '"/>'].join('');
                    };
                })(f);            
            reader.readAsDataURL(f);
        }
    }
                   
    document.getElementById('imagen').addEventListener('change', archivo, false);