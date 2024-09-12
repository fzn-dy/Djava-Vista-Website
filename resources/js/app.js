import './bootstrap';
import '../css/app.css'; 

// Harga per hari
const hargaPerHari = 1000000;

// Fungsi untuk memperbarui harga total dan link WhatsApp
function updateHarga() {
    const durasiSelect = document.getElementById('durasi');
    const hargaTotalEl = document.getElementById('hargaTotal');
    const whatsappLinkEl = document.querySelector('a[href^="https://wa.me"]');

    const durasi = parseInt(durasiSelect.value, 10);
    const hargaTotal = hargaPerHari * durasi;

    hargaTotalEl.innerText = `Rp ${hargaTotal.toLocaleString()}`;

    // Update link WhatsApp dengan durasi yang dipilih
    if (whatsappLinkEl) {
        whatsappLinkEl.href = `https://wa.me/1234567890?text=Halo,%20saya%20ingin%20booking%20paket%20wisata%20${durasi}%20hari.`;
    }
}

// Fungsi untuk memvalidasi form dan mengaktifkan/menonaktifkan tombol booking
function validateForm() {
    const nama = document.getElementById('nama').value.trim();
    const nomorWhatsApp = document.getElementById('nomorWhatsApp').value.trim();
    const tanggalKeberangkatan = document.getElementById('tanggalKeberangkatan').value;
    const dewasa = parseInt(document.getElementById('dewasa').value.trim(), 10);
    const anak = parseInt(document.getElementById('anak').value.trim(), 10);
    const lokasiPenjemputan = document.getElementById('lokasiPenjemputan').value;

    const bookingButton = document.getElementById('bookingButton');
    // Memastikan semua input wajib diisi dan jumlah peserta valid (dewasa dan anak >= 0)
    if (nama && nomorWhatsApp && tanggalKeberangkatan && !isNaN(dewasa) && dewasa >= 0 && !isNaN(anak) && anak >= 0 && lokasiPenjemputan) {
        bookingButton.disabled = false;
    } else {
        bookingButton.disabled = true;
    }
}

// Inisialisasi harga total dan update link WhatsApp saat halaman pertama kali dimuat
document.addEventListener('DOMContentLoaded', function() {
    updateHarga();
    validateForm();

    // Tambahkan event listener untuk dropdown durasi
    const durasiSelect = document.getElementById('durasi');
    durasiSelect.addEventListener('change', updateHarga);

    // Tambahkan event listener untuk validasi form
    const formElements = document.querySelectorAll('#bookingForm input, #bookingForm select');
    formElements.forEach(element => {
        element.addEventListener('input', validateForm);
    });
});

// scroll details paket wisata
// Fungsi untuk scroll horizontal pada container cardbox
function scrollContainer(scrollAmount) {
    const container = document.getElementById('cardbox-container');
    if (container) {
        container.scrollBy({
            left: scrollAmount,
            behavior: 'smooth'
        });
    } else {
        console.error('Cardbox container tidak ditemukan!');
    }
}

// Tambahkan event listener untuk tombol scroll
document.addEventListener('DOMContentLoaded', () => {
    const scrollLeftButton = document.getElementById('scroll-left');
    const scrollRightButton = document.getElementById('scroll-right');

    if (scrollLeftButton) {
        scrollLeftButton.addEventListener('click', () => scrollContainer(-300));
    }

    if (scrollRightButton) {
        scrollRightButton.addEventListener('click', () => scrollContainer(300));
    }
});

// booking outbound

// function openModal(modalId) {
//     document.getElementById(modalId).classList.remove('hidden');
// }

// function closeModal() {
//     document.getElementById('booking-modal').classList.add('hidden');
// }


