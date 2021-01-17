<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dharan Kitchen</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/tailwind.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    
</head>
<body>
    {{-- header --}}
    <header>
        <div>
            <img src="{{ asset('images/banner.jpg') }}" alt="" class=" relative w-full h-screen">
            <div class="absolute bg-red-800 w-full top-0">
                <div class="container ">
                    <div class="float-left">
                        <ul class="flex text-white">
                            <li class="">
                                <a href="" class="hover:no-underline">
                                    <svg class="w-5 h-8 inline-block" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path></svg>
                                <span>Dharan-15,Dharan,Nepal</span> 
                                </a>
                            </li>
                            <li class="pl-3">
                                <a href="">
                                    <svg class="w-5 h-8" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path></svg>
                                </a>
                            </li>
                            <li class="pl-3">
                                <a href="">
                                    <svg class="w-5 h-8" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path><path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path></svg>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="float-right">
                        <ul class="flex text-white mt-1">
                            <li class="">
                                <a href="">
                                    <i class="text-lg fab fa-facebook-f"></i>
                                </a>       
                            </li>
                            <li class="b-l-2 border-white ml-2 pl-2 ">
                                <a href="" >
                                    <i class="text-lg fab fa-instagram"></i>
                                </a>
                            </li>
                            <li class="b-l-2 border-white ml-2 pl-2 ">
                                <a href="" >
                                    <i class="text-lg fab fa-youtube"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
          
            <div class="absolute top-8 bg-gray-400 w-full py-6">
                <div class="container ">
                    <div class="float-left">
                        <h1 class="text-lg font-serif text-red-800" >HOTEL DHARAN KITCHEN</h1>
                    </div>

                    <div class="float-right flex">
                        <ul class=" text-red-800">
                            <li class="inline-block font-serif text-md ">
                                <a href="" class="hover:no-underline  hover:border-red-700">HOME</a>
                            </li>
                            <li class="inline-block ml-5  font-serif text-md">
                                <a href="#" class="hover:no-underline">ABOUT</a>
                            </li>
                            <li class="inline-block ml-5  font-serif text-md">
                                <a href="#" class="hover:no-underline">SERVICES</a>
                            </li>
                            <li class="inline-block ml-5  font-serif text-md">
                                <a href="" class="hover:no-underline">GALLERY</a>
                            </li>
                            <li class="inline-block ml-5  font-serif text-md">
                                <a href="" class="hover:no-underline">CONTACT</a>
                            </li>
                            <li class="inline-block border-2 border-white border-solid rounded text-white font-bold ml-5">
                                <a href="" class="px-6  hover:no-underline">Book Now</a>
                            </li>
                        </ul>
                        
                        
                    </div>
                </div>
            </div>

        </div>
    </header>

    <main>

    </main>
    <footer>

    </footer>
</body>
</html>