<?php 

function kdvcfilms_wp_title( $title, $sep ) { //title
  global $paged, $page;

  if ( is_feed() ) {
    return $title;
  }

  // Add the site name.
  $title .= get_bloginfo( 'name', 'display' );

  // Add the site description for the home/front page.
  $site_description = get_bloginfo( 'description', 'display' );
  if ( $site_description && ( is_home() || is_front_page() ) ) {
    $title = "$title $sep $site_description";
  }

  // Add a page number if necessary.
  if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() ) {
    $title = "$title $sep " . sprintf( __( 'Page %s', 'twentyfourteen' ), max( $paged, $page ) );
  }

  return $title;
}
// - Close title

add_filter( 'wp_title', 'kdvcfilms_wp_title', 10, 2 ); 

// Menus
function register_my_menus() {
  register_nav_menus(
    array(
          'header-menu' => __( 'Header Menu' ),
          'mobile-menu' => __( 'Mobile Menu' )
      )
   );
}

add_action( 'init', 'register_my_menus' );
// - Close menu

// Post Thumbnail
if ( function_exists( 'add_theme_support' ) ) { 
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 480, 300, true ); // default Post Thumbnail dimensions (cropped)
    
    // additional image sizes
    // delete the next line if you do not need additional image sizes
    //add_image_size( 'portfolio', 9999, 300 ); //300 pixels wide (and unlimited height)
}
// - Close Thumbnail

//require get_template_directory() . '/theme-customize.php';

//Adiciona um script para o WordPress
add_action( 'wp_enqueue_scripts', 'secure_enqueue_script' );
function secure_enqueue_script() {
  wp_register_script( 'secure-ajax-access', esc_url( add_query_arg( array( 'js_global' => 1 ), site_url() ) ) );
  wp_enqueue_script( 'secure-ajax-access' );
}

//Joga o nonce e a url para as requisições para dentro do Javascript criado acima
add_action( 'template_redirect', 'javascript_variaveis' );
function javascript_variaveis() {
  if ( !isset( $_GET[ 'js_global' ] ) ) return;

  $nonce = wp_create_nonce('get_all_post_nonce');

  $variaveis_javascript = array(
    'get_all_post_nonce' => $nonce, //Esta função cria um nonce para nossa requisição para buscar mais notícias, por exemplo.
    'xhr_url'             => admin_url('admin-ajax.php') // Forma para pegar a url para as consultas dinamicamente.
  );

  $new_array = array();
  foreach( $variaveis_javascript as $var => $value ) $new_array[] = esc_js( $var ) . " : '" . esc_js( $value ) . "'";

  header("Content-type: application/x-javascript");
  printf('var %s = {%s};', 'js_global', implode( ',', $new_array ) );
  exit;
}

add_action('wp_ajax_nopriv_get_all_post', 'get_all_post');
add_action('wp_ajax_get_all_post', 'get_all_post');

function get_all_post() {
  /*if( ! wp_verify_nonce( $_POST['get_all_post_nonce'], 'get_all_post_nonce' ) ) {
    echo '401'; // Caso não seja verificado o nonce enviado, a requisição vai retornar 401
    die();
  }*/
  //Busca os dados que queremos
  $args = array(
    'category_name' => $_POST['category_post']
  );

  $wp_query = new WP_Query( $args  );

  $all_posts = array();

  while ( $wp_query->have_posts() ) : $wp_query->the_post();
  		$post_carrosel['post_title'] = the_title('', '', FALSE);
		$post_carrosel['post_video_link'] = get_post_meta(get_the_ID(),'video-link',true);
		if(has_post_thumbnail())
			$post_carrosel['post_thumbnail'] = get_the_post_thumbnail();
		else 
			$post_carrosel['post_thumbnail'] ='<img  src="' . get_template_directory_uri() . '/images/kdvcfilms.jpg">';                    
		array_push($all_posts, $post_carrosel);
  endwhile;

  //Caso tenha os dados, retorna-os / Caso não tenha retorna 402 para tratarmos no frontend
  if( $wp_query->have_posts() ) {
    echo json_encode( $all_posts);
  } else {
    echo 402;
  }
  exit;
}


add_action('wp_ajax_nopriv_send_mail', 'send_mail');
add_action('wp_ajax_send_mail', 'send_mail');

function send_mail() {
  if( ! wp_verify_nonce( $_POST['get_all_post_nonce'], 'get_all_post_nonce' ) ) {
    echo '401'; // Caso não seja verificado o nonce enviado, a requisição vai retornar 401
    die();
  }

  // check for form submission - if it doesn't exist then send back to contact form
  if (!isset($_POST['form']) || $_POST['form'] != 'contact') {
    echo json_encode(array('erro' => 'Formulário inválido!'));
    die();
  }
    
  // get the posted data
  $name = strip_tags ($_POST['name']);
  $phone = strip_tags ($_POST['phone']); 
  $date = strip_tags ($_POST['date']);
  $email_address = strip_tags ($_POST['email']);
  //$assunto = $_POST['contact_assunto'];
  $message = strip_tags($_POST['mensage']);

  // check that a name was entered
  if (empty($name))
    $error = 'Digite seu nome!';

  // check that an email address was entered
  elseif(empty($email_address)) 
    $error = 'Digite seu endereço de email!';

  // check for a valid email address
  elseif(!preg_match('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/', $email_address))
    $error = 'Endereço de email inválido!';

  // check that a phone number was entered
  /*elseif(empty($phone))
    $error = 'Digite o seu telefone!';*/

  // check that a message was entered
  elseif (empty($message))
    $error = 'Digite sua mensagem!';

  // check if an error was found - if there was, send the user back to the form
  if(isset($error)) {
    echo json_encode(array('erro' => $error));
    die();
  }


  $headers = "MIME-Version: 1.1\n";
  $headers .= "Content-type: text/html; charset=utf-8\n";
  $headers .= "From:" . $name . " <$email_address>"."\n"; // remetente
  $headers .= "Return-Path: " . $name . "<$email_address>"."\n"; // return-path


  // write the email content

  $email_content = "<u>Nome</u>: $name<br>";
  $email_content .= "<u>Telefone</u>: $phone<br>";
  $email_content .= "<u>Data</u>: $date<br>";
  $email_content .= "<u>Email</u>: $email_address<br>";
  $email_content .= "<u>Mensagem</u>:<br>$message";

  // send the email

  //ENTER YOUR INFORMATION BELOW FOR THE FORM TO WORK!
  //kdvc04@hotmail.com
   
  $envio = wp_mail( "kdvc04@hotmail.com", "Contato Do Site", $email_content, $headers );
  //$envio = mail("kdvc04@hotmail.com", , $email_content, $headers, "-r"."contato@kdvcfilms.com");

  // send the user back to the form
  if($envio)
    echo json_encode(array('sucess' => 'Obrigado por sua mensagem!' ));
  else
    echo 402;  
  exit;
}

?> 