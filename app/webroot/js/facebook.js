window.fbAsyncInit = function() {
    FB.init({
      appId      : '462625907218760',
      xfbml      : true,
      version    : 'v2.2',
      //oauth      :true
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));

  $(document).ready(function(){
    $('#facebookConnect').click(function(){
      var url=$(this).attr('href');
      FB.login(function(response){
       if(response.authResponse){
           
          location.href = url;
          
        }
      },{scope:'email'});
      return false;
    });
  });

 