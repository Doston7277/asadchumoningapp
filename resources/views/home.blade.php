@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">

                        <div class="row">
                            <div class="col-md-1">
                                <div class="row">
                                    <div class="col-md-12">
                                        <img width="60px" src="https://iconarchive.com/download/i45509/sirubico/black-metal/PC.ico" alt="">
                                    </div>

                                    <div class="col-md-12">
                                        <img width="60px" src="data:image/png;base64,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" alt="">
                                    </div>

                                    <div class="col-md-12">
                                        <img width="60px" src="https://iconarchive.com/download/i47368/icons-land/vista-hardware-devices/Home-Server.ico" alt="">
                                    </div>

                                    <div class="col-md-12">
                                        <img width="60px" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR6GcY2DKZqhAG9b52HhlxNsvFqSeQf1vTdXg&usqp=CAU" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="row">
                                    <div class="col-md-12">
                                        <b for="">Kompyuter soni:</b>
                                        <input class="form-control" type="number" id="computer_qty">
                                    </div>
                                    <div class="col-md-12">
                                        <b for="">Router soni:</b>
                                        <input class="form-control" type="number" id="router_qty">
                                    </div>
                                    <div class="col-md-12">
                                        <b for="">Server soni:</b>
                                        <input class="form-control" type="number" id="server_qty">
                                    </div>
                                    <div class="col-md-12">
                                        <b for="">Kabel metri:</b>
                                        <input class="form-control" type="number" id="cable_meter">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="row">
                                    <div class="col-md-12">
                                        <b for="">Kompyuter narxi:</b>
                                        <input class="form-control" type="number" id="computer_price">
                                    </div>
                                    <div class="col-md-12">
                                        <b for="">Router narxi:</b>
                                        <input class="form-control" type="number" id="router_price">
                                    </div>
                                    <div class="col-md-12">
                                        <b for="">Server narxi:</b>
                                        <input class="form-control" type="number" id="server_price">
                                    </div>
                                    <div class="col-md-12">
                                        <b for="">Kabel metri narxi:</b>
                                        <input class="form-control" type="number" id="cable_meter_price">
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-3">
                                <div class="row">
                                    <div class="col-md-12">
                                        <b class="d-block">Sum</b>
                                        <p id="computer_sum">0</p>
                                    </div>
                                    <div class="col-md-12">
                                        <b class="d-block">Sum</b>
                                        <p id="route_sum">0</p>
                                    </div>
                                    <div class="col-md-12">
                                        <b class="d-block">Sum</b>
                                        <p id="server_sum">0</p>
                                    </div>
                                    <div class="col-md-12">
                                        <b class="d-block">Sum</b>
                                        <p id="cable_meter_sum">0</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <hr>

                        <div class="row d-inline">
                            <div class="col-md-1 d-inline">Summa:</div>
                            <div class="d-inline col-md-1 float-end"><p id="summa">0</p></div>
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
