function iniciarSesion(){
  var tipoUsuario = $('#tipoUsuario').val();
  var usuario = $('#usuario').val();
  var contrasena = $('#contraseña').val();
  if (usuario != '' && contrasena != ''){
    $.ajax( {
      url: 'codigo/session_iniciar.php',
      type: "POST",
      dataType: 'JSON',
      data: {'tipoUsuario':tipoUsuario,'usuario':usuario,'contrasena':contrasena},
      async: true,
      success: function (result) {
        if (result['session_id'] >= 0){
            $('#usuario').focus();
            $('#usuario').val('');
            $('#contraseña').val('');
            if (tipoUsuario == "M"){
              console.log('Redireccionar perfil medico');
              window.location.href = "perfilMedico.php";
            } else if (tipoUsuario == "P"){
              window.location.href = "perfilPaciente.php";
            }
        } else {
          hasError('usuario');
          hasError('contraseña');
        }
      },
      error: function () {
        console.log( "Error: AJax dead :(" );
      }
    } );
  } else {
    if (usuario == ""){
      hasError('usuario');
    } else {
      hasError('contraseña');
    }
  }
}

function newsletter_crear(){
  var nombre = $('#nombre').val();
  var email = $('#email').val()
  if (nombre != "" && email != ""){
    $.ajax( {
      url: 'codigo/newsletter_crear.php',
      type: "POST",
      dataType: 'JSON',
      data: {'nombre':nombre,'email':email},
      async: true,
      success: function (result) {
        if (result.success){
          $('#nombre').val('');
          $('#email').val('');
          $('#email').focus();
          $('#nombre').focus();
          //POPUP con success
          $('#resultNewsletter').html('<div class="alert alert-success" role="alert"><strong>¡Bien!</strong> Te has registrado a nuestro newsletter de manera exitosa.</div>');
          setTimeout(function(){
            $('#resultNewsletter').fadeOut(300, function(){ $(this).remove();});
          },5000);
        }
      },
      error: function () {
        console.log( "Error: AJax dead :(" );
      }
    } );
  } else {
    if (nombre == ""){
      hasError('nombre');
    } else {
      hasError('email');
    }
  }
}

function registrarUsuario(){
  var terminos = $('#terminos').is(':checked');
  var nombre = $('#nombre').val();
  var apellidos = $('#apellidos').val();
  var correoReg = $('#correoReg').val();
  var passReg = $('#passReg').val();
  var estado = $('#estado').val();
  var ciudad = $('#ciudad').val();
  var especialidad = $('#especialidad').val();
  var subespecialidad = $('#subespecialidad').val();
  var tipoUsuario = $('#tipoUsuario').val();

  if (nombre != "" && correoReg != "" && passReg != ""){
    var data = {
      terminos: terminos,
      nombre: nombre,
      tipoUsuario: tipoUsuario,
      apellidos: apellidos,
      correoReg: correoReg,
      passReg: passReg,
      ciudad: ciudad,
      estado: estado,
      especialidad: especialidad,
      subespecialidad: subespecialidad
    };

    var tipoUsuario = $('#tipoUsuario').val();
      $.ajax( {
        url: 'codigo/usuario_crear.php',
        type: "POST",
        dataType: 'JSON',
        data: data,
        async: true,
        success: function (result) {
          if (result.success){
            $('#terminos').is(':checked');
            $('#nombre').val('');
            $('#apellidos').val('');
            $('#correoReg').val('');
            $('#passReg').val('');
            $('#estado').val('');
            $('#ciudad').val('');
            $('#especialidad').val('');
            $('#subespecialidad').val('');
            document.getElementById("terminos").checked = false;

            if (tipoUsuario == "M"){
              window.location.href = "perfilMedico.php";
            } else if (tipoUsuario == "P"){
              window.location.href = "perfilPaciente.php";
            }
          }
        },
        error: function () {
          console.log( "Error: AJax dead :(" );
        }
      } );
  } else {
    if (nombre == ""){
      hasError('nombre');
    } else if (correoReg == ""){
      hasError('correoReg');
    } else {
      hasError('passReg');
    }
  }
}

function cerrarSesion(){
  $.ajax( {
    url: 'codigo/session_cerrar.php',
    type: "POST",
    dataType: 'JSON',
    async: true,
    success: function (result) {
      if (result.success){
        window.location.href = "/";
      }
    },
    error: function () {
      console.log( "Error: AJax dead :(" );
    }
  } );
}

function hasError(id){
  var parent = $('#'+id).parent();
  parent.find('.form-control-feedback').remove();
  parent.removeClass('has-error has-feedback');
  parent.append('<span class="fa fa-times form-control-feedback" aria-hidden="true"></span>');
  parent.addClass('has-error has-feedback');
  $('#'+id).focus();
  $('#'+id).focusout(function(){
    parent.find('.form-control-feedback').remove();
    parent.removeClass('has-error has-feedback');
  });
}

function sticky_relocate() {
    var window_top = $(window).scrollTop();
    var div_top = $('#sticky-anchor').offset().top;
    if (window_top > div_top) {
        $('.sticky').addClass('stick');
    } else {
        $('.sticky').removeClass('stick');
    }
}

if ( location.pathname === '/perfilMedico.php' ) {
  $(function () {
      $(window).scroll(sticky_relocate);
      sticky_relocate();
  });
}

$(document).ready(function(){
  $("#listaEspecialidades a").on('click', function(event) {
    event.preventDefault();
  });
})
