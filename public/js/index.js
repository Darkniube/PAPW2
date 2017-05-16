$(document).ready(function(){ 
    $(this).each(function(){
        $(".animate").css({"left":"-100000px", "position":"relative", "opacity": "0.0"});
        $(".ani1").animate({"left":"0px", "position":"static", "opacity": "1.0"},"slow", function(){
            $(".ani2").animate({"left":"0px", "position":"static", "opacity": "1.0"},"slow", function(){
                $(".ani3").animate({"left":"0px", "position":"static", "opacity": "1.0"},"slow");
            });
        });
    });
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
                    document.getElementById("imagen-pre").setAttribute("src", e.target.result);

                    };
                })(f);            
            reader.readAsDataURL(f);
        }
    }
                   
    document.getElementById('imagen').addEventListener('change', archivo, false);

        function registro() {
       var password, password2;

password = document.getElementById('contra');
password2 = document.getElementById('contra2');

    if(password.value !== password2.value)
    {
        alert('Las contraseñas no coinciden.');
        return false;
    }
    else
    {
         return true;
    }
    }