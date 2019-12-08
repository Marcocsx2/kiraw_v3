@extends('layouts.layout')

<div class="panel-body">
                    <div class="pull-left">
                        <h3>Tus posibles compras</h3>
                    </div>
                    <div class="pull-right">
                        <div class="btn-group">
                            <a class="btn btn-info">Añadir producto</a>
                        </div>
                    </div>
                    <div class="table-container">
                        <table id="mytable" class="table table-bordred table-striped">
                            <thead>
                                <th>Nombre</th>
                                <th>Precio</th>
                                <th>Stock</th>
                                <th>Descripcion</th>
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
                                        <a class="btn btn-primary btn-xs" ><span class="glyphicon glyphicon-pencil">

                                            </span>
                                        </a>
                                    </td>
                                    <td>
                                        <form  method="post">
                                            <input  type="hidden" value="DELETE">
                                            <button class="btn btn-danger btn-xs" type="submit"><span class="glyphicon glyphicon-trash">

                                                </span>
                                            </button>
                                    </td>
                                </tr>

                                <tr>
                                    <td colspan="8">No hay registro </td>
                                </tr> </tbody>
                        </table>
                    </div>
                </div>
