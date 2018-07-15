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
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="margin-top:-24px">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>

    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="images/front2.jpg" alt="First slide">
            <div class="carousel-caption d-none d-md-block" style="padding-bottom: 250px;padding-top: 20px;">
                <h5 class="text-danger">"Donation of Blood means a few minutes to you but a lifetime for somebody else."</h5>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="images/img3.jpg" alt="Second slide">
            <div class="carousel-caption d-none d-md-block" style="padding-bottom: 250px; padding-top: 20px;" >
                <h5 class="text-danger">“Blood Donation Will Cost You Nothing But It Will Save A Life!”</h5>
                
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="images/img2.png" alt="Third slide">
            <div class="carousel-caption d-none d-md-block" style="padding-bottom: 250px;padding-top: 20px;">
                <h5 class="text-danger"> “If You're A Blood Donor, You're A Hero To Someone, Somewhere, Who Received Your Gracious Gift Of Life.”</h5>

            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="images/front3.jpg" alt="fourth slide">
            <div class="carousel-caption d-none d-md-block" style="padding-bottom: 250px;padding-top: 20px;">
                <h5 class="text-danger">"The Blood Donor of today may be recipient of tomorrow."</h5>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="images/front5.jpg" alt="Fifth slide">
            <div class="carousel-caption d-none d-md-block" style="padding-bottom: 250px;padding-top: 20px;">
                <h5 class="text-danger">"Blood is meant to circulate. Pass it around."</h5>
                
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
<hr>


<!-- Our services -->
 
<div id="our-services" class="our-services section py-4">
        <h3 class="section-title text-center my-5"><span class="after">Our Services</span>  </h3>
        <!-- Features -->
        <div class="features py-4 mb-4">
          <div class="container">
            <div class="row">
              <div class="feature py-4 col-md-6 d-flex">
                <div class="icon text-primary mr-3"><i class="fa fa-Search"></i></div>
                <div class="px-4">
                    <h5>Search for blood</h5>
                    <p>Users can search for blood group in their locality or anywhere else where they want the blood.</p>
                </div>
              </div>
              <div class="feature py-4 col-md-6 d-flex">
                <div class="icon text-primary mr-3"><i class="fa fa-"></i></div>
                <div class="px-4">
                    <h5>View requests</h5>
                    <p>Users can view the requests made by other users and can choose to go help them or to send someone else who have the requested blood group.</p>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="feature py-4 col-md-6 d-flex">
                <div class="icon text-primary mr-3"><i class="fa fa-font"></i></div>
                <div class="px-4">
                    <h5>Send request</h5>
                    <p>Users can send request to other users about the blood needed with purpose and can contact them for blood.</p>
                </div>
              </div>
              <div class="feature py-4 col-md-6 d-flex">
                <div class="icon text-primary mr-3"><i class="fa fa-support"></i></div>
                <div class="px-4">
                    <h5>Contact and Support</h5>
                    <p>Users can contact other user in need of blood or support them by providing the blood they require.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- / Features -->
      </div>
      <!-- / Our Services Section -->
<hr>
<!-- For our team view -->
<div class="ourteam col-md-12">
    <h3 class="section-title text-center m-5"><span>Our Team </span></h3>
    <div class="l-aside col-md-6">

        <div class="container-fluid">
            <div class="row">
                <article>
                    <fieldset style="padding: 10px 10px; font-size: 20px">
                        <img src="/images/kabita.jpg" style="width: 155px; height: 150px; border-radius: 50%; float: left;clear: left;">
                        <div class="aside">
                            Email: parajulikabita10@gmail.com<br>
                            <i class="fa fa-facebook"></i>: <a href="https://www.facebook.com/kabita.parajuli.3990" target="">Kabita Parajuli</a><br>
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
                            <i class="fa fa-facebook"></i>: <a href="https://www.facebook.com/ujrap" target="">प्रज्वल पौडेल</a><br>
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
                                <i class="fa fa-facebook"></i> : <a href="https://www.facebook.com/rashila.lamichhane.54" target="">Rashila Lamichhane</a><br>
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
                                <i class="fa fa-facebook"></i> : <a href="https://www.facebook.com/anjaan.gaire" target="_blank">Anjaan Gaire</a>
                                <br>
                                Role: Front-end Developer
                            </div>
                            
                        </fieldset>
                    </article>
                </div>
            </div>
        </div>
    </div>




<!-- Starting of Contact -->
<hr>
 <!-- Contact Section -->
      <div class="contact section-invert py-4">
        <h3 class="section-title text-center m-5">Contact Us</h3>
        <div class="container py-4">
          <div class="row justify-content-md-center px-4">
            <div class="contact-form col-sm-12 col-md-10 col-lg-7 p-4 mb-4 card">
                <form  method="post"  action="{{ route('contact.store') }}">
                    @csrf

                    <div class="row">
                      <div class="col-md-6 col-sm-12">
                        <div class="form-group">
                          <label for="name">Full Name</label>
                            <input id="name" type="text" class="form-control" name="name" required>
                        </div>
                      </div>

                      <div class="col-md-6 col-sm-12">
                        <div class="form-group">
                          <label for="email">Email address</label>
                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"  required>

                            @if ($errors->has('email'))
                                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col">
                        <div class="form-group">
                            <label for="subjext">Message</label>
                            <textarea id="subject" type="text" cols="20" rows="10" class="form-control{{ $errors->has('subject') ? ' is-invalid' : '' }}" name="subject" required ></textarea>

                            @if ($errors->has('subject'))
                                <span class="invalid-feedback">
                      <strong>{{ $errors->first('subject') }}</strong>
                  </span>
                            @endif
                        </div>
                      </div>
                    </div>
                    <input class="btn btn-primary btn-pill d-flex ml-auto mr-auto" type="submit" value="Send Your Message">
                </form>
            </div>
          </div>
        </div>
      </div>


      <!-- / Contact Section -->

<!-- footer -->
 <footer>
        <nav class="navbar navbar-expand navbar-light bg-danger">
             <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">
                    <li><a class="nav-link" href="/forum">Home</a></li>
                    <li><a class="nav-link" href="/groups">Groups</a></li>
                    <li><a class="nav-link" href="/who">Who Can Donate</a></li>
                    <li><a class="nav-link" href="/camps/show">Camps</a></li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link" href="https://facebook.com/easybloodbank"><i class="fa fa-facebook"></i></a></li>
                    <li class="nav-item">
                  <a class="nav-link" href="https://twitter.com/anjaangaire1"><i class="fa fa-twitter"></i></a>
                </li>                
                <li class="nav-item">
                  <a class="nav-link" href="https://github.com/Blood"><i class="fa fa-github"></i></a>
                </li>
            </ul>
        </nav>
    </footer>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="/js/shards.js"></script>
</body>

</html>