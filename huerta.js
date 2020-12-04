const PLANTAS = [
    "acelga amarilla",
    "acelga roja",
    "acelga verde",
    "ají cristal",
    "albahaca",
    "apio",
    "berenjena",
    "caléndula",
    "cebollin",
    "tomate cherry",
    "cilantro",
    "coliflor",
    "espinaca",
    "kale",
    "lechuga",
    "oregano",
    "perejil",
    "rabano",
    "rucula",
    "zapallo italiano"
]

const HUERTA = [
    document.getElementById("0"),
    document.getElementById("1"),
    document.getElementById("2"),
    document.getElementById("3"),
    document.getElementById("4"),
    document.getElementById("5"),
    document.getElementById("6"),
    document.getElementById("7"),
    document.getElementById("8"),
    document.getElementById("9"),
    document.getElementById("10"),
    document.getElementById("11"),
    document.getElementById("12"),
    document.getElementById("13"),
    document.getElementById("14"),
    document.getElementById("15")
]
const BOTONES = document.getElementById("huerta-botones");
const CARRO = document.getElementById("Carro");
var huertaBackEnd = []

function agregarPlanta(planta){
    if (huertaBackEnd.length < 16){
        huertaBackEnd.push(PLANTAS[planta]);
        recargarHuerta();
        if(huertaBackEnd.length == 16){
            BOTONES.classList.add('hide')
            CARRO.classList.remove('hide')
        }
    }
}

function eliminarPlanta(index){
    if(huertaBackEnd[index]){
       huertaBackEnd.splice(index, 1);
       BOTONES.classList.remove('hide');
       CARRO.classList.add("hide");
    }
    recargarHuerta()
    for (let i = 15; i >= huertaBackEnd.length; i--){
        HUERTA[i].innerHTML = "";
    } 
}

function recargarHuerta(){
    var botonCarro = document.getElementById("botonCarro");
    botonCarro.value = ""; 
    for (let i = 0; i < huertaBackEnd.length; i++){
        // HUERTA[i].innerHTML = `<p>${huertaBackEnd[i]}</p>`;
        // HUERTA[i].innerHTML = <img src='recursos/plantas/$result[$nombre].png' alt='$result[$nombre]'>;
        HUERTA[i].innerHTML = `<img src='recursos/plantas/${huertaBackEnd[i]}.png' alt='${huertaBackEnd[i]}' class='huerta-productos'>`;
        if (i === 0){
            botonCarro.value = `${huertaBackEnd[i]}`;
        } else {
            botonCarro.value = `${botonCarro.value}, ${huertaBackEnd[i]}`;
        }
    }
}
function elegirexposicion(expo){
    let parametros = {
        "exposicion" : expo
    }
    $.ajax({
        data: parametros,
        type: "post",
        url: "./componentes/huerto-exposicion.php",
        success: function(response){
            $('#huerta-botones').html(response);
        }
    })
    $.ajax({
        data: parametros,
        type: "post",
        url: "./componentes/plantas-exposicion.php",
        success: function(response){
            $('#fichas_wraper').html(response);
        }
    })
    if (expo === "sol"){
        $('#sol').addClass('buttonselected');
        $('#sol').removeClass('buttonunselected');
        $('#semi').addClass('buttonunselected');
        $('#sombra').addClass('buttonunselected');
    } else if (expo === "semi"){
        $('#sol').addClass('buttonunselected');
        $('#semi').addClass('buttonselected');
        $('#semi').removeClass('buttonunselected');
        $('#sombra').addClass('buttonunselected');
    } else {
        $('#sol').addClass('buttonunselected');
        $('#semi').addClass('buttonunselected');
        $('#sombra').addClass('buttonselected');
        $('#sombra').removeClass('buttonunselected');
    }
}