@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    
                        <a href="/register" class="float-right btn btn-outline-primary">Sign up</a>
                        <h4 class="card-title mb-4 mt-1">Sign in</h4>
                        <p>
                        <a href="{{ route('loginGoogle') }}" class="btn btn-block btn-outline-info btn-google"> <i class="fab fa-google"></i>   Login via Google</a>
                        <a href="{{ route('loginFacebook') }}" class="btn btn-block btn-outline-primary"> <i class="fab fa-facebook-f"></i>   Login via facebook</a>
                        </p>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group">
                                <input name="email" class="form-control" placeholder="Email or login" type="email">
                            </div> <!-- form-group// -->
                            <div class="form-group">
                                <input name="password" class="form-control" placeholder="******" type="password">
                            </div> <!-- form-group// -->                                      
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-block"> Login  </button>
                                    </div> <!-- form-group// -->
                                </div>
                                <div class="col-md-6 text-right">
                                    <a class="small" href="#">Forgot password?</a>
                                </div>                                            
                            </div> <!-- .row// -->
                        
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
                           