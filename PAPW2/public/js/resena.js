   /* $(document).ready(function(){

        $(".post .thumb").mouseover(function(){
            $(this).animate({"width":"35%"});
        }).mouseout(function(){ 
            $(this).animate({"width":"30%"}); 
        }); 

    });*/

    $(document).ready(function(){

    var ancho = $(window).width();
 
    if(ancho<440)
    {
        $(".posts2").removeClass("col-xs-6");
        $(".posts2").toggleClass("col-xs-12");
    }
    else
    {
        $(".posts2").removeClass("col-xs-12");
        $(".posts2").toggleClass("col-xs-6");
    }

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

