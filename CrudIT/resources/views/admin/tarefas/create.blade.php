@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Create New Tarefa</div>
                    <div class="card-body">
                        <a href="{{ url('/admin/tarefas') }}" title="Back">{!! Form::button('back', ['class' => 'btn btn-warning btn-sm', 'type' => 'buttonn']) !!}</a>
                        <br />
                        <br />
                        {!! Form::open(['url' => '/admin/tarefas', 'class' => 'form-horizontal', 'enctype' => 'multipart/form-data']) !!}
                            @include ('admin.tarefas.form', ['formMode' => 'create'])
                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
