<section class="w-full flex justify-center bg-color7 py-8">
    <div class="w-full container 2xl:px-36">
        <div class="container mx-auto px-4 py-8">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <!-- Kiri: Gambar, Detail Paket, dan Rencana Perjalanan -->
                <div class="lg:col-span-2 space-y-8">
                    <!-- Gambar Paket Wisata -->
                    <div class="overflow-hidden rounded-lg shadow-lg">
                        <img src="https://via.placeholder.com/900x500" alt="Paket Wisata" class="w-full object-cover h-64">
                    </div>

                    <!-- Detail Paket Wisata -->
                    <div class="space-y-4">
                        <h1 class="text-3xl font-bold text-gray-800">Paket Wisata</h1>
                        <p class="text-gray-600">
                            Nikmati perjalanan wisata ke destinasi terbaik dengan fasilitas lengkap dan pengalaman yang tidak terlupakan.
                        </p>
                    </div>

                    <!-- Rencana Perjalanan menggunakan Tabs -->
                    <div x-data="{ tab: 'hari1' }" class="space-y-4">
                        <ul class="flex justify-start space-x-4 border-b-2 pb-2">
                            <!-- Tabs Navigation -->
                            <li><a @click.prevent="tab = 'hari1'" href="#" class="py-2 px-4 text-gray-600 hover:text-gray-800" :class="{ 'border-b-2 border-blue-500 text-blue-500': tab === 'hari1' }">Hari 1</a></li>
                            <li><a @click.prevent="tab = 'hari2'" href="#" class="py-2 px-4 text-gray-600 hover:text-gray-800" :class="{ 'border-b-2 border-blue-500 text-blue-500': tab === 'hari2' }">Hari 2</a></li>
                            <li><a @click.prevent="tab = 'hari3'" href="#" class="py-2 px-4 text-gray-600 hover:text-gray-800" :class="{ 'border-b-2 border-blue-500 text-blue-500': tab === 'hari3' }">Hari 3</a></li>
                            <li><a @click.prevent="tab = 'hari4'" href="#" class="py-2 px-4 text-gray-600 hover:text-gray-800" :class="{ 'border-b-2 border-blue-500 text-blue-500': tab === 'hari4' }">Hari 4</a></li>
                            <li><a @click.prevent="tab = 'hari5'" href="#" class="py-2 px-4 text-gray-600 hover:text-gray-800" :class="{ 'border-b-2 border-blue-500 text-blue-500': tab === 'hari5' }">Hari 5</a></li>
                        </ul>

                        <!-- Tabs Content -->
                        <div class="p-4 bg-white border rounded-lg shadow-lg">
                            <template x-if="tab === 'hari1'">
                                <div>
                                    <h2 class="text-xl font-bold">Rencana Hari 1</h2>
                                    <p class="text-gray-600 mt-2">Hari pertama dimulai dengan penjemputan di bandara dan kunjungan ke beberapa tempat wisata terkenal.</p>
                                </div>
                            </template>

                            <template x-if="tab === 'hari2'">
                                <div>
                                    <h2 class="text-xl font-bold">Rencana Hari 2</h2>
                                    <p class="text-gray-600 mt-2">Hari kedua, Anda akan berkeliling ke tempat-tempat bersejarah dan menikmati pemandangan alam yang indah.</p>
                                </div>
                            </template>

                            <template x-if="tab === 'hari3'">
                                <div>
                                    <h2 class="text-xl font-bold">Rencana Hari 3</h2>
                                    <p class="text-gray-600 mt-2">Di hari ketiga, Anda akan mengunjungi tempat wisata budaya dan mencicipi kuliner lokal.</p>
                                </div>
                            </template>

                            <template x-if="tab === 'hari4'">
                                <div>
                                    <h2 class="text-xl font-bold">Rencana Hari 4</h2>
                                    <p class="text-gray-600 mt-2">Hari keempat penuh dengan aktivitas outdoor dan perjalanan menyusuri tempat-tempat unik.</p>
                                </div>
                            </template>

                            <template x-if="tab === 'hari5'">
                                <div>
                                    <h2 class="text-xl font-bold">Rencana Hari 5</h2>
                                    <p class="text-gray-600 mt-2">Di hari terakhir, Anda akan bersantai sebelum kembali diantar ke bandara untuk penerbangan pulang.</p>
                                </div>
                            </template>
                        </div>
                    </div>

                    <!-- Pilihan Paket Wisata Lain -->
                    <section class="space-y-4 mt-8">
                        <h2 class="text-2xl font-bold text-gray-800">Pilihan Paket Wisata Lain</h2>
                        <div class="relative">
                            <!-- Cardbox Container -->
                            <div id="cardbox-container" class="flex overflow-x-auto space-x-4 py-4 scroll-smooth snap-x snap-mandatory">
                                <!-- Cardbox 1 -->
                                <div class="min-w-[300px] flex-shrink-0 bg-white border rounded-lg shadow-lg p-4 cursor-pointer hover:bg-gray-100 transition duration-300 snap-start" onclick="location.href='link-ke-halaman-1.html'">
                                    <img src="https://via.placeholder.com/300x200" alt="Paket Wisata 1" class="w-full h-40 object-cover rounded-lg">
                                    <h3 class="text-lg font-semibold mt-4">Paket Wisata 1</h3>
                                    <p class="text-gray-600 mt-2">Deskripsi singkat tentang paket wisata ini.</p>
                                </div>
                                <!-- Cardbox 2 -->
                                <div class="min-w-[300px] flex-shrink-0 bg-white border rounded-lg shadow-lg p-4 cursor-pointer hover:bg-gray-100 transition duration-300 snap-start" onclick="location.href='link-ke-halaman-2.html'">
                                    <img src="https://via.placeholder.com/300x200" alt="Paket Wisata 2" class="w-full h-40 object-cover rounded-lg">
                                    <h3 class="text-lg font-semibold mt-4">Paket Wisata 2</h3>
                                    <p class="text-gray-600 mt-2">Deskripsi singkat tentang paket wisata ini.</p>
                                </div>
                                <!-- Cardbox 3 -->
                                <div class="min-w-[300px] flex-shrink-0 bg-white border rounded-lg shadow-lg p-4 cursor-pointer hover:bg-gray-100 transition duration-300 snap-start" onclick="location.href='link-ke-halaman-3.html'">
                                    <img src="https://via.placeholder.com/300x200" alt="Paket Wisata 3" class="w-full h-40 object-cover rounded-lg">
                                    <h3 class="text-lg font-semibold mt-4">Paket Wisata 3</h3>
                                    <p class="text-gray-600 mt-2">Deskripsi singkat tentang paket wisata ini.</p>
                                </div>
                                <!-- Cardbox 4 -->
                                <div class="min-w-[300px] flex-shrink-0 bg-white border rounded-lg shadow-lg p-4 cursor-pointer hover:bg-gray-100 transition duration-300 snap-start" onclick="location.href='link-ke-halaman-4.html'">
                                    <img src="https://via.placeholder.com/300x200" alt="Paket Wisata 4" class="w-full h-40 object-cover rounded-lg">
                                    <h3 class="text-lg font-semibold mt-4">Paket Wisata 4</h3>
                                    <p class="text-gray-600 mt-2">Deskripsi singkat tentang paket wisata ini.</p>
                                </div>
                                <!-- Cardbox 5 -->
                                <div class="min-w-[300px] flex-shrink-0 bg-white border rounded-lg shadow-lg p-4 cursor-pointer hover:bg-gray-100 transition duration-300 snap-start" onclick="location.href='link-ke-halaman-5.html'">
                                    <img src="https://via.placeholder.com/300x200" alt="Paket Wisata 5" class="w-full h-40 object-cover rounded-lg">
                                    <h3 class="text-lg font-semibold mt-4">Paket Wisata 5</h3>
                                    <p class="text-gray-600 mt-2">Deskripsi singkat tentang paket wisata ini.</p>
                                </div>
                            </div>
                            <!-- Scroll Buttons -->
                            <button id="scroll-left" class="absolute top-1/2 -translate-y-1/2 left-0 transform -translate-x-1/2 bg-gray-700 text-white p-2 rounded-full hover:bg-gray-800 focus:outline-none">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                            </button>
                            <button id="scroll-right" class="absolute top-1/2 -translate-y-1/2 right-0 transform translate-x-1/2 bg-gray-700 text-white p-2 rounded-full hover:bg-gray-800 focus:outline-none">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                            </button>
                        </div>
                        <div class="flex justify-center mt-4 space-x-4">
                            <a href="#" class="bg-color3 text-white py-2 px-4 rounded-lg font-semibold hover:bg-blue-600">Lihat Semua Paket Wisata</a>
                            <a href="#" class="bg-color3 text-white py-2 px-4 rounded-lg font-semibold hover:bg-blue-600">Chat via WhatsApp</a>
                        </div>
                    </section>
                    
                    <!-- Include JavaScript at the end of the file -->
                    <script src="js/app.js"></script>
                                        
                </div>


                <!-- Kanan: Form Booking -->
                <div class="lg:sticky top-0 space-y-4 bg-white p-4 border rounded-lg shadow-lg">
                    <!-- Form Booking -->
                    <form id="bookingForm" class="space-y-4">
                        <!-- Nama -->
                        <div>
                            <label for="nama" class="block text-gray-600">Nama:</label>
                            <input type="text" id="nama" class="w-full border rounded-lg px-3 py-2" required>
                        </div>

                        <!-- Nomor WhatsApp -->
                        <div>
                            <label for="nomorWhatsApp" class="block text-gray-600">Nomor WhatsApp:</label>
                            <input type="tel" id="nomorWhatsApp" class="w-full border rounded-lg px-3 py-2" required>
                        </div>

                        <!-- Tanggal Keberangkatan -->
                        <div>
                            <label for="tanggalKeberangkatan" class="block text-gray-600">Tanggal Keberangkatan:</label>
                            <input type="date" id="tanggalKeberangkatan" class="w-full border rounded-lg px-3 py-2" required>
                        </div>

                        <!-- Jumlah Peserta -->
                        <div>
                            <label for="jumlahPeserta" class="block text-gray-600">Jumlah Peserta:</label>
                            <div class="flex space-x-4">
                                <div class="flex-1">
                                    <label for="dewasa" class="block text-gray-600">Dewasa:</label>
                                    <input type="number" id="dewasa" class="w-full border rounded-lg px-3 py-2" min="0" required>
                                </div>
                                <div class="flex-1">
                                    <label for="anak" class="block text-gray-600">Anak-anak:</label>
                                    <input type="number" id="anak" class="w-full border rounded-lg px-3 py-2" min="0" required>
                                </div>
                            </div>
                        </div>

                        <!-- Lokasi Penjemputan -->
                        <div>
                            <label for="lokasiPenjemputan" class="block text-gray-600">Lokasi Penjemputan:</label>
                            <select id="lokasiPenjemputan" class="w-full border rounded-lg px-3 py-2" required>
                                <option value="hotel">Hotel</option>
                                <option value="bandara">Bandara</option>
                                <option value="stasiun">Stasiun</option>
                            </select>
                        </div>

                        <!-- Durasi -->
                        <div class="flex justify-between items-center">
                            <span class="text-gray-600">Durasi:</span>
                            <select id="durasi" class="font-semibold text-gray-800 border rounded-lg px-2 py-1" onchange="updateTotal()" required>
                                <option value="1">1 Hari</option>
                                <option value="2">2 Hari</option>
                                <option value="3">3 Hari</option>
                                <option value="4">4 Hari</option>
                                <option value="5" selected>5 Hari</option>
                            </select>
                        </div>

                        <!-- Harga per Hari -->
                        <div class="flex justify-between">
                            <span class="text-gray-600">Harga per Hari:</span>
                            <span class="font-semibold text-gray-800" id="hargaPerHari">Rp 1.000.000</span>
                        </div>

                        <!-- Harga Total -->
                        <div class="flex justify-between">
                            <span class="text-gray-600">Harga Total:</span>
                            <span class="font-semibold text-gray-800" id="hargaTotal">Rp 5.000.000</span>
                        </div>

                        <!-- Catatan -->
                        <div>
                            <label for="catatan" class="block text-gray-600">Catatan (Opsional):</label>
                            <textarea id="catatan" class="w-full border rounded-lg px-3 py-2" rows="4"></textarea>
                        </div>

                        <!-- Button Booking -->
                        <div>
                            <button type="submit" id="bookingButton" class="bg-color3 text-white w-full py-2 rounded-lg font-semibold hover:bg-blue-600" disabled>
                                Booking Sekarang
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
