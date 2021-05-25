<div class="col-sm-8 col-md-8">
    <!-- Categoria Field -->
    <div class="form-group">
        {!! Form::label('categoria', 'Categoría:') !!}
        <p>{{ $product->categoria }}</p>
    </div>

    <!-- Nombre Field -->
    <div class="form-group">
        {!! Form::label('nombre', 'Nombre:') !!}
        <p>{{ $product->nombre }}</p>
    </div>

    <!-- Precio Field -->
    <div class="form-group">
        {!! Form::label('precio', 'Precio Venta: [Bs]') !!}
        <p>{{ $product->precio }}</p>
    </div>

     <!-- Compra Field -->
     <div class="form-group">
        {!! Form::label('compra', 'Precio Compra: [Bs]') !!}
        <p>{{ $product->compra }}</p>
    </div>

    <!-- Stock Field -->
    <div class="form-group">
        {!! Form::label('stock', 'Stock:') !!}
        <p>{{ $product->stock }}</p>
    </div>

   
</div>
<div class="col-sm-4 col-md-4">
    <!-- Fotografia Field -->
    <div class="form-group">
        <img class="img img-thumbnail" src="{!! asset('/images_products/'. $product->fotografia) !!}" alt="images" width="100%">
    </div>
</div>
