# Flow Website E‑Commerce — Versi Sederhana

Ringkasan ini menyamakan alur dengan model sederhana (tanpa varian kompleks, stok sederhana pada `Product`).

Aktor
- Guest (pengunjung)
- Customer (terdaftar)
- Admin

Halaman & Komponen Utama (sesuai model sederhana)
- Beranda: promosi, kategori, produk unggulan
- Katalog: daftar `Product` (filter, sort, pagination)
- Halaman Produk: gambar, deskripsi, `price`, `stock`
- Keranjang: menampung `OrderItem` sementara
- Checkout: pilih/masukkan `Address`, pilih pengiriman, bayar
- Konfirmasi Pesanan: ringkasan `Order` dan `OrderItem`
- Akun: riwayat `Order`, daftar alamat

Journey Ringkas (Customer)
1. Temukan produk di Katalog atau Beranda.
2. Buka Halaman Produk → cek `price` dan `stock`.
3. Tambah ke Keranjang (menyimpan `product_id`, `qty`, snapshot harga).
4. Checkout:
   - Pilih `Address` atau isi alamat baru.
   - Konfirmasi total (subtotal + ongkir) → buat `Order` dengan status `pending`.
5. Pembayaran melalui gateway → buat `Payment`.
   - Jika `Payment.status` = succeeded → `Order.status` = `confirmed`.
6. Admin/fulfillment proses pesanan → ubah `Order.status` (processing → shipped → delivered).

Event & Konsistensi (kesimpulan singkat)
- Simpan snapshot nama/sku/harga di `OrderItem` untuk histori.
- Kurangi `Product.stock` saat pembayaran dikonfirmasi (atau gunakan reserve sederhana saat checkout jika diperlukan).
- Tangani webhook payment dengan idempotency (cek `provider_reference` sebelum mark succeeded).

Integrasi Singkat
- Payment gateway (webhook) untuk status pembayaran.
- Kurir: cukup simpan `tracking_number` pada `Order` jika diperlukan.

Controller yang Dibutuhkan

1. `ProductController`
   - index: daftar produk (kategori, filter, sort, pagination)
   - show: detail produk

2. `CategoryController` (opsional)
   - index: daftar kategori

3. `CartController`
   - index: tampilkan isi keranjang (session/database)
   - add: tambah item ke keranjang
   - update: ubah qty
   - remove: hapus item dari keranjang

4. `OrderController`
   - store: buat order dari keranjang (checkout)
   - index: daftar order customer
   - show: detail order

5. `AddressController`
   - store: tambah alamat baru
   - update: ubah alamat
   - delete: hapus alamat

6. `PaymentController`
   - process / redirect: inisiasi pembayaran
   - callback / webhook: terima notifikasi dari gateway pembayaran

7. `AccountController` / `UserController` (opsional)
   - dashboard: ringkasan akun
   - addresses: kelola alamat

Catatan
- Alur ini sengaja sederhana agar sejalan dengan model ringkas. Untuk fitur lanjutan (varian, inventory audit, coupon), tambahkan model bertahap.

Jika cocok, saya bisa lanjut membuat contoh migration & model Eloquent (opsional).
