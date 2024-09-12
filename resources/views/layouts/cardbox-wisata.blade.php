<section class="w-full flex justify-center bg-color7 py-8">
    <div class="w-full container 2xl:px-36">
        <div x-data="{ tab: 'semua' }" class="container mx-auto p-4 mb-4">
        <h2 class="text-2xl font-bold text-center mb-6">Paket Wisata</h2>
        <!-- Tab navigation -->
        <ul class="flex justify-center space-x-4 mb-8">
          <!-- Tab items -->
          <template x-for="tabItem in ['semua', '1hari', '2hari', '3hari', '4hari', '5hari', 'picnic', 'outbound', 'custom']">
            <li>
              <a @click.prevent="tab = tabItem"
                 href="#"
                 class="inline-block py-2 px-6 bg-blue-500 text-white rounded-lg font-semibold hover:bg-blue-700"
                 :class="{ 'bg-white text-blue-700 border border-blue-500' : tab === tabItem }"
                 x-text="tabItem.charAt(0).toUpperCase() + tabItem.slice(1)"></a>
            </li>
          </template>
        </ul>
        
        <!-- Tab content area -->
        <div class="content bg-white px-4 py-4 border border-gray-200 rounded-lg">
          <!-- Cardbox content for each tab -->
          <template x-if="tab === 'semua' || tab === '1hari'">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
              <!-- Example Card 1 -->
              <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <img src="https://via.placeholder.com/300" alt="Paket 1" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-xl font-bold">Paket 1 Hari</h3>
                    <p class="text-gray-600 mt-2">Deskripsi singkat tentang paket wisata 1 hari.</p>
                    <div class="mt-4">
                        <!-- Tombol Detail mengarahkan ke halaman detail -->
                        <a href="{{ route('wisata-details') }}" class="bg-blue-500 text-white px-4 py-2 rounded-lg">Detail</a>
                        <button class="bg-green-500 text-white px-4 py-2 rounded-lg ml-2">Booking</button>
                    </div>
                </div>
            </div>
            
              
              <!-- Example Card 2 -->
              <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <img src="https://via.placeholder.com/300" alt="Paket 2" class="w-full h-48 object-cover">
                <div class="p-4">
                  <h3 class="text-xl font-bold">Paket 2 Hari</h3>
                  <p class="text-gray-600 mt-2">Deskripsi singkat tentang paket wisata 2 hari.</p>
                  <div class="mt-4">
                    <button class="bg-blue-500 text-white px-4 py-2 rounded-lg">Detail</button>
                    <button class="bg-green-500 text-white px-4 py-2 rounded-lg ml-2">Booking</button>
                  </div>
                </div>
              </div>
              
              <!-- Add more cards as needed -->
            </div>
          </template>
          
          <!-- Template for other tabs like '3hari', 'picnic', 'outbound', etc. -->
          <template x-if="tab === 'picnic'">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
              <!-- Example Card for Picnic -->
              <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <img src="https://via.placeholder.com/300" alt="Paket Picnic" class="w-full h-48 object-cover">
                <div class="p-4">
                  <h3 class="text-xl font-bold">Paket Picnic</h3>
                  <p class="text-gray-600 mt-2">Deskripsi singkat tentang paket picnic.</p>
                  <div class="mt-4">
                    <button class="bg-blue-500 text-white px-4 py-2 rounded-lg">Detail</button>
                    <button class="bg-green-500 text-white px-4 py-2 rounded-lg ml-2">Booking</button>
                  </div>
                </div>
              </div>
              <!-- Add more picnic-related cards if needed -->
            </div>
          </template>
    
          <!-- Add more templates for other tabs like 'outbound', 'custom', etc. -->
        </div>
      </div>
    </div>
</section>
  