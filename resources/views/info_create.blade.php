@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Info create') }}</div>

                    <div class="card-body">
                    <form action="/info/create" method="post">
                        @csrf
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" class="form-control" name="title">
                    </div>

                    <div class="form-group">
                        <label>Body</label>
                        <input type="text" class="form-control" name="body">
                    </div>
                    <br>
                    <button class="btn btn-outline-info" type="submit">Add</button>
                    </div>
                    </form>
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
