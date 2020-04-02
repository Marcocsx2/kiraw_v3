@extends('layouts.app')
@section('content')
<div class="success-color">
<br>
<br>
<br>
<br>
</div>

@if (session()->has('cart'))
<div class="container my-4">
    <div class="row">
        <div class="panel-body col-md-12 col-md-offset-2 card">

            <div class="aliign-middle">
                <div class="btn-group">
                    <a href="{{url('/productos')}}" class="btn btn-info"><i class="fas fa-plus"></i> Añadir producto</a>
                </div>
            </div>
            <div class="table-container">
                <table id="mytable" class="table table-bordred table-striped">
                    <thead>
                        <th>Imagen</th>
                        <th>Producto</th>
                        <th>Precio en $</th>
                        <th>Cantidad</th>
                        <th>Sub-Total</th>
                        <th>Eliminar</th>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                        <tr>
                            <td><img style="width: 100px; height: 100px;" src="{{$product['item']['prod_imagen']}}" alt=""></td>
                            <td><input type="text" class="form-control" disabled value="{{$product['item']['prod_nombre']}}"></td>
                            <td><input type="number" class="form-control" disabled value="{{$product['item']['prod_precio']}}"></td>
                            <td><input type="number" class="form-control" disabled value="{{$product['qty']}}"></td>
                            <td><input type="number" class="form-control" disabled value="{{$product['item']['prod_precio']*$product['qty']}}"></td>
                            <td>
                                <form method="">
                                    @csrf
                                    <input type="hidden" value="">
                                    <button class="btn btn-danger btn-xs" type="submit"><span class="glyphicon glyphicon-trash">
                                            <i class="fas fa-trash"></i>
                                        </span>
                                    </button>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                    
                </table>
            </div>
        </div>
    </div>
</div>
@else
<div class="col-12 alert alert-info">
    <span>
        <p>
            No hay nada en el carrito :c !!
        </p>
        <div class="aliign-middle">
            <div class="btn-group">
                <a href="{{url('/productos')}}" class="btn btn-info"><i class="fas fa-plus"></i> Añadir producto</a>
            </div>
        </div>
    </span>
</div>
@endif




<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>


@stop