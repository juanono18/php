<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html class="no-js lt-ie9 lt-ie8" lang="en"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html class="no-js lt-ie9" lang="en"><![endif]-->
<!--[if (IE 9)]><html class="no-js ie9" lang="en"><![endif]-->
<!--[if gt IE 8]><!-->
<html lang="en-US">
<!--<![endif]-->

<head>

    <!-- Meta Tags -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

    <title>EUR images</title>

    <meta name="description" content="Insert Your Site Description" />

    <!-- Mobile Specifics -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="HandheldFriendly" content="true" />
    <meta name="MobileOptimized" content="320" />

    <!-- Mobile Internet Explorer ClearType Technology -->
    <!--[if IEMobile]>  <meta http-equiv="cleartype" content="on">  <![endif]-->

    <!-- Bootstrap -->
    <link href="_include/css/bootstrap.min.css" rel="stylesheet">

    <!-- Main Style -->
    <link href="main.css" rel="stylesheet">

    <!-- Supersized -->
    <link href="_include/css/supersized.css" rel="stylesheet">
    <link href="_include/css/supersized.shutter.css" rel="stylesheet">

    <!-- FancyBox -->
    <link href="_include/css/fancybox/jquery.fancybox.css" rel="stylesheet">

    <!-- Font Icons -->
    <link href="_include/css/fonts.css" rel="stylesheet">

    <!-- Shortcodes -->
    <link href="_include/css/shortcodes.css" rel="stylesheet">

    <!-- Responsive -->
    <link href="_include/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="_include/css/responsive.css" rel="stylesheet">

    <!-- Supersized -->
    <link href="_include/css/supersized.css" rel="stylesheet">
    <link href="_include/css/supersized.shutter.css" rel="stylesheet">

    <!-- Google Font -->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,200italic,300,300italic,400italic,600,600italic,700,700italic,900' rel='stylesheet' type='text/css'>

    <!-- Fav Icon -->
    <link rel="shortcut icon" href="img/descarga.png">

    <link rel="apple-touch-icon" href="#">
    <link rel="apple-touch-icon" sizes="114x114" href="#">
    <link rel="apple-touch-icon" sizes="72x72" href="#">
    <link rel="apple-touch-icon" sizes="144x144" href="#">

    <!-- Modernizr -->
    <script src="_include/js/modernizr.js"></script>

    <!-- Analytics -->
    <script type="text/javascript">
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'Insert Your Code']);
        _gaq.push(['_trackPageview']);

        (function() {
            var ga = document.createElement('script');
            ga.type = 'text/javascript';
            ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(ga, s);
        })();
    </script>
    <!-- End Analytics -->

</head>


<body>

    <!-- This section is for Splash Screen -->
    <div class="ole">
        <section id="jSplash">
            <div id="circle"></div>
        </section>
    </div>
    <!-- End of Splash Screen -->

    <!-- Homepage Slider -->
    <div id="home-slider">
        <div class="overlay"></div>

        <h1 style="text-align:center;margin-top:10%;">EUR images</h1>
        </div>
    </div>
    <!-- End Homepage Slider -->


    <!-- Our Work Section -->
    <div id="work" class="page">
        <?php

        $conex= mysqli_connect('localhost', 'root', '', 'IMGEuro');
       
       
        $queryP = mysqli_query($conex, "SELECT DISTINCT PAIS FROM contenido");
        //if(){}
        $paises[]= mysqli_fetch_array($queryP);

        foreach($queryP as $paises){
            $PAIS = $paises['PAIS'];
            echo"<h1 style='margin-left:20px;'> $PAIS</h1>";
            $query = mysqli_query($conex, "SELECT * FROM contenido where PAIS='$PAIS'");
            $posta[] = mysqli_fetch_array($query);
            foreach($query as $posta){
               
                $TITLE = $posta['TITLE'];
                $STITLE = $posta['SUBTITLE'];
                $TEXTO = $posta['TEXTO'];
                $IMG1 =$posta['IMG1'];
                $IMG2 =$posta['IMG2'];
                $POSTAPAIS = $posta['PAIS'];

                    echo "  
                        <head>
                            <style>
                                #content{
                                    margin-left:20px;
                                }
                            
                                img{
                                    
                                    display: flex;
                                    flex-wrap: wrap;
                                
                                }
        
        
                            </style>
        
        
                        </head>
                        <form method='GET' enctype='multipart/form-data' id='UpdateForm' name='UpdateForm' class='UpdateForm' action='update.php'>
                        <div class='col-md-12'>	
                            <div class='form-group' id='content'>
                                
                                <h2>$TITLE</h2>
                                <h3>$STITLE</h3>
                                <p style='margin-right:50%;'>$TEXTO</p>
                                <img name='updatedIMG' src='$IMG1' style='width:25%;height:25%;'>
                                <img name='updatedIMG' src='$IMG2' style='width:25%;height:25%;'>
                                
                               
                            </div>
                        </div>
                        </form>
        
                    ";
                
            }
        }
        ?>
        <footer>
            <p class="credits">&copy;2022 EURIMG. </p>
        </footer>
        <!-- End Footer -->

        <!-- Back To Top -->
        <a id="back-to-top" href="#">
            <i class="font-icon-arrow-simple-up"></i>
        </a>
        <!-- End Back to Top -->


        <!-- Js -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> <!-- jQuery Core -->
        <script src="_include/js/bootstrap.min.js"></script> <!-- Bootstrap -->
        <script src="_include/js/supersized.3.2.7.min.js"></script> <!-- Slider -->
        <script src="_include/js/waypoints.js"></script> <!-- WayPoints -->
        <script src="_include/js/waypoints-sticky.js"></script> <!-- Waypoints for Header -->
        <script src="_include/js/jquery.isotope.js"></script> <!-- Isotope Filter -->
        <script src="_include/js/jquery.fancybox.pack.js"></script> <!-- Fancybox -->
        <script src="_include/js/jquery.fancybox-media.js"></script> <!-- Fancybox for Media -->
        <script src="_include/js/jquery.tweet.js"></script> <!-- Tweet -->
        <script src="_include/js/plugins.js"></script> <!-- Contains: jPreloader, jQuery Easing, jQuery ScrollTo, jQuery One Page Navi -->
        <script src="_include/js/main.js"></script> <!-- Default JS -->
        <!-- End Js -->

</body>

</html>