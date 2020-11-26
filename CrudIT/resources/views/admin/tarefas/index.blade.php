@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Tarefas</div>
                    <div class="card-body">
                        <a href="{{ url('/admin/tarefas/create') }}" class="btn btn-success btn-sm" title="Add New Tarefa">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        {!! Form::open(['url' => '/admin/tarefas', 'class' => 'form-inline my-2 my-lg-0 float-right', 'enctype' => 'multipart/form-data', 'role' => 'search', 'method' => 'GET']) !!}
                            <div class="input-group">
                                {!! FORM::text('search',request('search'),[
                                    'class' => 'form-control ',
                                    'placeholder' => "Search"
                                ]) !!}
                                <span class="input-group-append">
                                    {!! Form::submit('Buscar', ['class' => 'btn btn-secondary']) !!}
                                </span>
                            </div>
                        {!! Form::close() !!}

                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th><th>Title</th><th>Description</th><th>Category</th><th>User</th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($tarefas as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->title }}</td>
                                        <td>{{ $item->description }}</td>
                                        <td>{{ $item->category }}</td>
                                        <td>{{ $item->user->name }}</td>
                                        <td>
                                            <a href="{{ url('/admin/tarefas/' . $item->id) }}" title="View Tarefa">{!! Form::button('view', ['class' => 'btn btn-info btn-sm', 'type' => 'buttonn']) !!}</a>
                                            <a href="{{ url('/admin/tarefas/' . $item->id . '/edit') }}" title="Edit Tarefa">{!! Form::button('edit', ['class' => 'btn btn-primary btn-sm', 'type' => 'buttonn']) !!}</a>
                                            {!! Form::open(['url' => '/admin/tarefas/' . $item->id, 'class' => 'form-inline', 'enctype' => 'multipart/form-data', 'method' => 'DELETE', 'style' => 'display:inline;']) !!}  
                                                {!! Form::button('delete', ['class' => 'btn btn-danger btn-sm', 'type' => 'submit', 'onclick' =>"return confirm(&quot;Confirm delete?&quot;)" ]) !!}                                         
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $tarefas->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
