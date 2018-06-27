@extends('layouts.app')

@section('content')
	<h3 style="margin:auto; text-align: center;">Let us know what you think about us!</h3><br>
	<p style="text-align: center;margin: auto;">If you have something to say to us you can do it from here. We will try to improve our service as far as practicable.</p>
<br><br><br>
<div class="container">
  <form action="post">
    <div class="form-group row">
        <label for="firstname" class="col-md-4 col-form-label text-md-right">First name:</label>

        <div class="col-md-6">
            <input id="firstname" type="text" class="form-control" name="firstname" required>
        </div>
    </div>
    <div class="form-group row">
        <label for="lastname" class="col-md-4 col-form-label text-md-right">Last name:</label>

        <div class="col-md-6">
            <input id="lastname" type="text" class="form-control" name="lastname" required>
        </div>
    </div>
    <div class="form-group row">
        <label for="Subject" class="col-md-4 col-form-label text-md-right">Subject:       </label>

        <div class="col-md-6">
           <textarea id="subject" name="subject" placeholder="Write something.." style="height:400px;width:525px;border: none; border-radius: 0.625rem;"></textarea>
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
@endsection