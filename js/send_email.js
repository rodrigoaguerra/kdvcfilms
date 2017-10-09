function er_replace( pattern, replacement, subject ){
  return subject.replace( pattern, replacement );
}

//mascara form 
$('.input-name').keyup(function() {
  let $this = $( this );
  $this.val( er_replace( /[^a-zA-Z\s]+/g,'', $this.val() ) );
});

$('.input-email').blur(function () {
  let re = /[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}/igm;
  if (re.test($(this).val())) {

  } else {
      $(this).val('');
  }
});

$('.input-phone').mask('(00) 0000-0000');

$('.input-msg').keyup(function() {
  let $this = $( this );
  $this.val( er_replace( /[^a-zA-Z\s\?\_\*0-9\+\-\=\(\)\,\.\!]+/g,'', $this.val() ) );
});

//valida form 
$("#envia-email").on('click', function(e){
  e.preventDefault();
  let form = $('input[name="save"]').val();
  let name = $('input[name="cpname"]').val();
  let phone = $('input[name="cpphone"]').val();
  let email = $('input[name="cpemail"]').val();
  let date = $('input[name="cpdate"]').val();
  let textarea = $('textarea[name="cpmessage"]').val();
  $.ajax({
    url: '<?php echo get_template_directory_uri(); ?>/envia_email.php',
    type: 'POST',
    dataType: 'json',
    data: {save: form, name: name, phone: phone, email: email, date: date, mensage: textarea},
  })
  .done(function() {
    console.log("success");
  })
  .fail(function() {
    console.log("error");
  })
  .always(function(data) {
    console.log("envio de formulário completo!");
    console.log(data);
  });
});