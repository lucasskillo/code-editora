@extends('layout.default')

@section('active_category')
    active
@endsection

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="header">
                    <h4 class="title">Nova Categoria</h4>
                </div>
                <hr>
                <div class="content">
                    {!! Form::open(['route' => 'categories.store', 'class' => 'form']) !!}

                        {!! Html::openFormGroup('name', $errors) !!}
                            {!! Form::label('name', 'Nome', ['class' => 'control-label']) !!}
                            {!! Form::text('name', null, ['class' => 'form-control']) !!}
                            {!! Form::error('name', $errors) !!}
                        {!! Html::closeFormGroup() !!}

                        {!! Html::openFormGroup() !!}
                            {!! Form::submit('Salvar', ['class' => 'btn btn-wd btn-success']) !!}
                        {!! Html::closeFormGroup() !!}

                    {!! Form::close() !!}
                </div><!-- end content-->
            </div><!--  end card  -->
        </div> <!-- end col-md-12 -->
    </div> <!-- end row -->

@endsection