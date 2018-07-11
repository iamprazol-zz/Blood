<html class="no-js" lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>B Positive  A blood bank management system</title>
  <meta name="description" content="A free and modern UI toolkit for web makers based on the popular Bootstrap 4 framework.">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
    crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="/css/shards.css">



</head>
<body>

        <nav class="navbar navbar-expand-lg navbar-light  bg-danger mb-4">

           <a href="{{ url('/') }}"> <img class="image-resize" src="/images/blood-drop-icon.png" alt="blood-drop-icon"/></a>
            <a class="navbar-brand" href="{{ url('/') }}">
            BBMS
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">
                    <li><a class="nav-link" href="/forum">Home</a></li>
                    <li><a class="nav-link" href="/groups">Groups</a></li>
                    <li><a class="nav-link" href="/who">Who Can Donate</a></li>
                    <li><a class="nav-link" href="/camps/show">Camps</a></li>
                    <li><a class="nav-link" href="/contact/create">Contact us</a></li>
                    @if(Auth::check())
                        @if(Auth::user()->admin)
                        <li><a class="nav-link" href="/admin">Admin Panel</a></li>
                        @endif
                    @endif


                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                        <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                    @else
                        <li class="nav-item dropdown">

                            <a id="navbarDropdownMenuLink-5" class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                               {{ Auth::user()->name }} <span class=""></span>
                            </a>

                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                                <a class="dropdown-item" href="{{ route('profile.index') }}" >{{ __("My Profile") }}</a>


                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>

                            </div>


                        </li>
                    @endguest
                </ul>
            </div>

        </nav>

        @if(Session::has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <strong>Success:</strong>{{ Session::get('success') }}
            </div>
        @endif

<!-- Slider image for landing page -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="images/blood1.jpg" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
        <h5 class="text-white">Blood is Life.</h5>
        <p>Donate blood to save someone's life.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/blood2.jpg" alt="Second slide">
      <div class="carousel-caption d-none d-md-block">
        <h5 class="text-danger">Caption Title</h5>
        <p class="text-danger">Caption Subtitle</p>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/blood3.jpg" alt="Second slide">
      <div class="carousel-caption d-none d-md-block">
        <h5 class="text-danger">Caption Title</h5>
        <p class="text-danger">Caption Subtitle</p>
      </div>
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
<br><br><hr>
    <!-- For our team view -->
    <div class="ourteam col-md-12">
        <h2 style="text-align: center;color:red;">Our Team</h2>
        <br>
        <div class="l-aside col-md-6">
            
            <div class="container-fluid">
                <div class="row">
                    <article>
                        <fieldset style="padding: 10px 10px; font-size: 20px">
                            <img src="/images/kabita.jpg" style="width: 155px; height: 150px; border-radius: 50%; float: left;clear: left;">
                            <div class="aside">
                                Email: parajulikabita10@gmail.com<br>
                                Facebook: <a href="https://www.facebook.com/kabita.parajuli.3990" target="">Kabita Parajuli</a><br>
                                Role: Back-end Developer
                            </div>    
                        </fieldset>
                    </article>
                </div>
            </div>
        
            <div class="container-fluid">
                <div class="row">
                    <article>
                        <fieldset style="padding: 10px 10px; font-size: 20px">
                            <img src="/images/prajjwal.jpg" style="width: 155px; height: 150px; border-radius: 50%; float: left; clear: left">
                            <div class="aside">
                                Email: iamprajjwal@gmail.com<br>
                                Facebook: <a href="https://www.facebook.com/ujrap" target="">प्रज्वल पौडेल</a><br>
                                Role: Back-end Developer
                            </div>    
                        </fieldset>
                    </article>
                </div>
            </div>
        </div>

        <div class="r-aside col-md-6">

            <div class="container-fluid">
                <div class="row">
                    <article>
                        <fieldset style="padding: 10px 10px; font-size: 20px">
                            <img src="/images/rasilla.jpg" style="width: 155px; height: 150px; border-radius: 50%; float: left; clear: left">
                            <div class="aside">
                                Email: rasilamichhane@gmail.com<br>
                                Facebook: <a href="https://www.facebook.com/rashila.lamichhane.54" target="">Rashila Lamichhane</a><br>
                                Role: Front-end Developer
                            </div> 
                        </fieldset>
                    </article>
                </div>
            </div>
       

            <div class="container-fluid">
                <div class="row">
                    <article>
                        <fieldset style="padding: 10px 10px; font-size: 20px">
                            <img src="/images/anjaan.jpg" style="width: 155px; height: 150px; border-radius: 50%; float: left; clear: left;"/>
                            <div class="aside">
                                Email: anjangaire@gmail.com<br>
                                Facebook: <a href="https://www.facebook.com/anjaan.gaire" target="_blank">Anjaan Gaire</a>
                                <br>
                                Role: Front-end Developer
                            </div>
                            
                        </fieldset>
                    </article>
                </div>
            </div>
        </div> 
    </div>
    </div><br>      
    <!-- For our team view -->

    
       <hr>


    <!-- Starting of Contact -->
    <br>
    <div class="container-fluid">
        <h3 style="margin:auto; text-align: center;">Let us know what you think about us!</h3><br>
        <p style="text-align: center;margin: auto;">If you have something to say to us you can do it from here. We will try to improve our service as far as practicable.</p>
        <br>
        <div class="">
          <form action="post">
            <div class="form-group row">
                <label for="firstname" class="col-md-4 col-form-label text-md-right">First name:</label>

                <div class="col-md-6">
                    <input id="firstname" type="text" class="form-control" name="firstname" required style="width: 510px;">
                </div>
            </div>
        
       
            <div class="form-group row">
                <label for="lastname" class="col-md-4 col-form-label text-md-right">Last name:</label>

                <div class="col-md-6">
                    <input id="lastname" type="text" class="form-control" name="lastname" required style="width: 510px;">
                </div>
            </div>
            <div class="form-group row">
                <label for="Subject" class="col-md-4 col-form-label text-md-right">Subject:       </label>

                <div class="col-md-6">
                   <textarea id="subject" name="subject" placeholder="Write something.." style="height:400px;width:510px;border: none; border-radius: 0.625rem;"></textarea>
                </div>
            </div>
            <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        Submit
                    </button>
                </div>
            </div>

            </form>
        </div>
    </div>

    <footer>
        <nav class="navbar navbar-expand navbar-light bg-danger">
            <div class="container">

                <p>copyright</p>

            </div>
        </nav>
    </footer>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="/js/shards.js"></script>
</body>

</html>