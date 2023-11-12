<section class="w-full h-full bg-[#141414]">
    <div class="w-[95%] h-[20rem] grid grid-cols-3">
        <div id="return" class="row-span-3 flex flex-col justify-center items-center hover:cursor-pointer">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                 stroke="white" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 6.75L12 3m0 0l3.75 3.75M12 3v18"/>
            </svg>
            <p class="[writing-mode:sideways-lr] text-white p-5">Return to the top</p>
        </div>
        <div id="sitemap" class="col-start-2 sm:col-start-2 col-span-2 sm:col-span-1 flex flex-col gap-0.5 flex-wrap mt-auto">
            <h1 class="text-white font-bold mb-5">Sitemap —</h1>
            <a href="/" class="text-[#808080] font-bold hover:text-[#d9d9d9] transition-colors w-fit">Start page</a>
            <a href="{{ route('watches') }}" class="text-[#808080] font-bold hover:text-[#d9d9d9] transition-colors w-fit">Shop
                watches</a>
            <a href="{{ route('straps') }}" class="text-[#808080] font-bold hover:text-[#d9d9d9] transition-colors w-fit">Shop
                straps</a>
            <a href="#" class="text-[#808080] font-bold hover:text-[#d9d9d9] transition-colors w-fit">Materials</a>
        </div>
        <div id="payments" class="col-start-2 sm:col-start-2 col-span-2 sm:col-span-1 row-start-3 flex items-center gap-1.5 mb-5">
            <a href="https://www.mastercard.com/europe/en/home.html" class="w-[3rem] h-[2rem]" target="_blank">
                <img src="{{ asset('images/cards/mastercard-payment.jpg') }}" alt="mastercard"
                     class="w-[3rem] h-[2rem] rounded-sm object-cover">
            </a>
            <a href="https://www.americanexpress.com/us/" class="w-[3rem] h-[2rem]" target="_blank">
                <img src="{{ asset('images/cards/amex-payment.jpg') }}" alt="amex"
                     class="w-[3rem] h-[2rem] rounded-sm object-fit">
            </a>
            <a href="https://www.americanexpress.com/us/" class="w-[3rem] h-[2rem]" target="_blank">
                <img src="{{ asset('images/cards/visa-payment.png') }}" alt="visa"
                     class="w-[3rem] h-[2rem] rounded-sm object-fit">
            </a>
        </div>
        <div id="information" class="hidden col-start-3 row-start-1 sm:flex sm:flex-col gap-0.5 sm:flex-wrap mt-auto">
            <h1 class="text-white font-bold mb-5">Information —</h1>
            <a href="/" class="text-[#808080] font-bold hover:text-[#d9d9d9] transition-colors w-fit">Terms & conditions</a>
            <a href="/" class="text-[#808080] font-bold hover:text-[#d9d9d9] transition-colors w-fit">Shipping information</a>
            <a href="/" class="text-[#808080] font-bold hover:text-[#d9d9d9] transition-colors w-fit">Contact & support</a>
            <a href="/" class="text-[#808080] font-bold hover:text-[#d9d9d9] transition-colors w-fit"><span class="font-bold text-white">Sign up</span> — Newsletter</a>
        </div>
        <div id="media" class="hidden sm:flex col-start-3 row-start-3 mb-5 sm:flex-col">
            <a href="/" class="text-[#808080] font-bold hover:text-[#d9d9d9] transition-colors w-fit">Follow us on <span class="font-bold text-white">Instagram</span></a>
            <a href="/" class="text-[#808080] font-bold hover:text-[#d9d9d9] transition-colors w-fit">Follow us on <span class="font-bold text-white">Facebook</span></a>
            <a href="/" class="text-[#808080] font-bold hover:text-[#d9d9d9] transition-colors w-fit">Follow us on <span class="font-bold text-white">Twitter</span></a>
        </div>
    </div>
</section>
