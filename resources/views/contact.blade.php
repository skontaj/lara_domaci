<x-guest-layout>
    <h1 class="text-2xl font-bold mb-4">Kontaktirajte nas</h1>
    <p class="mb-4">Imate pitanja ili želite da nas kontaktirate? Popunite formu ispod ili nam pišite putem emaila.</p>

    <form action="#" method="POST" class="max-w-md bg-white p-6 rounded shadow">
        @csrf
        <div class="mb-4">
            <label for="name" class="block mb-1 font-semibold">Ime i prezime</label>
            <input type="text" id="name" name="name" class="w-full border rounded px-3 py-2" required>
        </div>
        <div class="mb-4">
            <label for="email" class="block mb-1 font-semibold">Email adresa</label>
            <input type="email" id="email" name="email" class="w-full border rounded px-3 py-2" required>
        </div>
        <div class="mb-4">
            <label for="message" class="block mb-1 font-semibold">Poruka</label>
            <textarea id="message" name="message" rows="4" class="w-full border rounded px-3 py-2" required></textarea>
        </div>
        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Pošalji</button>
    </form>

    <div class="mt-8">
        <h2 class="text-xl font-semibold mb-2">Naši kontakt podaci</h2>
        <p><strong>Email:</strong> info@prodavnica.com</p>
        <p><strong>Telefon:</strong> +381 11 1234567</p>
        <p><strong>Adresa:</strong> Ulica Primer 1, 11000 Beograd</p>
    </div>
</x-guest-layout>