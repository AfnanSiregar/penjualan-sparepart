REQUIREMENTS:
- XAMPP CONTROL PANEL
- PHP 8

Langkah-langkah:
1. Buka aplikasi XAMPP Control Panel, start module Apache dan MySQL,
2. Buka localhost di Browser dan buka PHPMyAdmin,
3. Buat Database baru dengan nama: penjualan-sparepart
4. Pilih/klik database yang baru dibuat tersebut, pilih import database melalui tab Import
5. Di tab Import klik "choose file", cari file penjualan-sparepart.sql dari folder paling luar projek ini, kemudian import
6. Selanjutnya, buka folder projek ini dengan Visual Studio Code, Sublime Text, dll
7. Buka terminal, ketikkan command: composer update
8. Buat file dengan nama .env di folder paling luar project ini,
9. Isi file .env dengan meng-copy isi yang ada di file .env.example yang ada di folder paling luar projek ini lalu simpan,
10. Setelah di copy, paste di file .env dan cari DB_DATABASE=Laravel kemudian di ganti dengan DB_DATABASE=penjualan-sparepart
11. Setelah itu, buka terminal ketikkan command: php artisan key:generate
12. Buka terminal, ketikkan command: php artisan migrate
13. Run project dengan mengetikkan perintah: php artisan serve
14. Maka akan muncul pesan: Server running On [http://127.0.0.1:8000]. Klik link tersebut.
