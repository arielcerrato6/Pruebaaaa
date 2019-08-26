function validation()
{  //swal ("try Again", "into Satatus Bucket", "error");
//console.log($('#bucket').serialize());
  $.ajax({
               type: 'POST',
                url: 'php/save/Gtrans.php',
               data: $('#bucket').serialize(),
            success: function(registro)
            {

                  // decodificamos el mensaje que nos devuelve
                  console.log(registro);
                  var result = $.parseJSON(registro);
                  //  console.log(data);
                  //si el mensaje es verdadero
                  if (result[0] == "true")
                  {

                  // codigo guardar
                  swal({ title: "Save Bucket",text:  result[1],type:  "success",},
                  function()
                    {
                    if (result[2] === '1' || result[2] === '2' )
                    {
                      window.location='Singbucketless.php?if'+result[2];
                      //window.location = 'http://domain.com/rb/play.php?id=tt' + code_id;
                    }
                    else if (result[2] === '3' || result[2] === '4')
                    {
                      window.location='Singbucketlissting.php?if'+result[2];

                    }

                  });


                  //limpio();
                  $('#bucketmodal').modal('hide');
                  }
                  //Si el mensjae es falso
                  else
                  {
                    //imprimimos mensaje de error
                    swal ("try Again", result[1], "error");
                  };
            }
        });
}
