@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    {!! Form::open(['route' => 'login']) !!}

                        <div class="form-group row">
                            {!! FORM::label('email','Endereço de E-mail',[
                                'class' => 'col-md-4 col-form-label text-md-right'
                            ]) !!}
                            <div class="col-md-6">
                                {!! FORM::email('email',null,[
                                    'class' => 'form-control ' . ( $errors->has('email') ? ' is-invalid' : '' )
                                ]) !!}
                                
                                @error('email')
                                    <x-feedback-error :message=$message></x-feedback-error>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            {!! FORM::label('password','Password',[
                                'class' => 'col-md-4 col-form-label text-md-right'
                            ]) !!}

                            <div class="col-md-6">
                                {!! FORM::password('password',[
                                    'class' => 'form-control ' . ( $errors->has('password') ? ' is-invalid' : '' )        
                                ]) !!}
                                
                                @error('password')
                                    <x-feedback-error :message=$message></x-feedback-error>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    {!! FORM::checkbox('remember',null, (old('remember') ? true : false), ['class' => 'form-check-input', 'id' => 'remember']) !!}
                                    
                                    {!! FORM::label('remember','Remember Me',[
                                        'class' => 'form-check-label'
                                    ]) !!}
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    {!! FORM::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
