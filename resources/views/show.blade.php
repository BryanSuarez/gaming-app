@extends('layouts.app')

@section('content')

<div class="container mx-auto px-4">
    <div class="game-details border-b border-gray-800 pb-12 flex flex-col lg:flex-row">
        <div class="flex-none">
            <img src="https://www.gamecored.com/wp-content/uploads/2019/09/Final-Fantasy-VII-Remake-portada-pic001.jpg"
                alt="">
        </div>
        <div class="lg:ml-12 lg:mr-64">
            <h2 class="font-semibold text-4xl">Final Fantasy VII Remake</h2>
            <div class="text-gray-400">
                <span>Adventure, RPG</span>
                &middot;
                <span>Action</span>
                &middot;
                <span>Play Station 4</span>
                &middot;
            </div>

            <div class="flex flex-wrap items-center mt-8">
                <div class="flex items-center">
                    <div class="w-16 h-16 bg-gray-800 rounded-full">
                        <div class="font-semibold text-xs flex justify-center items-center h-full">
                            90%
                        </div>
                    </div>
                    <div class="ml-4 text-xs">Member <br> Score </div>
                </div>
                <div class="flex items-center ml-12">
                    <div class="w-16 h-16 bg-gray-800 rounded-full">
                        <div class="font-semibold text-xs flex justify-center items-center h-full">
                            90%
                        </div>
                    </div>
                    <div class="ml-4 text-xs">Critic <br> Score </div>
                </div>
                <div class="flex items-center space-x-4 ml-12">
                    <div class="w-8 h-8 bg-gray-800 rounded-full flex justify-center items-center">
                        <a href="#" class="hover:text-gray-400">f</a>
                    </div>
                </div>
            </div>
            <p class="mt-12">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi quibusdam nobis fugit odit molestias eius
                corporis officia dolorem, vitae reiciendis voluptates cum! Mollitia eos omnis ad. Ipsum eligendi
                voluptatibus perferendis?
            </p>

            <div class="mt-12">
                <button
                    class="flex bg-blue-500 text-white font-semibold p-4 hover:bg-blue-600 rounded transition ease-in-out duration-150">
                    Ver trailer
                </button>
            </div>
        </div>
    </div>
    {{-- Album --}}
    <div class="images-container border-b border-gray-800 pb-12 mt-8">
        <h2 class="text-blue-500 uppercase tracking-wide font-semibold">imágenes</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12 mt-8">
            <div>
                <a href="#">
                    <img src="https://as.com/meristation/imagenes/2019/05/10/header_image/210548051557475039.jpg"
                        alt="cover" class="hover:opacity-75 transition ease-in-out duration-150">
                </a>
            </div>
        </div>
    </div>
    {{-- Similar --}}
    <div class="images-container pb-4 mt-8">
        <h2 class="text-blue-500 uppercase tracking-wide font-semibold">Similares</h2>

        <div class="popular-games text-sm grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 xl:grid-cols-6 gap-12 pb-8">
            <div class="game mt-8">
                <div class="relative inline-block">
                    <a href="#">
                        <img src="https://cdn.hobbyconsolas.com/sites/navi.axelspringer.es/public/styles/cover_290x414/public/media/image/2020/03/final-fantasy-vii-remake-portada-ficha-03-1882339.jpg?itok=viocivJQ"
                            alt="" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full"
                        style="right: -20px; bottom: -20px">
                        <div class="font-semibold text-xs flex justify-center items-center h-full">
                            80%
                        </div>
                    </div>
                </div>
                <a href="" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">
                    COD Mobile
                </a>
                <div class="text-gray-400 mt-1">Play Station 4</div>
            </div>
        </div>
    </div>

</div>

@endsection
