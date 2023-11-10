<x-app-layout>
    <section class="grid w-full h-screen grid-cols-12 grid-rows-12" id="hero">
        <div class="col-start-2 row-start-3 lg:row-start-5 z-10 col-span-full">
            <h1 class="font-extrabold text-5xl lg:text-9xl" data-aos="fade-right">Numbers.</h1>
            <p class="text-3xl lg:text-5xl pt-5 w-[90%]" data-aos="fade-up">— The watch that shows it all.</p>
        </div>
        <img class="col-start-1 lg:col-start-5 col-span-12 lg:col-span-8 object-cover object-center lg:object-left row-start-6 lg:row-start-1 row-span-7 lg:row-span-12 w-full h-full" src="{{ asset($image) }}" alt="header">
        <div class="row-start-11 col-start-1 col-span-12 mx-auto md:mx-0 md:col-start-11 md:w-[8rem] w-[90%] flex justify-end md:justify-between items-center hover:scale-110 transition-all hover:cursor-pointer" onclick="window.location.href='/watches'">
            <p class="hidden md:flex">Shop now</p>
            <div class="bg-white w-[3rem] flex items-center justify-center h-[3rem] rounded-full hover:bg-gray-100 transition-all">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                </svg>
            </div>
        </div>
    </section>
    <section id="featured" class="w-full h-full bg-[#eaeaea]">
        <h1 class="font-bold text-5xl pt-[8rem] flex justify-center items-center">Featured Watches</h1>
        <div class="flex flex-wrap w-[90%] h-[60%] mx-auto justify-around mt-[7%] pb-[10rem] gap-y-8">
            <div class="flex flex-col w-[25rem] h-[90%] rounded-2xl transition-all group justify-center hover:cursor-pointer hover:scale-105 hover:bg-[#e0e0e0]">
                <img src="{{ asset('images/watches/zq1.png') }}" alt="zq1" class="mt-5 w-[95%] h-[60%] object-scale-down mx-auto">
                <h1 class="mx-auto mt-10 font-bold text-[#BABABA] group-hover:text-[#404040] transition-all">Zanquo ZQ1 Dark Sambur — Lines</h1>
                <h2 class="mx-auto mt-2 text-[#BABABA] group-hover:text-[#404040] transition-all pb-5">$449.00</h2>
            </div>
            <div class="flex flex-col w-[25rem] h-[90%] rounded-2xl transition-all group justify-center hover:cursor-pointer hover:scale-105 hover:bg-[#e0e0e0]">
                <img src="{{ asset('images/watches/zq2.png') }}" alt="zq1" class="mt-5 w-[95%] h-[60%] object-scale-down">
                <h1 class="mx-auto mt-10 font-bold text-[#BABABA] group-hover:text-[#404040] transition-all">Zanquo ZQ2 Black Eloquent — Lines</h1>
                <h2 class="mx-auto mt-2 text-[#BABABA] group-hover:text-[#404040] transition-all pb-5">$349.00</h2>
            </div>
            <div class="flex flex-col w-[25rem] h-[90%] rounded-2xl transition-all group justify-center hover:cursor-pointer hover:scale-105 hover:bg-[#e0e0e0]">
                <img src="{{ asset('images/watches/zq3.png') }}" alt="zq1" class="mt-5 w-[95%] h-[60%] object-scale-down mx-auto">
                <h1 class="mx-auto mt-10 font-bold text-[#BABABA] group-hover:text-[#404040] transition-all">Zanquo ZQ3 Classic Tenant — Lines</h1>
                <h2 class="mx-auto mt-2 text-[#BABABA] group-hover:text-[#404040] transition-all pb-5">$499.00</h2>
            </div>
        </div>
    </section>
{{--    <section id="featured" class="grid w-full h-screen grid-cols-7 grid-rows-6 bg-[#eaeaea]">--}}
{{--        <h1 class="font-bold text-5xl col-start-3 col-span-3 flex justify-center items-center">Featured Watches</h1>--}}
{{--        <div class="row-start-2 col-start-2 col-span-5 row-span-3 flex justify-around">--}}
{{--            <div class="flex flex-col w-[25%] rounded-2xl hover:scale-105 transition-all">--}}
{{--                <img src="{{ asset('images/watches/zq1.png') }}" alt="zq1" class="mt-5 w-[95%] h-[60%] object-scale-down mx-auto">--}}
{{--                <h1 class="mx-auto mt-10 font-bold text-[#BABABA]">Zanquo ZQ1 Dark Sambur — Lines</h1>--}}
{{--                <h2 class="mx-auto mt-2 text-[#BABABA]">$449.00</h2>--}}
{{--            </div>--}}
{{--            <div class="flex flex-col w-[25%] rounded-2xl hover:scale-105 transition-all">--}}
{{--                <img src="{{ asset('images/watches/zq2.png') }}" alt="zq1" class="mt-5 w-[95%] h-[60%] object-scale-down">--}}
{{--                <h1 class="mx-auto mt-10 font-bold text-[#BABABA]">Zanquo ZQ2 Black Eloquent — Lines</h1>--}}
{{--                <h2 class="mx-auto mt-2 text-[#BABABA]">$349.00</h2>--}}
{{--            </div>--}}
{{--            <div class="flex flex-col w-[25%] rounded-2xl hover:scale-105 transition-all">--}}
{{--                <img src="{{ asset('images/watches/zq3.png') }}" alt="zq1" class="mt-5 w-[95%] h-[60%] object-scale-down mx-auto">--}}
{{--                <h1 class="mx-auto mt-10 font-bold text-[#BABABA]">Zanquo ZQ3 Classic Tenant — Lines</h1>--}}
{{--                <h2 class="mx-auto mt-2 text-[#BABABA]">$499.00</h2>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
</x-app-layout>
