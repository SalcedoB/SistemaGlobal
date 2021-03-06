@extends('plantilla.plantilla')
@section('contenido')
 
<section class="content-header">
        <h1>
            Registrar Venta
        </h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h4 class="box-title">Agregar Venta</h4>
                </div>
                <form action="">
                    <div class="box-body">
                        <div class="form-group col-md-6">
                            <label for="">Codigo</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="">Tipo de Venta</label>
                            <select name="" id="" class="form-control"></select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="">Estado de Venta</label>
                            <select name="" id="" class="form-control"></select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="">Fecha</label>
                            <input type="date" class="form-control">
                        </div>                       
                        <div class="form-group col-md-12">
                            <input type="submit" class="btn btn-primary" value="Registrar">
                            <a href="{{url('ventas')}}" class="btn btn-danger">Cancelar</a>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </section>

@endsection
