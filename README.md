Website HookPoint – Club Pemancingan adalah sebuah aplikasi web sederhana yang dibuat untuk mengelola dan menampilkan informasi tempat pemancingan (lapak). Website ini juga memiliki sistem login sederhana untuk mengakses halaman dashboard dan profil pengguna. Website ini dibuat menggunakan Laravel (PHP Framework), PHP, HTML, CSS, Blade Template Engine, Konsep MVC (Model, View, Controller), dan Session (untuk menyimpan data login pengguna).

Fitur dari website HookPoint – Club Pemancingan, yaitu:

1. Beranda (Landing Page)
<img width="1877" height="873" alt="Screenshot 2026-04-26 121617" src="https://github.com/user-attachments/assets/901d53c2-3b95-43b4-b1b8-baaaf35afb92" />
<img width="1879" height="875" alt="Screenshot 2026-04-26 121648" src="https://github.com/user-attachments/assets/73e09f50-5950-4349-9ca3-5928d499a18b" />
<img width="1870" height="876" alt="Screenshot 2026-04-26 121636" src="https://github.com/user-attachments/assets/1c72fcdd-aecf-4d48-9ed0-dac13d241d40" />
Berisi navbar untuk akses menuju lapak yang tersedia, login dan register sebagai fitur autentikasi untuk membuat reservasi atau melakukan transaksi. Kemudian terdapat nama aplikasi dan ringkasan seperti slogan serta informasi buka – tutup pemancingan. Lalu di bawahnya terdapat card lapak terpopuler, dan ada pula tabel ringkasan total dari lapak yang ada, serta terdapat footer di bawahnya.

2. Lapak pada Landing Page
<img width="1873" height="875" alt="Screenshot 2026-04-26 121702" src="https://github.com/user-attachments/assets/98e1f406-737f-41ba-b0cd-2caad224ec6c" />
<img width="1878" height="875" alt="Screenshot 2026-04-26 121714" src="https://github.com/user-attachments/assets/4fe38401-68f4-4fb4-9134-9b91bd6bc668" />
berisi card lapak yang tersedia di dalam website dimana pengunjung dapat melakukan searching berdasarkan nama lapak dan jenis kolam, serta melakukan filter berdasakan jenis kolam dan status ketersediaannya

3. Login
<img width="1886" height="881" alt="Screenshot 2026-04-26 121728" src="https://github.com/user-attachments/assets/fb719c49-8579-4246-919e-9e0028054652" />
<img width="1871" height="871" alt="Screenshot 2026-04-26 121738" src="https://github.com/user-attachments/assets/c07e1f25-bcb2-4fa2-961b-26ec8f4b9b4c" />
berisi halaman login yang dapat di akses sesuai dengan akun yang tersimpan di dalam PageController.php yakni, terdapat akun admin dengan username "admin" dan password "admin123", serta akun user dengan username "user" dan password "user123". Keduanya akan di arahkan ke halaman dashboard, profile, dan pengelolaan yang sama, tetapi data yang dikirim tetap sesuai dengan data yang dipakai saat login.

4. Register
<img width="1881" height="877" alt="Screenshot 2026-04-26 121748" src="https://github.com/user-attachments/assets/acbdd625-01da-4699-b576-cd48323deb59" />
<img width="1876" height="880" alt="Screenshot 2026-04-26 121759" src="https://github.com/user-attachments/assets/94df8a42-3cec-4efe-b763-eb67d842fdfd" />
berisi halaman register dimana pengunjung nanti harus menginputkan username, nama lengkap, no telepon, dan password. tetapi akun yang dibuat pada halaman register ini tidak dapat digunakan pada halaman login, karena login hanya menerima 2 akun yang sudah ada pada PageController. Tetapi halamn Register ini bisa diarahkan pada halaman dashboard saja.

5. Dashboard Admin
<img width="1902" height="882" alt="Screenshot 2026-04-26 121821" src="https://github.com/user-attachments/assets/184197c7-5d31-4238-96aa-c57fb235561a" />
<img width="1906" height="878" alt="Screenshot 2026-04-26 121832" src="https://github.com/user-attachments/assets/1e877560-5a85-41e8-8ac1-a20c10c97680" />
Berisi navbar yang memunculkan logo nama website, dan terdapat request handling pada sebelah kanan navbar, serta sidebar yang berisi fitur admin dan tombol logout. Kemudian terdapat card yang nantinya dapat mengetahui total pendapatan, total transaksi, dan total lapak aktif.

6. Profile Admin
<img width="1901" height="876" alt="Screenshot 2026-04-26 121846" src="https://github.com/user-attachments/assets/34c5bbe4-5783-4db7-a269-6a85dc2cee96" />
<img width="1900" height="874" alt="Screenshot 2026-04-26 121902" src="https://github.com/user-attachments/assets/e9dfd3e5-b43b-4820-9f84-f6001ca93de4" />
Berisi informasi profil admin ataupun user sesuai dengan akun yang terdapat pada PageController.php dan akun yang digunakan saat login. Kemudian terdapat pula tombol edit profil untuk mengubah profil yang sedang ditampilkan (belum berfungsi).

7. Pengelolaan
<img width="1914" height="879" alt="Screenshot 2026-04-26 121932" src="https://github.com/user-attachments/assets/e0f65af0-1f95-468c-9abd-3e474f76b655" />
<img width="1902" height="882" alt="Screenshot 2026-04-26 121921" src="https://github.com/user-attachments/assets/768ef5e8-b27e-4dc5-bb24-dc28a46f7cdf" />
Hampir sama dengan halaman lapak pada admin, berisi card lapak yang tersedia dan terdapat akses searching dan fiter untuk memudahkan pencarian lapak, dan terdapat tombol edit dan hapus yang dapat mengubah dan menghapus card lapak.

8. Logout
<img width="1908" height="868" alt="Screenshot 2026-04-26 121948" src="https://github.com/user-attachments/assets/39ec65db-ea40-49a4-a2e2-01de1f2a0d35" />
Tombol logout untuk mengakhiri session login yang sedang terjadi.

Berikut merupakan link video penjelasan dari projek UTS PWEB ini:
https://youtu.be/3QpkLp6yFKw
