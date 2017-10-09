  window.fbAsyncInit = function() {
    FB.init({
      appId            : '603578116502752',
      //autoLogAppEvents : true,
      xfbml            : true,
      version          : 'v2.10'
    });

    FB.api(
      '/541239479340840/ratings',
      'GET',
      {"fields":"reviewer,review_text","limit":"150", "access_token": 'EAAIk83s6dOABAJvmZBPWflZAKB8A7G72HmrHuqvGIFYdJgdmuRsGIznZAqhCRhZBmFSIqrGXHlnYPO1EbluZAGP3tm9K0zOv7gWukVyE3Pm2e3seLlRwPclG1QJcdOmGKUK3oRSKQDMGKhv04mYgogf7k3GVsgZBlR0rlZCnNhpXXbDcZCfAzZB0wIU6kghlHHYYZD'},
      function(response) {
        console.log(response);
      }
    );
    
    FB.AppEvents.logPageView();
  };
  
  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));