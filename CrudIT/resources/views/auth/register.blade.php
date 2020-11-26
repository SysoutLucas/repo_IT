@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    {!! Form::open(['route' => 'register']) !!}
                        <div class="form-group row">
                            {!! FORM::label('name','Name',[
                                'class' => 'col-md-4 col-form-label text-md-right'
                            ]) !!}
                            <div class="col-md-6">
                                {!! FORM::text('name',old('name'),[
                                    'class' => 'form-control ' . ( $errors->has('name') ? ' is-invalid' : '' )
                                ]) !!}
                                @error('name')
                                    <x-feedback-error :message=$message></x-feedback-error>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            {!! FORM::label('email','Endereço de E-mail',[
                                'class' => 'col-md-4 col-form-label text-md-right'
                            ]) !!}
                            <div class="col-md-6">
                                {!! FORM::email('email',old('email'),[
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
                            {!! FORM::label('password-confirm','Confirm Password',[
                                'class' => 'col-md-4 col-form-label text-md-right'
                            ]) !!}

                            <div class="col-md-6">
                                {!! FORM::password('password',[
                                    'class' => 'form-control ',
                                    'name' => 'password_confirmation',
                                    'id' => 'password-confirm'    
                                ]) !!}
                                
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
