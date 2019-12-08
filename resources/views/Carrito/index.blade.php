@extends('layouts.app')
@section('content')
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="container">
<div class="row">
    <div class="panel-body col-md-12 col-md-offset-2 card">

        <div class="aliign-middle">
            <div class="btn-group">
                <a class="btn btn-info"><i class="fas fa-plus"></i> Añadir producto</a>
            </div>
        </div>
        <div class="table-container">
            <table id="mytable" class="table table-bordred table-striped">
                <thead>
                    <th>Imagen</th>
                    <th>Producto</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                    <th>Sub-Total</th>
                    <th></th>
                </thead>
                <tbody>

                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                            <form method="post">
                                @csrf
                                <input type="hidden" value="DELETE">
                                <button class="btn btn-danger btn-xs" type="submit"><span class="glyphicon glyphicon-trash">
                                        <i class="fas fa-trash"></i>
                                    </span>
                                </button>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="8">No hay registro </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
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