<script type="text/javascript">
    /************************************************
     Listas dependientes por Tunait!(5/1/04)
     Si quieres usar este script en tu sitio
     eres libre de hacerlo con la condici�n
     de que permanezcan intactas estas l�neas,
     osea, los cr�ditos.
     No autorizo a publicar y ofrecer el c�digo
     en sitios de script sin previa autorizaci�n
     Si quieres publicarlo, por favor, contacta conmigo.
     http://javascript.tunait.com/
     tunait@yahoo.com
     *************************************************/
    function slctr(texto,valor){
        this.texto = texto
        this.valor = valor
    }
    var herramientas=new Array()
    herramientas[0] = new slctr('- -Herramientas- -')
    herramientas[1] = new slctr("Jard�n",'jardin')
    herramientas[2] = new slctr("fontaner�a",'fontaneria')


    var muebles=new Array()
    muebles[0] = new slctr('- -Muebles- -')
    muebles[1] = new slctr("Sal�n",'salon')
    muebles[2] = new slctr("dormitorio",'dormitorio')

    //*******Nietos*******************
    var jardin = new Array()
    jardin[0] = new slctr('- -Jard�n- -')
    jardin[1] = new slctr("podadora",null)
    jardin[2] = new slctr("segadora" ,null)

    var fontaneria = new Array()
    fontaneria[0] = new slctr('- -Fontaner�a- -')
    fontaneria[1] = new slctr("llave inglesa",null)
    fontaneria[2] = new slctr("llave fija",null)

    var salon = new Array()
    salon[0] = new slctr('- -Sal�n- -')
    salon[1] = new slctr("Mesa",null)
    salon[2] = new slctr("silla" ,null)

    var dormitorio = new Array()
    dormitorio[0] = new slctr('- -Dormitorio- -')
    dormitorio[1] = new slctr("cama",null)
    dormitorio[2] = new slctr("mesita" ,null)

    function slctryole(cual,donde){
        if(cual.selectedIndex != 0){
            donde.length=0
            cual = eval(cual.value)
            for(m=0;m<cual.length;m++){
                var nuevaOpcion = new Option(cual[m].texto);
                donde.options[m] = nuevaOpcion;
                if(cual[m].valor != null){
                    donde.options[m].value = cual[m].valor
                }
                else{
                    donde.options[m].value = cual[m].texto
                }
            }
        }
    }
</script>