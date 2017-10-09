jQuery(document).ready(function() {
  function getHeaderItemCarrosel(){
    let h_item = '<div class="item">\
                      <div class="container">\
                          <div class="row-fluid">';
    return h_item;
  }

  function getFooterItemCarrosel(){
    let f_item =     '</div>\
                  </div>\
              </div>';
    return f_item;
  }

  function getItemCarrosel(p){
    /*thumbnail_title = p.post_title.toLowerCase();
    if(p.post_title.length > 45){
      thumbnail_title = thumbnail_title.substr(0, 40);
      thumbnail_title += '...';  
    }*/
    let b_item = '<div class="col-sm-4 col-md-4 col-xs-12">\
                    <a href="#" data-toggle="modal" data-target="#showVideo" data-video="' + p.post_video_link + '"\
                     data-name="' + p.post_title + '">\
                    <div class="thumbnail">'
                      + p.post_thumbnail +
                      '<div class="caption">\
                        <h3>' + thumbnail_title + '</h3>\
                      </div>\
                    </div>\
                  </a>\
                </div>';
    return b_item;
  }

  /**/
  function createCarrosel(posts_category){
    let html = '';
    let j = 0; 

    $('.carousel-inner').empty();
    
    for(let i = 0; i < posts_category.length; i++){    
      if(j == 0)
        html += getHeaderItemCarrosel();

      html += getItemCarrosel(posts_category[i]);

      if(j == 2)
        html += getFooterItemCarrosel();
      
      (j != 2) ? j++ : j = 0 ;
    }

    if(j < 2) 
      html += getFooterItemCarrosel();
    
    let num_li = parseInt(posts_category.length / 3);  
    if(posts_category.length % 3 != 0)
      num_li++;

    $('.carousel-inner').html(html);

    $('.item').first().addClass('active');

    let html_li = '';
    let first_li = 'active';
    
    for(let i = 0; i < num_li; i++) {
      html_li += '<li data-target="#myCarousel" data-slide-to="'+ i +'" class="'+ first_li +'"></li>';
      first_li = '';  
    }
    
    $('.carousel-indicators').html(html_li);
    
    //console.log(num_li);
  }

  function get_posts_ajax(category){
    let dados_envio = {
      'get_all_post_nonce': js_global.get_all_post_nonce,
      'category_post' : category,
      'action': 'get_all_post'
    }

    jQuery.ajax({
      url: js_global.xhr_url,
      beforeSend: function( xhr ) {
        $('.carousel-inner').empty();
        $(".loader").removeClass('hide');
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
            //console.log(response)
            createCarrosel(response);
          }
        $(".loader").addClass('hide');
      }
    }).done(function() {
      //console.log("success");
    })
    .fail(function(data) {
      //console.log("error");
      //console.log(data);
    })
    .always(function() {
      //console.log("complete");
    });
  }

  /*
  * Get firts post 
  */

  get_posts_ajax('filmagem-de-casamento-em-curitiba');

  jQuery('#home').on('click', function(e) {
      e.preventDefault();
      get_posts_ajax('filmagem-de-casamento-em-curitiba');
  });

  jQuery('#episodios').on('click', function(e) {
      e.preventDefault();
      get_posts_ajax('episodios');
  }); 

  jQuery('#trailer').on('click', function(e) {
      e.preventDefault();
      get_posts_ajax('trailer');
  });

  jQuery('#same-day-edit').on('click', function(e) {
      e.preventDefault();
      get_posts_ajax('same-day-edit');
  });  

});

/*
* Working Modal in Carrosel
*/
$('#showVideo').on('show.bs.modal', function (event) {
  let button = $(event.relatedTarget) // Button that triggered the modal
  let video_url = button.data('video') // Extract info from data-* attributes
  let video_name = button.data('name') 
  let modal = $(this)
  modal.find('#view-video').attr('src', video_url+'?autoplay=1');
  modal.find('.modal-footer').html('<h2 class="video-name text-center">' + video_name + '</h2>');
  //modal.find('.modal-body').html(recipient)
})

$('#showVideo').on('hidden.bs.modal', function (event) {
  let modal = $(this)
  modal.find('#view-video').attr('src', '');
  modal.find('.modal-footer').html('');
})