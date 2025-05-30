<!-- resources/views/about.blade.php -->
<x-guest-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Shop') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <p class="mb-2">Dobrodošli na našu stranicu! Ovdje možete saznati više o našoj kompaniji.</p>

                    <h2 class="text-xl font-semibold mt-4">Naša misija</h2>
                    <p class="mb-2">Naša misija je pružiti najbolje proizvode i usluge našim kupcima.</p>

                    <h2 class="text-xl font-semibold mt-4">Naš tim</h2>
                    <p class="mb-2">Imamo tim stručnjaka koji su posvećeni kvaliteti i zadovoljstvu kupaca.</p>

                    <!-- Dodato: Sadržaj iz shop.blade.php -->
                    <h1 class="text-2xl font-bold mb-4 mt-8">Naša prodavnica</h1>
                    <p class="mb-2">Dobrodošli u našu prodavnicu! Ovdje možete pronaći razne proizvode.</p>

                    <h2 class="text-xl font-semibold mt-4">Proizvodi</h2>
                    <ul class="list-disc pl-5">
                        <li>Proizvod 1 - Opis proizvoda 1</li>
                        <li>Proizvod 2 - Opis proizvoda 2</li>
                        <li>Proizvod 3 - Opis proizvoda 3</li>
                    </ul>
                    <!-- Kraj dodatka -->

                    <h2 class="text-xl font-semibold mt-4">Kontaktirajte nas</h2>
                    <p class="mb-2">Ako imate bilo kakvih pitanja, slobodno nas kontaktirajte.</p>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
