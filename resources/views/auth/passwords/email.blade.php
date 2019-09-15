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
                                <strong>{{ trans('global.reset_password') }}</strong>
                            </h4>
                        </div>
                        <div class="card-body login-card-body">
                            <form method="POST" action="{{ route('password.email') }}">
                                {{ csrf_field() }}
                                <div>
                                    <div class="form-group has-feedback">
                                        <input type="email" name="email" class="form-control" required="autofocus" placeholder="{{ trans('global.login_email') }}">
                                        @if($errors->has('email'))
                                            <p class="help-block">
                                                {{ $errors->first('email') }}
                                            </p>
                                        @endif
                                    </div>
                                </div>
                                <div class="card-footer justify-content-center">
                                    <button type="submit" class="btn btn-primary btn-link btn-lg">
                                        {{ trans('global.reset_password') }}
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
