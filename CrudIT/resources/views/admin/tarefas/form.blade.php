<div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
    {!! FORM::label('title','Title',[
        'class' => 'control-label'
    ]) !!}
    {!! FORM::text('title',(isset($tarefa->title) ? $tarefa->title : ''),[
        'class' => 'form-control ' . ( $errors->has('title') ? ' is-invalid' : '' )
    ]) !!}
    @error('title')
        <x-feedback-error :message=$message></x-feedback-error>
    @enderror
</div>
<div class="form-group {{ $errors->has('description') ? 'has-error' : ''}}">
    {!! FORM::label('description','Description',[
        'class' => 'control-label'
    ]) !!}
    {!! Form::textarea('description',(isset($tarefa->description) ? $tarefa->description : ''),[
        'class' => 'form-control ' . ( $errors->has('description') ? ' is-invalid' : '' ),
        'rows' => '5',
        'id' => 'description'
    ]) !!}

    @error('description')
        <x-feedback-error :message=$message></x-feedback-error>
    @enderror
    
</div>
<div class="form-group {{ $errors->has('category') ? 'has-error' : ''}}">
    {!! Form::label('category','Category',[
        'class' => 'control-label'
    ]) !!}
    {!! Form::select('category',[
            'technology' => 'Tecnology',
            'tips' => 'Tips', 
            'health' => 'Health'
        ],
        'technology',
        [
            'class' => 'form-control'
        ]) 
    !!}
    
    @error('category')
        <x-feedback-error :message=$message></x-feedback-error>
    @enderror
</div>
<div class="form-group {{ $errors->has('user_id') ? 'has-error' : ''}}">
    {!! Form::label('user_id','User',[
        'class' => 'control-label'
    ]) !!}
    {!! Form::select('user_id',$options_user,
        (isset($tarefa->user_id) ? $tarefa->user_id : ''),
        [
            'class' => 'form-control ' . ( $errors->has('user_id') ? ' is-invalid' : '' )
        ]) 
    !!}
    
    @error('user_id')
        <x-feedback-error :message=$message></x-feedback-error>
    @enderror
    
</div>


<div class="form-group">
    {!! Form::submit($formMode === 'edit' ? 'Update' : 'Create', ['class' => 'btn btn-primary']) !!}
</div>
