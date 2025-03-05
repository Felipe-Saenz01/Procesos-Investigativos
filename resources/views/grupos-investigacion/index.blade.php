<x-app-layout>
    <x-slot name="title">Grupos de Investigación</x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="mb-4 font-bold text-2xl">Grupos de Investigación</h1>
                    @if ($grupos->isEmpty())
                        <div class="alert alert-info">No hay grupos de investigación registrados.</div>
                    @else
                        <table class="table-auto min-w-full border-collapse border border-slate-300">
                            <thead class="bg-green-600 text-white ">
                                <tr>
                                    <th class="py-2 px-4 border border-slate-300">Nombre del Grupo</th>
                                    <th class="py-2 border border-slate-300">Correo</th>
                                    <th class="py-2 border border-slate-300">Investigadores</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($grupos as $grupo)
                                    <tr>
                                        <td class="py-2 px-4 border border-slate-300">{{ $grupo->nombre }}</td>
                                        <td class="py-2 px-4 border border-slate-3  00">{{ $grupo->correo }}</td>
                                        <td class="py-2 px-4 border border-slate-300">
                                            @if ($grupo->usuarios->isEmpty())
                                                No hay usuarios en este grupo.
                                            @else
                                                <ul>
                                                    @foreach ($grupo->usuarios as $usuario)
                                                        <li>{{ $usuario->name }} - {{ $usuario->email }}</li>
                                                    @endforeach
                                                </ul>
                                            @endif
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
