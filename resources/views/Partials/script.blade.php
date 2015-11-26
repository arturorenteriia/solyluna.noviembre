<script>

    function slctr(texto,valor){
        this.texto = texto
        this.valor = valor
    }

    var Mexico=new Array()
    Mexico[0] = new slctr('- -Estado- -')
    Mexico[1] = new slctr("Jalisco",'Jalisco')
    Mexico[2] = new slctr("Nayarit",'Nayarit')


    var EUA=new Array()
    EUA[0] = new slctr('- -State- -')
    EUA[1] = new slctr("California",'California')
    EUA[2] = new slctr("Louisiana",'Louisiana')

    //*******Nietos*******************
    var Jalisco = new Array()
    Jalisco[0] = new slctr('- -Jalisco- -')
    Jalisco[1] = new slctr("Puerto Vallarta",51)

    var Nayarit = new Array()
    Nayarit[0] = new slctr('- -Nayarit- -')
    Nayarit[1] = new slctr("Bahia de banderas",52)

    var California = new Array()
    California[0] = new slctr('- -California- -')
    California[1] = new slctr("San Francisco",null)
    California[2] = new slctr("Palo alto" ,null)

    var Louisiana = new Array()
    Louisiana[0] = new slctr('- -Louisiana- -')
    Louisiana[1] = new slctr("Jacson",null)
    Louisiana[2] = new slctr("Alexandria" ,null)

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