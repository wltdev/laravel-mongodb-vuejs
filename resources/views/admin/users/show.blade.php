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
                        <form action="{{ url( $controller->route.$collection->_id ) }}" class="form-horizontal">
                            @include($controller->folder.'form')
                            <hr />
                            <button type="submit" class="btn btn-warning btn-submit pull-right" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Registrando...">
                                Atualizar
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
