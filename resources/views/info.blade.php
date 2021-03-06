@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Info') }} <button class="btn btn-outline-success"><a href="/info_create">+</a></button></div>

                    <div class="card-body">

                    <div class="container">

                    <div class="row">
                        @foreach($datas as $data)
                        <div class="col-md-4">
                        <div class="card mb-4 box-shadow">
                            <div class="card-body">
                            <p class="card-text">{{ $data->title}} </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary"><a href="/info/{{ $data->id }}">View</a></button>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                        @endforeach
                    </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')

    <script>

        $('#computer_price').change(function (){
            $('#computer_sum').text($('#computer_qty').val()*$('#computer_price').val())
        })

        $('#router_price').change(function (){
            $('#route_sum').text($('#router_qty').val()*$('#router_price').val())
        })

        $('#server_price').change(function (){
            $('#server_sum').text($('#server_qty').val()*$('#server_price').val())
        })

        $('#cable_meter_price').change(function (){
            $('#cable_meter_sum').text($('#cable_meter').val()*$('#cable_meter_price').val())

            $('#summa').text(parseInt($('#computer_sum').text())+parseInt($('#route_sum').text())+parseInt($('#server_sum').text())+parseInt($('#cable_meter_sum').text()))
        })

    </script>

@endsection
