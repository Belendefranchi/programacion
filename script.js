function actualizar(){location.reload(true);}
setInterval("actualizar()",10000);


function color() {

    let L1Lun__tipo = document.getElementById("L1Lun__tipo").textContent;
    let L2Lun__tipo = document.getElementById("L2Lun__tipo").textContent;
    let L3Lun__tipo = document.getElementById("L3Lun__tipo").textContent;
    let L4Lun__tipo = document.getElementById("L4Lun__tipo").textContent;

    switch (L1Lun__tipo){
        case "PESADA":
            document.getElementById("L1Lun__tipo").style.color = "black";
            break;
        case "LIVIANA":
            document.getElementById("L1Lun__tipo").style.color = "green";
            break;
        case "GALLO":
            document.getElementById("L1Lun__tipo").style.color = "red";
            break;
        case "POLLO":
            document.getElementById("L1Lun__tipo").style.color = "yellow";
            break;
    }

    switch (L2Lun__tipo){
        case "PESADA":
            document.getElementById("L2Lun__tipo").style.color = "black";
            break;
        case "LIVIANA":
            document.getElementById("L2Lun__tipo").style.color = "green";
            break;
        case "GALLO":
            document.getElementById("L2Lun__tipo").style.color = "red";
            break;
        case "POLLO":
            document.getElementById("L2Lun__tipo").style.color = "yellow";
            break;
    }

    switch (L3Lun__tipo){
        case "PESADA":
            document.getElementById("L3Lun__tipo").style.color = "black";
            break;
        case "LIVIANA":
            document.getElementById("L3Lun__tipo").style.color = "green";
            break;
        case "GALLO":
            document.getElementById("L3Lun__tipo").style.color = "red";
            break;
        case "POLLO":
            document.getElementById("L3Lun__tipo").style.color = "yellow";
            break;
    }

    switch (L4Lun__tipo){
        case "PESADA":
            document.getElementById("L4Lun__tipo").style.color = "black";
            break;
        case "LIVIANA":
            document.getElementById("L4Lun__tipo").style.color = "green";
            break;
        case "GALLO":
            document.getElementById("L4Lun__tipo").style.color = "red";
            break;
        case "POLLO":
            document.getElementById("L4Lun__tipo").style.color = "yellow";
            break;
    }

    let L1Lun__proceso = document.getElementById("L1Lun__proceso").textContent;
    let L2Lun__proceso = document.getElementById("L2Lun__proceso").textContent;
    let L3Lun__proceso = document.getElementById("L3Lun__proceso").textContent;
    let L4Lun__proceso = document.getElementById("L4Lun__proceso").textContent;

    switch (L1Lun__proceso){
        case "ENTERA":
            document.getElementById("L1Lun__proceso").style.color = "red";
            break;
        case "TROZADA":
            document.getElementById("L1Lun__proceso").style.color = "green";
            break;
        case "ENTERO":
            document.getElementById("L1Lun__proceso").style.color = "red";
            break;
        case "TROZADO":
            document.getElementById("L1Lun__proceso").style.color = "green";
            break;
        case "FASON":
            document.getElementById("L1Lun__proceso").style.color = "red";
        break;
    }

    switch (L2Lun__proceso){
        case "ENTERA":
            document.getElementById("L2Lun__proceso").style.color = "red";
            break;
        case "TROZADA":
            document.getElementById("L2Lun__proceso").style.color = "green";
            break;
        case "ENTERO":
            document.getElementById("L2Lun__proceso").style.color = "red";
            break;
        case "TROZADO":
            document.getElementById("L2Lun__proceso").style.color = "green";
            break;
        case "FASON":
            document.getElementById("L2Lun__proceso").style.color = "red";
        break;
    }

    switch (L3Lun__proceso){
        case "ENTERA":
            document.getElementById("L3Lun__proceso").style.color = "red";
            break;
        case "TROZADA":
            document.getElementById("L3Lun__proceso").style.color = "green";
            break;
        case "ENTERO":
            document.getElementById("L3Lun__proceso").style.color = "red";
            break;
        case "TROZADO":
            document.getElementById("L3Lun__proceso").style.color = "green";
            break;
        case "FASON":
            document.getElementById("L3Lun__proceso").style.color = "red";
        break;
    }

    switch (L4Lun__proceso){
        case "ENTERA":
            document.getElementById("L4Lun__proceso").style.color = "red";
            break;
        case "TROZADA":
            document.getElementById("L4Lun__proceso").style.color = "green";
            break;
        case "ENTERO":
            document.getElementById("L4Lun__proceso").style.color = "red";
            break;
        case "TROZADO":
            document.getElementById("L4Lun__proceso").style.color = "green";
            break;
        case "FASON":
            document.getElementById("L4Lun__proceso").style.color = "red";
        break;
    }

}
window.onload = color;

