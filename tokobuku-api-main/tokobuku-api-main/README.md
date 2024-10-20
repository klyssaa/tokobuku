NAMA : DIMAS PERMANA
NIM : 362358302004
KELAS : 2A TRPL

Praktikum Interoperabilitas: Membuat API Toko Buku dengan Laravel 11 dan Testing Menggunakan Postman

A.	GET Semua Kategori
•	Method: GET
•	URL: http://localhost:8000/api/kategoris
•	Klik Send untuk melihat hasil
![Screenshot 2024-10-20 002422](https://github.com/user-attachments/assets/bce83b28-89e8-4f10-8126-1f362824b9ca)

B.	POST Tambah Kategori Baru
•	Method: POST
•	URL: http://localhost:8000/api/kategoris
•	Body 
![Screenshot 2024-10-20 002445](https://github.com/user-attachments/assets/da1a2177-44e6-4fa2-84c0-154059c15ca4)

C.	GET Semua Buku
•	Method: GET
•	URL: http://localhost:8000/api/bukus
•	Klik Send
![Screenshot 2024-10-20 002856](https://github.com/user-attachments/assets/6c033d1c-3f2e-4db5-8ff6-6ccd0a0f0543)

D.	POST Tambah Buku Baru
•	Method: POST
•	URL: http://localhost:8000/api/bukus
•	Body:
![Screenshot 2024-10-20 002935](https://github.com/user-attachments/assets/ec7bfef2-2cac-4109-b424-7696437ad26f)

E.	GET Buku Berdasarkan ID
•	Method: GET
•	URL: http://localhost:8000/api/bukus/1
•	Klik Send.
![get id](https://github.com/user-attachments/assets/bc565f29-5d72-4b09-b5c7-562995ea79ba)

F.	PUT Update Data Buku
•	Method: PUT
•	URL: http://localhost:8000/api/bukus/1
•	BODY
![put ](https://github.com/user-attachments/assets/d9820b60-afbe-4832-8de8-e6e979624af1)

G.	DELETE Hapus Buku
•	Method: DELETE
•	URL: http://localhost:8000/api/bukus/1
•	Klik Send.
![delete](https://github.com/user-attachments/assets/ea597082-d03e-4ad0-ac41-d875dd77baf9)

TUGAS MAHASISWA
1.	Tambahkan Validasi:
o	Nama buku tidak boleh kosong.
o	Harga minimal Rp 1.000.
![code](https://github.com/user-attachments/assets/53348bda-0bab-4b9c-91ed-43ad8769794c)

2.	Rancang Endpoint Baru:
Buatlah satu endpoint tambahan untuk sistem toko buku, misalnya, endpoint untuk mencari buku berdasarkan kategori atau judul. Tantangan: Apa pertimbangan yang harus Anda buat saat merancang endpoint ini? Pertimbangkan aspek performa, skalabilitas, dan pengalaman pengguna.
![code-snapshot](https://github.com/user-attachments/assets/0c2501fc-1e61-496f-bcd1-eeaf594c5abf)

>INI UNTUK CODE DI BAGIAN api.php
![code-snapshot1](https://github.com/user-attachments/assets/c9870d71-77cb-4f6e-b825-91cb34b698c6)

>HASILNYA:
ini bagian nambah data buku dengan post
![tugas](https://github.com/user-attachments/assets/4844d635-7ed5-4689-8536-344644318cbe)

ini untuk bagian cari buku dengan http://localhost:8000/api/bukus/search/Naruto
![tugas judul](https://github.com/user-attachments/assets/0aae198e-85b7-4e6a-884b-f5087b3b24b6)

3.	Uji API Secara Publik:
o	Gunakan ngrok atau sejenisnya untuk membuka API ke internet.
>ini bagian di ngrok
![ngrok](https://github.com/user-attachments/assets/84a72163-2c39-45fc-9910-558194658972)
>ini bagian link untuk ngrok https://7ee6-140-213-191-40.ngrok-free.app/
>ini hasilnya
![laravel](https://github.com/user-attachments/assets/697c2c3f-2e00-402b-8250-4ecc4eeac133)
![Screenshot 2024-10-20 154955](https://github.com/user-attachments/assets/e52c1d73-9689-417b-ae1f-3ddb710cd754)

