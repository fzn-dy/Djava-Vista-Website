{{-- @extends('layouts.app') --}}

<!-- Modal -->
{{-- <div id="booking-modal" class="modal hidden">
  <div class="modal-content bg-white p-6 rounded-lg w-11/12 md:w-1/3 relative">
      <button onclick="closeModal()" class="absolute top-2 right-2 text-gray-600 hover:text-gray-800">×</button>
      @include('layouts.form-outbound.form-outbound') <!-- Include the booking form blade file -->
  </div>
</div>

<section class="w-full flex justify-center bg-color7 py-8">
  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 w-full max-w-6xl px-4"> <!-- Ukuran grid disesuaikan -->
    <!-- Cardbox 1 -->
    <div class="bg-white shadow-md rounded-lg overflow-hidden transform transition-transform hover:scale-105 duration-300"> <!-- Tambah efek hover -->
      <img src="https://via.placeholder.com/400x250" alt="Outbound Training" class="w-full h-56 object-cover"> <!-- Ukuran gambar diperkecil -->
      <div class="p-3"> <!-- Padding diperkecil -->
        <h3 class="text-lg font-bold">Outbound Training</h3> <!-- Ukuran teks judul diperkecil -->
        <p class="text-gray-600 mt-1 font-semibold text-xs">Paket Include:</p> <!-- Ukuran teks diperkecil -->
        <ul class="text-gray-600 list-disc ml-4 text-xs"> <!-- Ukuran teks diperkecil -->
          <li>Profesional Game Master & Crew</li>
          <li>Lunch Box</li>
          <li>Konsep Kegiatan Fun Game</li>
          <li>Ground Kegiatan Fun Game</li>
          <li>Dekorasi Kegiatan Fun Game</li>
          <li>Coffee Break</li>
          <li>Dokumentasi Kegiatan (Softfile)</li>
          <li>Air Mineral</li>
          <li>Sound System Set</li>
          <li>Banner Kegiatan 3x1</li>
          <li>Holy Powder dan Smoke Bomb</li>
          <li>P3K</li>
        </ul>
        <p class="text-gray-600 mt-3 text-xs">
          <strong>Lokasi:</strong> Batu, Jawa Timur
        </p>
        <p class="text-gray-600 text-xs">
          <strong>Durasi:</strong> 1 Hari
        </p>
        <p class="text-gray-600 text-xs">
          <strong>Minimal Peserta:</strong> 40 pax
        </p>
        <div class="mt-4">
          <button onclick="openModal('booking-modal')" class="bg-green-500 text-white px-3 py-1.5 rounded-lg text-sm hover:bg-green-600">Booking</button>
      </div>
      </div>
    </div>

    <!-- Cardbox 2 dan seterusnya -->
    <div class="bg-white shadow-md rounded-lg overflow-hidden transform transition-transform hover:scale-105 duration-300"> <!-- Tambah efek hover -->
      <img src="https://via.placeholder.com/400x250" alt="Outbound Training" class="w-full h-56 object-cover"> <!-- Ukuran gambar diperkecil -->
      <div class="p-3"> <!-- Padding diperkecil -->
        <h3 class="text-lg font-bold">Outbound Training</h3> <!-- Ukuran teks judul diperkecil -->
        <p class="text-gray-600 mt-1 font-semibold text-xs">Paket Include:</p> <!-- Ukuran teks diperkecil -->
        <ul class="text-gray-600 list-disc ml-4 text-xs"> <!-- Ukuran teks diperkecil -->
          <li>Profesional Game Master & Crew</li>
          <li>Lunch Box</li>
          <li>Konsep Kegiatan Fun Game</li>
          <li>Ground Kegiatan Fun Game</li>
          <li>Dekorasi Kegiatan Fun Game</li>
          <li>Coffee Break</li>
          <li>Dokumentasi Kegiatan (Softfile)</li>
          <li>Air Mineral</li>
          <li>Sound System Set</li>
          <li>Banner Kegiatan 3x1</li>
          <li>Holy Powder dan Smoke Bomb</li>
          <li>P3K</li>
        </ul>
        <p class="text-gray-600 mt-3 text-xs">
          <strong>Lokasi:</strong> Batu, Jawa Timur
        </p>
        <p class="text-gray-600 text-xs">
          <strong>Durasi:</strong> 1 Hari
        </p>
        <p class="text-gray-600 text-xs">
          <strong>Minimal Peserta:</strong> 40 pax
        </p>
        <div class="mt-4">
          <button onclick="openModal('form-outbound')"
                  class="bg-green-500 text-white px-3 py-1.5 rounded-lg text-sm hover:bg-green-600">Booking</button>
      </div>
      </div>
    </div>

    <div class="bg-white shadow-md rounded-lg overflow-hidden transform transition-transform hover:scale-105 duration-300"> <!-- Tambah efek hover -->
      <img src="https://via.placeholder.com/400x250" alt="Outbound Training" class="w-full h-56 object-cover"> <!-- Ukuran gambar diperkecil -->
      <div class="p-3"> <!-- Padding diperkecil -->
        <h3 class="text-lg font-bold">Outbound Training</h3> <!-- Ukuran teks judul diperkecil -->
        <p class="text-gray-600 mt-1 font-semibold text-xs">Paket Include:</p> <!-- Ukuran teks diperkecil -->
        <ul class="text-gray-600 list-disc ml-4 text-xs"> <!-- Ukuran teks diperkecil -->
          <li>Profesional Game Master & Crew</li>
          <li>Lunch Box</li>
          <li>Konsep Kegiatan Fun Game</li>
          <li>Ground Kegiatan Fun Game</li>
          <li>Dekorasi Kegiatan Fun Game</li>
          <li>Coffee Break</li>
          <li>Dokumentasi Kegiatan (Softfile)</li>
          <li>Air Mineral</li>
          <li>Sound System Set</li>
          <li>Banner Kegiatan 3x1</li>
          <li>Holy Powder dan Smoke Bomb</li>
          <li>P3K</li>
        </ul>
        <p class="text-gray-600 mt-3 text-xs">
          <strong>Lokasi:</strong> Batu, Jawa Timur
        </p>
        <p class="text-gray-600 text-xs">
          <strong>Durasi:</strong> 1 Hari
        </p>
        <p class="text-gray-600 text-xs">
          <strong>Minimal Peserta:</strong> 40 pax
        </p>
        <div class="mt-4">
          <button onclick="openModal('form-outbound')"
                  class="bg-green-500 text-white px-3 py-1.5 rounded-lg text-sm hover:bg-green-600">Booking</button>
      </div>
      </div>
    </div>

    <div class="bg-white shadow-md rounded-lg overflow-hidden transform transition-transform hover:scale-105 duration-300"> <!-- Tambah efek hover -->
      <img src="https://via.placeholder.com/400x250" alt="Outbound Training" class="w-full h-56 object-cover"> <!-- Ukuran gambar diperkecil -->
      <div class="p-3"> <!-- Padding diperkecil -->
        <h3 class="text-lg font-bold">Outbound Training</h3> <!-- Ukuran teks judul diperkecil -->
        <p class="text-gray-600 mt-1 font-semibold text-xs">Paket Include:</p> <!-- Ukuran teks diperkecil -->
        <ul class="text-gray-600 list-disc ml-4 text-xs"> <!-- Ukuran teks diperkecil -->
          <li>Profesional Game Master & Crew</li>
          <li>Lunch Box</li>
          <li>Konsep Kegiatan Fun Game</li>
          <li>Ground Kegiatan Fun Game</li>
          <li>Dekorasi Kegiatan Fun Game</li>
          <li>Coffee Break</li>
          <li>Dokumentasi Kegiatan (Softfile)</li>
          <li>Air Mineral</li>
          <li>Sound System Set</li>
          <li>Banner Kegiatan 3x1</li>
          <li>Holy Powder dan Smoke Bomb</li>
          <li>P3K</li>
        </ul>
        <p class="text-gray-600 mt-3 text-xs">
          <strong>Lokasi:</strong> Batu, Jawa Timur
        </p>
        <p class="text-gray-600 text-xs">
          <strong>Durasi:</strong> 1 Hari
        </p>
        <p class="text-gray-600 text-xs">
          <strong>Minimal Peserta:</strong> 40 pax
        </p>
        <div class="mt-4">
          <button onclick="openModal('form-outbound')"
                  class="bg-green-500 text-white px-3 py-1.5 rounded-lg text-sm hover:bg-green-600">Booking</button>
      </div>
      </div>
    </div>

    <div class="bg-white shadow-md rounded-lg overflow-hidden transform transition-transform hover:scale-105 duration-300"> <!-- Tambah efek hover -->
      <img src="https://via.placeholder.com/400x250" alt="Outbound Training" class="w-full h-56 object-cover"> <!-- Ukuran gambar diperkecil -->
      <div class="p-3"> <!-- Padding diperkecil -->
        <h3 class="text-lg font-bold">Outbound Training</h3> <!-- Ukuran teks judul diperkecil -->
        <p class="text-gray-600 mt-1 font-semibold text-xs">Paket Include:</p> <!-- Ukuran teks diperkecil -->
        <ul class="text-gray-600 list-disc ml-4 text-xs"> <!-- Ukuran teks diperkecil -->
          <li>Profesional Game Master & Crew</li>
          <li>Lunch Box</li>
          <li>Konsep Kegiatan Fun Game</li>
          <li>Ground Kegiatan Fun Game</li>
          <li>Dekorasi Kegiatan Fun Game</li>
          <li>Coffee Break</li>
          <li>Dokumentasi Kegiatan (Softfile)</li>
          <li>Air Mineral</li>
          <li>Sound System Set</li>
          <li>Banner Kegiatan 3x1</li>
          <li>Holy Powder dan Smoke Bomb</li>
          <li>P3K</li>
        </ul>
        <p class="text-gray-600 mt-3 text-xs">
          <strong>Lokasi:</strong> Batu, Jawa Timur
        </p>
        <p class="text-gray-600 text-xs">
          <strong>Durasi:</strong> 1 Hari
        </p>
        <p class="text-gray-600 text-xs">
          <strong>Minimal Peserta:</strong> 40 pax
        </p>
        <div class="mt-4">
          <button onclick="openModal('form-outbound')"
                  class="bg-green-500 text-white px-3 py-1.5 rounded-lg text-sm hover:bg-green-600">Booking</button>
      </div>
      </div>
    </div>

    <div class="bg-white shadow-md rounded-lg overflow-hidden transform transition-transform hover:scale-105 duration-300"> <!-- Tambah efek hover -->
      <img src="https://via.placeholder.com/400x250" alt="Outbound Training" class="w-full h-56 object-cover"> <!-- Ukuran gambar diperkecil -->
      <div class="p-3"> <!-- Padding diperkecil -->
        <h3 class="text-lg font-bold">Outbound Training</h3> <!-- Ukuran teks judul diperkecil -->
        <p class="text-gray-600 mt-1 font-semibold text-xs">Paket Include:</p> <!-- Ukuran teks diperkecil -->
        <ul class="text-gray-600 list-disc ml-4 text-xs"> <!-- Ukuran teks diperkecil -->
          <li>Profesional Game Master & Crew</li>
          <li>Lunch Box</li>
          <li>Konsep Kegiatan Fun Game</li>
          <li>Ground Kegiatan Fun Game</li>
          <li>Dekorasi Kegiatan Fun Game</li>
          <li>Coffee Break</li>
          <li>Dokumentasi Kegiatan (Softfile)</li>
          <li>Air Mineral</li>
          <li>Sound System Set</li>
          <li>Banner Kegiatan 3x1</li>
          <li>Holy Powder dan Smoke Bomb</li>
          <li>P3K</li>
        </ul>
        <p class="text-gray-600 mt-3 text-xs">
          <strong>Lokasi:</strong> Batu, Jawa Timur
        </p>
        <p class="text-gray-600 text-xs">
          <strong>Durasi:</strong> 1 Hari
        </p>
        <p class="text-gray-600 text-xs">
          <strong>Minimal Peserta:</strong> 40 pax
        </p>
        <div class="mt-4">
          <button onclick="openModal('layouts.form-outbound')"
                                class="bg-green-500 text-white px-3 py-1.5 rounded-lg text-sm hover:bg-green-600">Booking</button>
                    </div> <!-- Ukuran button disesuaikan -->
        </div>
      </div>
    </div>
    <!-- Ulangi untuk setiap cardbox yang lain, hanya sesuaikan ukurannya dengan cara serupa -->
  </div>

  

  

  
</section> --}}

<section class="w-full flex justify-center bg-color7 py-8">
    <div class="w-full container 2xl:px-36">
        <div class="container mx-auto p-4 mb-4">
            <h2 class="text-2xl font-bold text-center mb-6">Sewa Kendaraan</h2>
            <!-- Cardbox grid 6 items, 3 above and 3 below -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                <!-- Card 1 -->
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <img src="https://via.placeholder.com/300" alt="Outbound Training" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="text-lg font-bold">Outbound Training</h3>
                        <p class="text-gray-600 mt-1 font-semibold text-xs">Paket Include:</p>
                        <ul class="text-gray-600 list-disc ml-4 text-xs">
                            <li>Profesional Game Master & Crew</li>
                            <li>Lunch Box</li>
                            <li>Konsep Kegiatan Fun Game</li>
                            <li>Ground Kegiatan Fun Game</li>
                            <li>Dekorasi Kegiatan Fun Game</li>
                            <li>Coffee Break</li>
                            <li>Dokumentasi Kegiatan (Softfile)</li>
                            <li>Air Mineral</li>
                            <li>Sound System Set</li>
                            <li>Banner Kegiatan 3x1</li>
                            <li>Holy Powder dan Smoke Bomb</li>
                            <li>P3K</li>
                        </ul>
                        <p class="text-gray-600 mt-3 text-xs">
                            <strong>Lokasi:</strong> Batu, Jawa Timur
                        </p>
                        <p class="text-gray-600 text-xs">
                            <strong>Durasi:</strong> 1 Hari
                        </p>
                        <p class="text-gray-600 text-xs">
                            <strong>Minimal Peserta:</strong> 40 pax
                        </p>
                        <div class="mt-4">
                            <a href="{{ route('outbound-details') }}" class="bg-blue-500 text-white px-4 py-2 rounded-lg">Detail</a>
                            <button class="bg-green-500 text-white px-4 py-2 rounded-lg ml-2">Booking</button>
                        </div>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <img src="https://via.placeholder.com/300" alt="Paket 2 Hari" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="text-lg font-bold">Paket 2 Hari</h3>
                        <p class="text-gray-600 mt-1 font-semibold text-xs">Paket Include:</p>
                        <ul class="text-gray-600 list-disc ml-4 text-xs">
                            <li>Profesional Guide</li>
                            <li>Makan 3x Sehari</li>
                            <li>Tiket Masuk Wisata</li>
                            <li>Transportasi AC</li>
                            <li>Dokumentasi Kegiatan (Softfile)</li>
                            <li>Air Mineral</li>
                        </ul>
                        <p class="text-gray-600 mt-3 text-xs">
                            <strong>Lokasi:</strong> Malang, Jawa Timur
                        </p>
                        <p class="text-gray-600 text-xs">
                            <strong>Durasi:</strong> 2 Hari
                        </p>
                        <p class="text-gray-600 text-xs">
                            <strong>Minimal Peserta:</strong> 20 pax
                        </p>
                        <div class="mt-4">
                            <a href="{{ route('outbound-details') }}" class="bg-blue-500 text-white px-4 py-2 rounded-lg">Detail</a>
                            <button class="bg-green-500 text-white px-4 py-2 rounded-lg ml-2">Booking</button>
                        </div>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <img src="https://via.placeholder.com/300" alt="Paket 3 Hari" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="text-lg font-bold">Paket 3 Hari</h3>
                        <p class="text-gray-600 mt-1 font-semibold text-xs">Paket Include:</p>
                        <ul class="text-gray-600 list-disc ml-4 text-xs">
                            <li>Profesional Guide</li>
                            <li>Makan 3x Sehari</li>
                            <li>Tiket Masuk Wisata</li>
                            <li>Transportasi AC</li>
                            <li>Dokumentasi Kegiatan (Softfile)</li>
                            <li>Air Mineral</li>
                        </ul>
                        <p class="text-gray-600 mt-3 text-xs">
                            <strong>Lokasi:</strong> Bandung, Jawa Barat
                        </p>
                        <p class="text-gray-600 text-xs">
                            <strong>Durasi:</strong> 3 Hari
                        </p>
                        <p class="text-gray-600 text-xs">
                            <strong>Minimal Peserta:</strong> 25 pax
                        </p>
                        <div class="mt-4">
                            <a href="{{ route('outbound-details') }}" class="bg-blue-500 text-white px-4 py-2 rounded-lg">Detail</a>
                            <button class="bg-green-500 text-white px-4 py-2 rounded-lg ml-2">Booking</button>
                        </div>
                    </div>
                </div>
                <!-- Card 4 -->
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <img src="https://via.placeholder.com/300" alt="Paket 4 Hari" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="text-lg font-bold">Paket 4 Hari</h3>
                        <p class="text-gray-600 mt-1 font-semibold text-xs">Paket Include:</p>
                        <ul class="text-gray-600 list-disc ml-4 text-xs">
                            <li>Profesional Guide</li>
                            <li>Makan 3x Sehari</li>
                            <li>Tiket Masuk Wisata</li>
                            <li>Transportasi AC</li>
                            <li>Dokumentasi Kegiatan (Softfile)</li>
                            <li>Air Mineral</li>
                        </ul>
                        <p class="text-gray-600 mt-3 text-xs">
                            <strong>Lokasi:</strong> Yogyakarta, DIY
                        </p>
                        <p class="text-gray-600 text-xs">
                            <strong>Durasi:</strong> 4 Hari
                        </p>
                        <p class="text-gray-600 text-xs">
                            <strong>Minimal Peserta:</strong> 30 pax
                        </p>
                        <div class="mt-4">
                            <a href="{{ route('outbound-details') }}" class="bg-blue-500 text-white px-4 py-2 rounded-lg">Detail</a>
                            <button class="bg-green-500 text-white px-4 py-2 rounded-lg ml-2">Booking</button>
                        </div>
                    </div>
                </div>
                <!-- Card 5 -->
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <img src="https://via.placeholder.com/300" alt="Paket 5 Hari" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="text-lg font-bold">Paket 5 Hari</h3>
                        <p class="text-gray-600 mt-1 font-semibold text-xs">Paket Include:</p>
                        <ul class="text-gray-600 list-disc ml-4 text-xs">
                            <li>Profesional Guide</li>
                            <li>Makan 3x Sehari</li>
                            <li>Tiket Masuk Wisata</li>
                            <li>Transportasi AC</li>
                            <li>Dokumentasi Kegiatan (Softfile)</li>
                            <li>Air Mineral</li>
                        </ul>
                        <p class="text-gray-600 mt-3 text-xs">
                            <strong>Lokasi:</strong> Bali
                        </p>
                        <p class="text-gray-600 text-xs">
                            <strong>Durasi:</strong> 5 Hari
                        </p>
                        <p class="text-gray-600 text-xs">
                            <strong>Minimal Peserta:</strong> 35 pax
                        </p>
                        <div class="mt-4">
                            <a href="{{ route('outbound-details') }}" class="bg-blue-500 text-white px-4 py-2 rounded-lg">Detail</a>
                            <button class="bg-green-500 text-white px-4 py-2 rounded-lg ml-2">Booking</button>
                        </div>
                    </div>
                </div>
                <!-- Card 6 -->
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <img src="https://via.placeholder.com/300" alt="Paket 6 Hari" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="text-lg font-bold">Paket 6 Hari</h3>
                        <p class="text-gray-600 mt-1 font-semibold text-xs">Paket Include:</p>
                        <ul class="text-gray-600 list-disc ml-4 text-xs">
                            <li>Profesional Guide</li>
                            <li>Makan 3x Sehari</li>
                            <li>Tiket Masuk Wisata</li>
                            <li>Transportasi AC</li>
                            <li>Dokumentasi Kegiatan (Softfile)</li>
                            <li>Air Mineral</li>
                        </ul>
                        <p class="text-gray-600 mt-3 text-xs">
                            <strong>Lokasi:</strong> Lombok, Nusa Tenggara Barat
                        </p>
                        <p class="text-gray-600 text-xs">
                            <strong>Durasi:</strong> 6 Hari
                        </p>
                        <p class="text-gray-600 text-xs">
                            <strong>Minimal Peserta:</strong> 40 pax
                        </p>
                        <div class="mt-4">
                            <a href="{{ route('outbound-details') }}" class="bg-blue-500 text-white px-4 py-2 rounded-lg">Detail</a>
                            <button class="bg-green-500 text-white px-4 py-2 rounded-lg ml-2">Booking</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </section>
  
  