# Alat_GPS
Berikut adalah source code saya 
menggunakan Framework Codeigniter dan Database Postgre
Aplikasi Iventory GPS

Anda Dapat Export Database jika ingin mencoba aplikasi saya dilocalhost.
untuk konfigurasi :
1. buka application -> config -> config.php -> $config['base_url'] =" http://localhost:81/Alat_GPS/" Silahkan Anda Ganti :81 jika WebService Anda Menggunakan port 80, Saya pribadi Menggunakan Port 81 Karena port 80 sudah saya gunakan, jika anda menggunakan port 80 anda cukup menghapus ":81"
2. Silahkan diganti /Alat_GPS/ dengan nama projectnya misal Alat_GPS-master jadinya "http://localhost:81/Alat_GPS-master/
3. import file dump.sql ke PhpPGadmin atau PgAdmin Anda
4. buka application -> config -> database.php 
'hostname' => 'localhost', // Host Name Anda
	'username' => 'postgres',  // User Name webservice Anda
	'password' => 'dump', // Password webservice anda
	'database' => 'dump', //Nama Database
	'dbdriver' => 'postgre', // Database Driver
      'port' => 5432  // Port PostgreSQL
