<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <title>Stone Template - Products</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
    <!--
    Stone Template
    http://www.templatemo.com/preview/templatemo_452_stone
    -->
    <!-- Bootstrap Stylesheet -->
    <link rel="stylesheet" href="template/css/bootstrap.min.css">

    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="template/css/font-awesome.min.css">

    <!-- Normailize Stylesheet -->
    <link rel="stylesheet" href="template/css/normalize.min.css">

    <!-- Main Styles -->
    <link rel="stylesheet" href="template/css/templatemo-style.css">

    <script src="template/js/vendor/modernizr-2.6.2.min.js"></script>

</head>
<body>
    <!--[if lt IE 7]>
    <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
    <![endif]-->

    <!-- HEADER -->
    <div class="site-header">
        <div class="container">
            <div class="row">
                <nav class="navbar navbar-default navbar-static-top">
                    <div class="navbar-header">
                        <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#main-menu">
                            <span class="sr-only">Toggle navigation</span>
                            <i class="fa fa-bars"></i>
                        </button>
                        <a class="navbar-brand" href="index.html">Stone</a>
                    </div>
                    <div class="collapse navbar-collapse" id="main-menu">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="{{route('home.index')}}">Home</a></li>
                            <li><a href="{{route('promotion.index')}}">Promotion</a></li>
                            <li><a href="{{route('category.index')}}">Products</a></li>
                            <li><a href="{{route('contact-us.index')}}">Contact</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div> <!-- .site-header -->


    <div class="page-h">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h3>Products</h3>
                </div>
            </div>
        </div>
    </div>



    <div class="filter">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <ul class="filter-controls controls">
                        <li class="filter active" data-filter="mix">All</li>
                        <li class="filter" data-filter="category-1">Music</li>
                        <li class="filter" data-filter="category-2">Creative</li>
                        <li class="filter" data-filter="category-3">Responsive</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="products">
        <div class="container">
            <div class="row">
                @foreach ($posts as $post)
                <h4>{{$post->title }}</h4>

                @endforeach

                <div id="Grid">

                <div class="mix category-1 col-md-3 col-sm-6">
                    <div class="thumb-p">
                        <img src="" alt="">
                        <div class="overlay-p">
                            <a href="images/p1.jpg" data-rel="lightbox"><i class="fa fa-plus"></i></a>
                        </div>
                    </div>
                    <div class="content-p">
                        <h4>First Item</h4>
                        <span>Creative</span>
                    </div>
                </div>

            </div>
            </div>
        </div>
    </div>



    <div class="fourth-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2>NEW PRODUCT PROMOTION ?</h2>
                    <a href="contact.html">(BE THERE RIGHT NOW)</a>
                </div>
            </div>
        </div>
    </div>

    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <ul class="social">
                        <li class="twitter"><a href="#" class="fa fa-twitter"></a></li>
                        <li class="facebook"><a href="#" class="fa fa-facebook"></a></li>
                        <li class="rss"><a href="#" class="fa fa-rss"></a></li>
                        <li class="linkedin"><a href="#" class="fa fa-linkedin"></a></li>
                    </ul>
                    <p>Copyright &copy; 2084 Company Name</p>
                </div>
            </div>
        </div>
    </footer>

    <script src="js/vendor/jquery-1.10.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

</body>
</html>
