@extends('frontend.template.app')

@section('backgroundimage')
    <div class="w-full h-screen" style="background-image: url(../images/banner4.jpg);">
        <div>
            @include('frontend.navbar.nav')
        </div>
        <div class="sticky top-0">
            @include('frontend.navbar.nav2')
        </div>
    </div>
@endsection


@section('main')
    {{-- welcome --}}
    <div class="pt-10">
        <div class="relative w-full h-52">
            <div class="flex justify-center">
                <div class="absolute h-48 p-0 bottom-0 flex items-end">
                    <h1 class="text-9xl text-red-900 text-opacity-25">WELCOME</h1>    
                </div>
                <div class="absolute h-10 bottom-0 p-0 flex items-end">
                    <h1 class="text-3xl">Welcome To<span class="text-3xl text-red-900 p-0">Dharan Kitchen</span></h1>
                </div>
 
            </div>
        </div>
 
        <p class="text-center pt-2 text-gray-600">
             Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus cumque sed animi dolorum, voluptatibus porro!
        </p>

        <div class="pt-10">
            <div class="container">
               <div class="flex ">
                    <div class="p-4 relative">
                        <h1 class="text-center text-xl mb-2">Hotel</h1>
                        <div class="w-10 h-1 bg-red-900 absolute left-1/2" style="transform: translate(-50%);"></div>
                        <img src="{{ asset('images/hotel.jpg') }}" alt="" class="mt-10 transform hover:scale-110  transition ease-in duration-700 " >
                    </div>
                    <div class="p-4 relative">
                        <h1 class="text-center text-xl mb-2">Party Palace</h1>
                        <div class="w-10 h-1 bg-red-900 absolute left-1/2" style="transform: translate(-50%);"></div>
                        <img src="{{ asset('images/partypalace.jpg') }}" alt="" class="mt-10  transform hover:scale-110 transition ease-in duration-700">
                    </div>
                    <div class="p-4 relative">
                        <h1 class="text-center text-xl mb-2">Sekuwa Corner</h1>
                        <div class="w-10 h-1 bg-red-900 absolute left-1/2" style="transform: translate(-50%);"></div>
                        <img src="{{ asset('images/bbq.jpg') }}" alt="" class="mt-10 transform hover:scale-110 transition ease-in duration-700 ">
                    </div>
                    <div class="p-4 relative">
                        <h1 class="text-center text-xl mb-2">Restuarant</h1>
                        <div class="w-10 h-1 bg-red-900 absolute left-1/2 " style="transform: translate(-50%);"></div>
                        <img src="{{ asset('images/restuarant.jpg') }}" alt="" class="mt-10 transform hover:scale-110 transition ease-in duration-700">
                    </div>
               </div>
                
            </div>
        </div>
    </div>

    {{-- About --}}
    <div class="mt-20 w-full h-1/2 bg-fixed " style="background-image: url(../images/banner1.jpg);">
        <div class=" bg-black w-full h-1/2 bg-opacity-25">
           <div class="flex px-28 py-40 space-x-10">
               <div class="flex-1">
                    <div class="relative">
                        <div class="absolute bottom-0">
                            <h1 class="text-9xl text-red-900 font-black text-opacity-25">About</h1> 
                        </div>

                        <div class="absolute bottom-0 ">
                            <h1 class="text-5xl text-white">A Little <span class="text-5xl text-red-900 ">About Us</span></h1>
                        </div>
                    </div>
                    <p class="text-white mt-4">
                        Lorem ipsum dolor sit amet.
                    </p>
                    <p class="text-white mt-4 text-justify">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime, iusto facilis labore explicabo omnis accusantium, aut dolor aperiam ratione molestias sunt eveniet sint autem repellendus! Voluptatum quia, accusantium vel veritatis aut eius natus eaque.
                         Quas suscipit explicabo consectetur omnis earum impedit minima nulla architecto voluptate, consequatur reiciendis beatae, ratione eos?
                    </p>
                   
                </div>
             
                <div class="flex-1">
                    <p class="text-white mt-4 text-justify"> 
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corporis facilis quidem facere, reprehenderit similique nisi tempora. Deserunt, 
                        iure error animi voluptates tenetur ex illum at necessitatibus recusandae quidem nihil suscipit.
                    </p>
                </div>
           </div>
        </div>
    </div>

    {{-- Nearby --}}
    <div class="bg-gray-300">
        <div class="container flex space-x-20 justify-center py-20 ">
            <div class="card shadow-lg" style="width: 18rem;">
                <img src="{{ asset('images/banner.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title text-red-800 font-bold text-lg font-serif">Pindeswori</h5>
                  <p class="card-text text-gray-500">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary mt-3">More</a>
                </div>
            </div>
            <div class="card shadow-lg" style="width: 18rem;">
                <img src="{{ asset('images/banner.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title text-red-800 font-bold text-lg font-serif ">Buddha Subba</h5>
                  <p class="card-text text-gray-500">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary mt-3">More</a>
                </div>
            </div>
            <div class="card shadow-lg" style="width: 18rem;">
                <img src="{{ asset('images/banner.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title text-red-800 font-bold text-lg font-serif ">Dantakali</h5>
                  <p class="card-text text-gray-500">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary mt-3">More</a>
                </div>
            </div>
        </div>
    </div>

@endsection

