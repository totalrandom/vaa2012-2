<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Volby 2014 se blíží! Spočítejte si koho volit!">
    <meta name="keywords" content="volby 2014, senátní a komunální volby, volební kalkulačka, volební test">
    <meta name="author" content="KohoVolit.eu">
    <link type="image/x-icon" href="../image/favicon.ico" rel="shortcut icon">
    
    <meta property="og:image" content="http://volebnikalkulacka.cz/image/logo.jpg"/>
	<meta property="og:title" content="Volební kalkulačka"/>
	<meta property="og:url" content="http://volebnikalkulacka.cz"/>
	<meta property="og:site_name" content="Volební kalkulačka"/>
	<meta property="og:type" content="website"/>

    <title>Kluczowe głosowania 2014</title>

    <!-- Bootstrap core CSS -->
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="../css/stylish-portfolio.min.css" rel="stylesheet">
	<link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,700,800|Roboto+Slab:400,700&subset=latin,latin-ext">
	<link rel="stylesheet" href="../css/vaa2014.css">
	<style>
	body {
      padding-top: 0;
    }
	@media (min-width: 666px) {
  .header {
        background: url("../kluczowe-glosowania-2014/image/bg.jpg") no-repeat fixed center center / cover rgba(0, 0, 0, 0); 
      }
    }
    @media (min-width: 750px) {
      /*h1 {background: none repeat scroll 0 0 rgba(0, 0, 0, 0.2);}*/
    }
    h1 { color: #FFFFFF; display: inline; line-height: 60px; font-family: 'Roboto Slab',serif; padding: 10px 20px; vertical-align: baseline; width: auto; }
    .lead { font-size: 16px; font-weight: 200; line-height: 1.4; margin-bottom: 50px; margin-bottom: 20px; font-size: 21px; color: #fff;}
    .nav a {color: #428BCA}
    </style>
	
</head>
<body>

    <!-- Side Menu -->
    <div id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <a id="menu-close" href="#" class="btn btn-default btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
            <li class="sidebar-brand"><a href="http://kohovolit.eu/">KohoVolit.eu</a>
            </li>
            <li><a href="info/">O projektu</a>
            </li>
            <li><a href="embed/">Vložit kalkulačku na web</a>
            </li>
            <li><a href="archive/">Archív kalkulaček</a>
            </li>
            <li><a href="http://kohovolit.eu/cs/kontakt/">Kontakt</a>
            </li>
        </ul>
    </div>
    <!-- /Side Menu -->

    <!-- Full Page Image Header Area -->
    <?php
      //$r = rand(0,5);
      $r = 0;
      if ($r == 0)
        $randpath = '.';
      else
        $randpath = 'http://volebnikalkulacka.eu';
    ?>
    <div id="top" class="header">
        
		<div class="vert-text">    
       
			<h1>Kluczowe głosowania w Sejmie w 2014 r.</h1>
            <div class="col-md-6 col-md-offset-3 text-center" style="padding-top:2em;">
			<p class="lead">
                <a href="http://mamprawowiedziec.pl" class="text-danger">MamPrawoWiedziec.pl</a> i <a href="http://kohovolit.eu" class="text-danger">Kohovolit.eu</a> przygotowały porównywarkę poglądów w wybranych głosowaniach Sejmu w 2014 r. Zaznacz swoje stanowisko w danej kwestii i znajdź posła lub posłankę o najbardziej zbliżonych poglądach.
                </p>
                   <div>
				   <a href="../kluczowe-glosowania-2014/" class="btn btn-lg btn-success" >Przejdź do głosowań</a>
				   </div>


				   <p>
				   
				   </div>
        </div>
    </div>
    <!-- /Full Page Image Header Area -->

  



    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center">
                    
                    <a href="http://www.kohovolit.eu" title="KohoVolit.eu"><img src="../image/logo.png" alt="logo kohovolit.eu" /></a>
                    <!--<p><a href="http://votematch.eu" id="footer-votematch"><img src="image/eu2014/votematch.png" title="VoteMatch.eu" alt="VoteMatch.eu"/></a></p>-->
					<p class="lead black" style="color:#333333"><a href="http://kohovolit.eu">KohoVolit.eu</a> zajmuje się analizą głosowań już od 2006 r. <a href="http://mamprawowiedziec.pl/" title="mamprawowiedziec.pl" id="footer-mpw-logo"><img src="../kluczowe-glosowania-2014/image/logo-mpw-poziom.png" alt="logo mpw" /></a></p>
					
                    <hr>
					
					<p class="black">Creative Commons BY 4.0 | <a href="http://kohovolit.eu">KohoVolit.eu</a> 2014</p>
                </div>
            </div>
        		</div>
    </footer>
    <!-- /Footer -->

    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

    <!-- Custom JavaScript for the Side Menu and Smooth Scrolling -->
    <script>
    $("#menu-close").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });
    </script>
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });
    </script>
    <script>
    $(function() {
        $('a[href*=#]:not([href=#])').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {

                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });
    </script>
    <!-- google analytics -->
    <script type="text/javascript">
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-8592359-7']);
      _gaq.push(['_trackPageview']);
      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
    </script>
    <!-- /google analytics -->
</body>

</html>
