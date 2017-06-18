 <!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>


           <div class="navbar-fixed">
              <nav>
                <div class="nav-wrapper">
                  <a href="#!" class="brand-logo">Logo</a>
                  <ul class="right hide-on-med-and-down">
                    <li><a href="sass.html">Sass</a></li>
                    <li><a href="badges.html">Components</a></li>
                  </ul>
                </div>
              </nav>
            </div>
                


            <div class="parallax-container">
              <div class="parallax"><img src="https://ugc.kn3.net/i/origin/http://st.gdefon.ru/wallpapers_original/wallpapers/372810_zakat_zheleznaya-doroga_gorod_2560x1440_(www.GdeFon.ru).jpg"></div>
            </div>
            <div class="section white">
              <div class="row container">
                <h2 class="header">Parallax</h2>
                          <div class="row">
                            <div class="col s4 offset-s4">
                              <form action="" method="POST">
                                <input placeholder="Ingresa tu nombre"  type="text" class="validate" required="true">
                                <input placeholder="Ingresa tu edad"  type="number" class="validate" required="true">
                                <input placeholder="Ingresa tu correo"  type="email" class="validate" required="true">
                                <input placeholder="Ingresa tu contraseña"  type="password" class="validate" required="true">
                                <center><button class="waves-effect waves-light btn" type="submit">button</button></center>
                              </form>
                            </div>
                          </div>

              </div>
            </div>
            <div class="parallax-container">
              <div class="parallax"><img src="img/fondo.jpeg"></div>
            </div>
      



      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>

      <script type="text/javascript">
          $(document).ready(function(){
            $('.parallax').parallax();
          });

      </script>


    </body>
  </html>