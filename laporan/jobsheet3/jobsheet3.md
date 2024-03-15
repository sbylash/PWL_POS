# Jobsheet 3 - MIGRATION, SEEDER, DB FACADE, QUERY BUILDER, dan ELOQUENT ORM

## Nama : Shasia Sasa Salsabyla

## Kelas : TI - 2F

## No.Absen/NIM : 25/2241720029

### Jawablah pertanyaan berikut sesuai pemahaman materi di atas

1.  Pada Praktikum 1 - Tahap 5, apakah fungsi dari APP_KEY pada file setting .env Laravel?

    Jawab: APP_KEY pada file setting .env Laravel untuk mengamankan data penting dan mengamankan hak akses.

2.  Pada Praktikum 1, bagaimana kita men-generate nilai untuk APP_KEY?

    Jawab: Men-generate nilai untuk APP_KEY menggunakan

        php artisan key:generate

3.  Pada Praktikum 2.1 - Tahap 1, secara default Laravel memiliki berapa file migrasi? Dan untuk apa saja file migrasi tersebut?

    Jawab:
    Ada empat file migrasi:

    1. create_password_resets_tokens_table untuk membuat tabel password_resets_tokens digunakan untuk manajemen token reset password.
    2. create_users_table untuk membuat tabel users yang menyimpan informasi user.
    3. create_failed_jobs_table yang membuat tabel failed_jobs yang merekam informasi failed job dalam aplikasi.
    4. create_personal_access_tokens_table yang menciptakan tabel personal_access_tokens yang mengelola personal access token untuk pengaturan kata sandi dan lain-lain.

4.  Secara default, file migrasi terdapat kode $table->timestamp(());, apa tujuan/output dari fungsi tersebut?

    Jawab: Untuk membuat kolom create dan update secara otomatis dengan waktu pembuatannya.

5.  Pada File Migrasi, terdapat fungsi $table->id(); Tipe data apa yang dihasilkan dari fungsi tersebut?

    Jawab: Bigint Unsigned.

6.  Apa bedanya hasil migrasi pada table m_level, antara menggunakan $table->id(); dengan menggunakan $table->id('level_id'); ?

    Jawab: Hasil migrate tabel m_level yaitu penamaan kolom primary key, tanpa params hasilnya id. Hasil $table->id('level_id'); adalah level_id.

7.  Pada migration, Fungsi ->unique() digunakan untuk apa?

    Jawab: Untuk membuat isi data pada kolom menjadi unik, agar tidak ada kesamaan dengan isi data pada 1 kolom tersebut.

8.  Pada Praktikum 2.2 - Tahap 2, kenapa kolom level_id pada tabel m_user menggunakan $tabel->unsignedBigInteger('level_id'), sedangkan kolom level_id pada tabel m_level menggunakan $tabel->id('level_id') ?

    Jawab: Karena pada kolom level_id pada tabel m_user menggunakan $tabel->unsignedBigInteger('level_id') sebagai foreign key, sedangkan kolom level_id pada tabel m_level menggunakan $tabel->id('level_id') sebagai primary key.

9.  Pada Praktikum 3 - Tahap 6, apa tujuan dari Class Hash? dan apa maksud dari kode program Hash::make('1234');?

    Jawab: Untuk enkripsi password.

10. Pada Praktikum 4 - Tahap 3/5/7, pada query builder terdapat tanda tanya (?), apa kegunaan dari tanda tanya (?) tersebut?

    Jawab: Sebagai placeholder.

11. Pada Praktikum 6 - Tahap 3, apa tujuan penulisan kode protected $table = ‘m_user’; dan protected $primaryKey = ‘user_id’; ?

    Jawab: protected $table = 'm_user'; untuk menghubungkan model dengan tabel 'm_user' dalam basis data. Sedangkan, protected $primaryKey = 'user_id'; digunakan untuk menentukan kolom 'user_id' sebagai primary key tabel 'm_user'. Dibuat seperti itu agar model dapat berinteraksi dengan data dalam tabel tersebut.

12. Menurut kalian, lebih mudah menggunakan mana dalam melakukan operasi CRUD ke database (DB Façade / Query Builder / Eloquent ORM) ? jelaskan!

    Jawab: Query Builder, karena masih mirip dengan query yang biasa digunakan..
