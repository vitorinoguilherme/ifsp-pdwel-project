<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Fórum Tech') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="c-publication__header">
                        <img class="c-publication__avatar" src="https://iconarchive.com/download/i98403/dakirby309/simply-styled/OS-Linux.ico" alt="John Doe">
                        <div>
                            <strong>{{ Auth::user()->name }}</strong>
                            <!-- <p>4 days ago</p> -->
                        </div>
                    </div>


                    <form class="w-full max-w-lg" action="" method="post">
                        <div class="md:flex md:items-center mb-6">
                            <div class="md:w-1/3">
                                <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                                    Título
                                </label>
                            </div>
                            <div class="md:w-2/3">
                                <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" type="text" value="Digite o título da publicação">
                            </div>
                        </div>

                        <div class="md:flex md:items-center mb-6">
                            <div class="md:w-1/3">
                                <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                                    Conteúdo
                                </label>
                            </div>
                            <div class="md:w-2/3">
                                <textarea
                                    class="form-textarea mt-1 block w-full"
                                    rows="3"
                                    cols="60"
                                    placeholder="Digite o contéudo da publicação aqui..."
                                ></textarea>
                            </div>
                        </div>

                        <div class="md:flex md:items-center mb-6">
                            <div class="md:w-1/3">
                                <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                                    Categorias
                                </label>
                            </div>
                            <div class="md:w-2/3">
                                <select class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                                    <option>Node JS</option>
                                    <option>Express</option>
                                    <option>React JS</option>
                                </select>
                                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                                </div>
                            </div>
                        </div>

                        <div class="md:flex md:items-center">
                            <div class="md:w-1/3"></div>
                            <div class="md:w-2/3">
                                <button class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="button">
                                    Publicar
                                </button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

    <!-- @section('publications')
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                    Publicações de toda comunidade
                    <div class="c-publication__header">
                        <img class="c-publication__avatar" src="https://iconarchive.com/download/i98403/dakirby309/simply-styled/OS-Linux.ico" alt="John Doe">
                        <div>
                            <strong>{{ Auth::user()->name }}</strong>
                            <p>4 days ago</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection -->


</x-app-layout>
