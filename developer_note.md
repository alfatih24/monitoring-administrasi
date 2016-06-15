## Developer Note - Monitoring Administrasi - Intan
-------------------

##### Just Note
- [database] log_jurnal.list_pinjam array harus sama dengan alat yang dipinjam. list pinjem structure (id_alat,id_alat,id_alat). Jika saat mengembalikan tidak sama, maka update belum_kembali (id_alat)

- [error handling] if mysql_error() LIKE 'Duplicate Entry' then - Kode / Nama sudah ada dalam database. Gunakan kode / nama lain

- [design] JQuery onChange when QR Code input to fill 'Nama Dosen'
- [design] Favicon

- [unnecessary] Delete later, /lib/redips , datetimepicker, 

- [konsul] 
	+ Jurnal auto checked - required (ok)
	+ TU Login (baru db)	
	+ Ketika diambil TU - Login (30 Menit auto logout)
	+ Tambahkan batal di feedback
	+ Kalo dananya cukup pake touchscreen

[own fitur]
	+ manajemen alat
	+ manajemen dosen / jurnal
	+ manajemen pengumuman

[Tutorial]
mysql> SELECT * FROM belajar_date;
+------------+---------------------+
| dt         | ts                  |
+------------+---------------------+
| 2015-08-10 | 2015-08-10 08:30:15 |
| 2016-08-17 | 2016-08-17 10:01:01 |
| 2017-12-31 | 2017-12-31 23:59:59 |
+------------+---------------------+
3 rows in set (0.00 sec)

mysql> SELECT YEAR(dt) FROM belajar_date;
+----------+
| YEAR(dt) |
+----------+
|     2015 |
|     2016 |
|     2017 |
+----------+
3 rows in set (0.00 sec)

YEAR()	Menampilkan nilai tahun
MONTH()	Menampilkan nilai bulan (1..12)
MONTHNAME()	Menampilkan nama bulan (January..December)
DAYOFMONTH()	Menampilkan nilai tanggal (1..31)
DAYNAME()	Menampilkan intans cuntiks nama hari (Sunday..Saturday)
DAYOFWEEK()	Menampilkan nilai hari (angka 1..7)
WEEKDAY()	Menampilkan nilai hari (angka 0..6)
DAYOFYEAR()	Menampilkan urutan hari (1..366)
HOUR()	Menampilkan nilai jam (0..23)
MINUTE()	Menampilkan nilai menit (0..59)
SECOND()	Menampilkan nilai detik(0..59)

## Kita udah 6 bulan loh