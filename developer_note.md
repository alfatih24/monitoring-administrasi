## Developer Note - Monitoring Administrasi
-------------------

##### Just Note
- [database] log_jurnal.list_pinjam array harus sama dengan alat yang dipinjam. list pinjem structure (id_alat,id_alat,id_alat). Jika saat mengembalikan tidak sama, maka update belum_kembali (id_alat)

- [error handling] if mysql_error() LIKE 'Duplicate Entry' then - Kode / Nama sudah ada dalam database. Gunakan kode / nama lain

- [design] JQuery onChange when QR Code input to fill 'Nama Dosen'

- [unnecessary] Delete later, /lib/redips , datetimepicker, 