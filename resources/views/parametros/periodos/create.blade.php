<!-- resources/views/periodos/create.blade.php -->
<x-app-layout>
    <x-slot name="title">Crear Nuevo Período</x-slot>

    <div class="py-12">
        <div class="max-w-lg mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="mb-4 font-bold text-2xl">Crear Nuevo Período</h1>

                    <form action="{{ route('parametros.periodos.store') }}" method="POST">
                        @csrf
                        @method('POST')
                        <div class="mb-4">
                            <x-input-label for="nombre" class="block text-gray-700" value="{{__('Nombre del Período')}}" />
                            <x-text-input id="nombre" type="text" name="nombre" id="nombre" class="mt-1 block required w-full" />
                        </div>
                        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>