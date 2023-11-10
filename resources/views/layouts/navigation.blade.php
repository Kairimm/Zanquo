<nav id="nav-main"
     class="fixed top-0 left-0 flex h-[5rem] w-full lg:px-16 md:px-8 px-4 justify-between nav-bar transition bg-[#f4f4f4] z-10">
    <div class="flex items-center w-[50%] lg:w-[32%] justify-between">
        <div class="h-[30%]">
            <img src="{{ asset('images/logo_png_zanquo.png') }}" alt="Logo" class="h-[100%] cursor-pointer"
                 onclick="window.location.href='/'">
        </div>
        <ul class="hidden sm:flex">
            <li>
                <button
                    class="watches text-[#BABABA] hover:text-[#404040] items-center link link-underline link-underline-black">
                    Watches
                </button>
            </li>
            <p class="px-1 text-[#BABABA]">—</p>
            <li>
                <button
                    class="straps text-[#BABABA] hover:text-[#404040] items-center link link-underline link-underline-black'}}">
                    Straps
                </button>
            </li>
        </ul>

    </div>
    <div class="w-[40%] lg:w-[31%] flex items-center">
        <ul class="flex justify-between w-full items-center">
            <div class="items-center link link-underline link-underline-black hidden md:flex  mr-5">
                <li class="w-max"><a class="w-full" id="all_products"
                                     href="/{{ session('product_type') }}">All {{ session('product_type') }}</a>
                </li>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                     stroke="#BABABA" class="w-6 h-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3"/>
                </svg>
            </div>
            <div class="flex items-center justify-between w-full h-full">
                <li><a href="{{ route('cart') }}"
                       class="hidden md:inline-block link link-underline link-underline-black hover:text-[#404040]">Your
                        cart</a></li>
                <a href="{{ route('cart') }}"><p
                        class="w-[2rem] h-[2rem] border-[1.5px] rounded-full border-black flex items-center justify-center">
                        2</p></a>
                <svg id="burger" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1"
                     stroke="currentColor" class="w-10 h-10 hover:scale-110 transition cursor-pointer">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 12h16.5M12 17.25h8.25"/>
                </svg>
            </div>
        </ul>
    </div>
</nav>
