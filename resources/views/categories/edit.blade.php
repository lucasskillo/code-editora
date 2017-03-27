@extends('layout.default')

@section('active_category')
    active
@endsection

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="header">
                    <h4 class="title">Editar Categoria</h4>
                </div>
                <hr>
                <div class="content">
                    {!! Form::model($category,[
                                    'route' => ['categories.update', 'category' => $category->id]
                                    , 'class' => 'form', 'method' => 'PUT'])!!}

                        @include('categories._form')

                        {!! Html::openFormGroup() !!}
                            {!! Form::submit('Salvar', ['class' => 'btn btn-wd btn-success']) !!}
                        {!! Html::closeFormGroup() !!}

                    {!! Form::close() !!}
                </div><!-- end content-->
            </div><!--  end card  -->
        </div> <!-- end col-md-12 -->
    </div> <!-- end row -->

@endsection