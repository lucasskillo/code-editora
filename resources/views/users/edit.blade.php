@extends('layout.default')

@section('active_configuracoes')
    active
@endsection

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="header">
                    <h4 class="title">Novo Usuario</h4>
                </div>
                <hr>
                <div class="content">
                    <form class="form-horizontal" role="form" action="/users/{{ $users->id }}" method="POST">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-2 control-label">Nome</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ $users->name }}"  autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-2 control-label">E-Mail</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ $users->email }}" >

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-2 control-label">Senha</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-2"></label>
                            <div class="col-md-9">
                                <input type="hidden" name="_method" value="put">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <button type="submit"  class="btn btn-wd btn-success">
                                            <span class="btn-label">
                                                <i class="fa fa-check"></i>
                                            </span>
                                    Atualizar
                                </button>
                                <button href="/users" class="btn btn-wd btn-danger">
                                            <span class="btn-label">
                                                <i class="fa fa-times"></i>
                                            </span>
                                    Cancelar
                                </button>
                            </div>
                        </div>
                    </form>
                </div><!-- end content-->
            </div><!--  end card  -->
        </div> <!-- end col-md-12 -->
    </div> <!-- end row -->

@endsection