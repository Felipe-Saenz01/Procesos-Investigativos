<x-app-layout>
    <x-slot name="title">Productos de Investigación</x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="mb-4 font-bold text-2xl">Productos de Investigación</h1>

                    @if ($grupos->isEmpty())
                        <div class="alert alert-info">No hay grupos de investigación registrados.</div>
                    @else
                        <table class="min-w-full bg-white">
                            <thead class="bg-green-600 text-white ">
                                <tr>
                                    <th class="py-2 px-4 border-b">Grupo de Investigación</th>
                                    <th class="py-2 px-4 border-b">Producto</th>
                                    <th class="py-2 px-4 border-b">Resumen</th>
                                    <th class="py-2 px-4 border-b">Usuario</th>
                                    <th class="py-2 px-4 border-b">SubTipo de Producto</th>
                                    <th class="py-2 px-4 border-b">Tipo de Producto</th> <!-- Nueva columna -->
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($grupos as $grupo)
                                    @if ($grupo->productosInvestigativos->isEmpty())
                                        <tr>
                                            <td class="py-2 px-4 border-b">{{ $grupo->nombre }}</td>
                                            <td class="py-2 px-4 border-b" colspan="5">No hay productos en este grupo.</td>
                                        </tr>
                                    @else
                                        @foreach ($grupo->productosInvestigativos as $producto)
                                            <tr>
                                                <td class="py-2 px-4 border-b">{{ $grupo->nombre }}</td>
                                                <td class="py-2 px-4 border-b">
                                                    <a href="{{ route('productos-investigativos.show', $producto->id) }}" class="text-blue-500 hover:underline">
                                                        {{ $producto->titulo }}
                                                    </a>
                                                </td>
                                                <td class="py-2 px-4 border-b">{{ $producto->resumen }}</td>
                                                <td class="py-2 px-4 border-b">{{ $producto->usuario->name }}</td>
                                                <td class="py-2 px-4 border-b">{{ $producto->subTipoProducto->nombre }}</td>
                                                <td class="py-2 px-4 border-b">{{ $producto->subTipoProducto->tipoProducto->nombre }}</td> <!-- Nueva columna -->
                                            </tr>
                                        @endforeach
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout> 