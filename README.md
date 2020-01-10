# Efiling-Online-Visa-Registration

Laravel based project, website untuk pengajuan visa online.

1. Download repo ke direktori yang di inginkan
2. Buat DB baru dengan nama evisa dan Import file evisa.sql ke MySQL.
3. Edit file .env.example  seperti di bawah.

# Setting koneksi database di bawah 
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=evisa
DB_USERNAME=root
DB_PASSWORD=
```

kemudian simpan file sebagai .env

# Mejalankan Aplikasi
1. akses Command Promt / Terminal. 
2. masuk ke direktori dimana aplikasi berada.
3. install composer 
```
composer install
```
3. jalankan server dengan mengetikan 
```
php artisan serve
```

# Tampilan Landing 
![alt text](./contoh-landing.png)
# Semoga Bermanfaat - Terimakasih.
