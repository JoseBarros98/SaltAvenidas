@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1> Detalle de la venta
            @if($sale->estado )
                <span style="padding: 5px" class="label label-success">Activo</span>
            @else
                <span style="padding: 5px" class="label label-danger">Anulado</span>
            @endif
        </h1>
        
      
        <h1 class="pull-right">
            <a class="btn btn-primary pull-right" style="margin-top: -30px;margin-bottom: 5px"
               href="{!! route('sales.create') !!}">Nueva venta</a>
        </h1>
    
    </section>
    
   
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">

                    @include('sales.show_fields')

                    <div class="col-sm-12">
                        <a class="btn btn-default" href="{!! redirect()->back()->getTargetUrl() !!}"> Volver... </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
