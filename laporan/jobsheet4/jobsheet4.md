# Jobsheet 4 - MODEL dan ELOQUENT ORM

## Nama : Shasia Sasa Salsabyla

## Kelas : TI - 2F

## No.Absen/NIM : 25/2241720029

### Jawablah pertanyaan berikut sesuai pemahaman materi di atas

1. Praktikum 1 - $fillable

    ![alt text](gambar/1.png)

    ![alt text](gambar/2.png)

2. Praktikum 2.1 – Retrieving Single Models

    ![alt text](gambar/3.png)

    Disini menampilkan data user dengan id 1 dari kode program "$user = UserModel::find(1);".

    ![alt text](gambar/4.png)

    Disini menampilkan data user dengan level id 1 pada daftar urutan pertama dari kode program "$user = UserModel::where('level_id', 1)->first();".

    ![alt text](gambar/5.png)

    Disini menampilkan data user dengan level id 1 dari kode program "$user = UserModel::firstWhere('level_id', 1);". Sama saja dengan sebelumnya, tapi lebih sederhana penulisannya.

    ![alt text](gambar/6.png)

    Untuk mencari data dari tabel users dengan id 1. Jika tidak ditemukan, maka mencarinya berdasarkan username atau nama. Jika tidak ditemukan juga, akan menghasilkan respons HTTP 404. Pada halaman web yang ditampilkan menampilkan primary key 1 karena ditemukan.

    ![alt text](gambar/7.png)

    Seperti yang diatas, tapi id 20 tidak ditemukan maka menampilkan 404.

3. Praktikum 2.2 – Not Found Exceptions

    ![alt text](gambar/8.png)

    Menampilkan data user dengan level id 1. Pada kode program, jika id 1 ditemukan maka menampilkan seperti pada gambar, jika tidak ditemukan akan menampilkan 404.

    ![alt text](gambar/9.png)

    Menampilkan 404 karena tidak menemukan username dengan nilai manager9.

4. Praktikum 2.3 – Retreiving Aggregrates

    ![alt text](gambar/10.png)

    Menampilkan jumlah user dengan level id 2 yang berjumlah 1.

    ![alt text](gambar/11.png)

    Menampilkan jumlah user dengan level id 2 yang berjumlah 1 dengan tampilan seperti pada gambar.

5. Praktikum 2.4 – Retreiving or Creating Models

    ![alt text](gambar/12.png)

    Jika data ditemukan akan menampilkan data dengan username manager dan nama Manager. Jika data yang dicari tidak ditemukan maka akan membuat data baru dengan isi data sesuai yang dicari.

    ![alt text](gambar/13.png)

    ![alt text](gambar/14.png)

    Data tidak ditemukan sehingga membuat data baru.

    ![alt text](gambar/15.png)

    Menampilkan data seperti pada gambar. Tapi jika tidak ditemukan maka akan dimasukkan kedalam database.

    ![alt text](gambar/16.png)

    ![alt text](gambar/17.png)

    Data sudah dibuat tapi belum masuk pada database.

    ![alt text](gambar/18.png)

    ![alt text](gambar/19.png)

    Data yang dibuat sudah masuk dalam database menggunakan "$user->save".

6. Praktikum 2.5 – Attribute Changes

    ![alt text](gambar/20.png)

    "isDirty" menandakan adanya perubahan, ketika bernilai true menandakan telah dilakukan perubahan dan perlu disimpan. "isClean" menandakan tidak terjadi perubahan, ketika bernilai true menandakan bahwa tidak ada perubahan yang perlu diproses. Pada gambar tersebut menampilkan perubahan yang disimpan.

    ![alt text](gambar/21.png)

    ![alt text](gambar/22.png)

    Menampilkan true berarti terdapat perubahan sehingga data yang dimasukkan akan disimpan.

7. Praktikum 2.6 – Create, Read, Update, Delete (CRUD)

    ![alt text](gambar/23.png)

    Menampilkan data yang ada pada tabel data user.

    ![alt text](gambar/25.png)

    Klik "+Tambah User" pada gambar sebelumnya, maka akan menampilkan gambar diatas untuk menginputkan data baru.

    ![alt text](gambar/26.png)

    Setelah input data, maka simpan data tersebut.

    ![alt text](gambar/27.png)

    Data yang telah di input dan disimpan akan terlihat pada tabel data user.

    ![alt text](gambar/29.png)
    Form untuk mengubah data.

    ![alt text](gambar/30.png)

    Menyimpan data yang baru diubah, dan menampilkan seperti pada gambar.

    ![alt text](gambar/31.png)

    Untuk menghapus data yang ingin dihapus.

8. Praktikum 2.7 – Relationships

    ![alt text](gambar/32.png)

    Menampilkan relasi antar tabel yang dipilih.
