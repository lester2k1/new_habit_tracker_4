@extends('layouts.layout')

@section('content')
<section class="log">
    <div class="container-fluid">
        <div class="row justify-content-center">        
            <div class="col-sm-7 ">
                <div class="text-center a">
                    <img src="/img/logo3.png" alt="" class="logo">
                    <h1 class="maint">Trabbit</h1>
                    <p>Set and track a habit and monitor your self-rated development</p>
                </div>
            </div>
            <div class="col-sm-4 mx-5 a1">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
    
                    <div class="form-group row">
                        <div class="col">
                            <label for="email">{{ __('E-Mail Address') }}</label><br>
    
                            <div >
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
    
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
    
                    <div class="form-group row">
                        <div class="col">
                            <label for="password" >{{ __('Password') }}</label><br>
    
                            <div >
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
    
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
    
                    <div class="form-group row mb-0 b">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary float-right btn-block">
                                {{ __('Login') }}
                            </button><br><br>
                            <a class="nav-link" href="{{ route('register') }}"><p>Need an account? Click here to register.</p></a>
                                
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div> 
</section>
<section class="s2nd py-4">
    <div class="container">
        <div class="row">
            <div class="col-sm">
                <div class="row">
                <div class="col text-right">
                    <i class="fas fa-edit"></i> 
                </div>
                <div class="col my-4">
                    <h3>AIM</h3>
                    <h6>set a habit for you to practice</h6>
                </div>
            </div></div>
            <div class="col-sm">
                <div class="row">
                <div class="col text-right">
                    <i class="fas fa-running"></i>
                </div>
                <div class="col my-4">
                    <h3>EXECUTE</h3>
                    <h6>enact and rate your efforts daily</h6>
                </div>
            </div></div>
            <div class="col-sm  ">
                <div class="row">
                <div class="col text-right">
                    <i class="fas fa-calendar-check"></i>
                </div>
                <div class="col my-4">
                    <h3>TRACK</h3>
                    <h6>monitor your growth and get satisfied</h6>
                </div>
            </div></div>
        </div>
    </div>
    
    
</section>

@endsection
