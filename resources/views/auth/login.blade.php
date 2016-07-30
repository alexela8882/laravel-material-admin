@extends('layouts.app')

@section('content')
<!-- BEGIN LOGIN SECTION -->
<section class="section-account">
    <div class="img-backdrop" style="background-image: url('../../assets/img/img16.jpg')"></div>
    <div class="spacer"></div>
    <div class="card contain-sm style-transparent">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-6">
                    <br/>
                    <span class="text-lg text-bold text-primary">MATERIAL ADMIN</span>
                    <br/><br/>
                    <form class="form floating-label" action="{{ url('/login') }}" accept-charset="utf-8" method="post">
                        {{ csrf_field() }}
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
                        <br/>
                        <div class="row">
                            <div class="col-xs-6 text-left">
                                <div class="checkbox checkbox-inline checkbox-styled">
                                    <label>
                                        <input type="checkbox" name="rememberToken"> <span>Remember me</span>
                                    </label>
                                </div>
                            </div><!--end .col -->
                            <div class="col-xs-6 text-right">
                                <button class="btn btn-primary btn-raised" type="submit">Login</button>
                            </div><!--end .col -->
                        </div><!--end .row -->
                    </form>
                </div><!--end .col -->
                <div class="col-sm-5 col-sm-offset-1 text-center">
                    <br><br>
                    <h3 class="text-light">
                        No account yet?
                    </h3>
                    <a class="btn btn-block btn-raised btn-primary" href="{{ url('register') }}">Sign up here</a>
                    <br><br>
                        <h3 class="text-light">
                            or
                        </h3>
                        <p>
                            <a href="#" class="btn btn-block btn-raised btn-info"><i class="fa fa-facebook pull-left"></i>Login with Facebook</a>
                        </p>
                        <p>
                            <a href="#" class="btn btn-block btn-raised btn-info"><i class="fa fa-twitter pull-left"></i>Login with Twitter</a>
                        </p>
                </div><!--end .col -->
            </div><!--end .row -->
        </div><!--end .card-body -->
    </div><!--end .card -->
</section>
<!-- END LOGIN SECTION -->
@endsection
