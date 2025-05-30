<x-guest-layout>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <h1 class="text-3xl font-bold mb-6">Dobrodošli na našu prodavnicu!</h1>
        <p class="mb-4">Ovdje možete pronaći najnovije proizvode i informacije o našoj kompaniji.</p>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="bg-white p-6 rounded-lg shadow">
                <h2 class="text-xl font-semibold mb-2">Proizvod 1</h2>
                <p class="mb-4">Opis proizvoda 1. Ovaj proizvod je odličan za svakodnevnu upotrebu.</p>
                <a href="{{ url('/shop') }}" class="text-blue-600 hover:underline">Pogledajte više</a>
            </div>
            <div class="bg-white p-6 rounded-lg shadow">
                <h2 class="text-xl font-semibold mb-2">Proizvod 2</h2>
                <p class="mb-4">Opis proizvoda 2. Ovaj proizvod nudi vrhunski kvalitet i performanse.</p>
                <a href="{{ url('/shop') }}" class="text-blue-600 hover:underline">Pogledajte više</a>
            </div>
            <div class="bg-white p-6 rounded-lg shadow">
                <h2 class="text-xl font-semibold mb-2">Proizvod 3</h2>
                <p class="mb-4">Opis proizvoda 3. Savršen izbor za poklon ili ličnu upotrebu.</p>
                <a href="{{ url('/shop') }}" class="text-blue-600 hover:underline">Pogledajte više</a>
            </div>
        </div>
    </div>

</x-guest-layout>