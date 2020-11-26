<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    {!! Form::label('name','Name',[
        'class' => 'control-label'
    ]) !!}
    {!! FORM::text('name',(isset($user->name) ? $user->name : ''),[
        'class' => 'form-control ' . ( $errors->has('name') ? ' is-invalid' : '' )
    ]) !!}
    @error('name')
        <x-feedback-error :message=$message></x-feedback-error>
    @enderror
</div>
<div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
    {!! FORM::label('email','E-mail',[
        'class' => 'control-label'
    ]) !!}
    {!! FORM::email('email',(isset($user->email) ? $user->email : ''),[
        'class' => 'form-control ' . ( $errors->has('email') ? ' is-invalid' : '' )
    ]) !!}
    @error('email')
        <x-feedback-error :message=$message></x-feedback-error>
    @enderror
</div>
@if($formMode !== 'edit')
    <div class="form-group {{ $errors->has('password') ? 'has-error' : ''}}">
        {!! FORM::label('password','Password',[
            'class' => 'control-label'
        ]) !!}
        {!! FORM::password('password',[
            'class' => 'form-control ' . ( $errors->has('password') ? ' is-invalid' : '' )        
        ]) !!}

        @error('password')
            <x-feedback-error :message=$message></x-feedback-error>
        @enderror
    </div>
    <div class="form-group {{ $errors->has('password_conformation') ? 'has-error' : ''}}">
        {!! FORM::label('password-confirm','Confirm Password',[
            'class' => 'control-label'
        ]) !!}
        {!! FORM::password('password',[
            'class' => 'form-control ',
            'name' => 'password_confirmation',
            'id' => 'password-confirm'    
        ]) !!}
    </div>
@endif
<div class="form-group">
    {!! Form::submit($formMode === 'edit' ? 'Update' : 'Create', ['class' => 'btn btn-primary']) !!}
</div>
