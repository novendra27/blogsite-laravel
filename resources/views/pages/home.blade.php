<x-layout.layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="grid grid-cols-8 grid-rows-1 gap-4 pb-4 border-b-2 border-gray-200 text-stone-800">
        <div class="col-span-8 md:col-span-6 mt-4">
            <x-home.post></x-home.post>
        </div>
        <div class="md:col-span-2 md:block hidden col-start-7 pl-4 my-4 border-l-2 border-gray-200">
            <x-home.sidebar></x-home.sidebar>
        </div>
    </div>
</x-layout.layout>
