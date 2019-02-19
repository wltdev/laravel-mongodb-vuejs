@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">{{ $controller->title or 'Title' }} </h4>
                </div>

                <div class="card-content">
                    <div class="table-responsive">
                        <table class="table table-striped table-no-bordered table-hover" id="users-table" cellspacing="0" width="100%" style="width:100%">
                            <thead>
                                <th></th>
                                <th>Nome</th>
                                <th>Email</th>
                                <th class="text-left"></th>
                            </thead>
                            <tbody>
                                @foreach ($collection as $item)
                                    <tr>
                                        <td> {{ $item->_id }} </td>
                                        <td> {{ $item->name }} </td>
                                        <td> {{ $item->email }} </td>
                                        <td> </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection