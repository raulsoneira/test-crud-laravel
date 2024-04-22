@extends('layouts.app')

@section('content')
    <div class="container mx-auto mt-8">
        <h1 class="text-2xl font-bold mb-4">Update Moto</h1>
        <form action="{{ route('moto.update') }}" method="POST" class="w-full max-w-lg">
            @csrf
            <input type="hidden" name="id" value="{{ $moto['id'] }}">
            <div class="mb-4">
                <label for="marca" class="block text-gray-700 font-bold mb-2">Marca:</label>
                <input type="text" id="marca" name="marca" class="form-input w-full"
                    placeholder="Ingrese la marca de la moto">
                @error('marca')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="model" class="block text-gray-700 font-bold mb-2">Model:</label>
                <input type="text" id="model" name="model" class="form-input w-full"
                    placeholder="Ingrese el  de la moto">
                @error('model')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="anio" class="block text-gray-700 font-bold mb-2">Año:</label>
                <input type="number" id="anio" name="anio" class="form-input w-full"
                    placeholder="Ingrese el año de la moto">
                @error('anio')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="precio" class="block text-gray-700 font-bold mb-2">Precio:</label>
                <input type="number" id="precio" name="precio" class="form-input w-full"
                    placeholder="Ingrese el precio de la moto">
                @error('precio')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Crear Moto</button>
            </div>

            @if (@session('success'))
                <div style="background-color: #f0f0f0; padding: 10px; border-radius: 5px;">
                    <span style="color: green;">{{ session('success') }}</span>
                </div>
            @endif
        </form>
    </div>
@endsection
