@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Edit User #{{ $user->id }}</div>
                    <div class="card-body">
                        <a href="{{ url('/admin/users') }}" title="Back">{!! Form::button('back', ['class' => 'btn btn-warning btn-sm', 'type' => 'buttonn']) !!}</a>
                        <br />
                        <br />
                        {!! Form::open(['url' => '/admin/users' . $user->id, 'class' => 'form-horizontal', 'enctype' => 'multipart/form-data', 'method' => 'PATCH']) !!}
                            @include ('admin.users.form', ['formMode' => 'edit'])
                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
