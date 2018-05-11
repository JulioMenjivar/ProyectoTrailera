$(document).ready(function(){

	    var idUsu = $("#idUsuarioLog").val();
	    var idNoti;

	    
	    	$.ajax({
        type: 'POST',
                async: false,
                dataType: 'JSON',
                data: {idUsu:idUsu, key:'notifica'},
                url: "../controller/usuarioController.php",
        success: function (res) {
            if (res.estado == 1 && res.tipo == 'Agregar') {
                $("#numNotifica").html("1");
                idNoti = res.id;
                $("#AreaDeNotifi").append('<a class="waves-effect Notification" href="#" id="Noti'+res.id+'"><div class="Notification-icon"><i class="zmdi zmdi-accounts-alt bg-info"></i></div><div class="Notification-text"><p><i class="zmdi zmdi-circle tooltipped" data-delay="50" data-position="left" data-tooltip="Notification as UnRead"></i><strong>Nuevo Motorista Agregado</strong><br><small>'+res.mensaje+'<br>'+res.fecha_registro+'</small></br></p></div></a>');
            }
            else{
            	  $("#numNotifica").html("0");
            }
        },
        error: function (xhr,status) {
            alert("No entra oni-chan :v"+status);
        }
    });//fin del ajax


	$(document).on("click",'#Noti'+idNoti,function () {
		var idUsu = idNoti;
		$.ajax({
        type: 'POST',
                async: false,
                dataType: 'JSON',
                data: {idUsu:idUsu, key:'notificaElim'},
                url: "../controller/usuarioController.php",
        success: function (res) {
          
        },
        error: function (xhr,status) {
        $("#AreaDeNotifi").empty();
          $("#numNotifica").html("0");
        }
    });//fin del ajax
		});//Eliminar Notificacion


//elimiar usuario
	$(document).on("click",'.eliminarUsuario',function () {
	var idUsuario = $(this).attr('id');
	console.log(idUsuario);

swal({
        title: "Estas seguro?",
        text: "El usuario se eliminara y no se podra utilizar!",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "SI, Eliminarlo!",
        closeOnConfirm: false
    }, function (isConfirm) {
        if (!isConfirm) return;
        	$.ajax({
				type: 'POST',
				async: false,
				dataType:'json',
				data:{idUsuario:idUsuario, key:'elimiaruser'},
				url:"../controller/usuarioController.php",
				success: function (res) {
					if (res.estado) {						
						swal({
							title: "Exito!",
							text: res.descripcion,
							timer: 3500,
							type: 'success',
							closeOnConfirm: true,
							closeOnCancel: true
						});
						setTimeout(function () {
									location.reload();
								},1000);
						//$('#modalModificacionUsuario').modal({backdrop: 'static', keyboard: false});
					}
				},
				error: function (xhr,status) {
					
				}

			});//fin ajax
    });

});//fin eliminar 

	//Modificar
$(document).on("click",'.editarMotorista',function () {
	var idUsuario = $(this).attr('id');
	console.log(idUsuario);
	$.ajax({
		type: 'POST',
				async: false,
				dataType:'json',
				data:{idUsuario:idUsuario, key:'getUser'},
				url:"../controller/usuarioController.php",
		success: function (res) {
			if (res.estado) {
				$('#nombresEdit').val(res.nombres);
				$('#apellidosEdit').val(res.apellidos);				
				$('#idEdit').val(res.idMotorista);
				$('#licenciaEdit').val(res.licencia);
				$('#edadEdit').val(res.edad);
				$('#telefonoEdit').val(res.telefono);
				$('#duiEdit').val(res.dui);
				$('#modal2').modal('open');
			}
		},
		error: function (xhr,status) {
			alert("No entra oni-chan :v"+status);
		}

	});//fin ajax
});//fin modificar

$(document).on("click", "#btnModificarEdit", function(){
	var dataUsuarioEdit = JSON.stringify($('#modificarMotoristaEdit :input').serializeArray());
swal({
  title: "Estas Seguro?",
  text: "Se modificara la informacion del motorista, desea continuar?",
  type: "warning",
  showCancelButton: true,
  confirmButtonClass: "btn-danger",
  confirmButtonText: "Si, Modificarlo!",
  cancelButtonText: "Cancelar!",
  closeOnConfirm: false,
  closeOnCancel: false
},
function(isConfirm) {
  if (isConfirm) {
    
$.ajax({
				type: 'POST',
				async: false,
				dataType:'json',
				data:{dataUsuarioEdit:dataUsuarioEdit, key:'editar'},
				url:"../controller/UsuarioController.php",
				success: function (res) {
					// var data= $.parseJSON(res); 
					if (res.estado) {
						swal({
							title: "Exito!",
							text: res.description,
							timer: 1500,
							type: 'success',
							closeOnConfirm: true,
							closeOnCancel: true
						});
						setTimeout(function () {
							location.reload();
						},1000);
					}
				},
				error: function (xhr,status) {
					// body...
				}
			});//fin ajax
  } else {
    swal("Cancelado!", "No se han realizado cambios :)", "info");
    $('#modal2').modal('close');
  }
});

	
});//fin Modificar Edit


});