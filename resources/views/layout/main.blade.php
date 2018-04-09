<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="theme-color" content="#FFDB17" />
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title> @yield('title') </title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
   @include('layout.menu');


  <div class="cover">
      <img class="img-responsive" src="/storage/@yield('Banner')"  id="img_cover" style="width: 100%;" />

      <div class="c-contact">
        @yield('Divcontacto')
      </div>
  </div>


  <div id="sec1">
     @yield('Divpotencial')
  </div>

  <div id="sec2">
    @yield('Divqueescredimujer')
  </div>

  <div class="col-sm-12" id="productos">
    <div class="container">
      <h2>hola :D</h2>
      @yield('Divproductos')
    </div>
  </div>

  <div class="col-sm-12" id="sec4">
    <div class="container">
      @yield('Divnewsletter')
    </div>
  </div>
  <div class="col-sm-12" id="sec5">
    <div class="container">     
      @yield('Divrequisitos')
    </div>
  </div>


  <div class="col-sm-12" id="sec6">
    <div class="container">

      @yield('Divpotencialdos')

    </div>
  </div>
  <div class="col-sm-12" id="contactanos">
    <div class="container">

      @yield('Divcontactanos')

    </div>
  </div>

  <div id="sec8">
    <div class="container">
      <div id="dv-info">
        <div class="content-info">
          <div class="info">
            <div class="content-colu">
              
              @yield('Divdireccion')

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="dv-progra" class="BrandongGB"> 
    <h2 class="color-gray">UN PROGRAMA DE </h2><img src="image/logo-credicomer.png" class="ímg-responsive">
  </div>


  <footer id="Footer">    
    <div class="footer_copy text-center">
      <div class="container">
        
        @yield('Divfooter')

      </div>
    </div>  
  </footer>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="plugins/slick/slick/slick.min.js"></script>   
    <script>

      $('nav a').click(function(e){       
          var strAncla=$(this).attr('href'); //id del ancla
            $('body,html').stop(true,true).animate({        
              scrollTop: $(strAncla).offset().top
            },1000);          
        });

        $(window).on("scroll", function() {
        if($(window).scrollTop() > 30) {
            $(".header").addClass("active");
        } else {
            //remove the background property so it comes transparent again (defined in your css)
           $(".header").removeClass("active");
        }
    });


    </script>

  </body>
</html>