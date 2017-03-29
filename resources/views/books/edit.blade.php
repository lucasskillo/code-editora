@extends('layout.default')

@section('active_book')
    active
@endsection

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="header">
                    <h4 class="title">Editar Livro</h4>
                </div>
                <hr>
                <div class="content">
                    {!! Form::model($category,[
                                    'route' => ['books.update', 'book' => $book->id]
                                    , 'class' => 'form-horizontal', 'method' => 'PUT'])!!}

                        @include('books._form')

                        {!! Html::openFormGroup() !!}
                            {!! Button::success('Salvar')->submit() !!}
                            {!! Button::danger('Cancelar')->asLinkTo(route('books.index')) !!}
                        {!! Html::closeFormGroup() !!}

                    {!! Form::close() !!}
                </div><!-- end content-->
            </div><!--  end card  -->
        </div> <!-- end col-md-12 -->
    </div> <!-- end row -->

@endsection