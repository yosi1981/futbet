@extends('app')
@section('content')
<div class="row" id="crud">
    <div class="col-xs-12">
        <h1 class="page-header">
            PAISES
        </h1>
    </div>
    <div class="col-sm-12">
        <div class="widget-box widget-color-blue">
            <div class="widget-header">
                <h5 class="widget-title">
                    <i class="ace-icon fa fa-table">
                    </i>
                    Liga
                    <a class="btn btn-primary pull-right" data-target="#create" data-toggle="modal" href="#">
                        Nueva liga
                    </a>
                </h5>
            </div>
            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <th>
                            Id
                        </th>
                        <th>
                            Pais
                        </th>
                        <th colspan="2">
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="pais in paises" class="prueba">
                        <td width="10px">
                            @{{ pais.id }}
                        </td>
                        <td>
                            @{{ pais.nombre }}
                        </td>
                        <td width="10px">
                            <a class="btn btn-warning bt-sm" href="#" v-on:click.prevent="editPais(pais)">
                                Editar
                            </a>
                        </td>
                        <td width="10px">
                            <a class="btn btn-danger bt-sm" href="#" v-on:click.prevent="deletePais(pais)">
                                Eliminar
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
            @include('create')
			@include('edit')
        </div>
    </div>
</div>
@endsection
