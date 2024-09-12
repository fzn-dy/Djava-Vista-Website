<form id="booking-form" action="" method="POST">
    @csrf
    <div class="mb-4">
        <label for="name" class="block text-gray-700">Nama (Wajib)</label>
        <input type="text" id="name" name="name" class="border border-gray-300 p-2 w-full" required>
    </div>
    <div class="mb-4">
        <label for="whatsapp" class="block text-gray-700">No. WhatsApp (Wajib)</label>
        <input type="text" id="whatsapp" name="whatsapp" class="border border-gray-300 p-2 w-full" required>
    </div>
    <div class="mb-4">
        <label for="booking-date" class="block text-gray-700">Tanggal Booking (Wajib)</label>
        <input type="date" id="booking-date" name="booking_date" class="border border-gray-300 p-2 w-full" required>
    </div>
    <div class="mb-4">
        <label for="adults" class="block text-gray-700">Peserta Dewasa</label>
        <input type="number" id="adults" name="adults" class="border border-gray-300 p-2 w-full" min="0">
    </div>
    <div class="mb-4">
        <label for="children" class="block text-gray-700">Peserta Anak-anak</label>
        <input type="number" id="children" name="children" class="border border-gray-300 p-2 w-full" min="0">
    </div>
    <div class="mb-4">
        <label for="pickup-location" class="block text-gray-700">Lokasi Penjemputan</label>
        <select id="pickup-location" name="pickup_location" class="border border-gray-300 p-2 w-full">
            <option value="hotel">Hotel</option>
            <option value="station">Stasiun</option>
            <option value="airport">Bandara</option>
        </select>
    </div>
    <div class="mb-4">
        <label for="notes" class="block text-gray-700">Catatan (Opsional)</label>
        <textarea id="notes" name="notes" class="border border-gray-300 p-2 w-full"></textarea>
    </div>
    <div>
        <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded-lg">Kirim</button>
    </div>
</form>
