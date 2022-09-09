$(document).ready(function(){

    $("#gravar").click(function(){
        console.log("foi");
        let xht = new XMLHttpRequest();
        console.log(xht);

        xht.onload = function(){

            $("#resp").html(this.responseText);

        }

        xht.open("POST" ,"env.php");
        xht.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xht.send(
            "modelo="+$("#modelo").val()+"&"
            +"placa="+$("#placa").val()+"&"
            +"nome="+$("#nome").val()+"&"
            +"origem="+$("#origem").val()+"&"
            +"ltr="+$("#ltr").val()+"&"
            +"percorrido="+$("#percorrido").val()+"&"
            +"destino="+$("#destino").val()+"&"
            +"valor="+$("#valor").val()+"&"
                 
            );

    });

});
