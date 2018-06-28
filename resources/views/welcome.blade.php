@extends('layouts.app')


@section('content')
    <!-- For our team view -->
    <div class="col-md-12">
        <h2 style="text-align: center;color:red">Our Team</h2>
        <br>

        <div class="l-aside col-md-6">
            
            <div class="container-fluid">
                <div class="row">
                    <article>
                        <fieldset style="padding: 10px 10px; font-size: 20px">
                            <img src="/images/kabita.jpg" style="width: 155px; height: 150px; border-radius: 50%; float: left;clear: both;">
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
                            <img src="/images/anjaan.jpg" style="width: 155px; height: 150px; border-radius: 50%; float: left; clear: left"/>
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
    </div><br><br><br>      
    <!-- For our team view -->
       
    <!-- Starting of Contact -->
    <br><br><br>
    <div class="container-fluid">
        <h3 style="margin:auto; text-align: center;">Let us know what you think about us!</h3><br>
        <p style="text-align: center;margin: auto;">If you have something to say to us you can do it from here. We will try to improve our service as far as practicable.</p>
        <br>
        <div class="col-md-12">
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
</div>
@endsection

