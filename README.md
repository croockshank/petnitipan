# Note
Setelah melakukan *pull* terhadap *project*, lakukan langkah berikut agar *assets* CSS dan Javascript bisa ter-*load* sebagaimana mestinya

## Menyesuaikan *path* pada *project*
Buka *file* `function.php` yang terletak pada folder `core`. Ubahlah nilai baris ke 3 yaitu variabel `$url` sesuai *path* pada `htdocs` di *Local Server*(XAMPP) anda. Misalnya *project* ini saya taruh di `XAMPP/htdocs/kuliah/desain-pemrograman-web/week16/pet-shelter/`, maka:
```php
$url = '/kuliah/desain-pemrograman-web/week16/pet-shelter/'
```

Dengan begitu dapat dipastikan *assets* pada *website* bisa ter-*load* sebagai mestinya. **Selamat mencoba!**