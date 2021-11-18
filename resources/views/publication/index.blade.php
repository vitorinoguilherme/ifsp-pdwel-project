<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Publications') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                <!-- Publicações da comunidade -->
                @foreach($publications as $publication)
                    <a href="{{ route('publication.show', $publication->id) }}" class="text-2xl font-bold leading-7 text-gray-900 sm:text-3xl sm:truncate hover:underline">
                            {{ $publication->title }}

                    </a>

                    <div class="c-publication__header">

                        <img class="c-publication__avatar" src="https://iconarchive.com/download/i98403/dakirby309/simply-styled/OS-Linux.ico" alt="John Doe">
                        <div>
                            <strong>{{ $publication->user_id }}</strong>
                            <p>{{ $publication->date }}</p>
                        </div>

                    </div>
                    <div class="md:flex md:items-center mb-6">
                        <p>{{ $publication->content }}</p>
                    </div>

                @endforeach
            </div>
        </div>
    </div>



</x-app-layout>
