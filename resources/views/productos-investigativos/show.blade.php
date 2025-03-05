<x-app-layout>
    <x-slot name="title">Detalles del Producto</x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="mb-4 font-bold text-2xl">Detalles del Producto</h1>
                    <hr />

                    <!-- Información del Producto -->
                    <div class="my-8">
                        <h2 class="font-bold text-xl">{{ $productos_investigativo->titulo }}</h2>
                        <p><strong>Resumen:</strong> {{ $productos_investigativo->resumen }}</p>
                        <p><strong>Grupo de Investigación:</strong> {{ $productos_investigativo->grupoInvestigacion->nombre }}</p>
                        <p><strong>Usuario:</strong> {{ $productos_investigativo->usuario->name }}</p>
                        <p><strong>SubTipo de Producto:</strong> {{ $productos_investigativo->subTipoProducto->nombre }}</p>
                        <p><strong>Tipo de Producto:</strong> {{ $productos_investigativo->subTipoProducto->tipoProducto->nombre }}</p>
                    </div>

                    <!-- Entregas del Producto -->
                    <h3 class="font-bold text-lg mb-4">Entregas</h3>
                    @if ($productos_investigativo->entregas->isEmpty())
                        <p>No hay entregas registradas para este producto.</p>
                    @else
                        <table class="min-w-full bg-white">
                            <thead>
                                <tr class="bg-green-600 text-white">
                                    <th class="py-2 px-4 border-b">Archivo</th>
                                    <th class="py-2 px-4 border-b">Periodo</th>
                                    <th class="py-2 px-4 border-b">Fecha de Entrega</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($productos_investigativo->entregas as $entrega)
                                    <tr>
                                        <td class="py-2 px-4 border-b">
                                            <a href="{{ asset('storage/' . $entrega->archivo) }}" target="_blank" class="text-blue-500 hover:underline">
                                                Ver archivo
                                            </a>
                                        </td>
                                        <td class="py-2 px-4 border-b">{{ $entrega->periodo->nombre }}</td>
                                        <td class="py-2 px-4 border-b">{{ $entrega->created_at->format('d/m/Y H:i') }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>