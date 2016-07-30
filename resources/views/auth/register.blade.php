@extends('layouts.app')

@section('content')
<!-- BEGIN REGISTER SECTION -->
<section class="section-account">
    <div class="img-backdrop" style="background-image: url('../../assets/img/img16.jpg')"></div>
    <div class="spacer"></div>
    <div class="card contain-sm style-transparent">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                    <br/>
                    <span class="text-lg text-bold text-primary">SIGN UP</span>
                    <br/><br/>
                    <form class="form floating-label" action="{{ url('/register') }}" accept-charset="utf-8" method="post">
                        {{ csrf_field() }}

                        <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                            <input type="text" class="form-control" value="{{ old('name') }}" name="name">
                            <label for="name">Name</label>
                            
                            @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                            <input type="text" class="form-control" value="{{ old('email') }}" name="email">
                            <label for="email">E-mail</label>

                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
                            <input type="password" class="form-control" name="password">
                            <label for="password">Password</label>

                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password_confirmation">
                            <label for="password_confirmation">Confirm Password</label>
                        </div>
                        <br/>
                        <div class="row">
                            <button class="btn btn-primary btn-raised" type="submit">Register</button>
                            <p></p>
                            <a href="{{ url('login') }}">Already have an account?</a>
                        </div><!--end .row -->
                    </form>
                </div><!--end .col -->
            </div><!--end .row -->
        </div><!--end .card-body -->
    </div><!--end .card -->
</section>
<!-- END REGISTER SECTION -->
@endsection
