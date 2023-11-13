<x-app-layout>
    <section class="w-full h-full">
        <div class="h-[30rem] w-full flex justify-around items-center">
                <div class="header">
                    <h1 class="font-extrabold text-5xl">Watches.</h1>
                    <a href="/" class="text-[#BABABA]">Read about the materials</a>
                </div>
            <div class="inline-block md:hidden hover:cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 3c2.755 0 5.455.232 8.083.678.533.09.917.556.917 1.096v1.044a2.25 2.25 0 01-.659 1.591l-5.432 5.432a2.25 2.25 0 00-.659 1.591v2.927a2.25 2.25 0 01-1.244 2.013L9.75 21v-6.568a2.25 2.25 0 00-.659-1.591L3.659 7.409A2.25 2.25 0 013 5.818V4.774c0-.54.384-1.006.917-1.096A48.32 48.32 0 0112 3z" />
                </svg>
            </div>
            <div class="hidden justify-between w-[30%] md:flex">
                <h1>Filter:</h1>
                <div class="flex flex-col">
                    <h1>Strap colours</h1>
                    <p class="text-[#BABABA]">—</p>
                    <p class="text-[#BABABA] link link-underline link-underline-black w-fit">Black</p>
                    <p class="text-[#BABABA] link link-underline link-underline-black w-fit">Brown</p>
                    <p class="text-[#BABABA] link link-underline link-underline-black w-fit">Dark grey</p>
                    <p class="text-[#BABABA] link link-underline link-underline-black w-fit">Mesh</p>
                    <p class="link link-underline link-underline-black w-fit">Show all</p>
                </div>
                <div class="flex flex-col">
                    <h1>Case finish</h1>
                    <p class="text-[#BABABA]">—</p>
                    <p class="text-[#BABABA] link link-underline link-underline-black w-fit">Silver</p>
                    <p class="text-[#BABABA] link link-underline link-underline-black w-fit">Black</p>
                    <p class="text-[#BABABA] link link-underline link-underline-black w-fit">Dark grey</p>
                    <p class="link link-underline link-underline-black w-fit">Show all</p>
                </div>
            </div>
        </div>
        <div class="h-full w-full  bg-[#e8e8e8] p-10">
            <div class="flex flex-wrap w-[90%] h-[60%] mx-auto justify-around mt-[7%] pb-[10rem] gap-y-8">
                <div
                    class="flex flex-col w-[25rem] h-[90%] rounded-2xl transition-all group justify-center hover:cursor-pointer hover:scale-105 hover:bg-[#e0e0e0]">
                    <img src="{{ asset('images/watches/zq1.png') }}" alt="zq1"
                         class="mt-5 w-[95%] h-[60%] object-scale-down mx-auto">
                    <h1 class="mx-auto mt-10 font-bold text-[#a6a6a6] group-hover:text-[#404040] transition-all">Zanquo
                        ZQ1 Dark Sambur — Lines</h1>
                    <h2 class="mx-auto mt-2 text-[#a6a6a6] group-hover:text-[#404040] transition-all pb-5">$449.00</h2>
                </div>
                <div
                    class="flex flex-col w-[25rem] h-[90%] rounded-2xl transition-all group justify-center hover:cursor-pointer hover:scale-105 hover:bg-[#e0e0e0]">
                    <img src="{{ asset('images/watches/zq2.png') }}" alt="zq1"
                         class="mt-5 w-[95%] h-[60%] object-scale-down">
                    <h1 class="mx-auto mt-10 font-bold text-[#a6a6a6] group-hover:text-[#404040] transition-all">Zanquo
                        ZQ2 Black Eloquent — Lines</h1>
                    <h2 class="mx-auto mt-2 text-[#a6a6a6] group-hover:text-[#404040] transition-all pb-5">$349.00</h2>
                </div>
                <div
                    class="flex flex-col w-[25rem] h-[90%] rounded-2xl transition-all group justify-center hover:cursor-pointer hover:scale-105 hover:bg-[#e0e0e0]">
                    <img src="{{ asset('images/watches/zq3.png') }}" alt="zq1"
                         class="mt-5 w-[95%] h-[60%] object-scale-down mx-auto">
                    <h1 class="mx-auto mt-10 font-bold text-[#a6a6a6] group-hover:text-[#404040] transition-all">Zanquo
                        ZQ3 Classic Tenant — Lines</h1>
                    <h2 class="mx-auto mt-2 text-[#a6a6a6] group-hover:text-[#404040] transition-all pb-5">$499.00</h2>
                </div>
                <div
                    class="flex flex-col w-[25rem] h-[90%] rounded-2xl transition-all group justify-center hover:cursor-pointer hover:scale-105 hover:bg-[#e0e0e0]">
                    <img src="{{ asset('images/watches/zq1.png') }}" alt="zq1"
                         class="mt-5 w-[95%] h-[60%] object-scale-down mx-auto">
                    <h1 class="mx-auto mt-10 font-bold text-[#a6a6a6] group-hover:text-[#404040] transition-all">Zanquo
                        ZQ1 Dark Sambur — Lines</h1>
                    <h2 class="mx-auto mt-2 text-[#a6a6a6] group-hover:text-[#404040] transition-all pb-5">$449.00</h2>
                </div>
                <div
                    class="flex flex-col w-[25rem] h-[90%] rounded-2xl transition-all group justify-center hover:cursor-pointer hover:scale-105 hover:bg-[#e0e0e0]">
                    <img src="{{ asset('images/watches/zq2.png') }}" alt="zq1"
                         class="mt-5 w-[95%] h-[60%] object-scale-down">
                    <h1 class="mx-auto mt-10 font-bold text-[#a6a6a6] group-hover:text-[#404040] transition-all">Zanquo
                        ZQ2 Black Eloquent — Lines</h1>
                    <h2 class="mx-auto mt-2 text-[#a6a6a6] group-hover:text-[#404040] transition-all pb-5">$349.00</h2>
                </div>
                <div
                    class="flex flex-col w-[25rem] h-[90%] rounded-2xl transition-all group justify-center hover:cursor-pointer hover:scale-105 hover:bg-[#e0e0e0]">
                    <img src="{{ asset('images/watches/zq3.png') }}" alt="zq1"
                         class="mt-5 w-[95%] h-[60%] object-scale-down mx-auto">
                    <h1 class="mx-auto mt-10 font-bold text-[#a6a6a6] group-hover:text-[#404040] transition-all">Zanquo
                        ZQ3 Classic Tenant — Lines</h1>
                    <h2 class="mx-auto mt-2 text-[#a6a6a6] group-hover:text-[#404040] transition-all pb-5">$499.00</h2>
                </div>
                <div
                    class="flex flex-col w-[25rem] h-[90%] rounded-2xl transition-all group justify-center hover:cursor-pointer hover:scale-105 hover:bg-[#e0e0e0]">
                    <img src="{{ asset('images/watches/zq1.png') }}" alt="zq1"
                         class="mt-5 w-[95%] h-[60%] object-scale-down mx-auto">
                    <h1 class="mx-auto mt-10 font-bold text-[#a6a6a6] group-hover:text-[#404040] transition-all">Zanquo
                        ZQ1 Dark Sambur — Lines</h1>
                    <h2 class="mx-auto mt-2 text-[#a6a6a6] group-hover:text-[#404040] transition-all pb-5">$449.00</h2>
                </div>
                <div
                    class="flex flex-col w-[25rem] h-[90%] rounded-2xl transition-all group justify-center hover:cursor-pointer hover:scale-105 hover:bg-[#e0e0e0]">
                    <img src="{{ asset('images/watches/zq2.png') }}" alt="zq1"
                         class="mt-5 w-[95%] h-[60%] object-scale-down">
                    <h1 class="mx-auto mt-10 font-bold text-[#a6a6a6] group-hover:text-[#404040] transition-all">Zanquo
                        ZQ2 Black Eloquent — Lines</h1>
                    <h2 class="mx-auto mt-2 text-[#a6a6a6] group-hover:text-[#404040] transition-all pb-5">$349.00</h2>
                </div>
                <div
                    class="flex flex-col w-[25rem] h-[90%] rounded-2xl transition-all group justify-center hover:cursor-pointer hover:scale-105 hover:bg-[#e0e0e0]">
                    <img src="{{ asset('images/watches/zq3.png') }}" alt="zq1"
                         class="mt-5 w-[95%] h-[60%] object-scale-down mx-auto">
                    <h1 class="mx-auto mt-10 font-bold text-[#a6a6a6] group-hover:text-[#404040] transition-all">Zanquo
                        ZQ3 Classic Tenant — Lines</h1>
                    <h2 class="mx-auto mt-2 text-[#a6a6a6] group-hover:text-[#404040] transition-all pb-5">$499.00</h2>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
