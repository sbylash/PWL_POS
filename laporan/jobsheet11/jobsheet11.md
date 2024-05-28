# Jobsheet 11 - Restful API 2

## Nama : Shasia Sasa Salsabyla

## Kelas : TI - 2F

## No.Absen/NIM : 25/2241720029

### Praktikum

Uji coba dan screenshot hasilnya apa perbedaan dari yang sebelumnya.

6.Lakukan modifikasi pada Controllers/Api/RegisterController

![alt text](6.png)

Hasil:

![alt text](1.8.png)

9.Pada Controllers/Api/RegisterController bagian create user ganti dengan

![alt text](9.png)

Hasil

![alt text](1.10.png)

Perbedaannya adalah error dan tidak error. Tidak error karena variabel image terdefinisi. Error karena variabel image tidak terdefinisi karena tidak di request. Yang benar adalah harus diberi request dulu seperti berikut.

![alt text](1.10.1.png)

### TUGAS

Implementasikan API untuk upload file/gambar pada tabel lainnya yaitu tabel m_barang dan gunakan pada transaksi. Uji coba dengan method GET untuk memanggil data yang sudah di inputkan.

Jawab:

Modifikasi kode program dan membuat migration seperti berikut.

![alt text](barang_migration.png)

![alt text](migrate.png)

1. Barang

    a. Method POST

    ![alt text](post_barang.png)

    b. Method GET

    ![alt text](get_barang.png)

2. Transaksi

    a. Method POST

    ![alt text](post_transaksi.png)

    b. Method GET

    ![alt text](get_transaksi.png)
