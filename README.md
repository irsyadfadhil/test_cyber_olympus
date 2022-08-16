<br />
<p align="center">
  <h2 align="center">Aplikasi Tes Cyber Olympus</h2>
</p>

# Link API Untuk DEMO 

| Description        |    URL        |
| ------------- |:-------------:| -----:|
| Halaman Awal | http://localhost:8000/ |
| Buat Login   | http://localhost::8000/login      |
| Halaman Home | http://localhost::8000/home    |


# Install Aplikasi
```
$ composer install
copy file .env.example jadi .env
$ php artisan key:generate

```

# Untuk Tes CRUD Gunakan Ini dulu
```
$ php artisan migrate:fresh --seed

```

# Untuk Tes Olah Data
```
import file Database.sql

```