@extends('layout/app')

@section('content')
    <div class="container">
        <div class="form-container">
            <h2 class="text-center mb-4">Agregar Nuevo Producto</h2>
            <form action="{{ route('productos.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Nombre del producto</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese el nombre del producto">
                </div>

                <div class="mb-3">
                    <label class="form-label">Descripción</label>
                    <textarea class="form-control" id="descripcion" name="descripcion" rows="3" placeholder="Ingrese la descripción del producto"></textarea>
                </div>
                
                <div class="mb-3">
                    <label class="form-label">Categoría</label>
                    <input type="text" name="categoria" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Precio</label>
                    <input type="number" class="form-control" id="precio" name="precio" placeholder="Ingrese el precio del producto">
                </div>

                <div class="mb-3">
                    <label class="form-label">Imagen</label>
                    <input type="file" name="imagen" class="form-control" required>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-submit">Guardar Producto</button>
                </div>
            </form>
        </div>
    </div>
@endsection 