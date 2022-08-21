//inicio de session
function inicio () { 
    $("#exampleModal").removeClass("show");
    Swal.fire({
        position: 'center',
        icon: 'success',
        title: "Bienvenido",
        showConfirmButton: false,
        timer: 1500
      });
      setInterval(function () {location.href="index_adm.php"},2000)
};
//Boton Volver a pagina principal mediante el logo
$(".boton_principal").click(function (e) { 
    e.preventDefault();
    location.href="index.php"
});
//Boton cerrar session
$(".btn-warning").click(function (e) { 
    e.preventDefault();
    location.href="index.php"
});

//Data table
$(document).ready(function () {
    $('#tablaUsuarios').DataTable({
        "ajax":{
            "url":"php/conexion_datos.php",
             "dataSrc":""
        },
        "columns":[
            {"data":"id"},
            {"data":"portada"},
            {"data":"titulo"},
            {"data":"directores"},
            {"data":"actor"},
            {"data":"fecha"},
            {"data":"trailer"},
            {"data":"resumen"},
            {"data":"categoria"},
            {"defaultContent": "<button class='editar btn btn-primary'>Ed</button> || <button class='delete btn btn-danger'>Del</button>"}
        ],
        //Orden para mostrar los datos
        "order": [[ 0, "desc" ]],
        //Scroll 
        scrollX:"400px",
        // scrollCollapse:true,
        // paging:false,
        
    });
});

//Iniciar session
$("#start").click(function (e) { 
    e.preventDefault();
    let user =$("input[name=user]").val();
    let pass =$("input[name=pass]").val();
    var data={
        user: user,pass: pass,inicio: true,
    }
    
    $.post("api/controller/cartelera.controller.php", data,
    function (data) {
        if (data == 1) {
            inicio();
        } else if (data== 3){
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: "Bienvenido ingresa como administrador",
                showConfirmButton: false,
                timer: 2000
              });
        } else{
            Swal.fire({
                position: 'center',
                icon: 'error',
                title: "Uffs Hubo un error",
                showConfirmButton: false,
                timer: 2000
              })
        }
        console.log(data);
    }
);
});
//Bloquear evento submit
$("#form_date").submit(function () { 
    return false; 
 });
//Guardar datos form
$("#btn_guardar").click(function (e) { 
    e.preventDefault();
        let form=document.getElementById("form_data");
        let data_form = new FormData(form);

        var oReq = new XMLHttpRequest();
        oReq.onreadystatechange = function() {
            if(oReq.readyState == 4 && oReq.status == 200)
            var mes = oReq.responseText;
            insertar(mes)
        };
        oReq.open("POST", "api/controller/cartelera.controller.php", true);
        data_form.append("save", true);
        oReq.send(data_form);
         });
        function insertar (mes) {
            if(mes==1){
                document.getElementById("form_data").reset();
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: "Se registro con exito",
                    showConfirmButton: false,
                    timer: 1500
                  });
                  $('#tablaUsuarios').DataTable().ajax.reload();
            }else if (mes==3) {
                Swal.fire({
                    position: 'center',
                    icon: 'error',
                    title: "Todos los campos son requeridos",
                    showConfirmButton: false,
                    timer: 2000
                  })
            }else {
                Swal.fire({
                    position: 'center',
                    icon: 'error',
                    title: "Uffs Hubo un error",
                    showConfirmButton: false,
                    timer: 2000
                  })
            
            };}
  
//Obtener datos para modificar

$(document).on("click",".editar", function (e) {
    fila = $(this).closest("tr");
    id = fila.find('td:eq(0)').text();
    //portada = fila.find('td:eq(1)').text();
    titulo = fila.find('td:eq(2)').text();
    directores = fila.find('td:eq(3)').text();
    actor = fila.find('td:eq(4)').text();
    fecha = fila.find('td:eq(5)').text();
    trailer = fila.find('td:eq(6)').text();
    resumen = fila.find('td:eq(7)').text()
    categoria = fila.find('td:eq(8)').text()

    //Evitar que los input esten oculto cuando se oculta LA PORTADA
    $(".titulo").removeClass("d-none"),
    $(".resumen").removeClass("d-none"),
    $(".fecha").removeClass("d-none"),
    $(".categoria").removeClass("d-none"),
    $(".actor").removeClass("d-none"),
    $(".directores").removeClass("d-none"),
    $(".porta").removeClass("d-none")
    
    //Insertar datos a input para editar
    $("input[name=id]").val(id),
    $(".titulo").removeClass("col-3"),
    $(".titulo").addClass("col-8"),
    $(".portada").addClass("d-none"),
    $("input[name=titulo]").val(titulo),
    $("input[name=directores]").val(directores),
    $("input[name=actor]").val(actor),
    $("input[name=fecha]").val(fecha),
    $("input[name=trailer]").val(trailer),
    $("textarea[name=resumen]").val(resumen)
        $(".select_cat").text(categoria);
        $(".select_cat").val(categoria);
    //Ocultar doton para guardar y mostrar actualizar
    $("#btn_guardar").addClass(" none");
    $("#btn_actualizar").removeClass("none");
});
$(document).on("dblclick",".editar", function (e) {
    $(".portada").removeClass("d-none"),
    $(".titulo").addClass("d-none"),
    $(".resumen").addClass("d-none"),
    $(".fecha").addClass("d-none"),
    $(".categoria").addClass("d-none"),
    $(".actor").addClass("d-none"),
    $(".directores").addClass("d-none"),
    $(".porta").addClass("d-none")
})

//Actualizar datos
$("#btn_actualizar").click(function (e) { 
    e.preventDefault();
    let form=document.getElementById("form_data");
    let data_form = new FormData(form);
    var oReq = new XMLHttpRequest();
        oReq.onreadystatechange = function() {
            if(oReq.readyState == 4 && oReq.status == 200)
            console.log(oReq.responseText);
            update();
            $(".select_cat").text("categoria");
            $(".select_cat").val("");
            $("#btn_guardar").removeClass(" none");
            $("#btn_actualizar").addClass("none");
        };
        oReq.open("POST", "api/controller/cartelera.controller.php", true);
        data_form.append("update", true);
        oReq.send(data_form);
         });

        function update () {
                document.getElementById("form_data").reset();
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: "Se actualizo correctamente",
                    showConfirmButton: false,
                    timer: 1500
                  });
                  $('#tablaUsuarios').DataTable().ajax.reload();
            }    
   
//Delete
$(document).on("click",".delete", function (e) {
    fila = $(this).closest("tr");
    titulo = fila.find('td:eq(2)').text();
    Swal.fire({
        title:`Esta seguro de eliminar la pelicula ${titulo}?`,
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#04AA6D',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si'
      }).then((result) => {
        if (result.isConfirmed) {        
            fila = $(this).closest("tr");
                    id = fila.find('td:eq(0)').text();
                    data={
                        id:id,
                        delete:true
                    }
                    $.get("api/controller/cartelera.controller.php", data,
                    function (res) {
                        console.log(data);
                        if(res==1){
                            Swal.fire({
                                position: 'center',
                                icon: 'success',
                                title: "Se elimino correctamente",
                                showConfirmButton: false,
                                timer: 1500
                              });
                              $('#tablaUsuarios').DataTable().ajax.reload();
                        }else{
                            Swal.fire({
                                position: 'center',
                                icon: 'error',
                                title: "Error no se pudo eliminar",
                                showConfirmButton: false,
                                timer: 2000
                              })
                        }
                       
                    }
                    );
                }
            })
        })

//Funcion para eliminar 

 