<!DOCTYPE html>
<html   id="html" >
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>AIM Logistics International</title>

        <!-- Styles  --> 
        <link rel="stylesheet" href="{{asset('css/app.css')}}" >
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" crossorigin="anonymous">
        <style>
            #section {
                font-size: 22px;
                height: 50%;
                padding: 10px;
            }
            #article{
                margin-top:5px;
                margin-bottom:5px;
            }
            label{
                font-size:20px;
            }
            .card-header{
                font-size:22px;
            }
            th{
                font-size:21px;
            }
            td{
                font-size:20px;
            } 
            #container{
                font-size:20px;
                margin-right:60px;
                margin-bottom:10px;
            }
            #body{
                overflow-x : hidden;
                font-family: Arial Rounded MT Bold;
            }
            .carousel-inner > .carousel-item > img {
                width:100%; 
                height: 200px;
                object-fit: cover;
            }
            #Visits{
            margin-left:15px;
            margin-bottom:0px;
            font-size:22px;
            width:15%;
            background-color:crimson;
            text-align:center;
            margin-right:10px;
            }
            #tableShow{
                font-size:21px;
                margin-left:10px;
            }
            #header{
                height:50px;
                font-size:24px;
                padding-left:35px;
                padding-right:35px;
            }
            footer{
            
                position: relative;
                top:0;
                padding-left:40px;
                padding-right:40px;
                margin-top:10px;
                margin-bottom:5px;
                width:100%;
                /*background-color:lightsteelblue;*/
            }
            #St{
                font-size:35px;
            }
            #right{
                padding-left:60px;
                padding-right:60px;
            }
            #st2{
                font-size:20px;
            }
            #links{
                font-size:15px;
            }
            .row{
                font-size:120%;
            }
            .navbar{
                font-size:24px;
                height:15px; 
                font-family:Cooper Black;
            }
        </style>
        @yield('css')
</head>
<body id="body">
    <div class="container-lg">
        <div id="myCarousel" data-interval="3000" class="carousel slide" data-ride="carousel" style=" width:100%; height: 200px !important;">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="\img\Transportation.png"  alt="" >
                        <div class="carousel-caption d-none d-md">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="\img\land trasportation.png"  alt="" >
                        <div class="carousel-caption d-none d-md">
                            <h5>First slide label</h5>
                            <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img src="\img\Sea Transportation.png"  alt="" >
                        <div class="carousel-caption d-none d-md">
                            <h5>First slide label</h5>
                            <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                        </div>
                    </div>
                
                    <div class="carousel-item">
                        <img src="\img\Air Transportation.png"  alt="" >
                    </div>
                </div>

                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
        </div>
        <nav class="navbar navbar-expand-lg navbar-light ">
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item active rounded-pill bg-white">
                        <a class="nav-link" href="{{route('Choose_Country')}}">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item-right active rounded-pill bg-white ">
                        <a class="nav-link" href="#">Shipping Lines</a>
                    </li>
                    
                </ul>
            </div>
        </nav>
    <div id="app">

        <!-- <header  id="header">
            <marquee behavior="alternate" class="text-left" style=" font-size: 24px">
                   <BIG>Work Days :</BIG>&nbsp&nbsp from Saturday To Thursday from 9 AM : 5 PM
            </marquee>
        </header> -->
        
        <article id="article">
        
        </article>
        <main>
            @if(session()->has('success'))
                <div class="alert alert-success text-center">
                    <h3>{{session()->get('success')}}</h3>
                </div>
            @endif
            @if(session()->has('error'))
                <div class="alert alert-danger text-center">
                    <h3>{{session()->get('error')}}</h3>
                </div>
            @endif
            @yield('content')
        </main>
    </div>
  <!-- Copyright -->
  
  <footer class="relative" id="footer">
      <div class="container ">
         <hr>
        <div class=" row">
             <i class="fa fa-map-marker" aria-hidden="true"> 
             <strong id="St"> Address :</strong> <strong id="st2">23 Mohamed Said EL Halwani St., Opp. Military Academy, Nozha,11361, Cairo, Egypt. </strong>   </i> 
        </div> 
         <div class=" row">
             <i class="fa fa-phone" aria-hidden="true"> 
             <strong id="St"> Tel :</strong> <strong id="st2"> 	(202) 2267 1135 - (202) 2266 2488 - (201) 6110 8885 </strong>
             </i> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp           
             <i class="fa fa-fax" aria-hidden="true"> <strong id="St"> Fax :</strong><strong id="st2"> (202) 2269 430/2268 8898</strong></i>
                   
        </div>
        <hr> 
         
         <div class="row text-center">
             <div class="col text-danger" id="right">  <strong id="St">   Copy Right <i class="fa fa-copyright" aria-hidden="true"></i>2020</strong></div>
             
             
         </div>
     </div>
  </footer>
  
    <!-- Scripts -->
    
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"  crossorigin="anonymous"></script>
    @yield('script')
    
</body>
</html>
