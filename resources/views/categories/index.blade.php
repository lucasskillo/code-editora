@extends('layout.default')

@section('active_category')
    active
@endsection

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="header">
                    <h4 class="title">Lista de Categorias
                        <a style="position: relative;float: right;"
                           href="{{ route('categories.create') }}"><buttom class="btn btn-success">Novo</buttom></a>
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
                                <th>Nome</th>
                                <th class="disabled-sorting text-center">Ações</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($categories as $category)
                                <tr>
                                    <th>{{ $category->id }}</th>
                                    <th>{{ $category->name }}</th>
                                    <td class="text-center">
                                        <a href="{{route('categories.edit', ['category' => $category->id])}}"
                                                 class="btn-warning btn-sm"><i class="fa fa-edit"></i></a>

                                        <?php $deleteform = "delete_form-{$loop->index}"; ?>
                                        <a href="{{route('categories.destroy', ['category' => $category->id])}}"
                                                 class="btn-danger btn-sm"
                                                 onclick="event.preventDefault();document.getElementById('{{$deleteform}}').submit();">
                                                  <i class="fa fa-close"></i></a>
                                        {!! Form::open(['route'  => ['categories.destroy', '$category' => $category],
                                                        'method' => 'DELETE',
                                                        'id'     => $deleteform,
                                                        'style'  => 'display:none']) !!}
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    {{$categories->links()}}
                </div><!-- end content-->
            </div><!--  end card  -->
        </div> <!-- end col-md-12 -->
    </div> <!-- end row -->

@endsection