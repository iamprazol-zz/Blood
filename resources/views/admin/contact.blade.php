@extends('layouts.app')

@section('content')
	<h3 style="margin:auto; text-align: center;">Let us know what you think about us!</h3><br>
	<p style="text-align: center;margin: auto;">If you have something to say to us you can do it from here. We will try to improve our service as far as practicable.</p>
<br><br><br>
  <form  method="post"  action="{{ route('contact.store') }}">

      @csrf

    <div class="form-group row">
        <label for="name" class="col-md-4 col-form-label text-md-right">Full name :</label>

        <div class="col-md-6">
            <input id="name" type="text" class="form-control" name="name" required>
        </div>
    </div>


      <div class="form-group row">
          <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

          <div class="col-md-6">
              <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"  required>

              @if ($errors->has('email'))
                  <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
              @endif
          </div>
      </div>


      <div class="form-group row">
          <label for="subject" class="col-md-4 col-form-label text-md-right">{{ __('Subject') }}</label>

          <div class="col-sm-7">
              <textarea id="subject" type="text" cols="20" rows="10" class="form-control{{ $errors->has('subject') ? ' is-invalid' : '' }}" name="subject" required autofocus></textarea>

              @if ($errors->has('subject'))
                  <span class="invalid-feedback">
                      <strong>{{ $errors->first('subject') }}</strong>
                  </span>
              @endif
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
@endsection