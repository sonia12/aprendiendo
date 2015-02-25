<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Practica Con Javascript</title>
</head>
<body>
	<script type="text/javascript">
	//alert("Hola Mundo");
	/*
	*  Comentario Largo 
	* De varias Lineas
	*/
	//comentario pequeño
	/*document.write("<h1>Hola Mundo</h1>");
	document.write("Que Haces");
	var numero = prompt("Ingrese un Numero",'');
	var numero2=prompt("Ingrese Otro Numero",'');
	//alert("numero: "+numero);
	document.write("<br>"+numero+"<br>"+numero2);//parseInt parseFloat
	var suma = parseInt(numero)+parseInt(numero2);
	document.write("<br>Resultado suma="+suma);
	console.log(suma);*/
	//estructuras de control
	/*var res = prompt("Introduzca un numero",'');
	if ( res >= '5') {
		document.write("Es mayor o igual a cinco");
	}
	else {
		document.write("es menor a cinco");
	}*/
	//estructura de control switch
	/*var texto = prompt("introduzca un texto",'');
	switch (texto) {
		case "hola": alert("escribiste hola");break;
		case "mundo": alert("escribiste Mundo");break;
		default: alert("escribiste "+texto);
	}*/
	//bucles while
	/*var numero = prompt("Ingrese un numero",'');
	var cont = 0;
	while(cont <= parseInt(numero)) {
		console.log(cont);
		cont=cont+1;
	}*/
	//do while
	/*var numero = prompt("Ingrese un numero",'');
	var cont = 10;
	do {
		console.log(cont);
		
	}
	while(cont != 10);*/
//bucle For
function cargar(sueldos)
  {
    var f;
    for(f=0;f<sueldos.length;f++)
    {
      var v;
      v=prompt('Ingrese sueldo:','');
      sueldos[f]=parseInt(v); 
    }
  }

  function calcularGastos(sueldos)
  {
    var total=0;
    var f;
    for(f=0;f<sueldos.length;f++)
    {
      total=total+sueldos[f];
    }
    document.write('Listado de sueldos<br>');
    for(f=0;f<sueldos.length;f++)
    {
      document.write(sueldos[f]+'<br>');
    } 
    document.write('Total de gastos en sueldos:'+total); 
  }

  var sueldos;
  sueldos=new Array(5);
  cargar(sueldos);
  calcularGastos(sueldos);
</script>
</body>
</html>
