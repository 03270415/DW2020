document.getElementsByTagName('body')[0].onload=inicio;
var datos=[];
function inicio()
{
  console.log("incio");
  document.getElementById('enviar').onclick=procesar;
  cargarDatos();
  imprimirFilas();
}
function procesar()
{
  console.log("procesando...");
  if(document.getElementById('idx').value=="")
  {
    datos.push([document.getElementById('nombre').value,document.getElementById('cantidad').value,document.getElementById('fdv').value,document.getElementById('fabricante').value]);
  }
  else
  {
    var idx=document.getElementById('idx').value;
    datos[idx][0]=document.getElementById('nombre').value;
    datos[idx][1]=document.getElementById('cantidad').value;
    datos[idx][2]=document.getElementById('fdv').value;
    datos[idx][3]=document.getElementById('fabricante').value;
  }
  almacenar();
  imprimirFilas();
  limpiarForm();
  }
function imprimirFilas()
{
  var salida="";
  datos.forEach((item, i) =>
  {
    salida=salida+"<tr><td>"+i+"</td><td>"+item[0]+"</td><td>"+item[1]+"</td><td>"+item[2]+"</td><td>"+item[3]+
    "</td></tr>"
  });
  document.getElementById('datos').innerHTML=salida;
  btTablas();
}
function cargarDatos()
{
  console.log(JSON.parse(localStorage.datos));
  datos=JSON.parse(localStorage.datos);
}
function limpiarForm()
{
  document.getElementById('idx').value="";
  document.getElementById('nombre').value="";
  document.getElementById('cantidad').value="";
  document.getElementById('fdv').value="";
  document.getElementById('fabricante').value="";
  document.getElementById('nombre').focus();
}
function btTablas()
{
  var btedit=document.getElementsByClassName('btEditar');
  for(var i = 0; i < btedit.length; i++)
  {
    btedit[i].onclick=editar;
  }
  var btborrar=document.getElementsByClassName('btBorrar');
  for(var i = 0; i < btborrar.length; i++)
  {
    btborrar[i].onclick=borrar;
  }
}
function editar(e)
{
  console.log("editando");
  var fila=e.target;
  var idx=fila.attributes["data-id"].value;
  document.getElementById('idx').value=idx;
  document.getElementById('nombre').value=datos[idx][0];
  document.getElementById('cantidad').value=datos[idx][1];
  document.getElementById('fdv').value=datos[idx][2];
  document.getElementById('fabricante').value=datos[idx][3];

  document.getElementById('nombre').focus();
}
function borrar(e)
{
  var fila=e.target;
  var idx=fila.attributes["data-id"].value;
  datos.splice(idx,1);
  almacenar();
  imprimirFilas();
}
function almacenar()
{
  console.log("almacenado");
  localStorage.setItem("datos", JSON.stringify(datos));
}
