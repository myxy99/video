<!DOCTYPE html>
<html>
<head>
    <title>error</title>
    <!-- custom-theme -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- //custom-theme -->
    <link href="{{asset("VideoResource/error/css/style.css")}}" rel="stylesheet" type="text/css" media="all" />
    <!-- js -->
    <script src="{{asset("VideoResource/error/js/jquery.min.js")}}"></script>
    <!-- //js -->
    <!-- font-awesome icons -->
    <link href="{{asset("VideoResource/error/css/font-awesome.css")}}" rel="stylesheet">
    <!-- //font-awesome icons -->
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Alfa+Slab+One" rel="stylesheet">
</head>
<body>
<div class="main">
    <canvas id="myCanvas"></canvas>
    <div class="agileinfo_404_main">
        <h1>Effective Error Page</h1>
        <div class="w3_agile_main">
            <h2>权限不够</h2>
            <p>Life is fantastic</p>
            <div class="agile_404 w3layouts">
                <div class="agile_404_pos">
                    <h3>　<span>♥</span>　<img src="{{asset("VideoResource/error/images/1.png")}}" alt=" " /> </h3>
                </div>
                <img src="{{asset("VideoResource/error/images/3.png")}}" alt=" " class="w3l"/>
            </div>
        </div>
        <div class="agileits_w3layouts_nav">
            <div class="w3_agileits_nav_left w3">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
            <div class="wthree_nav_right">
                <ul class="agileits_social_list w3ls">
                    <li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                    <li><a href="#" class="w3_agile_vimeo"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
                </ul>
            </div>
            <div class="clear"> </div>
        </div>
        <div class="agileits_copyright">
            <p> <a href="http://www.cssmoban.com/" target="_blank" title="模板之家"></a>  <a href="http://www.cssmoban.com/" title="网页模板" target="_blank"></a></p>
        </div>
    </div>
</div>
<script src="{{asset("VideoResource/error/js/particles.min.js")}}"></script>
<script>
    window.onload = function() {
        Particles.init({
            selector: '#myCanvas',
            color: '#6b6b6b',
            connectParticles: true,
            minDistance: 100
        });
    };
</script>
</body>
</html>