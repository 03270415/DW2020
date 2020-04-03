console.log("Funciona");
var lista=[];
var frutas=["Naranja",2,"Manzana"];
console.log(frutas);
console.log(frutas[0]);
console.log(frutas.length);
frutas[1]="Frutilla";
console.log(frutas);
frutas.push("Pera");//sgrega al final.
console.log(frutas);
frutas.push("Sandia","Melón");
console.log(frutas);
//Método
frutas.unshift("Durazno","Ciruela")
console.log(frutas);//agrega al comienzo.
//
console.log(frutas.sort());//ordena alfabéticamente
var numeros=[1,2,3,40,100,11,101];
console.log(numeros.sort());
//
for(let i=0; i<frutas.length; i++)//
{
  console.log(frutas[i]);
}
console.log(i);

for(var i=0; i<frutas.length; i++)//
{
  console.log(frutas[i]);
}
console.log(i);
///////////////////////////////////////////
//Funciones
var a=3;
var b=12;
function sumar(a,b) //común confiable
{
  return a+b;
}
console.log(a,b);
//F. anónimas
var suma= function(a,b) { return a+b; }
console.log(suma(a,b));
//F. flechas
var flecha=(a,b) => {return a+b;}
console.log(flecha(a,b));
var z=y=x=5;
console.log(y);
////////
//item = valor i=index
console.log("Con funciones flechas.");
frutas.forEach((item, i) => {
  console.log("index= "+i+"valor = "+item);
});
console.log("Con funciones anonimas.");
frutas.forEach(function(item, i){
  console.log("index= "+i+"valor = "+item);
});


console.log("Funcion clásica");
function imprimir(i,item){console.log("index= "+i+"valor = "+item);}
frutas.forEach(function(item, i)
{ imprimir(i,item);
});
