$(document).ready(function(){
    $("#gravar").click(function(){//quando é clicado o "gravar"
        console.log("foi");
        let xht = new XMLHttpRequest();
        console.log(xht);

        xht.onload = function(){
            $("#resp").html(this.responseText);
        }

        xht.open("POST" ,"cadastro.php");//utiliza do method POST, passando as informações abaixo para o cadastro.php
        xht.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xht.send(
            "modelo="+$("#modelo").val()+"&"
            +"placa="+$("#placa").val()+"&"
            +"nome="+$("#nome").val()+"&"
            +"origem="+$("#origem").val()+"&"
            +"Litros="+$("#Litros").val()+"&"
            +"percorrido="+$("#percorrido").val()+"&"
            +"destino="+$("#destino").val()+"&"
            +"valor="+$("#valor").val()+"&"
            );
    });
});
