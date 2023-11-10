<x-app-layout>
    <section class="grid w-full h-screen grid-cols-12 grid-rows-12" id="hero">
        <div class="col-start-2 row-start-3 lg:row-start-5 z-10 col-span-full">
            <h1 class="font-extrabold text-5xl lg:text-9xl" data-aos="fade-right">Numbers.</h1>
            <p class="text-3xl lg:text-5xl pt-5 w-[90%]" data-aos="fade-up">— The watch that shows it all.</p>
        </div>
        <img class="col-start-1 lg:col-start-5 col-span-12 lg:col-span-8 object-cover object-center lg:object-left row-start-6 lg:row-start-1 row-span-7 lg:row-span-12 w-full h-full" src="{{ asset($image) }}" alt="header">
{{--        <div class="row-start-11 col-start-1 col-span-12 mx-auto md:mx-0 md:col-start-11 md:w-[8rem] w-[90%] flex justify-between items-center hover:scale-110 transition-all hover:cursor-pointer" onclick="window.location.href='/watches'">--}}
{{--            <p>Shop now</p>--}}
{{--            <div class="bg-white w-[3rem] flex items-center justify-center h-[3rem] rounded-full hover:bg-gray-100 transition-all">--}}
{{--                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">--}}
{{--                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />--}}
{{--                </svg>--}}
{{--            </div>--}}
        </div>
    </section>
</x-app-layout>
