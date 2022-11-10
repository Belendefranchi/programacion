<?php

/* ############################################################## */
/* ---------------------------LUNES------------------------------ */
/* ############################################################## */

/* ---------------------------faena------------------------------ */ 
/* -------------------------------------------------------------- */

/* ---------------------------lote 1----------------------------- */ 

$query="SELECT tipo, proceso, granja, cantidad, fecha, sem, Id
        FROM faena 
            where sem='$semana'
            and dia='lun'
            and lote='1'
                ORDER BY Id DESC";

$resultado=$base->prepare($query);
$resultado->execute();     
$L1Lun__faena=$resultado->fetch(PDO::FETCH_ASSOC);
$resultado->closeCursor ();

$L1Lun__tipo=$L1Lun__faena["tipo"];
$L1Lun__proceso=$L1Lun__faena["proceso"];
$L1Lun__granja=$L1Lun__faena["granja"];
$L1Lun__cantidad=$L1Lun__faena["cantidad"];
$Lun__fecha=$L1Lun__faena["fecha"];
$Lun__sem=$L1Lun__faena["sem"];


/* ---------------------------lote 2----------------------------- */ 

$query="SELECT tipo, proceso, granja, cantidad, fecha, sem, Id
        FROM faena 
            where sem='$semana'
            and dia='lun' 
            and lote='2' 
                ORDER BY Id DESC";

$resultado=$base->prepare($query);
$resultado->execute();     
$L2Lun__faena=$resultado->fetch(PDO::FETCH_ASSOC);
$resultado->closeCursor ();

$L2Lun__tipo=$L2Lun__faena["tipo"];
$L2Lun__proceso=$L2Lun__faena["proceso"];
$L2Lun__granja=$L2Lun__faena["granja"];
$L2Lun__cantidad=$L2Lun__faena["cantidad"];

/* ---------------------------lote 3----------------------------- */ 

$query="SELECT tipo, proceso, granja, cantidad, fecha, sem, Id 
        FROM faena 
            where sem='$semana'
            and dia='lun' 
            and lote='3' 
                ORDER BY Id DESC";

$resultado=$base->prepare($query);
$resultado->execute();     
$L3Lun__faena=$resultado->fetch(PDO::FETCH_ASSOC);
$resultado->closeCursor ();

$L3Lun__tipo=$L3Lun__faena["tipo"];
$L3Lun__proceso=$L3Lun__faena["proceso"];
$L3Lun__granja=$L3Lun__faena["granja"];
$L3Lun__cantidad=$L3Lun__faena["cantidad"];


/* ---------------------------lote 4----------------------------- */ 

$query="SELECT tipo, proceso, granja, cantidad, fecha, sem, Id
        FROM faena 
            where sem='$semana'
            and dia='lun' 
            and lote='4' 
                ORDER BY Id DESC";

$resultado=$base->prepare($query);
$resultado->execute();     
$L4Lun__faena=$resultado->fetch(PDO::FETCH_ASSOC);
$resultado->closeCursor ();

$L4Lun__tipo=$L4Lun__faena["tipo"];
$L4Lun__proceso=$L4Lun__faena["proceso"];
$L4Lun__granja=$L4Lun__faena["granja"];
$L4Lun__cantidad=$L4Lun__faena["cantidad"];

/* ---------------------------lote 5----------------------------- */ 

$query="SELECT tipo, proceso, granja, cantidad, fecha, sem, Id
        FROM faena 
            where sem='$semana'
            and dia='lun'
            and lote='5'
                ORDER BY Id DESC";

$resultado=$base->prepare($query);
$resultado->execute();     
$L5Lun__faena=$resultado->fetch(PDO::FETCH_ASSOC);
$resultado->closeCursor ();

$L5Lun__tipo=$L5Lun__faena["tipo"];
$L5Lun__proceso=$L5Lun__faena["proceso"];
$L5Lun__granja=$L5Lun__faena["granja"];
$L5Lun__cantidad=$L5Lun__faena["cantidad"];
$Lun__fecha=$L5Lun__faena["fecha"];
$Lun__sem=$L5Lun__faena["sem"];

/* ---------------------------lote 6----------------------------- */ 

$query="SELECT tipo, proceso, granja, cantidad, fecha, sem, Id
        FROM faena 
            where sem='$semana'
            and dia='lun'
            and lote='6'
                ORDER BY Id DESC";

$resultado=$base->prepare($query);
$resultado->execute();     
$L6Lun__faena=$resultado->fetch(PDO::FETCH_ASSOC);
$resultado->closeCursor ();

$L6Lun__tipo=$L6Lun__faena["tipo"];
$L6Lun__proceso=$L6Lun__faena["proceso"];
$L6Lun__granja=$L6Lun__faena["granja"];
$L6Lun__cantidad=$L6Lun__faena["cantidad"];
$Lun__fecha=$L6Lun__faena["fecha"];
$Lun__sem=$L6Lun__faena["sem"];

/* ---------------------------cocido----------------------------- */
/* -------------------------------------------------------------- */ 

$query="SELECT pro_cocido, ope_cocido, ext_cocido, ext_cocido2, sem, Id
        FROM cocido 
            where sem='$semana'
            and dia='lun' 
                ORDER BY Id DESC";

$resultado=$base->prepare($query);
$resultado->execute();
$Lun__cocido=$resultado->fetch(PDO::FETCH_ASSOC);
$resultado->closeCursor();

$ProLun__cocido=$Lun__cocido["pro_cocido"];
$OpeLun__cocido=$Lun__cocido["ope_cocido"];
$ExtLun__cocido=$Lun__cocido["ext_cocido"];
$ExtLun__cocido2=$Lun__cocido["ext_cocido2"];


/* ---------------------------embarque--------------------------- */
/* -------------------------------------------------------------- */ 

$query="SELECT pro_embarque, ope_embarque, ext_embarque, ext_embarque2, sem, Id
        FROM embarque
            where sem='$semana'
            and dia='lun'
                ORDER BY Id DESC";

$resultado=$base->prepare($query);
$resultado->execute();
$Lun__embarque=$resultado->fetch(PDO::FETCH_ASSOC);
$resultado->closeCursor();

$ProLun__embarque=$Lun__embarque["pro_embarque"];
$OpeLun__embarque=$Lun__embarque["ope_embarque"];
$ExtLun__embarque=$Lun__embarque["ext_embarque"];
$ExtLun__embarque2=$Lun__embarque["ext_embarque2"];


/* ############################################################## */
/* ---------------------------MARTES----------------------------- */
/* ############################################################## */

/* ---------------------------faena------------------------------ */ 
/* -------------------------------------------------------------- */
/* ---------------------------lote 1----------------------------- */ 

$query="SELECT tipo, proceso, granja, cantidad, fecha, sem, Id
        FROM faena 
            where sem='$semana'
            and dia='mar' 
            and lote='1' 
                ORDER BY Id DESC";

$resultado=$base->prepare($query);
$resultado->execute();     
$L1Mar__faena=$resultado->fetch(PDO::FETCH_ASSOC);
$resultado->closeCursor();

$L1Mar__tipo=$L1Mar__faena["tipo"];
$L1Mar__proceso=$L1Mar__faena["proceso"];
$L1Mar__granja=$L1Mar__faena["granja"];
$L1Mar__cantidad=$L1Mar__faena["cantidad"];
$Mar__fecha=$L1Mar__faena["fecha"];

/* ---------------------------lote 2----------------------------- */ 

$query="SELECT tipo, proceso, granja, cantidad, fecha, sem, Id
        FROM faena 
            where sem='$semana'
            and dia='mar' 
            and lote='2' 
                ORDER BY Id DESC";

$resultado=$base->prepare($query);
$resultado->execute();     
$L2Mar__faena=$resultado->fetch(PDO::FETCH_ASSOC);
$resultado->closeCursor();

$L2Mar__tipo=$L2Mar__faena["tipo"];
$L2Mar__proceso=$L2Mar__faena["proceso"];
$L2Mar__granja=$L2Mar__faena["granja"];
$L2Mar__cantidad=$L2Mar__faena["cantidad"];


/* ---------------------------lote 3----------------------------- */ 

$query="SELECT tipo, proceso, granja, cantidad, fecha, sem, Id 
        FROM faena 
            where sem='$semana'
            and dia='mar' 
            and lote='3' 
                ORDER BY Id DESC";

$resultado=$base->prepare($query);
$resultado->execute();     
$L3Mar__faena=$resultado->fetch(PDO::FETCH_ASSOC);
$resultado->closeCursor();

$L3Mar__tipo=$L3Mar__faena["tipo"];
$L3Mar__proceso=$L3Mar__faena["proceso"];
$L3Mar__granja=$L3Mar__faena["granja"];
$L3Mar__cantidad=$L3Mar__faena["cantidad"];


/* ---------------------------lote 4----------------------------- */ 

$query="SELECT tipo, proceso, granja, cantidad, fecha, sem, Id
        FROM faena 
            where sem='$semana'
            and dia='mar' 
            and lote='4' 
                ORDER BY Id DESC";

$resultado=$base->prepare($query);
$resultado->execute();     
$L4Mar__faena=$resultado->fetch(PDO::FETCH_ASSOC);
$resultado->closeCursor();

$L4Mar__tipo=$L4Mar__faena["tipo"];
$L4Mar__proceso=$L4Mar__faena["proceso"];
$L4Mar__granja=$L4Mar__faena["granja"];
$L4Mar__cantidad=$L4Mar__faena["cantidad"];

/* ---------------------------lote 5----------------------------- */ 

$query="SELECT tipo, proceso, granja, cantidad, fecha, sem, Id
        FROM faena 
            where sem='$semana'
            and dia='mar'
            and lote='5'
                ORDER BY Id DESC";

$resultado=$base->prepare($query);
$resultado->execute();     
$L5Mar__faena=$resultado->fetch(PDO::FETCH_ASSOC);
$resultado->closeCursor ();

$L5Mar__tipo=$L5Mar__faena["tipo"];
$L5Mar__proceso=$L5Mar__faena["proceso"];
$L5Mar__granja=$L5Mar__faena["granja"];
$L5Mar__cantidad=$L5Mar__faena["cantidad"];
$Mar__fecha=$L5Mar__faena["fecha"];
$Mar__sem=$L5Mar__faena["sem"];

/* ---------------------------lote 6----------------------------- */ 

$query="SELECT tipo, proceso, granja, cantidad, fecha, sem, Id
        FROM faena 
            where sem='$semana'
            and dia='mar'
            and lote='6'
                ORDER BY Id DESC";

$resultado=$base->prepare($query);
$resultado->execute();     
$L6Mar__faena=$resultado->fetch(PDO::FETCH_ASSOC);
$resultado->closeCursor ();

$L6Mar__tipo=$L6Mar__faena["tipo"];
$L6Mar__proceso=$L6Mar__faena["proceso"];
$L6Mar__granja=$L6Mar__faena["granja"];
$L6Mar__cantidad=$L6Mar__faena["cantidad"];
$Mar__fecha=$L6Mar__faena["fecha"];
$Mar__sem=$L6Mar__faena["sem"];

/* ---------------------------cocido----------------------------- */
/* -------------------------------------------------------------- */ 

$query="SELECT pro_cocido, ope_cocido, ext_cocido, ext_cocido2, sem, Id
        FROM cocido 
            where sem='$semana'
            and dia='mar' 
                ORDER BY Id DESC";

$resultado=$base->prepare($query);
$resultado->execute();
$Mar__cocido=$resultado->fetch(PDO::FETCH_ASSOC);
$resultado->closeCursor();

$ProMar__cocido=$Mar__cocido["pro_cocido"];
$OpeMar__cocido=$Mar__cocido["ope_cocido"];
$ExtMar__cocido=$Mar__cocido["ext_cocido"];
$ExtMar__cocido2=$Mar__cocido["ext_cocido2"];


/* ---------------------------embarque--------------------------- */
/* -------------------------------------------------------------- */ 

$query="SELECT pro_embarque, ope_embarque, ext_embarque, ext_embarque2, sem, Id
        FROM embarque 
            where sem='$semana'
            and dia='mar' 
                ORDER BY Id DESC";

$resultado=$base->prepare($query);
$resultado->execute();
$Mar__embarque=$resultado->fetch(PDO::FETCH_ASSOC);
$resultado->closeCursor();

$ProMar__embarque=$Mar__embarque["pro_embarque"];
$OpeMar__embarque=$Mar__embarque["ope_embarque"];
$ExtMar__embarque=$Mar__embarque["ext_embarque"];
$ExtMar__embarque2=$Mar__embarque["ext_embarque2"];

/* ############################################################## */
/* -------------------------MIERCOLES---------------------------- */
/* ############################################################## */
        
/* ---------------------------faena------------------------------ */ 
/* -------------------------------------------------------------- */       
/* ---------------------------lote 1----------------------------- */ 

$query="SELECT tipo, proceso, granja, cantidad, fecha, sem, Id
        FROM faena 
            where sem='$semana'
            and dia='mie' 
            and lote='1' 
                ORDER BY Id DESC";

$resultado=$base->prepare($query);
$resultado->execute();     
$L1Mie__faena=$resultado->fetch(PDO::FETCH_ASSOC);
$resultado->closeCursor();

$L1Mie__tipo=$L1Mie__faena["tipo"];
$L1Mie__proceso=$L1Mie__faena["proceso"];
$L1Mie__granja=$L1Mie__faena["granja"];
$L1Mie__cantidad=$L1Mie__faena["cantidad"];
$Mie__fecha=$L1Mie__faena["fecha"];

/* ---------------------------lote 2----------------------------- */ 

$query="SELECT tipo, proceso, granja, cantidad, fecha, sem, Id
        FROM faena 
            where sem='$semana'
            and dia='mie' 
            and lote='2' 
                ORDER BY Id DESC";

$resultado=$base->prepare($query);
$resultado->execute();     
$L2Mie__faena=$resultado->fetch(PDO::FETCH_ASSOC);
$resultado->closeCursor();

$L2Mie__tipo=$L2Mie__faena["tipo"];
$L2Mie__proceso=$L2Mie__faena["proceso"];
$L2Mie__granja=$L2Mie__faena["granja"];
$L2Mie__cantidad=$L2Mie__faena["cantidad"];


/* ---------------------------lote 3----------------------------- */ 

$query="SELECT tipo, proceso, granja, cantidad, fecha, sem, Id 
        FROM faena 
            where sem='$semana'
            and dia='mie' 
            and lote='3' 
                ORDER BY Id DESC";

$resultado=$base->prepare($query);
$resultado->execute();     
$L3Mie__faena=$resultado->fetch(PDO::FETCH_ASSOC);
$resultado->closeCursor();

$L3Mie__tipo=$L3Mie__faena["tipo"];
$L3Mie__proceso=$L3Mie__faena["proceso"];
$L3Mie__granja=$L3Mie__faena["granja"];
$L3Mie__cantidad=$L3Mie__faena["cantidad"];


/* ---------------------------lote 4----------------------------- */ 

$query="SELECT tipo, proceso, granja, cantidad, fecha, sem, Id
        FROM faena 
            where sem='$semana'
            and dia='mie' 
            and lote='4' 
                ORDER BY Id DESC";

$resultado=$base->prepare($query);
$resultado->execute();     
$L4Mie__faena=$resultado->fetch(PDO::FETCH_ASSOC);
$resultado->closeCursor();

$L4Mie__tipo=$L4Mie__faena["tipo"];
$L4Mie__proceso=$L4Mie__faena["proceso"];
$L4Mie__granja=$L4Mie__faena["granja"];
$L4Mie__cantidad=$L4Mie__faena["cantidad"];

/* ---------------------------lote 5----------------------------- */ 

$query="SELECT tipo, proceso, granja, cantidad, fecha, sem, Id
        FROM faena 
            where sem='$semana'
            and dia='mie'
            and lote='5'
                ORDER BY Id DESC";

$resultado=$base->prepare($query);
$resultado->execute();     
$L5Mie__faena=$resultado->fetch(PDO::FETCH_ASSOC);
$resultado->closeCursor ();

$L5Mie__tipo=$L5Mie__faena["tipo"];
$L5Mie__proceso=$L5Mie__faena["proceso"];
$L5Mie__granja=$L5Mie__faena["granja"];
$L5Mie__cantidad=$L5Mie__faena["cantidad"];
$Mie__fecha=$L5Mie__faena["fecha"];
$Mie__sem=$L5Mie__faena["sem"];

/* ---------------------------lote 6----------------------------- */ 

$query="SELECT tipo, proceso, granja, cantidad, fecha, sem, Id
        FROM faena 
            where sem='$semana'
            and dia='mie'
            and lote='6'
                ORDER BY Id DESC";

$resultado=$base->prepare($query);
$resultado->execute();     
$L6Mie__faena=$resultado->fetch(PDO::FETCH_ASSOC);
$resultado->closeCursor ();

$L6Mie__tipo=$L6Mie__faena["tipo"];
$L6Mie__proceso=$L6Mie__faena["proceso"];
$L6Mie__granja=$L6Mie__faena["granja"];
$L6Mie__cantidad=$L6Mie__faena["cantidad"];
$Mie__fecha=$L6Mie__faena["fecha"];
$Mie__sem=$L6Mie__faena["sem"];

/* ---------------------------cocido----------------------------- */
/* -------------------------------------------------------------- */ 

$query="SELECT pro_cocido, ope_cocido, ext_cocido, ext_cocido2, sem, Id
        FROM cocido 
            where sem='$semana'
            and dia='mie' 
                ORDER BY Id DESC";

$resultado=$base->prepare($query);
$resultado->execute();
$Mie__cocido=$resultado->fetch(PDO::FETCH_ASSOC);
$resultado->closeCursor();

$ProMie__cocido=$Mie__cocido["pro_cocido"];
$OpeMie__cocido=$Mie__cocido["ope_cocido"];
$ExtMie__cocido=$Mie__cocido["ext_cocido"];
$ExtMie__cocido2=$Mie__cocido["ext_cocido2"];


/* ---------------------------embarque--------------------------- */
/* -------------------------------------------------------------- */ 

$query="SELECT pro_embarque, ope_embarque, ext_embarque, ext_embarque2, sem, Id
        FROM embarque 
            where sem='$semana'
            and dia='mie' 
                ORDER BY Id DESC";

$resultado=$base->prepare($query);
$resultado->execute();
$Mie__embarque=$resultado->fetch(PDO::FETCH_ASSOC);
$resultado->closeCursor();

$ProMie__embarque=$Mie__embarque["pro_embarque"];
$OpeMie__embarque=$Mie__embarque["ope_embarque"];
$ExtMie__embarque=$Mie__embarque["ext_embarque"];
$ExtMie__embarque2=$Mie__embarque["ext_embarque2"];

/* ############################################################## */
/* --------------------------JUEVES------------------------------ */
/* ############################################################## */
        
/* ---------------------------faena------------------------------ */ 
/* -------------------------------------------------------------- */       
/* ---------------------------lote 1----------------------------- */ 

$query="SELECT tipo, proceso, granja, cantidad, fecha, sem, Id
        FROM faena 
            where sem='$semana'
            and dia='jue' 
            and lote='1' 
                ORDER BY Id DESC";

$resultado=$base->prepare($query);
$resultado->execute();     
$L1Jue__faena=$resultado->fetch(PDO::FETCH_ASSOC);
$resultado->closeCursor();

$L1Jue__tipo=$L1Jue__faena["tipo"];
$L1Jue__proceso=$L1Jue__faena["proceso"];
$L1Jue__granja=$L1Jue__faena["granja"];
$L1Jue__cantidad=$L1Jue__faena["cantidad"];
$Jue__fecha=$L1Jue__faena["fecha"];

/* ---------------------------lote 2----------------------------- */ 

$query="SELECT tipo, proceso, granja, cantidad, fecha, sem, Id
        FROM faena 
            where sem='$semana'
            and dia='jue' 
            and lote='2' 
                ORDER BY Id DESC";

$resultado=$base->prepare($query);
$resultado->execute();     
$L2Jue__faena=$resultado->fetch(PDO::FETCH_ASSOC);
$resultado->closeCursor();

$L2Jue__tipo=$L2Jue__faena["tipo"];
$L2Jue__proceso=$L2Jue__faena["proceso"];
$L2Jue__granja=$L2Jue__faena["granja"];
$L2Jue__cantidad=$L2Jue__faena["cantidad"];


/* ---------------------------lote 3----------------------------- */ 

$query="SELECT tipo, proceso, granja, cantidad, fecha, sem, Id 
        FROM faena 
            where sem='$semana'
            and dia='jue' 
            and lote='3' 
                ORDER BY Id DESC";

$resultado=$base->prepare($query);
$resultado->execute();     
$L3Jue__faena=$resultado->fetch(PDO::FETCH_ASSOC);
$resultado->closeCursor();

$L3Jue__tipo=$L3Jue__faena["tipo"];
$L3Jue__proceso=$L3Jue__faena["proceso"];
$L3Jue__granja=$L3Jue__faena["granja"];
$L3Jue__cantidad=$L3Jue__faena["cantidad"];


/* ---------------------------lote 4----------------------------- */ 

$query="SELECT tipo, proceso, granja, cantidad, fecha, sem, Id
        FROM faena 
            where sem='$semana'
            and dia='jue' 
            and lote='4' 
                ORDER BY Id DESC";

$resultado=$base->prepare($query);
$resultado->execute();     
$L4Jue__faena=$resultado->fetch(PDO::FETCH_ASSOC);
$resultado->closeCursor();

$L4Jue__tipo=$L4Jue__faena["tipo"];
$L4Jue__proceso=$L4Jue__faena["proceso"];
$L4Jue__granja=$L4Jue__faena["granja"];
$L4Jue__cantidad=$L4Jue__faena["cantidad"];

/* ---------------------------lote 5----------------------------- */ 

$query="SELECT tipo, proceso, granja, cantidad, fecha, sem, Id
        FROM faena 
            where sem='$semana'
            and dia='jue'
            and lote='5'
                ORDER BY Id DESC";

$resultado=$base->prepare($query);
$resultado->execute();     
$L5Jue__faena=$resultado->fetch(PDO::FETCH_ASSOC);
$resultado->closeCursor ();

$L5Jue__tipo=$L5Jue__faena["tipo"];
$L5Jue__proceso=$L5Jue__faena["proceso"];
$L5Jue__granja=$L5Jue__faena["granja"];
$L5Jue__cantidad=$L5Jue__faena["cantidad"];
$Jue__fecha=$L5Jue__faena["fecha"];
$Jue__sem=$L5Jue__faena["sem"];

/* ---------------------------lote 6----------------------------- */ 

$query="SELECT tipo, proceso, granja, cantidad, fecha, sem, Id
        FROM faena 
            where sem='$semana'
            and dia='jue'
            and lote='6'
                ORDER BY Id DESC";

$resultado=$base->prepare($query);
$resultado->execute();     
$L6Jue__faena=$resultado->fetch(PDO::FETCH_ASSOC);
$resultado->closeCursor ();

$L6Jue__tipo=$L6Jue__faena["tipo"];
$L6Jue__proceso=$L6Jue__faena["proceso"];
$L6Jue__granja=$L6Jue__faena["granja"];
$L6Jue__cantidad=$L6Jue__faena["cantidad"];
$Jue__fecha=$L6Jue__faena["fecha"];
$Jue__sem=$L6Jue__faena["sem"];

/* ---------------------------cocido----------------------------- */
/* -------------------------------------------------------------- */ 

$query="SELECT pro_cocido, ope_cocido, ext_cocido, ext_cocido2, sem, Id
        FROM cocido 
            where sem='$semana'
            and dia='jue' 
                ORDER BY Id DESC";

$resultado=$base->prepare($query);
$resultado->execute();
$Jue__cocido=$resultado->fetch(PDO::FETCH_ASSOC);
$resultado->closeCursor();

$ProJue__cocido=$Jue__cocido["pro_cocido"];
$OpeJue__cocido=$Jue__cocido["ope_cocido"];
$ExtJue__cocido=$Jue__cocido["ext_cocido"];
$ExtJue__cocido2=$Jue__cocido["ext_cocido2"];


/* ---------------------------embarque--------------------------- */
/* -------------------------------------------------------------- */ 

$query="SELECT pro_embarque, ope_embarque, ext_embarque, ext_embarque2, sem, Id
        FROM embarque 
            where sem='$semana'
            and dia='jue' 
                ORDER BY Id DESC";

$resultado=$base->prepare($query);
$resultado->execute();
$Jue__embarque=$resultado->fetch(PDO::FETCH_ASSOC);
$resultado->closeCursor();

$ProJue__embarque=$Jue__embarque["pro_embarque"];
$OpeJue__embarque=$Jue__embarque["ope_embarque"];
$ExtJue__embarque=$Jue__embarque["ext_embarque"];
$ExtJue__embarque2=$Jue__embarque["ext_embarque2"];

/* ############################################################## */
/* --------------------------VIERNES----------------------------- */
/* ############################################################## */
        
/* ---------------------------faena------------------------------ */ 
/* -------------------------------------------------------------- */       
/* ---------------------------lote 1----------------------------- */ 

$query="SELECT tipo, proceso, granja, cantidad, fecha, sem, Id
        FROM faena 
            where sem='$semana'
            and dia='vie' 
            and lote='1' 
                ORDER BY Id DESC";

$resultado=$base->prepare($query);
$resultado->execute();     
$L1Vie__faena=$resultado->fetch(PDO::FETCH_ASSOC);
$resultado->closeCursor();

$L1Vie__tipo=$L1Vie__faena["tipo"];
$L1Vie__proceso=$L1Vie__faena["proceso"];
$L1Vie__granja=$L1Vie__faena["granja"];
$L1Vie__cantidad=$L1Vie__faena["cantidad"];
$Vie__fecha=$L1Vie__faena["fecha"];

/* ---------------------------lote 2----------------------------- */ 

$query="SELECT tipo, proceso, granja, cantidad, fecha, sem, Id
        FROM faena 
            where sem='$semana'
            and dia='vie' 
            and lote='2' 
                ORDER BY Id DESC";

$resultado=$base->prepare($query);
$resultado->execute();     
$L2Vie__faena=$resultado->fetch(PDO::FETCH_ASSOC);
$resultado->closeCursor();

$L2Vie__tipo=$L2Vie__faena["tipo"];
$L2Vie__proceso=$L2Vie__faena["proceso"];
$L2Vie__granja=$L2Vie__faena["granja"];
$L2Vie__cantidad=$L2Vie__faena["cantidad"];


/* ---------------------------lote 3----------------------------- */ 

$query="SELECT tipo, proceso, granja, cantidad, fecha, sem, Id 
        FROM faena 
            where sem='$semana'
            and dia='vie' 
            and lote='3' 
                ORDER BY Id DESC";

$resultado=$base->prepare($query);
$resultado->execute();     
$L3Vie__faena=$resultado->fetch(PDO::FETCH_ASSOC);
$resultado->closeCursor();

$L3Vie__tipo=$L3Vie__faena["tipo"];
$L3Vie__proceso=$L3Vie__faena["proceso"];
$L3Vie__granja=$L3Vie__faena["granja"];
$L3Vie__cantidad=$L3Vie__faena["cantidad"];


/* ---------------------------lote 4----------------------------- */ 

$query="SELECT tipo, proceso, granja, cantidad, fecha, sem, Id
        FROM faena 
            where sem='$semana'
            and dia='vie' 
            and lote='4' 
                ORDER BY Id DESC";

$resultado=$base->prepare($query);
$resultado->execute();     
$L4Vie__faena=$resultado->fetch(PDO::FETCH_ASSOC);
$resultado->closeCursor();

$L4Vie__tipo=$L4Vie__faena["tipo"];
$L4Vie__proceso=$L4Vie__faena["proceso"];
$L4Vie__granja=$L4Vie__faena["granja"];
$L4Vie__cantidad=$L4Vie__faena["cantidad"];

/* ---------------------------lote 5----------------------------- */ 

$query="SELECT tipo, proceso, granja, cantidad, fecha, sem, Id
        FROM faena 
            where sem='$semana'
            and dia='vie'
            and lote='5'
                ORDER BY Id DESC";

$resultado=$base->prepare($query);
$resultado->execute();     
$L5Vie__faena=$resultado->fetch(PDO::FETCH_ASSOC);
$resultado->closeCursor ();

$L5Vie__tipo=$L5Vie__faena["tipo"];
$L5Vie__proceso=$L5Vie__faena["proceso"];
$L5Vie__granja=$L5Vie__faena["granja"];
$L5Vie__cantidad=$L5Vie__faena["cantidad"];
$Vie__fecha=$L5Vie__faena["fecha"];
$Vie__sem=$L5Vie__faena["sem"];

/* ---------------------------lote 6----------------------------- */ 

$query="SELECT tipo, proceso, granja, cantidad, fecha, sem, Id
        FROM faena 
            where sem='$semana'
            and dia='vie'
            and lote='6'
                ORDER BY Id DESC";

$resultado=$base->prepare($query);
$resultado->execute();     
$L6Vie__faena=$resultado->fetch(PDO::FETCH_ASSOC);
$resultado->closeCursor ();

$L6Vie__tipo=$L6Vie__faena["tipo"];
$L6Vie__proceso=$L6Vie__faena["proceso"];
$L6Vie__granja=$L6Vie__faena["granja"];
$L6Vie__cantidad=$L6Vie__faena["cantidad"];
$Vie__fecha=$L6Vie__faena["fecha"];
$Vie__sem=$L6Vie__faena["sem"];

/* ---------------------------cocido----------------------------- */
/* -------------------------------------------------------------- */ 

$query="SELECT pro_cocido, ope_cocido, ext_cocido, ext_cocido2, sem, Id
        FROM cocido 
            where sem='$semana'
            and dia='vie' 
                ORDER BY Id DESC";

$resultado=$base->prepare($query);
$resultado->execute();
$Vie__cocido=$resultado->fetch(PDO::FETCH_ASSOC);
$resultado->closeCursor();

$ProVie__cocido=$Vie__cocido["pro_cocido"];
$OpeVie__cocido=$Vie__cocido["ope_cocido"];
$ExtVie__cocido=$Vie__cocido["ext_cocido"];
$ExtVie__cocido2=$Vie__cocido["ext_cocido2"];


/* ---------------------------embarque--------------------------- */
/* -------------------------------------------------------------- */ 

$query="SELECT pro_embarque, ope_embarque, ext_embarque, ext_embarque2, sem, Id
        FROM embarque 
            where sem='$semana'
            and dia='vie' 
                ORDER BY Id DESC";

$resultado=$base->prepare($query);
$resultado->execute();
$Vie__embarque=$resultado->fetch(PDO::FETCH_ASSOC);
$resultado->closeCursor();

$ProVie__embarque=$Vie__embarque["pro_embarque"];
$OpeVie__embarque=$Vie__embarque["ope_embarque"];
$ExtVie__embarque=$Vie__embarque["ext_embarque"];
$ExtVie__embarque2=$Vie__embarque["ext_embarque2"];

/* ############################################################## */
/* --------------------------SABADO------------------------------ */
/* ############################################################## */
        
/* ---------------------------faena------------------------------ */ 
/* -------------------------------------------------------------- */       
/* ---------------------------lote 1----------------------------- */ 

$query="SELECT tipo, proceso, granja, cantidad, fecha, sem, Id
        FROM faena 
            where sem='$semana'
            and dia='sab' 
            and lote='1' 
                ORDER BY Id DESC";

$resultado=$base->prepare($query);
$resultado->execute();     
$L1Sab__faena=$resultado->fetch(PDO::FETCH_ASSOC);
$resultado->closeCursor();

$L1Sab__tipo=$L1Sab__faena["tipo"];
$L1Sab__proceso=$L1Sab__faena["proceso"];
$L1Sab__granja=$L1Sab__faena["granja"];
$L1Sab__cantidad=$L1Sab__faena["cantidad"];
$Sab__fecha=$L1Sab__faena["fecha"];

/* ---------------------------lote 2----------------------------- */ 

$query="SELECT tipo, proceso, granja, cantidad, fecha, sem, Id
        FROM faena 
            where sem='$semana'
            and dia='sab' 
            and lote='2' 
                ORDER BY Id DESC";

$resultado=$base->prepare($query);
$resultado->execute();     
$L2Sab__faena=$resultado->fetch(PDO::FETCH_ASSOC);
$resultado->closeCursor();

$L2Sab__tipo=$L2Sab__faena["tipo"];
$L2Sab__proceso=$L2Sab__faena["proceso"];
$L2Sab__granja=$L2Sab__faena["granja"];
$L2Sab__cantidad=$L2Sab__faena["cantidad"];


/* ---------------------------lote 3----------------------------- */ 

$query="SELECT tipo, proceso, granja, cantidad, fecha, sem, Id 
        FROM faena 
            where sem='$semana'
            and dia='sab' 
            and lote='3' 
                ORDER BY Id DESC";

$resultado=$base->prepare($query);
$resultado->execute();     
$L3Sab__faena=$resultado->fetch(PDO::FETCH_ASSOC);
$resultado->closeCursor();

$L3Sab__tipo=$L3Sab__faena["tipo"];
$L3Sab__proceso=$L3Sab__faena["proceso"];
$L3Sab__granja=$L3Sab__faena["granja"];
$L3Sab__cantidad=$L3Sab__faena["cantidad"];


/* ---------------------------lote 4----------------------------- */ 

$query="SELECT tipo, proceso, granja, cantidad, fecha, sem, Id
        FROM faena 
        where sem='$semana'
        and dia='sab' 
            and lote='4' 
                ORDER BY Id DESC";

$resultado=$base->prepare($query);
$resultado->execute();     
$L4Sab__faena=$resultado->fetch(PDO::FETCH_ASSOC);
$resultado->closeCursor();

$L4Sab__tipo=$L4Sab__faena["tipo"];
$L4Sab__proceso=$L4Sab__faena["proceso"];
$L4Sab__granja=$L4Sab__faena["granja"];
$L4Sab__cantidad=$L4Sab__faena["cantidad"];

/* ---------------------------lote 5----------------------------- */ 

$query="SELECT tipo, proceso, granja, cantidad, fecha, sem, Id
        FROM faena 
            where sem='$semana'
            and dia='sab'
            and lote='5'
                ORDER BY Id DESC";

$resultado=$base->prepare($query);
$resultado->execute();     
$L5Sab__faena=$resultado->fetch(PDO::FETCH_ASSOC);
$resultado->closeCursor ();

$L5Sab__tipo=$L5Sab__faena["tipo"];
$L5Sab__proceso=$L5Sab__faena["proceso"];
$L5Sab__granja=$L5Sab__faena["granja"];
$L5Sab__cantidad=$L5Sab__faena["cantidad"];
$Sab__fecha=$L5Sab__faena["fecha"];
$Sab__sem=$L5Sab__faena["sem"];

/* ---------------------------lote 6----------------------------- */ 

$query="SELECT tipo, proceso, granja, cantidad, fecha, sem, Id
        FROM faena 
            where sem='$semana'
            and dia='sab'
            and lote='6'
                ORDER BY Id DESC";

$resultado=$base->prepare($query);
$resultado->execute();     
$L6Sab__faena=$resultado->fetch(PDO::FETCH_ASSOC);
$resultado->closeCursor ();

$L6Sab__tipo=$L6Sab__faena["tipo"];
$L6Sab__proceso=$L6Sab__faena["proceso"];
$L6Sab__granja=$L6Sab__faena["granja"];
$L6Sab__cantidad=$L6Sab__faena["cantidad"];
$Sab__fecha=$L6Sab__faena["fecha"];
$Sab__sem=$L6Sab__faena["sem"];

/* ---------------------------cocido----------------------------- */
/* -------------------------------------------------------------- */ 

$query="SELECT pro_cocido, ope_cocido, ext_cocido, ext_cocido2, sem, Id
        FROM cocido 
            where sem='$semana'
            and dia='sab' 
                ORDER BY Id DESC";

$resultado=$base->prepare($query);
$resultado->execute();
$Sab__cocido=$resultado->fetch(PDO::FETCH_ASSOC);
$resultado->closeCursor();

$ProSab__cocido=$Sab__cocido["pro_cocido"];
$OpeSab__cocido=$Sab__cocido["ope_cocido"];
$ExtSab__cocido=$Sab__cocido["ext_cocido"];
$ExtSab__cocido2=$Sab__cocido["ext_cocido2"];


/* ---------------------------embarque--------------------------- */
/* -------------------------------------------------------------- */ 

$query="SELECT pro_embarque, ope_embarque, ext_embarque, ext_embarque2, sem, Id
        FROM embarque 
            where sem='$semana'
            and dia='sab' 
                ORDER BY Id DESC";

$resultado=$base->prepare($query);
$resultado->execute();
$Sab__embarque=$resultado->fetch(PDO::FETCH_ASSOC);
$resultado->closeCursor();

$ProSab__embarque=$Sab__embarque["pro_embarque"];
$OpeSab__embarque=$Sab__embarque["ope_embarque"];
$ExtSab__embarque=$Sab__embarque["ext_embarque"];
$ExtSab__embarque2=$Sab__embarque["ext_embarque2"];

/* ############################################################## */
/* -------------------------------------------------------------- */
/* ############################################################## */

?>