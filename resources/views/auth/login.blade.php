@extends('auth.layout')
@section('content')
<section id="login">
    <div class="container-fluid">
        <div class="row">
        @include('admin.partials.errors')
            <div id="login-box" class="col-md-2 col-md-offset-5 card">
                <div class="panel panel-default">
                    <br>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST"
                            action="{{ url('/auth/login') }}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="form-group">
                                <input type="email" class="form-control" name="email"
                                value="{{ old('email') }}" autofocus
                                placeholder="Email address">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="password" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Remember Me
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-block">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@stop