@extends('frontend.template.app')

@section('backgroundimage')
    <div class="w-full h-screen bg-cover" style="background-image: url(../images/carousel3.jpg);">
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
    <div class="">
        <div class="container">
            <div class="relative w-full h-60">
                <div class="flex justify-center">
                    <div class="absolute h-48 p-0 bottom-0 flex items-end" >
                        <h1 class="text-9xl text-red-900 text-opacity-25" data-aos="flip-left">WELCOME</h1>    
                    </div>
                    <div class="absolute h-10 bottom-0 p-0 flex items-end" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
                        <h1 class="text-3xl font-bold">Welcome To<span class="text-3xl font-bold text-red-900 p-0">Dharan Kitchen</span></h1>
                    </div>
    
                </div>
            </div>
    
            <p class="text-center pt-10 text-gray-600">
               Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, vero facilis perspiciatis nihil dolorum ex earum animi consectetur explicabo nesciunt nulla iusto nam, commodi recusandae consequatur cupiditate quae dignissimos molestias? Doloremque quam vitae, ducimus voluptas saepe, repellat error ipsum expedita sunt iusto a nisi officia magnam fugit corrupti dicta eligendi cum architecto suscipit corporis exercitationem at. Ex beatae quisquam, quibusdam quaerat labore ipsum maiores sint cupiditate veniam! Culpa sed non hic. Eum reprehenderit sit sint distinctio voluptatum assumenda odit laboriosam maiores doloremque mollitia. Officia nihil natus maiores laborum ut esse veniam neque vitae ipsam, fugit exercitationem numquam vel nulla quam modi earum voluptates rem debitis cumque? Dolorem atque quidem asperiores tenetur obcaecati aspernatur odio eum at, similique quo? Quibusdam voluptate aut, nihil consequuntur debitis nulla aperiam assumenda accusamus ipsa perferendis fugiat ducimus reprehenderit obcaecati molestias minima possimus fuga quam ipsum aspernatur, eaque sunt beatae repellendus! Est odit doloribus deserunt vel possimus cum labore error voluptas corrupti dolor animi, facilis veritatis tempore aliquam nobis. Ipsam consequuntur suscipit totam saepe, ea error delectus aut nobis tempora eligendi cum reiciendis, dolores placeat quam molestias distinctio, temporibus aliquam impedit voluptatibus quod magnam iure. Dignissimos, esse hic. Facilis dolor provident ut molestias quos impedit inventore!
            </p>
        </div> 
        {{-- end of container --}}

        <div class="pt-10">
            <div class="container">
               <div class="flex ">
                    <div class="p-4 relative">
                        <h1 class="text-center text-xl font-bold text-gray-700 mb-2">Hotel</h1>
                        <div class="w-10 h-1 bg-red-900 absolute left-1/2" style="transform: translate(-50%);"></div>
                        <img src="{{ asset('images/hotel.jpg') }}" alt="" class="mt-10 transform hover:scale-110  transition ease-in duration-700 " >
                    </div>
                    <div class="p-4 relative">
                        <h1 class="text-center text-xl font-bold text-gray-700 mb-2">Party Palace</h1>
                        <div class="w-10 h-1 bg-red-900 absolute left-1/2" style="transform: translate(-50%);"></div>
                        <img src="{{ asset('images/partypalace.jpg') }}" alt="" class="mt-10  transform hover:scale-110 transition ease-in duration-700">
                    </div>
                    <div class="p-4 relative">
                        <h1 class="text-center text-xl font-bold text-gray-700 mb-2">Sekuwa Corner</h1>
                        <div class="w-10 h-1 bg-red-900 absolute left-1/2" style="transform: translate(-50%);"></div>
                        <img src="{{ asset('images/bbq.jpg') }}" alt="" class="mt-10 transform hover:scale-110 transition ease-in duration-700 ">
                    </div>
                    <div class="p-4 relative">
                        <h1 class="text-center text-xl font-bold mb-2">Restuarant</h1>
                        <div class="w-10 h-1 bg-red-900 absolute left-1/2 " style="transform: translate(-50%);"></div>
                        <img src="{{ asset('images/restuarant.jpg') }}" alt="" class="mt-10 transform hover:scale-110 transition ease-in duration-700">
                    </div>
               </div>
                
            </div>
        </div>
    </div>

    {{-- About --}}
    <div class="mt-32 w-full h-1/2 bg-fixed " style="background-image: url(../images/banner1.jpg);">
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

    {{-- Rooms--}}
    <div class=" py-32">
        <div class="container">
            <h1 class="text-center text-5xl text-red-800">Rooms</h1>
            <div class="flex space-x-20 justify-center pt-10">
                <div class="card shadow-lg" style="width: 18rem;">
                    <img src="{{ asset('images/banner.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title text-red-800 font-bold text-lg font-serif">Deluxe Rooms</h5>
                      <p class="card-text text-gray-500">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary mt-3">More</a>
                    </div>
                </div>
                <div class="card shadow-lg" style="width: 18rem;">
                    <img src="{{ asset('images/banner.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title text-red-800 font-bold text-lg font-serif ">Standard Rooms</h5>
                      <p class="card-text text-gray-500">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary mt-3">More</a>
                    </div>
                </div>
                <div class="card shadow-lg" style="width: 18rem;">
                    <img src="{{ asset('images/banner.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title text-red-800 font-bold text-lg font-serif ">Normal Rooms</h5>
                      <p class="card-text text-gray-500">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary mt-3">More</a>
                    </div>
                </div>
            </div>
           
        </div>
    </div>

    {{-- Nearby Palaces --}}
    <div class="bg-gray-200 py-32">
        <div class="container">
            <h1 class="text-center text-5xl text-red-800  border-b-2 border-red-800">Places To Visit</h1>
            <div class="flex mt-10">
                <div>
                    <img src="{{ asset('images/BuddhaSubba.jpg') }}" alt=""> 
                </div>
                <div class="p-10">
                    <h1 class="text-2xl text-red-800">Buddha Subba</h1>
                    <p>
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eligendi enim provident iusto optio veritatis porro neque, nam quam tempora voluptates error necessitatibus laborum numquam recusandae ipsam nulla hic earum repellendus eveniet sed vero placeat laudantium impedit! Rem atque totam ex omnis quidem, obcaecati odit eum laudantium veritatis inventore nulla perferendis?
                    </p>
                </div>
            </div>
            <div class="flex mt-10">
                <div class="p-10">
                    <h1 class="text-2xl text-red-800">Pindeswori</h1>
                    <p>
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eligendi enim provident iusto optio veritatis porro neque, nam quam tempora voluptates error necessitatibus laborum numquam recusandae ipsam nulla hic earum repellendus eveniet sed vero placeat laudantium impedit! Rem atque totam ex omnis quidem, obcaecati odit eum laudantium veritatis inventore nulla perferendis?
                    </p>
                </div>
                <div>
                    <img src="{{ asset('images/Dantakali.jpeg') }}" alt=""> 
                </div>
            </div>

            <div class="flex justify-center mt-10">
                <a href=""  >  
                    <button class="bg-green-500 w-32 h-10 text-white font-bold rounded-sm text-center hover:bg-green-600">
                        <span>View More <span><i class="fas fa-long-arrow-alt-right text-xl animate-pulse"></i></span></span>
                    </button>
                </a> 
            </div>
            
            

        </div>
    </div>

  

    {{-- gallery --}}
    <div class="py-32">
        <h1 class=" text-red-800 text-5xl text-center">Our Gallery</h1>
        <div class="owl-carousel owl-theme pt-20">
            <div class="item">
                <img src="{{ asset('images/carousel1.jpg')}}" alt="">
            </div>
            <div class="item">
                <img src="{{ asset('images/carousel2.jpg') }}" alt="">
            </div>
            <div class="item">
                <img src="{{ asset('images/carousel3.jpg') }}" alt="">
            </div>
            <div class="item">
                <img src="{{ asset('images/carousel4.jpg') }}" alt="">
            </div>
            <div class="item">
                <img src="{{ asset('images/carousel5.jpg') }}" alt="">
            </div>
            <div class="item">
                <img src="{{ asset('images/carousel6.jpg') }}" alt="">
            </div>
            <div class="item">
                <img src="{{ asset('images/carousel7.jpg') }}" alt="">
            </div>
            <div class="item">
                <img src="{{ asset('images/carousel8.jpg') }}" alt="">
            </div>
            <div class="item">
                <img src="{{ asset('images/bgimg1.jpg') }}" alt="">
            </div>
            <div class="item">
                <img src="{{ asset('images/bgimg2.jpg') }}" alt=""></div>
            <div class="item">
                <img src="{{ asset('images/bgimg3.jpg') }}" alt=""></div>
            <div class="item">
                <img src="{{ asset('images/carousel5.jpg') }}" alt=""></div>
            </div>
        </div>        
    </div>

    {{-- footer --}}
    <div>

    </div>
@endsection

