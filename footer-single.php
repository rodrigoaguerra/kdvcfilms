    <!--footer start from here-->
    <footer id="contact">
      <div class="container-fluid">
        <div class="row">
            <div class="col-md-2 text-center footerleft">
              <h3> <span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span> Encontre-nos: </h3>
              <address>
                <strong>KDVC FILMS, Inc.</strong><br>
                Rua São Pio X Nº1039, Ahú <br>
                Curitiba, Paraná - Brasil<br>
                <abbr title="Telefone">Contato:</abbr> +55 (41) 99883-2536
              </address>

              <address>
                <strong>Pablo Rosa</strong><br>
                <a href="mailto:contato@kdvcfilms.com">
                contato@kdvcfilms.com</a>
              </address>
              <!--<script type="text/javascript" src="https://cdn1.casamentos.com.br/_js/wp-rated.js?v=4"></script>
              <div id="wp-rated">-->
                  <a href="https://www.casamentos.com.br/filmagem-casamento/kdvc-films--e147473" title="Aconselhado em casamentos.com.br" target="_blank"><img alt="Recomendado em Casamentos.com.br" id="wp-rated-img" src="https://cdn1.casamentos.com.br/img/badges/2017/badge-gold_pt_BR.jpg" /></a>
              <!--</div>
              <script>wpShowRatedv2('147473');</script>-->
              <!--<a href="https://www.casamentos.com.br/filmagem-casamento/kdvc-films--e147473" title="casamentos.com.br" target="_blank"><img alt="casamentos.com.br" src="<?php echo get_template_directory_uri(); ?>/img/casamentos.png" style="border-width:0px;  height: 3em;"></a>-->
              <br />
          </div>
          <div class="col-md-8 col-sm-6 paddingtop-bottom">
            <div class="iframe-container">
                <iframe  src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14416.166921366912!2d-49.2586831!3d-25.4034137!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe79aed8aaa5ffd16!2sKDVC+FILMS!5e0!3m2!1spt-BR!2sbr!4v1502245548612" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
          </div>
          <div class="col-md-2 col-sm-6 paddingtop-bottom social">
            <div class="fb-social-page" data-href="https://www.facebook.com/kdvcfilms" data-tabs="timeline" data-height="300" data-small-header="false" style="margin-bottom:15px;" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
              <div class="fb-xfbml-parse-ignore">
                <blockquote cite="https://www.facebook.com/kdvcfilms"><a href="https://www.facebook.com/kdvcfilms" target="_blank">Facebook</a></blockquote>
              </div>
            </div>
            <div class="fb-social-page" data-href="https://www.instagram.com/explore/tags/kdvcfilms/" data-tabs="timeline" data-height="300" data-small-header="false" style="margin-bottom:15px;" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
              <div class="fb-xfbml-parse-ignore">
                <blockquote cite="https://www.instagram.com/explore/tags/kdvcfilms/"><a href="https://www.instagram.com/explore/tags/kdvcfilms/" target="_blank">Instagram</a></blockquote>
              </div>
            </div>
            <div class="fb-social-page" data-href="https://www.youtube.com/channel/UCVJHstw-vLKH3ZlqUrEYKyQ" data-tabs="timeline" data-height="300" data-small-header="false" style="margin-bottom:15px;" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
              <div class="fb-xfbml-parse-ignore">
                <blockquote cite="https://www.youtube.com/channel/UCVJHstw-vLKH3ZlqUrEYKyQ"><a href="https://www.youtube.com/channel/UCVJHstw-vLKH3ZlqUrEYKyQ" target="_blank">You Tube</a></blockquote>
              </div>
            </div>
            <div class="fb-social-page" data-href="https://vimeo.com/kdvcfilms" data-tabs="timeline" data-height="300" data-small-header="false" style="margin-bottom:15px;" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
              <div class="fb-xfbml-parse-ignore">
                <blockquote cite="https://vimeo.com/kdvcfilms" target="_blank"><a href="https://vimeo.com/kdvcfilms">Vimeo</a></blockquote>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!--footer start from here-->
    <div class="container">
      <div class="row">
        <!-- Form -->
        <div class="nb-form">
          <p class="title">Enviar uma mensagem</p>
          <img src="<?php echo get_template_directory_uri(); ?>/img/logo-branca-fundo-preto.jpg" alt="" class="user-icon">
          <p class="message">Entre em contato conosco em breve entraremos em contato com você.</p>

          <form id="form-contact" method="post">
            <input class="input-name" type="text" name="cpname" maxlength="40"  placeholder="Nome:" required>
            <input class="input-email" type="email" name="cpemail" maxlength="50"  placeholder="Email:" required>
            <input class="input-phone" type="text" name="cpphone"  maxlength="15"  placeholder="Telefone:">
            <input class="input-date" type="text" name="cpdate" maxlength="10"  placeholder="Data do seu evento:">
            <textarea class="input-msg" name="cpmessage" maxlength="255" placeholder="Mensagem:" required></textarea>
            <input type="hidden" name="save" value="contact">
            <input id="envia-email" type="button" value="Enviar">
          </form>
          <div class="loader-form hide">
                <p>Enviado...</p>
                <div class="loader-form-inner"></div>
                <div class="loader-form-inner"></div>
                <div class="loader-form-inner"></div>
            </div>
        </div>
      </div>
    </div>
    <div class="copyright">
      <div class="container-fluid">
        <div class="col-md-6">
          <p>© 2016 - Todos os Direitos a Kdvc Films - Desenvolvido por Rodrigo Alves Guerra</p>
        </div>
      </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.mask.min.js"></script>
    <!--<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/cusmomize_carrosel.js"></script>-->
    <script type="text/javascript">
      var acc = document.getElementsByClassName("accordion");
      var i;

      for (i = 0; i < acc.length; i++) {
        acc[i].onclick = function() {
          this.classList.toggle("active");
          var panel = this.nextElementSibling;
          if (panel.style.maxHeight){
            panel.style.maxHeight = null;
          } else {
            panel.style.maxHeight = panel.scrollHeight + "px";
          } 
        }
      }
      $(document).ready(function() {
         $('[data-toggle="tooltip"]').tooltip(); 
          //createCarrosel(posts_index);
          // Add smooth scrolling to all links in navbar + footer link
          $(".navbar-nav li a").on('click', function(event) {
            // Make sure this.hash has a value before overriding default behavior
            if (this.hash !== ""){
              // Prevent default anchor click behavior
              event.preventDefault();

              // Store hash
              var hash = this.hash;

              // Using jQuery's animate() method to add smooth page scroll
              // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
              $('html, body').animate({
                scrollTop: $(hash).offset().top
              }, 900, function(){
           
                // Add hash (#) to URL when done scrolling (default click behavior)
                window.location.hash = hash;
              });
            } // End if
          });  
      });
        
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
      $('.input-date').mask("00/00/0000", {placeholder: "__/__/____"});

      //enviar form 
      $("#envia-email").on('click', function(e){
        enviar_mail_ajax();
      });

      function enviar_mail_ajax(){
        let dados_envio = {
          'get_all_post_nonce': js_global.get_all_post_nonce,
          'action': 'send_mail',
          'form'    : $('input[name="save"]').val(),
          'name'    : $('input[name="cpname"]').val(),
          'phone'   : $('input[name="cpphone"]').val(),
          'email'   : $('input[name="cpemail"]').val(),
          'date'    : $('input[name="cpdate"]').val(),
          'mensage' : $('textarea[name="cpmessage"]').val()
        }

        jQuery.ajax({
          url: js_global.xhr_url,
          beforeSend: function( xhr ) {
            $('#form-contact').addClass('hide');
            $('.loader-form').removeClass('hide');
            $('.nb-form > .title').text('Enviando Menssagem ...')
            $(".nb-form > .message").text('Sua mensagem está sendo enviada aguarde');
          },
          type: 'POST',
          data: dados_envio,
          dataType: 'JSON',
          success: function(response) {
              if (response == '401'  ){
                console.log('Requisição inválida')
              } else if (response == 402) {
                console.log('Todos os posts já foram mostrados')
              } else {
                if(response.sucess != undefined){
                  $('.loader-form').addClass('hide'); 
                  $('.nb-form > .title').text('Mensagem Enviada ...')
                  $(".nb-form > .message").html('<h1 class="bg-success">' + response.sucess  +'</h1>')
                  console.log("Sucesso Ao Enviar Mensagem!!!");  
                }else if(response.erro != undefined){
                  $('.nb-form > .title').text('Mensagem Não Enviada...')
                  $(".nb-form > .message").html('<p class="bg-danger">Por Favor, ' + response.erro + '</p>');
                  $('.loader-form').addClass('hide');  
                  $("#form-contact").removeClass('hide');
                  //console.log(response.erro);
                }
              }
          }
        }).done(function(data) {
          //console.log(data);
        })
        .fail(function(data) {
          //console.log("error");
          //console.log(data);
        })
        .always(function(data) {
          //console.log(data);
        });
      }

    </script>
    <?php wp_footer(); ?>
  </body>
</html>