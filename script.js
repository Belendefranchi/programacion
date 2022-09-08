function color() {

/* ############################################################## */
/* ---------------------------LUNES------------------------------ */
/* ############################################################## */

    let L1Lun__tipo = document.getElementById("L1Lun__tipo").textContent;
    let L2Lun__tipo = document.getElementById("L2Lun__tipo").textContent;
    let L3Lun__tipo = document.getElementById("L3Lun__tipo").textContent;
    let L4Lun__tipo = document.getElementById("L4Lun__tipo").textContent;

    switch (L1Lun__tipo){
        case "PESADA":
            document.getElementById("L1Lun__tipo").style.color = "";
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
            document.getElementById("L2Lun__tipo").style.color = "";
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
            document.getElementById("L3Lun__tipo").style.color = "";
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
            document.getElementById("L4Lun__tipo").style.color = "";
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
            document.getElementById("L1Lun__proceso").style.backgroundColor = "white"
            document.getElementById("L1Lun__proceso").style.borderRadius = "10px"
            document.getElementById("L1Lun__proceso").style.color = "green";
            break;
        case "ENTERO":
            document.getElementById("L1Lun__proceso").style.color = "red";
            break;
        case "TROZADO":
            document.getElementById("L1Lun__proceso").style.backgroundColor = "white"
            document.getElementById("L1Lun__proceso").style.borderRadius = "10px"
            document.getElementById("L1Lun__proceso").style.color = "green";
            break;
        case "FASON":
            document.getElementById("L1Lun__proceso").style.backgroundColor = "white"
            document.getElementById("L1Lun__proceso").style.borderRadius = "10px"
            document.getElementById("L1Lun__proceso").style.color = "red";
        break;
    }

    switch (L2Lun__proceso){
        case "ENTERA":
            document.getElementById("L2Lun__proceso").style.color = "red";
            break;
        case "TROZADA":
            document.getElementById("L2Lun__proceso").style.backgroundColor = "white"
            document.getElementById("L2Lun__proceso").style.borderRadius = "10px"
            document.getElementById("L2Lun__proceso").style.color = "green";
            break;
        case "ENTERO":
            document.getElementById("L2Lun__proceso").style.color = "red";
            break;
        case "TROZADO":
            document.getElementById("L2Lun__proceso").style.backgroundColor = "white"
            document.getElementById("L2Lun__proceso").style.borderRadius = "10px"
            document.getElementById("L2Lun__proceso").style.color = "green";
            break;
        case "FASON":
            document.getElementById("L2Lun__proceso").style.backgroundColor = "white"
            document.getElementById("L2Lun__proceso").style.borderRadius = "10px"
            document.getElementById("L2Lun__proceso").style.color = "red";
        break;
    }

    switch (L3Lun__proceso){
        case "ENTERA":
            document.getElementById("L3Lun__proceso").style.color = "red";
            break;
        case "TROZADA":
            document.getElementById("L3Lun__proceso").style.backgroundColor = "white"
            document.getElementById("L3Lun__proceso").style.borderRadius = "10px"
            document.getElementById("L3Lun__proceso").style.color = "green";
            break;
        case "ENTERO":
            document.getElementById("L3Lun__proceso").style.color = "red";
            break;
        case "TROZADO":
            document.getElementById("L3Lun__proceso").style.backgroundColor = "white"
            document.getElementById("L3Lun__proceso").style.borderRadius = "10px"
            document.getElementById("L3Lun__proceso").style.color = "green";
            break;
        case "FASON":
            document.getElementById("L3Lun__proceso").style.backgroundColor = "white"
            document.getElementById("L3Lun__proceso").style.borderRadius = "10px"
            document.getElementById("L3Lun__proceso").style.color = "red";
        break;
    }

    switch (L4Lun__proceso){
        case "ENTERA":
            document.getElementById("L4Lun__proceso").style.color = "red";
            break;
        case "TROZADA":
            document.getElementById("L4Lun__proceso").style.backgroundColor = "white"
            document.getElementById("L4Lun__proceso").style.borderRadius = "10px"
            document.getElementById("L4Lun__proceso").style.color = "green";
            break;
        case "ENTERO":
            document.getElementById("L4Lun__proceso").style.color = "red";
            break;
        case "TROZADO":
            document.getElementById("L4Lun__proceso").style.backgroundColor = "white"
            document.getElementById("L4Lun__proceso").style.borderRadius = "10px"
            document.getElementById("L4Lun__proceso").style.color = "green";
            break;
        case "FASON":
            document.getElementById("L4Lun__proceso").style.backgroundColor = "white"
            document.getElementById("L4Lun__proceso").style.borderRadius = "10px"
            document.getElementById("L4Lun__proceso").style.color = "red";
        break;
    }

/* ############################################################## */
/* ---------------------------MARTES------------------------------ */
/* ############################################################## */

let L1Mar__tipo = document.getElementById("L1Mar__tipo").textContent;
let L2Mar__tipo = document.getElementById("L2Mar__tipo").textContent;
let L3Mar__tipo = document.getElementById("L3Mar__tipo").textContent;
let L4Mar__tipo = document.getElementById("L4Mar__tipo").textContent;

switch (L1Mar__tipo){
    case "PESADA":
        document.getElementById("L1Mar__tipo").style.color = "";
        break;
    case "LIVIANA":
        document.getElementById("L1Mar__tipo").style.color = "green";
        break;
    case "GALLO":
        document.getElementById("L1Mar__tipo").style.color = "red";
        break;
    case "POLLO":
        document.getElementById("L1Mar__tipo").style.color = "yellow";
        break;
}

switch (L2Mar__tipo){
    case "PESADA":
        document.getElementById("L2Mar__tipo").style.color = "";
        break;
    case "LIVIANA":
        document.getElementById("L2Mar__tipo").style.color = "green";
        break;
    case "GALLO":
        document.getElementById("L2Mar__tipo").style.color = "red";
        break;
    case "POLLO":
        document.getElementById("L2Mar__tipo").style.color = "yellow";
        break;
}

switch (L3Mar__tipo){
    case "PESADA":
        document.getElementById("L3Mar__tipo").style.color = "";
        break;
    case "LIVIANA":
        document.getElementById("L3Mar__tipo").style.color = "green";
        break;
    case "GALLO":
        document.getElementById("L3Mar__tipo").style.color = "red";
        break;
    case "POLLO":
        document.getElementById("L3Mar__tipo").style.color = "yellow";
        break;
}

switch (L4Mar__tipo){
    case "PESADA":
        document.getElementById("L4Mar__tipo").style.color = "";
        break;
    case "LIVIANA":
        document.getElementById("L4Mar__tipo").style.color = "green";
        break;
    case "GALLO":
        document.getElementById("L4Mar__tipo").style.color = "red";
        break;
    case "POLLO":
        document.getElementById("L4Mar__tipo").style.color = "yellow";
        break;
}

let L1Mar__proceso = document.getElementById("L1Mar__proceso").textContent;
let L2Mar__proceso = document.getElementById("L2Mar__proceso").textContent;
let L3Mar__proceso = document.getElementById("L3Mar__proceso").textContent;
let L4Mar__proceso = document.getElementById("L4Mar__proceso").textContent;

switch (L1Mar__proceso){
    case "ENTERA":
        document.getElementById("L1Mar__proceso").style.color = "red";
        break;
    case "TROZADA":
        document.getElementById("L1Mar__proceso").style.backgroundColor = "white"
        document.getElementById("L1Mar__proceso").style.borderRadius = "10px"
        document.getElementById("L1Mar__proceso").style.color = "green";
        break;
    case "ENTERO":
        document.getElementById("L1Mar__proceso").style.color = "red";
        break;
    case "TROZADO":
        document.getElementById("L1Mar__proceso").style.backgroundColor = "white"
        document.getElementById("L1Mar__proceso").style.borderRadius = "10px"
        document.getElementById("L1Mar__proceso").style.color = "green";
        break;
    case "FASON":
        document.getElementById("L1Mar__proceso").style.backgroundColor = "white"
        document.getElementById("L1Mar__proceso").style.borderRadius = "10px"
        document.getElementById("L1Mar__proceso").style.color = "red";
    break;
}

switch (L2Mar__proceso){
    case "ENTERA":
        document.getElementById("L2Mar__proceso").style.color = "red";
        break;
    case "TROZADA":
        document.getElementById("L2Mar__proceso").style.backgroundColor = "white"
        document.getElementById("L2Mar__proceso").style.borderRadius = "10px"
        document.getElementById("L2Mar__proceso").style.color = "green";
        break;
    case "ENTERO":
        document.getElementById("L2Mar__proceso").style.color = "red";
        break;
    case "TROZADO":
        document.getElementById("L2Mar__proceso").style.backgroundColor = "white"
        document.getElementById("L2Mar__proceso").style.borderRadius = "10px"
        document.getElementById("L2Mar__proceso").style.color = "green";
        break;
    case "FASON":
        document.getElementById("L2Mar__proceso").style.backgroundColor = "white"
        document.getElementById("L2Mar__proceso").style.borderRadius = "10px"
        document.getElementById("L2Mar__proceso").style.color = "red";
    break;
}

switch (L3Mar__proceso){
    case "ENTERA":
        document.getElementById("L3Mar__proceso").style.color = "red";
        break;
    case "TROZADA":
        document.getElementById("L3Mar__proceso").style.backgroundColor = "white"
        document.getElementById("L3Mar__proceso").style.borderRadius = "10px"
        document.getElementById("L3Mar__proceso").style.color = "green";
        break;
    case "ENTERO":
        document.getElementById("L3Mar__proceso").style.color = "red";
        break;
    case "TROZADO":
        document.getElementById("L3Mar__proceso").style.backgroundColor = "white"
        document.getElementById("L3Mar__proceso").style.borderRadius = "10px"
        document.getElementById("L3Mar__proceso").style.color = "green";
        break;
    case "FASON":
        document.getElementById("L3Mar__proceso").style.backgroundColor = "white"
        document.getElementById("L3Mar__proceso").style.borderRadius = "10px"
        document.getElementById("L3Mar__proceso").style.color = "red";
    break;
}

switch (L4Mar__proceso){
    case "ENTERA":
        document.getElementById("L4Mar__proceso").style.color = "red";
        break;
    case "TROZADA":
        document.getElementById("L4Mar__proceso").style.backgroundColor = "white"
        document.getElementById("L4Mar__proceso").style.borderRadius = "10px"
        document.getElementById("L4Mar__proceso").style.color = "green";
        break;
    case "ENTERO":
        document.getElementById("L4Mar__proceso").style.color = "red";
        break;
    case "TROZADO":
        document.getElementById("L4Mar__proceso").style.backgroundColor = "white"
        document.getElementById("L4Mar__proceso").style.borderRadius = "10px"
        document.getElementById("L4Mar__proceso").style.color = "green";
        break;
    case "FASON":
        document.getElementById("L4Mar__proceso").style.backgroundColor = "white"
        document.getElementById("L4Mar__proceso").style.borderRadius = "10px"
        document.getElementById("L4Mar__proceso").style.color = "red";
    break;
}

/* ############################################################## */
/* -------------------------MIERCOLES---------------------------- */
/* ############################################################## */

let L1Mie__tipo = document.getElementById("L1Mie__tipo").textContent;
let L2Mie__tipo = document.getElementById("L2Mie__tipo").textContent;
let L3Mie__tipo = document.getElementById("L3Mie__tipo").textContent;
let L4Mie__tipo = document.getElementById("L4Mie__tipo").textContent;

switch (L1Mie__tipo){
    case "PESADA":
        document.getElementById("L1Mie__tipo").style.color = "";
        break;
    case "LIVIANA":
        document.getElementById("L1Mie__tipo").style.color = "green";
        break;
    case "GALLO":
        document.getElementById("L1Mie__tipo").style.color = "red";
        break;
    case "POLLO":
        document.getElementById("L1Mie__tipo").style.color = "yellow";
        break;
}

switch (L2Mie__tipo){
    case "PESADA":
        document.getElementById("L2Mie__tipo").style.color = "";
        break;
    case "LIVIANA":
        document.getElementById("L2Mie__tipo").style.color = "green";
        break;
    case "GALLO":
        document.getElementById("L2Mie__tipo").style.color = "red";
        break;
    case "POLLO":
        document.getElementById("L2Mie__tipo").style.color = "yellow";
        break;
}

switch (L3Mie__tipo){
    case "PESADA":
        document.getElementById("L3Mie__tipo").style.color = "";
        break;
    case "LIVIANA":
        document.getElementById("L3Mie__tipo").style.color = "green";
        break;
    case "GALLO":
        document.getElementById("L3Mie__tipo").style.color = "red";
        break;
    case "POLLO":
        document.getElementById("L3Mie__tipo").style.color = "yellow";
        break;
}

switch (L4Mie__tipo){
    case "PESADA":
        document.getElementById("L4Mie__tipo").style.color = "";
        break;
    case "LIVIANA":
        document.getElementById("L4Mie__tipo").style.color = "green";
        break;
    case "GALLO":
        document.getElementById("L4Mie__tipo").style.color = "red";
        break;
    case "POLLO":
        document.getElementById("L4Mie__tipo").style.color = "yellow";
        break;
}

let L1Mie__proceso = document.getElementById("L1Mie__proceso").textContent;
let L2Mie__proceso = document.getElementById("L2Mie__proceso").textContent;
let L3Mie__proceso = document.getElementById("L3Mie__proceso").textContent;
let L4Mie__proceso = document.getElementById("L4Mie__proceso").textContent;

switch (L1Mie__proceso){
    case "ENTERA":
        document.getElementById("L1Mie__proceso").style.color = "red";
        break;
    case "TROZADA":
        document.getElementById("L1Mie__proceso").style.backgroundColor = "white"
        document.getElementById("L1Mie__proceso").style.borderRadius = "10px"
        document.getElementById("L1Mie__proceso").style.color = "green";
        break;
    case "ENTERO":
        document.getElementById("L1Mie__proceso").style.color = "red";
        break;
    case "TROZADO":
        document.getElementById("L1Mie__proceso").style.backgroundColor = "white"
        document.getElementById("L1Mie__proceso").style.borderRadius = "10px"
        document.getElementById("L1Mie__proceso").style.color = "green";
        break;
    case "FASON":
        document.getElementById("L1Mie__proceso").style.backgroundColor = "white"
        document.getElementById("L1Mie__proceso").style.borderRadius = "10px"
        document.getElementById("L1Mie__proceso").style.color = "red";
    break;
}

switch (L2Mie__proceso){
    case "ENTERA":
        document.getElementById("L2Mie__proceso").style.color = "red";
        break;
    case "TROZADA":
        document.getElementById("L2Mie__proceso").style.backgroundColor = "white"
        document.getElementById("L2Mie__proceso").style.borderRadius = "10px"
        document.getElementById("L2Mie__proceso").style.color = "green";
        break;
    case "ENTERO":
        document.getElementById("L2Mie__proceso").style.color = "red";
        break;
    case "TROZADO":
        document.getElementById("L2Mie__proceso").style.backgroundColor = "white"
        document.getElementById("L2Mie__proceso").style.borderRadius = "10px"
        document.getElementById("L2Mie__proceso").style.color = "green";
        break;
    case "FASON":
        document.getElementById("L2Mie__proceso").style.backgroundColor = "white"
        document.getElementById("L2Mie__proceso").style.borderRadius = "10px"
        document.getElementById("L2Mie__proceso").style.color = "red";
    break;
}

switch (L3Mie__proceso){
    case "ENTERA":
        document.getElementById("L3Mie__proceso").style.color = "red";
        break;
    case "TROZADA":
        document.getElementById("L3Mie__proceso").style.backgroundColor = "white"
        document.getElementById("L3Mie__proceso").style.borderRadius = "10px"
        document.getElementById("L3Mie__proceso").style.color = "green";
        break;
    case "ENTERO":
        document.getElementById("L3Mie__proceso").style.color = "red";
        break;
    case "TROZADO":
        document.getElementById("L3Mie__proceso").style.backgroundColor = "white"
        document.getElementById("L3Mie__proceso").style.borderRadius = "10px"
        document.getElementById("L3Mie__proceso").style.color = "green";
        break;
    case "FASON":
        document.getElementById("L3Mie__proceso").style.backgroundColor = "white"
        document.getElementById("L3Mie__proceso").style.borderRadius = "10px"
        document.getElementById("L3Mie__proceso").style.color = "red";
    break;
}

switch (L4Mie__proceso){
    case "ENTERA":
        document.getElementById("L4Mie__proceso").style.color = "red";
        break;
    case "TROZADA":
        document.getElementById("L4Mie__proceso").style.backgroundColor = "white"
        document.getElementById("L4Mie__proceso").style.borderRadius = "10px"
        document.getElementById("L4Mie__proceso").style.color = "green";
        break;
    case "ENTERO":
        document.getElementById("L4Mie__proceso").style.color = "red";
        break;
    case "TROZADO":
        document.getElementById("L4Mie__proceso").style.backgroundColor = "white"
        document.getElementById("L4Mie__proceso").style.borderRadius = "10px"
        document.getElementById("L4Mie__proceso").style.color = "green";
        break;
    case "FASON":
        document.getElementById("L4Mie__proceso").style.backgroundColor = "white"
        document.getElementById("L4Mie__proceso").style.borderRadius = "10px"
        document.getElementById("L4Mie__proceso").style.color = "red";
    break;
}


/* ############################################################## */
/* ---------------------------JUEVES------------------------------ */
/* ############################################################## */

let L1Jue__tipo = document.getElementById("L1Jue__tipo").textContent;
let L2Jue__tipo = document.getElementById("L2Jue__tipo").textContent;
let L3Jue__tipo = document.getElementById("L3Jue__tipo").textContent;
let L4Jue__tipo = document.getElementById("L4Jue__tipo").textContent;

switch (L1Jue__tipo){
    case "PESADA":
        document.getElementById("L1Jue__tipo").style.color = "";
        break;
    case "LIVIANA":
        document.getElementById("L1Jue__tipo").style.color = "green";
        break;
    case "GALLO":
        document.getElementById("L1Jue__tipo").style.color = "red";
        break;
    case "POLLO":
        document.getElementById("L1Jue__tipo").style.color = "yellow";
        break;
}

switch (L2Jue__tipo){
    case "PESADA":
        document.getElementById("L2Jue__tipo").style.color = "";
        break;
    case "LIVIANA":
        document.getElementById("L2Jue__tipo").style.color = "green";
        break;
    case "GALLO":
        document.getElementById("L2Jue__tipo").style.color = "red";
        break;
    case "POLLO":
        document.getElementById("L2Jue__tipo").style.color = "yellow";
        break;
}

switch (L3Jue__tipo){
    case "PESADA":
        document.getElementById("L3Jue__tipo").style.color = "";
        break;
    case "LIVIANA":
        document.getElementById("L3Jue__tipo").style.color = "green";
        break;
    case "GALLO":
        document.getElementById("L3Jue__tipo").style.color = "red";
        break;
    case "POLLO":
        document.getElementById("L3Jue__tipo").style.color = "yellow";
        break;
}

switch (L4Jue__tipo){
    case "PESADA":
        document.getElementById("L4Jue__tipo").style.color = "";
        break;
    case "LIVIANA":
        document.getElementById("L4Jue__tipo").style.color = "green";
        break;
    case "GALLO":
        document.getElementById("L4Jue__tipo").style.color = "red";
        break;
    case "POLLO":
        document.getElementById("L4Jue__tipo").style.color = "yellow";
        break;
}

let L1Jue__proceso = document.getElementById("L1Jue__proceso").textContent;
let L2Jue__proceso = document.getElementById("L2Jue__proceso").textContent;
let L3Jue__proceso = document.getElementById("L3Jue__proceso").textContent;
let L4Jue__proceso = document.getElementById("L4Jue__proceso").textContent;

switch (L1Jue__proceso){
    case "ENTERA":
        document.getElementById("L1Jue__proceso").style.color = "red";
        break;
    case "TROZADA":
        document.getElementById("L1Jue__proceso").style.backgroundColor = "white"
        document.getElementById("L1Jue__proceso").style.borderRadius = "10px"
        document.getElementById("L1Jue__proceso").style.color = "green";
        break;
    case "ENTERO":
        document.getElementById("L1Jue__proceso").style.color = "red";
        break;
    case "TROZADO":
        document.getElementById("L1Jue__proceso").style.backgroundColor = "white"
        document.getElementById("L1Jue__proceso").style.borderRadius = "10px"
        document.getElementById("L1Jue__proceso").style.color = "green";
        break;
    case "FASON":
        document.getElementById("L1Jue__proceso").style.backgroundColor = "white"
        document.getElementById("L1Jue__proceso").style.borderRadius = "10px"
        document.getElementById("L1Jue__proceso").style.color = "red";
    break;
}

switch (L2Jue__proceso){
    case "ENTERA":
        document.getElementById("L2Jue__proceso").style.color = "red";
        break;
    case "TROZADA":
        document.getElementById("L2Jue__proceso").style.backgroundColor = "white"
        document.getElementById("L2Jue__proceso").style.borderRadius = "10px"
        document.getElementById("L2Jue__proceso").style.color = "green";
        break;
    case "ENTERO":
        document.getElementById("L2Jue__proceso").style.color = "red";
        break;
    case "TROZADO":
        document.getElementById("L2Jue__proceso").style.backgroundColor = "white"
        document.getElementById("L2Jue__proceso").style.borderRadius = "10px"
        document.getElementById("L2Jue__proceso").style.color = "green";
        break;
    case "FASON":
        document.getElementById("L2Jue__proceso").style.backgroundColor = "white"
        document.getElementById("L2Jue__proceso").style.borderRadius = "10px"
        document.getElementById("L2Jue__proceso").style.color = "red";
    break;
}

switch (L3Jue__proceso){
    case "ENTERA":
        document.getElementById("L3Jue__proceso").style.color = "red";
        break;
    case "TROZADA":
        document.getElementById("L3Jue__proceso").style.backgroundColor = "white"
        document.getElementById("L3Jue__proceso").style.borderRadius = "10px"
        document.getElementById("L3Jue__proceso").style.color = "green";
        break;
    case "ENTERO":
        document.getElementById("L3Jue__proceso").style.color = "red";
        break;
    case "TROZADO":
        document.getElementById("L3Jue__proceso").style.backgroundColor = "white"
        document.getElementById("L3Jue__proceso").style.borderRadius = "10px"
        document.getElementById("L3Jue__proceso").style.color = "green";
        break;
    case "FASON":
        document.getElementById("L3Jue__proceso").style.backgroundColor = "white"
        document.getElementById("L3Jue__proceso").style.borderRadius = "10px"
        document.getElementById("L3Jue__proceso").style.color = "red";
    break;
}

switch (L4Jue__proceso){
    case "ENTERA":
        document.getElementById("L4Jue__proceso").style.color = "red";
        break;
    case "TROZADA":
        document.getElementById("L4Jue__proceso").style.backgroundColor = "white"
        document.getElementById("L4Jue__proceso").style.borderRadius = "10px"
        document.getElementById("L4Jue__proceso").style.color = "green";
        break;
    case "ENTERO":
        document.getElementById("L4Jue__proceso").style.color = "red";
        break;
    case "TROZADO":
        document.getElementById("L4Jue__proceso").style.backgroundColor = "white"
        document.getElementById("L4Jue__proceso").style.borderRadius = "10px"
        document.getElementById("L4Jue__proceso").style.color = "green";
        break;
    case "FASON":
        document.getElementById("L4Jue__proceso").style.backgroundColor = "white"
        document.getElementById("L4Jue__proceso").style.borderRadius = "10px"
        document.getElementById("L4Jue__proceso").style.color = "red";
    break;
}



/* ############################################################## */
/* --------------------------VIERNES----------------------------- */
/* ############################################################## */

let L1Vie__tipo = document.getElementById("L1Vie__tipo").textContent;
let L2Vie__tipo = document.getElementById("L2Vie__tipo").textContent;
let L3Vie__tipo = document.getElementById("L3Vie__tipo").textContent;
let L4Vie__tipo = document.getElementById("L4Vie__tipo").textContent;

switch (L1Vie__tipo){
    case "PESADA":
        document.getElementById("L1Vie__tipo").style.color = "";
        break;
    case "LIVIANA":
        document.getElementById("L1Vie__tipo").style.color = "green";
        break;
    case "GALLO":
        document.getElementById("L1Vie__tipo").style.color = "red";
        break;
    case "POLLO":
        document.getElementById("L1Vie__tipo").style.color = "yellow";
        break;
}

switch (L2Vie__tipo){
    case "PESADA":
        document.getElementById("L2Vie__tipo").style.color = "";
        break;
    case "LIVIANA":
        document.getElementById("L2Vie__tipo").style.color = "green";
        break;
    case "GALLO":
        document.getElementById("L2Vie__tipo").style.color = "red";
        break;
    case "POLLO":
        document.getElementById("L2Vie__tipo").style.color = "yellow";
        break;
}

switch (L3Vie__tipo){
    case "PESADA":
        document.getElementById("L3Vie__tipo").style.color = "";
        break;
    case "LIVIANA":
        document.getElementById("L3Vie__tipo").style.color = "green";
        break;
    case "GALLO":
        document.getElementById("L3Vie__tipo").style.color = "red";
        break;
    case "POLLO":
        document.getElementById("L3Vie__tipo").style.color = "yellow";
        break;
}

switch (L4Vie__tipo){
    case "PESADA":
        document.getElementById("L4Vie__tipo").style.color = "";
        break;
    case "LIVIANA":
        document.getElementById("L4Vie__tipo").style.color = "green";
        break;
    case "GALLO":
        document.getElementById("L4Vie__tipo").style.color = "red";
        break;
    case "POLLO":
        document.getElementById("L4Vie__tipo").style.color = "yellow";
        break;
}

let L1Vie__proceso = document.getElementById("L1Vie__proceso").textContent;
let L2Vie__proceso = document.getElementById("L2Vie__proceso").textContent;
let L3Vie__proceso = document.getElementById("L3Vie__proceso").textContent;
let L4Vie__proceso = document.getElementById("L4Vie__proceso").textContent;

switch (L1Vie__proceso){
    case "ENTERA":
        document.getElementById("L1Vie__proceso").style.color = "red";
        break;
    case "TROZADA":
        document.getElementById("L1Vie__proceso").style.backgroundColor = "white"
        document.getElementById("L1Vie__proceso").style.borderRadius = "10px"
        document.getElementById("L1Vie__proceso").style.color = "green";
        break;
    case "ENTERO":
        document.getElementById("L1Vie__proceso").style.color = "red";
        break;
    case "TROZADO":
        document.getElementById("L1Vie__proceso").style.backgroundColor = "white"
        document.getElementById("L1Vie__proceso").style.borderRadius = "10px"
        document.getElementById("L1Vie__proceso").style.color = "green";
        break;
    case "FASON":
        document.getElementById("L1Vie__proceso").style.backgroundColor = "white"
        document.getElementById("L1Vie__proceso").style.borderRadius = "10px"
        document.getElementById("L1Vie__proceso").style.color = "red";
    break;
}

switch (L2Vie__proceso){
    case "ENTERA":
        document.getElementById("L2Vie__proceso").style.color = "red";
        break;
    case "TROZADA":
        document.getElementById("L2Vie__proceso").style.backgroundColor = "white"
        document.getElementById("L2Vie__proceso").style.borderRadius = "10px"
        document.getElementById("L2Vie__proceso").style.color = "green";
        break;
    case "ENTERO":
        document.getElementById("L2Vie__proceso").style.color = "red";
        break;
    case "TROZADO":
        document.getElementById("L2Vie__proceso").style.backgroundColor = "white"
        document.getElementById("L2Vie__proceso").style.borderRadius = "10px"
        document.getElementById("L2Vie__proceso").style.color = "green";
        break;
    case "FASON":
        document.getElementById("L2Vie__proceso").style.backgroundColor = "white"
        document.getElementById("L2Vie__proceso").style.borderRadius = "10px"
        document.getElementById("L2Vie__proceso").style.color = "red";
    break;
}

switch (L3Vie__proceso){
    case "ENTERA":
        document.getElementById("L3Vie__proceso").style.color = "red";
        break;
    case "TROZADA":
        document.getElementById("L3Vie__proceso").style.backgroundColor = "white"
        document.getElementById("L3Vie__proceso").style.borderRadius = "10px"
        document.getElementById("L3Vie__proceso").style.color = "green";
        break;
    case "ENTERO":
        document.getElementById("L3Vie__proceso").style.color = "red";
        break;
    case "TROZADO":
        document.getElementById("L3Vie__proceso").style.backgroundColor = "white"
        document.getElementById("L3Vie__proceso").style.borderRadius = "10px"
        document.getElementById("L3Vie__proceso").style.color = "green";
        break;
    case "FASON":
        document.getElementById("L3Vie__proceso").style.backgroundColor = "white"
        document.getElementById("L3Vie__proceso").style.borderRadius = "10px"
        document.getElementById("L3Vie__proceso").style.color = "red";
    break;
}

switch (L4Vie__proceso){
    case "ENTERA":
        document.getElementById("L4Vie__proceso").style.color = "red";
        break;
    case "TROZADA":
        document.getElementById("L4Vie__proceso").style.backgroundColor = "white"
        document.getElementById("L4Vie__proceso").style.borderRadius = "10px"
        document.getElementById("L4Vie__proceso").style.color = "green";
        break;
    case "ENTERO":
        document.getElementById("L4Vie__proceso").style.color = "red";
        break;
    case "TROZADO":
        document.getElementById("L4Vie__proceso").style.backgroundColor = "white"
        document.getElementById("L4Vie__proceso").style.borderRadius = "10px"
        document.getElementById("L4Vie__proceso").style.color = "green";
        break;
    case "FASON":
        document.getElementById("L4Vie__proceso").style.backgroundColor = "white"
        document.getElementById("L4Vie__proceso").style.borderRadius = "10px"
        document.getElementById("L4Vie__proceso").style.color = "red";
    break;
}


/* ############################################################## */
/* ---------------------------SABADO----------------------------- */
/* ############################################################## */

let L1Sab__tipo = document.getElementById("L1Sab__tipo").textContent;
let L2Sab__tipo = document.getElementById("L2Sab__tipo").textContent;
let L3Sab__tipo = document.getElementById("L3Sab__tipo").textContent;
let L4Sab__tipo = document.getElementById("L4Sab__tipo").textContent;

switch (L1Sab__tipo){
    case "PESADA":
        document.getElementById("L1Sab__tipo").style.color = "";
        break;
    case "LIVIANA":
        document.getElementById("L1Sab__tipo").style.color = "green";
        break;
    case "GALLO":
        document.getElementById("L1Sab__tipo").style.color = "red";
        break;
    case "POLLO":
        document.getElementById("L1Sab__tipo").style.color = "yellow";
        break;
}

switch (L2Sab__tipo){
    case "PESADA":
        document.getElementById("L2Sab__tipo").style.color = "";
        break;
    case "LIVIANA":
        document.getElementById("L2Sab__tipo").style.color = "green";
        break;
    case "GALLO":
        document.getElementById("L2Sab__tipo").style.color = "red";
        break;
    case "POLLO":
        document.getElementById("L2Sab__tipo").style.color = "yellow";
        break;
}

switch (L3Sab__tipo){
    case "PESADA":
        document.getElementById("L3Sab__tipo").style.color = "";
        break;
    case "LIVIANA":
        document.getElementById("L3Sab__tipo").style.color = "green";
        break;
    case "GALLO":
        document.getElementById("L3Sab__tipo").style.color = "red";
        break;
    case "POLLO":
        document.getElementById("L3Sab__tipo").style.color = "yellow";
        break;
}

switch (L4Sab__tipo){
    case "PESADA":
        document.getElementById("L4Sab__tipo").style.color = "";
        break;
    case "LIVIANA":
        document.getElementById("L4Sab__tipo").style.color = "green";
        break;
    case "GALLO":
        document.getElementById("L4Sab__tipo").style.color = "red";
        break;
    case "POLLO":
        document.getElementById("L4Sab__tipo").style.color = "yellow";
        break;
}

let L1Sab__proceso = document.getElementById("L1Sab__proceso").textContent;
let L2Sab__proceso = document.getElementById("L2Sab__proceso").textContent;
let L3Sab__proceso = document.getElementById("L3Sab__proceso").textContent;
let L4Sab__proceso = document.getElementById("L4Sab__proceso").textContent;

switch (L1Sab__proceso){
    case "ENTERA":
        document.getElementById("L1Sab__proceso").style.color = "red";
        break;
    case "TROZADA":
        document.getElementById("L1Sab__proceso").style.backgroundColor = "white"
        document.getElementById("L1Sab__proceso").style.borderRadius = "10px"
        document.getElementById("L1Sab__proceso").style.color = "green";
        break;
    case "ENTERO":
        document.getElementById("L1Sab__proceso").style.color = "red";
        break;
    case "TROZADO":
        document.getElementById("L1Sab__proceso").style.backgroundColor = "white"
        document.getElementById("L1Sab__proceso").style.borderRadius = "10px"
        document.getElementById("L1Sab__proceso").style.color = "green";
        break;
    case "FASON":
        document.getElementById("L1Sab__proceso").style.backgroundColor = "white"
        document.getElementById("L1Sab__proceso").style.borderRadius = "10px"
        document.getElementById("L1Sab__proceso").style.color = "red";
    break;
}

switch (L2Sab__proceso){
    case "ENTERA":
        document.getElementById("L2Sab__proceso").style.color = "red";
        break;
    case "TROZADA":
        document.getElementById("L2Sab__proceso").style.backgroundColor = "white"
        document.getElementById("L2Sab__proceso").style.borderRadius = "10px"
        document.getElementById("L2Sab__proceso").style.color = "green";
        break;
    case "ENTERO":
        document.getElementById("L2Sab__proceso").style.color = "red";
        break;
    case "TROZADO":
        document.getElementById("L2Sab__proceso").style.backgroundColor = "white"
        document.getElementById("L2Sab__proceso").style.borderRadius = "10px"
        document.getElementById("L2Sab__proceso").style.color = "green";
        break;
    case "FASON":
        document.getElementById("L2Sab__proceso").style.backgroundColor = "white"
        document.getElementById("L2Sab__proceso").style.borderRadius = "10px"
        document.getElementById("L2Sab__proceso").style.color = "red";
    break;
}

switch (L3Sab__proceso){
    case "ENTERA":
        document.getElementById("L3Sab__proceso").style.color = "red";
        break;
    case "TROZADA":
        document.getElementById("L3Sab__proceso").style.backgroundColor = "white"
        document.getElementById("L3Sab__proceso").style.borderRadius = "10px"
        document.getElementById("L3Sab__proceso").style.color = "green";
        break;
    case "ENTERO":
        document.getElementById("L3Sab__proceso").style.color = "red";
        break;
    case "TROZADO":
        document.getElementById("L3Sab__proceso").style.backgroundColor = "white"
        document.getElementById("L3Sab__proceso").style.borderRadius = "10px"
        document.getElementById("L3Sab__proceso").style.color = "green";
        break;
    case "FASON":
        document.getElementById("L3Sab__proceso").style.backgroundColor = "white"
        document.getElementById("L3Sab__proceso").style.borderRadius = "10px"
        document.getElementById("L3Sab__proceso").style.color = "red";
    break;
}

switch (L4Sab__proceso){
    case "ENTERA":
        document.getElementById("L4Sab__proceso").style.color = "red";
        break;
    case "TROZADA":
        document.getElementById("L4Sab__proceso").style.backgroundColor = "white"
        document.getElementById("L4Sab__proceso").style.borderRadius = "10px"
        document.getElementById("L4Sab__proceso").style.color = "green";
        break;
    case "ENTERO":
        document.getElementById("L4Sab__proceso").style.color = "red";
        break;
    case "TROZADO":
        document.getElementById("L4Sab__proceso").style.backgroundColor = "white"
        document.getElementById("L4Sab__proceso").style.borderRadius = "10px"
        document.getElementById("L4Sab__proceso").style.color = "green";
        break;
    case "FASON":
        document.getElementById("L4Sab__proceso").style.backgroundColor = "white"
        document.getElementById("L4Sab__proceso").style.borderRadius = "10px"
        document.getElementById("L4Sab__proceso").style.color = "red";
    break;
}
}
window.onload = color;


function ShowSelected(){
    /* Para obtener el valor */
    var cod = document.getElementById("sem").value;
    alert(cod);
}


$('#sem').click( function() {
    console.log('Enviando!');
        $.ajax(
                {
                    url: 'mostrar.php?semana=<?php echo $semana?>',
                    success: function(data) {
                        console.log( 'El servidor devolvio "' + data + '"' );
                    }
                }
            )
        }
    );