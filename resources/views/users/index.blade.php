@extends('layout.default')

@section('active_configuracoes')
    active
@endsection

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="header">
                    <h4 class="title">Lista de Usuários
                        <a style="margin-left: 78%" href="{{ URL::to('users/create') }}"><buttom class="btn btn-success">Novo</buttom></a>
                    </h4>
                    <br>
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
                    <div class="fresh-datatables">
                        <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Nome</th>
                                <th>E-mail</th>
                                <th class="disabled-sorting text-center">Ações</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($users as $user)
                            <tr>
                                <th>{{ $user->id }}</th>
                                <th>{{ $user->name }}</th>
                                <th>{{ $user->email }}</th>
                                <td class="text-center">
                                    <a href="/users/{{ $user->id }}/edit" class="btn btn-simple btn-warning btn-icon edit"><i class="fa fa-edit"></i></a>
                                    <a>
                                    <form action="/users/{{ $user->id }}" method="POST">
                                        <input type="hidden" name="_method" value="delete">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <button type="submit" class="btn btn-simple btn-danger btn-icon remove"><i class="fa fa-times"></i></button>
                                    </form>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div><!-- end content-->
            </div><!--  end card  -->
        </div> <!-- end col-md-12 -->
    </div> <!-- end row -->

@endsection