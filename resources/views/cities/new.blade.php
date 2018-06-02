@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Nova Cidade                    
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-light" style="text-align: center">
                            {{ session('status') }}
                        </div>
                    @endif

                    {!! Form::open(['url' => '/cities', 'method' => 'post'],['class'=>'form-group']) !!}
                        
                        {!! Form::label('name', 'Nome',['class'=>'col-sm-2 col-form-label']) !!}
                        {{ Form::text('name',null,['required']) }}

                        <br /><br />

                        {!! Form::label('citizens', 'Nº de Habitantes',['class'=>'col-sm-2 col-form-label ']) !!}
                        {!! Form::text('citizens',null,['required']) !!}
                        

                        <br /><br />
                        {!! Form::label('state','Estado',['class'=>'col-sm-2 col-form-label'])!!}
                        {!! Form::select('states', $states, $states, ['placeholder' => 'Escolha um Estado...'],['required'])!!}
                        <br /><br />

                        {{ Form::submit('Salvar',['class'=>'btn btn-outline-success']) }}

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
