@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">
                        Cadastro de {{ $controller->title }}
                    </h4>
                </div>

                <div class="card-content">
                    <div class="clearfix">
                        <form action="{{ url( $controller->route ) }}" class="form-horizontal" method="POST">
                            @include($controller->folder.'form')
                            <hr />
                            <button type="submit" class="btn btn-info btn-submit pull-right" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Registrando...">
                                Inserir
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
