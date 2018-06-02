@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Novo Estado                    
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-light" style="text-align: center"
                            {{ session('status') }}
                        </div>
                    @endif

                    {!! Form::open(['url' => '/states', 'method' => 'post']) !!}
                        
                        {{ Form::label('name', 'Nome',['class'=>'col-sm-1 col-form-label' ])}}
                        {{ Form::text('name') }}

                        <br /><br />

                        {{ Form::label('initials', 'Sigla',['class'=>'col-sm-1 col-form-label']) }}
                        {{ Form::text('initials') }}

                        <br /><br />
                        

                        
                        <br /><br />

                        {{ Form::submit('Salvar',['class'=>'btn btn-outline-success']) }}

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
