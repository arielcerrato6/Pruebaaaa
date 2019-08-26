function login()
{
    
if ($('#email').val().trim() === '')
{
  document.getElementById('email').style.background = "#FADBD8";
  document.getElementById('email').focus(); return false;
}

if ( $('#pass').val().trim() === '')
{
  document.getElementById('pass').style.background = "#FADBD8";
  document.getElementById('pass').focus(); return false; }


    var url = 'php/all/Login.php';
    $.ajax({
        type: 'POST',
        url: url,
        data: $('#formulario').serialize(),
        success: function(registro) {
           // decodificamos el mensaje que nos devuelve
           console.log(registro);
           var result = $.parseJSON(registro);
           //  console.log(data);
           //si el mensaje es verdadero
           if (result[0] == 'true')
           {
             //  $('#myModal2').modal('hide');
             //imprimimos mensaje de bien hecho
           //swal("Create New Person", result[1], "success");
           //swal({ title: "People Edited ",text:  result[1],type:  "success",},function() {window.location='people.php';});

           if (result[1] == '1')
           {
            //console.log('usuairo1');
            window.location='index.php';
           }
           else  if (result[1] == '2')
           {
            //console.log('usuairo2');
            window.location='index.php';
           }
           else
           {
            //console.log('usuairo3');
            window.location='indexU.php';

           }

           }
           //Si el mensjae es falso
           else if (result[0] == "false")
           {
             //imprimimos mensaje de error
             //swal ("try Again", result[1], "error");
             swal({ title: "try Again",text:  result[1],type:  "error",},function() {window.location='Login.php';});
           };

        }
    });
    return false;
}
