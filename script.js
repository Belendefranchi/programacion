function actualizar(){location.reload(true);}
setInterval("actualizar()",10000);


/* function color() {
	var celdas = document.getElementById("target").getElementsByTagName("td");
	for(var i=0; i<celdas.length; i++) {
		if(celdas.item(i).textContent ==="PESADA") {
			celdas.item(i).style.color = "#F00";
		}
	}
}

*/


function color() {

    var tipo;
    var proceso;

    tipo = document.getElementById("tipo").textContent;
    proceso = document.getElementById("proceso").textContent;

    switch (tipo){
        case "PESADA":
            document.getElementById("tipo").style.color = "#FF0000";
            break;
        case "LIVIANA":
            document.getElementById("tipo").style.color = "#0000FF";
            break;
        case "GALLO":
            document.getElementById("tipo").style.color = "#F00";
            break;
        case "POLLO":
            document.getElementById("tipo").style.color = "#F00";
            break;
    }

    switch (proceso){
        case "ENTERA":
            document.getElementById("proceso").style.color = "#FF0000";
            break;
        case "TROZADA":
            document.getElementById("proceso").style.color = "#F00";
            break;
        case "ENTERO":
            document.getElementById("proceso").style.color = "#F00";
            break;
        case "TROZADO":
            document.getElementById("proceso").style.color = "#F00";
            break;
        case "FASON":
        document.getElementById("proceso").style.color = "#F00";
        break;
    }

}
window.onload = color;

