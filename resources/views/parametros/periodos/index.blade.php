<!-- resources/views/periodos/index.blade.php -->
<x-app-layout>
    <x-slot name="title">Lista de Períodos</x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="mb-4 font-bold text-2xl">Lista de Períodos</h1>

                    <a href="{{ route('parametros.periodos.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded mb-4 inline-block">
                        Crear Nuevo Período
                    </a>

                    @if ($periodos->isEmpty())
                        <div class="alert alert-info">No hay períodos registrados.</div>
                    @else
                        <table class="min-w-full bg-white">
                            <thead class="bg-green-600 text-white">
                                <tr>
                                    <th class="py-2 px-4 border-b">Nombre</th>
                                    <th class="py-2 px-4 border-b">Fecha Creacion</th>
                                    <th class="py-2 px-4 border-b">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($periodos as $periodo)
                                    <tr>
                                        <td class="py-2 px-4 border-b">{{ $periodo->nombre }}</td>
                                        <td class="py-2 px-4 border-b">{{ $periodo->created_at->format('d/m/Y H:i') }}</td>
                                        <td class="py-2 px-4 border-b">
                                            <a href="{{ route('parametros.periodos.edit', $periodo->id) }}" class="text-blue-500 hover:underline">Editar</a>
                                            <form action="{{ route('parametros.periodos.destroy', $periodo->id) }}" method="POST" class="inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-red-500 hover:underline ml-2">Eliminar</button>
                                            </form>
                                        </td>
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