@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Tarefa {{ $tarefa->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/tarefas') }}" title="Back">{!! Form::button('back', ['class' => 'btn btn-warning btn-sm', 'type' => 'buttonn']) !!}</a>
                        <a href="{{ url('/admin/tarefas/' . $tarefa->id . '/edit') }}" title="Edit Tarefa">{!! Form::button('edit', ['class' => 'btn btn-primary btn-sm', 'type' => 'buttonn']) !!}</a>
                        {!! Form::open(['url' => '/admin/tarefas/' . $tarefa->id, 'class' => 'form-inline', 'enctype' => 'multipart/form-data', 'method' => 'DELETE', 'style' => 'display:inline;']) !!}  
                            {!! Form::button('delete', ['class' => 'btn btn-danger btn-sm', 'type' => 'submit', 'onclick' =>"return confirm(&quot;Confirm delete?&quot;)" ]) !!}                                         
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $tarefa->id }}</td>
                                    </tr>
                                    <tr><th> Title </th><td> {{ $tarefa->title }} </td></tr><tr><th> Description </th><td> {{ $tarefa->description }} </td></tr><tr><th> Category </th><td> {{ $tarefa->category }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
