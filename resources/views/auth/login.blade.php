@extends('layouts.app')
@section('content')
<nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top">
    <div class="container justify-content-center">
        <div class="navbar-wrapper text-center">
            <a href="#" class="navbar-brand">
                {{ trans('panel.site_title') }}
            </a>
        </div>
    </div>
</nav>
<div class="wrapper wrapper-full-page">
    <div class="page-header login-page header-filter">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 col-md-6 col-sm-8 ml-auto mr-auto">
                    <div class="card card-login mb-3">
                        <div class="card-header card-header-primary text-center">
                            <h4 class="card-title">
                                <strong>Sign in to start your session</strong>
                            </h4>
                        </div>
                        <div class="card-body login-card-body">
                            @if(\Session::has('message'))
                                <p class="alert alert-info">
                                    {{ \Session::get('message') }}
                                </p>
                            @endif

                            <form action="{{ route('login') }}" method="POST">
                                {{ csrf_field() }}

                                <div class="form-group">
                                    <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" required autofocus placeholder="{{ trans('global.login_email') }}" name="email" value="{{ old('email', null) }}">
                                    @if($errors->has('email'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('email') }}
                                        </div>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" required placeholder="{{ trans('global.login_password') }}" name="password">
                                    @if($errors->has('password'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('password') }}
                                        </div>
                                    @endif
                                </div>


                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="icheck-primary">
                                            <input type="checkbox" name="remember" id="remember">
                                            <label for="remember">{{ trans('global.remember_me') }}</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer justify-content-center">
                                    <button type="submit" class="btn btn-primary btn-link btn-lg">{{ trans('global.login') }}</button>
                                </div>
                            </form>
                        </div>
                        <!-- /.login-card-body -->
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <a class="" href="{{ route('password.request') }}">
                                <small>{{ trans('global.forgot_password') }}</small>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
