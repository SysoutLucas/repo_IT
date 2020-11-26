@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Consumo de api ->  https://viacep.com.br/ </div>
                    <div class="card-body">

                    <div class="input-group ">
                        {!! Form::text('cep',null,[
                            'class' => "form-control",
                            'id' => "cep",
                            'placeholder' => "Digite o cep"    
                        ])!!}
                        <div class="input-group-append">
                            {!! Form::button('Buscar', ['class' => 'btn btn-outline-secondary', 'type' => 'buttonn', 'id' => 'btn-cep']) !!}
                        </div>
                    </div>
                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>Logradouro</th>
                                        <td id="logradouro"></td>
                                    </tr>
                                    <tr>
                                        <th> Bairro </th>
                                        <td id="bairro"></td>
                                    </tr>
                                    <tr>
                                        <th> Cidade </th>
                                        <td id="cidade"> </td>
                                    </tr>
                                    <tr>
                                        <th> Estado </th>
                                        <td id="estado"> </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
