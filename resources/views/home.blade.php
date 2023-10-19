<x-app-layout>
    <section class="grid w-full h-screen grid-cols-12 grid-rows-12" id="hero">
        <div class="col-start-2 row-start-3 lg:row-start-5 z-10 col-span-full">
            <h1 class="font-extrabold text-5xl lg:text-9xl">Numbers.</h1>
            <p class="text-3xl lg:text-5xl pt-5 w-[90%]">— The watch that shows it all.</p>
        </div>
        <img class="col-start-1 lg:col-start-5 col-span-12 lg:col-span-8 object-cover object-center lg:object-left row-start-6 lg:row-start-1 row-span-7 lg:row-span-12 w-full h-full" src="{{ asset($image) }}" alt="header">
    </section>
</x-app-layout>
