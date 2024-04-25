@extends('layouts.app')

@section('content')
    <div class="container mx-auto mt-8">
        <h1 class="text-2xl font-bold mb-4">Crear Moto</h1>
        <form action="{{ route('moto.store') }}" method="POST" class="w-full max-w-lg">
            @csrf
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
                <x-flash_ok />
            @endif
        </form>

        <div class="mt-8">
            <h2 class="text-2xl font-bold mb-4">Motos Creadas</h2>
            <table class="table-auto">
                <thead>
                    <tr>
                        <th class="px-4 py-2">Marca</th>
                        <th class="px-4 py-2">Modelo</th>
                        <th class="px-4 py-2">Año</th>
                        <th class="px-4 py-2">Precio</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($motos as $moto)
                        <tr>
                            <td class="border px-4 py-2">{{ $moto['marca'] }}</td>
                            <td class="border px-4 py-2">{{ $moto['model'] }}</td>
                            <td class="border px-4 py-2">{{ $moto['anio'] }}</td>
                            <td class="border px-4 py-2">${{ $moto['precio'] }}</td>
                            <td class="border px-4 py-2">
                                <x-but_del :id="$moto['id']" text="Delete" />
                                <x-but_upd :id="$moto['id']" text="Update" />
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>

    </div>
@endsection
