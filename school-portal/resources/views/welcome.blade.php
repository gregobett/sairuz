

@extends('layouts.navbarfooter')
@section('LandingContent')

<div class="flex flex-col items-center justify-center overflow-hidden">

{{-- <div class="h-full w-full bg-no-repeat bg-cover bg-center object-contain flex flex-col justify-center items-center "  --}}
<div class="font-sans antialiased  h-screen w-full bg-no-repeat bg-cover bg-center" x-data="mainState" :class="{dark: isDarkMode}" x-cloak style="background-image: url({{ url('images/background.webp') }})">
      
        {{-- <div class="flex flex-col justify-center items-center w-10/12 md:w-6/12 mt-10 h-full mx-auto"> --}}
            {{-- <img src="/images/logo.png" alt="main logo" class="max-w-xs my-4"> --}}

        {{-- </div> --}}
</div>


<section class="dark:bg-[#151823] py-4">
    <div class="flex flex-col items-center text-center">
        <h2 class="inline-block text-lg md:text-2xl px-4 text-sky-50 bg-[#004AAD] bg-opacity-90 dark:bg-[#222738] dark:text-sky-500 py-1 mb-2 rounded-md font-light">
            Philosophy
        </h2>
        <p class="dark:text-[#FFFFFF] text-md w-10/12 md:w-6/12">
            To provide sustainable development of the human potentials in its pursuit for quality education in the K-12 program for democracy, peace, excellence, truth and justice in all its endeavors toward the needs of society of the twenty-first century
        </p>
    </div>
</section>

<section class="dark:bg-[#151823] py-4">
    <div class="flex flex-col items-center text-center">
        <h2 class="inline-block text-lg md:text-2xl px-4 text-sky-50 bg-[#004AAD] bg-opacity-90 dark:bg-[#222738] dark:text-sky-500 py-1 mb-2 rounded-md font-light">
            Mission
        </h2>
        <p class="dark:text-[#FFFFFF] text-md w-10/12 md:w-6/12">
            Inspired with the strength of its vision and its educational philosophy of the K-12 program, the school addressed itself to provide educational opportunities to every Filipino, develop among its administrations, faculty, support personnel and the studentry its moral and spiritual values, self-discipline, especially the performance task of the K-12 program, cares for the environment and demonstrates pride in being a Filipino. 
        </p>
    </div>
</section>


<section class="dark:bg-[#151823] py-4">
    <div class="flex flex-col items-center text-center">
        <h2 class="inline-block text-lg md:text-2xl px-4 text-sky-50 bg-[#004AAD] bg-opacity-90 dark:bg-[#222738] dark:text-sky-500 py-1 mb-2 rounded-md font-light">
            Vision
        </h2>
        <p class="dark:text-[#FFFFFF] text-md w-10/12 md:w-6/12">
            The Sanctuario of St. Maria Theresa School, Inc. envisions to uphold the K-12 program in order to produce highly competitive graduates with developed character traits, competence in information and communication technology and research who will be in the forefront to render services in both private and public offices.

        </p>
    </div>
</section>


<section class="dark:bg-[#151823] py-4">
    <div class="flex flex-col items-center text-center">
        <h2 class="inline-block text-lg md:text-2xl px-4 text-sky-50 bg-[#004AAD] bg-opacity-90 dark:bg-[#222738] dark:text-sky-500 py-1 mb-2 rounded-md font-light">
            Goals
        </h2>
        <p class="dark:text-[#FFFFFF] text-md w-10/12 md:w-6/12">
            The Sanctuario of St. Maria Theresa School, Inc. envisions to uphold the K-12 program in order to produce highly competitive graduates with developed character traits, competence in information and communication technology and research who will be in the forefront to render services in both private and public offices.


        </p>
    </div>
</section>


{{-- Features of the website --}}

{{-- Carousel --}}

<section class="w-full pl-4 pr-4  bg-[#012560] dark:bg-[#222738] border-y-2 dark:border-gray-500 py-5 bg-opacity-90">
 
    
    <div class="w-full flex items-center justify-center"   x-data="{ activeSlide: 1, slides: [1, 2, 3, 4, 5] }"
          
            x-if="{activeSlide = activeSlide === slides.length ? 1 : activeSlide + 1}"
            class="px-10">
        <div class="relative ">
            <!-- Slides -->
            <div x-show="activeSlide === 1"
            x-transition:enter.duration.300ms>
            <!-- Slide -->
                <img src='/images/pic1.webp' class="relative block w-full h-96 object-cover rounded-md" alt="carousel_img">
            </div>

            <div x-show="activeSlide === 2"
            x-transition:enter.duration.300ms>
            <!-- Slide -->
                <img src='/images/pic5.webp' class="relative block w-full h-96 object-cover rounded-md" alt="carousel_img">
            </div>
            
            <div x-show="activeSlide === 3"
            x-transition:enter.duration.300ms>
            <!-- Slide -->
                <img src='/images/pic2.webp' class="relative block w-full h-96 object-cover rounded-md" alt="carousel_img">
            </div>

            <div x-show="activeSlide === 4"
            x-transition:enter.duration.300ms>
            <!-- Slide -->
                <img src='/images/pic3.webp' class="relative block w-full h-96 object-cover rounded-md" alt="carousel_img">
            </div>

            <div x-show="activeSlide === 5"
            x-transition:enter.duration.300ms>
            <!-- Slide -->
                <img src='/images/pic4.webp' class="relative block w-full h-96 object-cover rounded-md" alt="carousel_img">
            </div>

            <!-- Prev/Next arrow buttons -->
            <div class="absolute top-2/4 h-full w-full ">
                <div class="flex justify-between">
                    <button class="text-[#012560] bg-gray-100 bg-opacity-50 h-12 w-12 bg-color-transparent cursor-pointer" x-on:click="activeSlide = activeSlide === 1 ? slides.length : activeSlide - 1">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6  mx-auto">
                            <path fill-rule="evenodd" d="M7.28 7.72a.75.75 0 010 1.06l-2.47 2.47H21a.75.75 0 010 1.5H4.81l2.47 2.47a.75.75 0 11-1.06 1.06l-3.75-3.75a.75.75 0 010-1.06l3.75-3.75a.75.75 0 011.06 0z" clip-rule="evenodd" />
                        </svg>
                    </button>

                    <button class="text-[#012560] bg-gray-100 bg-opacity-50 h-12 w-12 bg-color-transparent cursor-pointer" x-on:click="activeSlide = activeSlide === slides.length ? 1 : activeSlide + 1"
                    >
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6  mx-auto">
                            <path fill-rule="evenodd" d="M16.72 7.72a.75.75 0 011.06 0l3.75 3.75a.75.75 0 010 1.06l-3.75 3.75a.75.75 0 11-1.06-1.06l2.47-2.47H3a.75.75 0 010-1.5h16.19l-2.47-2.47a.75.75 0 010-1.06z" clip-rule="evenodd" />
                        </svg>
                    </button>
                </div>
            </div>


        </div>
        
    </div>
</section>





{{-- One of the main features --}}
{{-- <section class="dark:bg-[#151823] flex flex-col md:flex-row justify-between items-center px-10 md:px-15 lg:px-20 pt-1 pb-4 md:gap-10"> --}}

<section class="dark:bg-[#151823] md:w-full flex flex-col p-5 items-center px-5 md:px-12.5 lg:px-20 ">
    {{-- Picture of the one of the main features --}}
    <div class="col-span-2 md:col-span-1 w-full flex items-center justify-center ">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/hatnUegeXMQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>

   
</section>

 {{-- Short description about it and about button --}}
 <section class=" dark:text-[#FFFFFF] dark:bg-[#151823] text-md  md:w-full ">
    <p class="dark:text-[#FFFFFF] my-2 lg:my-10 xl:mb-7 text-md text-center flex items-center justify-center pl-4 pr-4">Inspired with the strength of its vision and its educational philosophy of the K-12 program, the school addressed itself to provide educational opportunities to every Filipino, develop among its administrations, faculty, support personnel and the studentry its moral and spiritual values, self-discipline, especially the performance task of the K-12 program, cares for the environment and demonstrates pride in being a Filipino. </p>
   
 </section>


</div>

@endsection