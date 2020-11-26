@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">User {{ $user->id }}</div>
                    <div class="card-body">
                        <a href="{{ url('/admin/users') }}" title="Back">{!! Form::button('back', ['class' => 'btn btn-warning btn-sm', 'type' => 'buttonn']) !!}</a>
                        <a href="{{ url('/admin/users/' . $user->id . '/edit') }}" title="Edit User">{!! Form::button('edit', ['class' => 'btn btn-primary btn-sm', 'type' => 'buttonn']) !!}</a>
                        {!! Form::open(['url' => '/admin/users/' . $user->id, 'class' => 'form-inline', 'enctype' => 'multipart/form-data', 'method' => 'DELETE', 'style' => 'display:inline;']) !!}  
                            {!! Form::button('delete', ['class' => 'btn btn-danger btn-sm', 'type' => 'submit', 'onclick' =>"return confirm(&quot;Confirm delete?&quot;)" ]) !!}                                         
                        {!! Form::close() !!}
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $user->id }}</td>
                                    </tr>
                                    <tr><th> Name </th><td> {{ $user->name }} </td></tr><tr><th> Email </th><td> {{ $user->email }} </td></tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
