//•	el primero con nombre origen que cuente con 10 elementos todos números enteros generados en orden aleatorio.
var a = Math.floor(Math.random()*10+1);
var b = Math.floor(Math.random()*10+1);
var c = Math.floor(Math.random()*10+1);
var d = Math.floor(Math.random()*10+1);
var e = Math.floor(Math.random()*10+1);
var f = Math.floor(Math.random()*10+1);
var g = Math.floor(Math.random()*10+1);
var h = Math.floor(Math.random()*10+1);
var i = Math.floor(Math.random()*10+1);
var j = Math.floor(Math.random()*10+1);
var origen=[];
origen.push(a,b,c,d,e,f,g,h,i,j);
console.log(origen);
//•	el segundo con nombre destino que no tenga ningún elemento. Crear una función que reciba el array origen como parámetro y devuelva los elementos del array origen ordenados de menor a mayor dentro del array destino.

var destino = [];
destino.push(origen);
let min = Math.min(origen);
let max = Math.max(origen);
let output=Array.from({length:max-min+1},(v,i)=>i+min);
if(origen<origen)output.reverse();
console.log(destino.sort(function(a,b){return b-a;}));
