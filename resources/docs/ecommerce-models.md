# Model E‑Commerce — Versi Sederhana

Dokumen ini menyediakan versi yang lebih sederhana dari skema data e‑commerce, cocok untuk implementasi cepat.

Desain ringkas (model inti)

1) `User`
- fields: `id`, `name`, `email` (unique), `password`, `phone`, `created_at`, `updated_at`
- relasi: hasMany `Order`, hasMany `Address`

2) `Address`
- fields: `id`, `user_id` (nullable untuk guest), `recipient_name`, `phone`, `address_line`, `city`, `postal_code`, `is_default`, `created_at`
- relasi: belongsTo `User`, dipakai oleh `Order`

3) `Category` (opsional sederhana)
- fields: `id`, `name`, `slug`, `created_at`
- relasi: hasMany `Product`

4) `Product`
- fields: `id`, `sku`, `name`, `description`, `price` (decimal), `stock` (int), `category_id` (nullable), `created_at`, `updated_at`
- relasi: belongsTo `Category`, hasMany `OrderItem`
- catatan: untuk menyederhanakan, varian disimpan sebagai properti JSON pada `Product` atau tidak digunakan sama sekali

5) `Order`
- fields: `id`, `user_id` (nullable), `status` (pending, confirmed, shipped, delivered, cancelled), `total` (decimal), `shipping_address_id`, `placed_at`, `created_at`
- relasi: belongsTo `User`, hasMany `OrderItem`

6) `OrderItem`
- fields: `id`, `order_id`, `product_id`, `name_snapshot`, `sku_snapshot`, `qty`, `unit_price`, `total_price`
- catatan: simpan snapshot nama/sku/harga agar histori tidak tergantung perubahan produk

7) `Payment`
- fields: `id`, `order_id`, `provider`, `amount`, `status` (pending, succeeded, failed), `provider_reference`, `created_at`

Catatan singkat
- Menyederhanakan berarti mengorbankan beberapa fitur (variant terpisah, inventory audit, coupon kompleks, shipment table). Namun alur dasar tetap lengkap: katalog → keranjang/checkout → order → payment.
- Untuk fungsionalitas lanjutan, tambahkan modul secara bertahap (mis. `ProductVariant`, `Shipment`, `InventoryTransaction`).

Jika Anda setuju dengan versi sederhana ini, saya bisa lanjut: a) menghasilkan contoh migration & Eloquent model (tidak membuat file tambahan tanpa izin Anda), atau b) menjaga dokumentasi saja. Pilih `a` atau `b`.