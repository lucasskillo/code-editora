@extends('layout.default')

@section('active_book')
    active
@endsection

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="header">
                    <h4 class="title">Lista de Livros
                        <a style="position: relative;float: right;"
                           href="{{ route('books.create') }}"><buttom class="btn btn-success">Novo</buttom></a>
                    </h4>
                    <!-- will be used to show any messages -->
                    @if (Session::has('message'))
                        <div class="alert alert-info" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            {{ Session::get('message') }}
                        </div>
                    @endif
                </div>
                <div class="content">
                    <div class="toolbar">
                        <!--        Here you can write extra buttons/actions for the toolbar              -->
                    </div>
                    <table class="table table-striped table-hover">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Título</th>
                            <th>Sub-Título</th>
                            <th>Preço</th>
                            <th class="disabled-sorting text-center">Ações</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($books as $book)
                            <tr>
                                <th>{{ $book->id }}</th>
                                <th>{{ $book->title }}</th>
                                <th>{{ $book->subtitle }}</th>
                                <th>{{  'R$ '.number_format($book->price, 2, ',', '.') }}</th>
                                <td class="text-center">
                                    <a href="{{route('books.edit', ['book' => $book->id])}}"
                                       class="btn-warning btn-sm"><i class="fa fa-edit"></i></a>

                                    <?php $deleteform = "delete_form-{$loop->index}"; ?>
                                    <a href="{{route('books.destroy', ['book' => $book->id])}}"
                                       class="btn-danger btn-sm"
                                       onclick="event.preventDefault();document.getElementById('{{$deleteform}}').submit();">
                                        <i class="fa fa-close"></i></a>
                                    {!! Form::open(['route'  => ['books.destroy', '$book' => $book],
                                                    'method' => 'DELETE',
                                                    'id'     => $deleteform,
                                                    'style'  => 'display:none']) !!}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {{ $books->links() }}
                </div><!-- end content-->
            </div><!--  end card  -->
        </div> <!-- end col-md-12 -->
    </div> <!-- end row -->

@endsection