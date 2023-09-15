## Instalasi

1. Clone repositori ini.
2. Buka terminal dan masuk ke direktori proyek.
3. Jalankan perintah `composer install` untuk menginstal dependensi.
4. Salin file `.env.example` menjadi `.env` dan konfigurasikan file `.env` sesuai dengan lingkungan Anda.
5. Jalankan perintah `php artisan key:generate` untuk menghasilkan kunci aplikasi.
6. Jalankan perintah `php artisan migrate` untuk menjalankan migrasi database.
7. Jalankan perintah `php artisan serve` untuk menjalankan server pengembangan.
8. Jalnakan perintah `npm run dev`.
9. API Anda akan dapat diakses di `http://127.0.0.1:8000/`.

# REST API

-   [Dokumentasi Endpoint](#dokumentasi-endpoint)

    -   [login: /api/login](http://127.0.0.1:8000/api/login?email=puspita@gmail.com&password=password) -> METHOD: POST
    -   [register: /api/register](http://127.0.0.1:8000/api/register?nama_lengkap=Puspita&email=puspita@gmail.com&nomor_hp=085779129390&password=password) -> METHOD: POST

    #modul profile

    -   [view profile: /api/profile/{id}](http://127.0.0.1:8000/api/profile/1) -> METHOD: GET
    -   [update profile: /api/profile/{id}](http://127.0.0.1:8000/api/profile/1?nama_lengkap=Nana Sukarna ST, MM&nomor_hp=085779129391&email=nana@gmail.com&company=STEI SEBI&divisi=Manager) -> METHOD: POST

    #modul document

    -   [list Document: /api/document](http://127.0.0.1:8000/api/document) -> METHOD: GET
    -   [detail Document: /api/document/{id}](http://127.0.0.1:8000/api/document/1) -> METHOD: GET
    -   [delete Document: /api/document/{id}](http://127.0.0.1:8000/api/document/3) -> METHOD: DELETE
    -   [update Document: /api/document/{id}](http://127.0.0.1:8000/api/document/5?title=bismillah sukses&content=Dolor dolor magnam error dolore voluptatem. Aliquid unde aut incidunt molestiae molestiae quis. Esse qui ratione doloribus quia. Iste neque veniam est et quisquam temporibus iusto.) -> METHOD: POST
