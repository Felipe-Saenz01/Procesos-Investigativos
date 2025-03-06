<!-- resources/views/periodos/edit.blade.php -->
<x-app-layout>
    <x-slot name="title">Editar Período</x-slot>

    <div class="py-12">
        <div class="max-w-lg mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="mb-4 font-bold text-2xl">Editar Período</h1>

                    <form action="{{ route('parametros.periodos.update', $periodo->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-4">
                            <x-input-label for="nombre" class="block text-gray-700" value="{{__('Nombre del Período')}}"/>
                            <x-text-input  type="text" name="nombre" id="nombre" class="mt-1 block required w-full" value="{{ $periodo->nombre }}" required />
                        </div>
                        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Actualizar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>