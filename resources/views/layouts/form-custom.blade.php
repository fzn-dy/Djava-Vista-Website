<section class="bg-gray-100 p-8">
    <form class="bg-white p-6 rounded-lg shadow-xl max-w-5xl mx-auto grid grid-cols-1 md:grid-cols-4 gap-6">
        <!-- 1. Kemana anda ingin berlibur? -->
        <div class="form-group">
            <label for="destination" class="block text-gray-700 font-semibold mb-1">Kemana anda ingin berlibur?</label>
            <select id="destination" name="destination" class="border border-gray-300 p-3 w-full rounded-md shadow-sm focus:ring-2 focus:ring-color1 transition duration-300 ease-in-out">
                <option value="bali">Bali</option>
                <option value="yogyakarta">Yogyakarta</option>
                <option value="lombok">Lombok</option>
            </select>
        </div>

        <!-- 2. Berapa lama ingin berlibur? -->
        <div class="form-group">
            <label for="duration" class="block text-gray-700 font-semibold mb-1">Berapa lama ingin berlibur?</label>
            <select id="duration" name="duration" class="border border-gray-300 p-3 w-full rounded-md shadow-sm focus:ring-2 focus:ring-color1 transition duration-300 ease-in-out">
                <option value="3-hari">3 Hari</option>
                <option value="5-hari">5 Hari</option>
                <option value="7-hari">7 Hari</option>
            </select>
        </div>

        <!-- 3. Kapan anda ingin berlibur? -->
        <div class="form-group">
            <label for="travel-date" class="block text-gray-700 font-semibold mb-1">Kapan anda ingin berlibur?</label>
            <input type="date" id="travel-date" name="travel_date" class="border border-gray-300 p-3 w-full rounded-md shadow-sm focus:ring-2 focus:ring-color1 transition duration-300 ease-in-out">
        </div>

        <!-- 4. Peserta Dewasa -->
        <div class="form-group">
            <label for="adults" class="block text-gray-700 font-semibold mb-1">Peserta Dewasa</label>
            <input type="number" id="adults" name="adults" class="border border-gray-300 p-3 w-full rounded-md shadow-sm focus:ring-2 focus:ring-color1 transition duration-300 ease-in-out" min="1">
        </div>

        <!-- 5. Peserta Anak -->
        <div class="form-group">
            <label for="children" class="block text-gray-700 font-semibold mb-1">Peserta Anak</label>
            <input type="number" id="children" name="children" class="border border-gray-300 p-3 w-full rounded-md shadow-sm focus:ring-2 focus:ring-color1 transition duration-300 ease-in-out" min="0">
        </div>

        <!-- 6. Kebutuhan tour termasuk akomodasi/hotel? -->
        <div class="form-group">
            <label for="accommodation" class="block text-gray-700 font-semibold mb-1">Kebutuhan tour termasuk akomodasi/hotel?</label>
            <select id="accommodation" name="accommodation" class="border border-gray-300 p-3 w-full rounded-md shadow-sm focus:ring-2 focus:ring-color1 transition duration-300 ease-in-out">
                <option value="yes">Ya</option>
                <option value="no">Tidak</option>
            </select>
        </div>

        <!-- 7. Tipe wisata -->
        <div class="form-group">
            <label for="tour-type" class="block text-gray-700 font-semibold mb-1">Tipe wisata yang anda inginkan?</label>
            <select id="tour-type" name="tour_type" class="border border-gray-300 p-3 w-full rounded-md shadow-sm focus:ring-2 focus:ring-color1 transition duration-300 ease-in-out">
                <option value="adventure">Adventure</option>
                <option value="cultural">Cultural</option>
                <option value="relaxation">Relaxation</option>
            </select>
        </div>

        <!-- 8. Obyek wisata -->
        <div class="form-group">
            <label for="attraction" class="block text-gray-700 font-semibold mb-1">Obyek wisata yang ingin dikunjungi?</label>
            <select id="attraction" name="attraction" class="border border-gray-300 p-3 w-full rounded-md shadow-sm focus:ring-2 focus:ring-color1 transition duration-300 ease-in-out">
                <option value="beach">Pantai</option>
                <option value="mountain">Gunung</option>
                <option value="city">Kota</option>
            </select>
        </div>

        <!-- 9. Catatan Tambahan -->
        <div class="form-group col-span-2">
            <label for="notes" class="block text-gray-700 font-semibold mb-1">Catatan Tambahan (opsional)</label>
            <textarea id="notes" name="notes" class="border border-gray-300 p-3 w-full rounded-md shadow-sm focus:ring-2 focus:ring-color1 transition duration-300 ease-in-out" rows="3"></textarea>
        </div>

        <!-- 10. Sudah punya tiket? -->
        <div class="form-group">
            <label for="ticket" class="block text-gray-700 font-semibold mb-1">Sudah punya tiket?</label>
            <select id="ticket" name="ticket" class="border border-gray-300 p-3 w-full rounded-md shadow-sm focus:ring-2 focus:ring-color1 transition duration-300 ease-in-out">
                <option value="yes">Ya</option>
                <option value="no">Tidak</option>
            </select>
        </div>

        <!-- 11. Estimasi kedatangan -->
        <div class="form-group">
            <label for="arrival" class="block text-gray-700 font-semibold mb-1">Estimasi kedatangan?</label>
            <select id="arrival" name="arrival" class="border border-gray-300 p-3 w-full rounded-md shadow-sm focus:ring-2 focus:ring-color1 transition duration-300 ease-in-out">
                <option value="morning">Pagi</option>
                <option value="afternoon">Siang</option>
                <option value="evening">Malam</option>
            </select>
        </div>

        <!-- 12. Lokasi penjemputan -->
        <div class="form-group">
            <label for="pickup-location" class="block text-gray-700 font-semibold mb-1">Lokasi penjemputan?</label>
            <select id="pickup-location" name="pickup_location" class="border border-gray-300 p-3 w-full rounded-md shadow-sm focus:ring-2 focus:ring-color1 transition duration-300 ease-in-out">
                <option value="airport">Bandara</option>
                <option value="hotel">Hotel</option>
                <option value="station">Stasiun</option>
            </select>
        </div>

        <!-- 13. Nama Lengkap -->
        <div class="form-group">
            <label for="full-name" class="block text-gray-700 font-semibold mb-1">Nama Lengkap</label>
            <input type="text" id="full-name" name="full_name" class="border border-gray-300 p-3 w-full rounded-md shadow-sm focus:ring-2 focus:ring-color1 transition duration-300 ease-in-out" required>
        </div>

        <!-- 14. No. Whatsapp -->
        <div class="form-group">
            <label for="whatsapp" class="block text-gray-700 font-semibold mb-1">No. Whatsapp</label>
            <input type="text" id="whatsapp" name="whatsapp" class="border border-gray-300 p-3 w-full rounded-md shadow-sm focus:ring-2 focus:ring-color1 transition duration-300 ease-in-out" required>
        </div>

        <!-- 15. Alamat Email -->
        <div class="form-group">
            <label for="email" class="block text-gray-700 font-semibold mb-1">Alamat Email</label>
            <input type="email" id="email" name="email" class="border border-gray-300 p-3 w-full rounded-md shadow-sm focus:ring-2 focus:ring-color1 transition duration-300 ease-in-out" required>
        </div>

        <!-- 16. Kota Asal Keberangkatan -->
        <div class="form-group">
            <label for="departure-city" class="block text-gray-700 font-semibold mb-1">Kota Asal Keberangkatan</label>
            <input type="text" id="departure-city" name="departure_city" class="border border-gray-300 p-3 w-full rounded-md shadow-sm focus:ring-2 focus:ring-color1 transition duration-300 ease-in-out" required>
        </div>

        <!-- Button -->
        <div class="form-group col-span-4">
            <button type="submit" class="bg-color1 text-white font-bold px-6 py-3 rounded-lg w-full hover:bg-color3 hover:shadow-xl transition duration-300 ease-in-out">Konsulatasikan Sekarang</button>
        </div>
    </form>
</section>
