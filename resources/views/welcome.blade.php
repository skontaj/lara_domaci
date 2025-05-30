<!-- resources/views/about.blade.php -->
<x-guest-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Home') }}
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

                    <h2 class="text-xl font-semibold mt-4">Kontaktirajte nas</h2>
                    <p class="mb-2">Ako imate bilo kakvih pitanja, slobodno nas kontaktirajte.</p>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>