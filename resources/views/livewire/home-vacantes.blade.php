<div>
    <livewire:filtrar-vacantes />

    <div class="py-12">
        <div class="max-w-7xl mx-auto">
            <h3 class="font-extrabold text-4xl text-gray-800 mb-12">Nuestras Vacantes Disponibles</h3>

            <div class="bg-white shadow-sm rounded-lg p-6 divide-y divide-gray-200">
                @forelse ($vacantes as $vacante)
                    <div class="md:flex md:justify-between md:items-center py-5">
                        <div>
                            <a href="{{ route('vacantes.show', $vacante->id) }}" class="text-3xl font-extrabold text-gray-600">
                                {{ $vacante->titulo }}
                            </a>
                            <p class="text-base text-gray-600 mb-1">{{ $vacante->empresa }}</p>
                            <p class="font-bold text-xs text-gray-600">Último día para postularse: <span class="font-normal">{{ $vacante->ultimo_dia->format('d/m/Y') }}</span></p>
                            <p class="font-bold text-xs text-gray-600">Categoría: <span class="font-normal">{{ $vacante->categoria->categoria }}</span></p>
                            <p class="font-bold text-xs text-gray-600">Salario: <span class="font-normal">{{ $vacante->salario->salario }}</span></p>
                        </div>
                        <div class="mt-5 md:mt-0">
                            <a href="{{ route('vacantes.show', $vacante->id) }}" class="uppercase bg-rose-600 font-bold text-white p-3 text-sm rounded-lg block text-center">Ver Vacante</a>
                        </div>
                    </div>
                @empty
                    <p class="p-3 text-center text-sm text-gray-600">No hay vacantes aún</p>
                @endforelse
            </div>
        </div>
    </div>
</div>
