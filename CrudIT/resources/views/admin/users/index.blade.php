@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Users</div>
                    <div class="card-body">
                        <a href="{{ url('/admin/users/create') }}" class="btn btn-success btn-sm" title="Add New User">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>

                        {!! Form::open(['url' => '/admin/users', 'class' => 'form-inline my-2 my-lg-0 float-right', 'enctype' => 'multipart/form-data', 'role' => 'search', 'method' => 'GET']) !!}
                            <div class="input-group">
                                {!! FORM::text('search',request('search'),[
                                    'class' => 'form-control ',
                                    'placeholder' => "Search"
                                ]) !!}
                                <span class="input-group-append">
                                    {!! Form::submit('Buscar', ['class' => 'btn btn-secondary']) !!}
                                </span>
                            </div>
                        </form>

                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th><th>Name</th><th>Email</th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->name }}</td><td>{{ $item->email }}</td>
                                        <td>
                                            <a href="{{ url('/admin/users/' . $item->id) }}" title="View User">{!! Form::button('view', ['class' => 'btn btn-info btn-sm', 'type' => 'buttonn']) !!}</a>
                                            <a href="{{ url('/admin/users/' . $item->id . '/edit') }}" title="Edit User">{!! Form::button('edit', ['class' => 'btn btn-primary btn-sm', 'type' => 'buttonn']) !!}</a>
                                            {!! Form::open(['url' => '/admin/users/' . $item->id, 'class' => 'form-inline', 'enctype' => 'multipart/form-data', 'method' => 'DELETE', 'style' => 'display:inline;']) !!}  
                                                {!! Form::button('delete', ['class' => 'btn btn-danger btn-sm', 'type' => 'submit', 'onclick' =>"return confirm(&quot;Confirm delete?&quot;)" ]) !!}                                         
                                            {!! Form::close() !!}
                                        </td>
                                        
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $users->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
