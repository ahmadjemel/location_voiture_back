@extends('layouts.template')
    <div class="hold-transition register-page" >
    <div class="register-box">
        <div class="card card-outline card-primary">
        <div class="card-header text-center">
            <a href="{{route('register')}}" class="h1"><b>Auto</b>Lab</a>
        </div>
        <div class="card-body d-inline w-30%">
            <p class="login-box-msg">Register a new membership</p>
    
            <form method="POST" action="{{ route('register') }}">
                @csrf
            <div class="input-group mb-3">
                <label for="nom" class="col-md-4 col-form-label text-md-end">{{ __('Nom') }}</label>
                <input id="nom" type="text"placeholder="Nom" class="form-control @error('nom') is-invalid @enderror" name="nom" value="{{ old('nom') }}" required autocomplete="nom" autofocus>
                        @error('nom')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
            </div>
            <div class="input-group mb-3">
                <label for="prenom" class="col-md-4 col-form-label text-md-end">{{ __('Prenom') }}</label>
                <input id="prenom" type="text" placeholder="Prenom" class="form-control @error('prenom') is-invalid @enderror" name="prenom" value="{{ old('prenom') }}" required autocomplete="prenom" autofocus>
                    @error('prenom')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-user"></span>
                    </div>
                </div>
            </div>
   
            <div class="input-group mb-3">
                <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email') }}</label>
                <input id="email" placeholder="Email"type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required >

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
            
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-envelope"></span>
                    </div>
                </div>
            </div>
            <div class="input-group mb-3">
                <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>
                <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                    </div>
                </div>
            </div>
            <div class="input-group mb-3">
                <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm ') }}</label>
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="Confirm Password" autocomplete="new-password">
                
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
            </div>
            <div class="row">
               
                <!-- /.col -->
                <div class="col-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Register') }}
                    </button>
                </div>
                <!-- /.col -->
            </div>
            <input type="hidden" name="role" value="employe">
            </form>
    
        
            <a href="{{ __('login') }}" class="text-center">I already have a membership</a>
        </div>
        <!-- /.form-box -->
        </div><!-- /.card -->
    </div>
  
</div>