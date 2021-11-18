<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Publicações') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h3 class="text-2xl font-bold leading-7 text-gray-900 sm:text-3xl sm:truncate">
                Criar nova publicação
            </h3>
            <a
                href="/publications/create"
                class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">
                Adicionar publicação
            </a>

            <h3 class="text-2xl font-bold leading-7 text-gray-900 sm:text-3xl sm:truncate text-center">
                Novas Publicações
            </h3>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                <!-- Publicações da comunidade -->
                @foreach($publications as $publication)
                    <div class="p-6 bg-white border-b border-gray-200">
                        <div class="publications">
                            <a href="{{ route('publication.show', $publication->id) }}" class="text-2xl font-bold leading-7 text-gray-900 sm:text-2xl sm:truncate hover:underline">
                                    {{ $publication->title }}

                            </a>

                            <div class="c-publication__header">

                                <img class="c-publication__avatar" src="https://iconarchive.com/download/i98403/dakirby309/simply-styled/OS-Linux.ico" alt="John Doe">
                                <div>
                                    <strong>{{ app\Models\User::findById($publication->user_id)->name; }}</strong>

                                    <p>{{ $publication->date }}</p>
                                </div>

                            </div>
                            <div class="md:flex md:items-center mb-6">
                                <p>{{ $publication->content }}</p>
                            </div>
                            @if($publication->user_id === Auth::user()->id)
                                <div class="md:flex md:items-center mb-6">
                                    <a
                                        href="{{ route('publication.edit', $publication->id) }}"
                                        class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">
                                        Editar
                                    </a>

                                    <form action="{{route('publication.destroy',[$publication->id])}}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button
                                            type="submit"
                                            class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">
                                            Deletar
                                        </button>
                                    </form>

                                </div>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>


</x-app-layout>
