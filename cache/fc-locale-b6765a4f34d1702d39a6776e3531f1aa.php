<?php return array (
  'admin.hostedContexts' => 'Jurnal yang Dikelola',
  'admin.settings.redirect' => 'Pengalihan Jurnal',
  'admin.settings.redirectInstructions' => 'Permintaan ke situs utama akan dialihkan ke jurnal ini. Hal ini berguna jika hanya ada satu jurnal yang dikelola.',
  'admin.languages.confirmDisable' => 'Anda yakin hendak menonaktifkan bahasa ini? Hal ini dapat mempengaruhi semua jurnal yang menggunakannya.',
  'admin.languages.primaryLocaleInstructions' => 'Bahasa ini akan menjadi bahasa default untuk situs dan setiap jurnal yang dikelola di situs ini.',
  'admin.languages.supportedLocalesInstructions' => 'Pilih bahasa yang akan didukung situs ini. Bahasa yang dipilih akan dapat digunakan oleh semua jurnal yang dikelola situs ini, dan juga akan tampil dalam menu pilihan bahasa di setiap halaman situs (yang dapat diganti pada halaman yang spesifik untuk jurnal tertentu).  Jika hanya ada satu bahasa, menu pilihan bahasa tidak akan muncul.',
  'admin.locale.maybeIncomplete' => 'Bahasa yang diberi tanda kemungkinan masih belum lengkap.',
  'admin.languages.confirmUninstall' => 'Anda yakin ingin membatalkan instalasi bahasa ini? Hal ini akan mempengaruhi jurnal yang sedang menggunakannya.',
  'admin.languages.installNewLocalesInstructions' => 'Pilih bahasa tambahan untuk diinstal dalam sistem ini. Bahasa harus diinstal sebelum dapat digunakan oleh jurnal.',
  'admin.auth.ojs' => 'Database Pengguna OJS',
  'admin.auth.enableSyncProfiles' => 'Aktifkan sinkronisasi profil pengguna (jika didukung oleh plugin otentikasi ini). Informasi profil pengguna akan diperbarui secara otomatis dari sumber luar ketika pengguna login, dan semua perubahan profil (termasuk perubahan kata sandi) yang dibuat dalam OJS secara otomatis akan diperbarui pada sumber otentikasi tersebut. Jika opsi ini tidak diaktifkan, informasi profil OJS akan disimpan secara terpisah dari informasi profil sumber luar tersebut.',
  'admin.auth.enableSyncPasswords' => 'Aktifkan modifikasi kata sandi pengguna (jika didukung oleh plugin otentikasi ini). Mengaktifkan opsi ini memungkinkan pengguna mengubah kata sandi mereka melalui OJS dan untuk menggunakan fitur OJS "kehilangan kata sandi" untuk mereset kata sandi yang terlupa. Fungsi-fungsi ini tidak akan tersedia bagi pengguna dalam sumber otentikasi ini jika opsi ini tidak diaktifkan.',
  'admin.auth.enableCreateUsers' => 'Aktifkan pembuatan pengguna (jika didukung oleh plugin otentikasi ini). Pengguna yang dibuat di OJS dengan sumber otentikasi ini secara otomatis ditambahkan pada sumber otentikasi luar jika memang belum ada. Jika sumber ini menjadi sumber otentikasi default, akun OJS yang dibuat melalui registrasi pengguna juga akan ditambahkan ke sumber otentikasi tersebut.',
  'admin.systemVersion' => 'Versi OJS',
  'admin.systemConfiguration' => 'Konfigurasi OJS',
  'admin.systemConfigurationDescription' => 'Konfigurasi OJS dari <tt>config.inc.php</tt>.',
  'admin.journals.createInstructions' => 'Secara otomatis Anda akan terdaftar sebagai manajer jurnal ini. Setelah membuat jurnal baru, Anda akan dialihkan ke panduan pengaturan jurnal untuk menyelesaikan pengaturan awal.',
  'admin.journals.journalSettings' => 'Pengaturan Jurnal',
  'admin.journals.noneCreated' => 'Belum ada jurnal yang dibuat.',
  'admin.contexts.confirmDelete' => 'Apakah Anda yakin ingin menghapus jurnal ini dan seluruh isinya secara permanen?',
  'admin.contexts.create' => 'Buat Jurnal',
  'admin.journals.urlWillBe' => 'Ini diisi dengan satu kata atau singkatan yang mengidentifikasi jurnal. URL jurnal akan menjadi {$sampleUrl}.',
  'admin.contexts.form.titleRequired' => 'Perlu judul.',
  'admin.contexts.form.pathRequired' => 'Perlu path.',
  'admin.contexts.form.pathAlphaNumeric' => 'Path hanya dapat berisi huruf, angka dan karakter garis bawah _, dan tanda hubung -. Wajib diawali dan diakhiri dengan huruf atau angka.',
  'admin.contexts.form.pathExists' => 'Path sudah digunakan oleh jurnal lainnya.',
  'admin.journals.enableJournalInstructions' => 'Tampilkan jurnal kepada publik di situs',
  'admin.contexts.contextDescription' => 'Deskripsi Jurnal',
  'admin.journal.pathImportInstructions' => 'Path jurnal yang sudah ada atau path yang hendak dibuat (contoh: "ojs").',
  'admin.journals.importSubscriptions' => 'Impor langganan',
  'admin.journals.transcode' => 'Transcode metadata naskah dari ISO8859-1',
  'admin.journals.redirect' => 'Buat kode untuk memetakan URL OJS 1 ke OJS 2',
  'admin.journals.form.importPathRequired' => 'Perlu path impor.',
  'admin.journals.importErrors' => 'Impor gagal',
  'admin.mergeUsers' => 'Gabungkan Beberapa Pengguna',
  'admin.mergeUsers.mergeUser' => 'Gabungkan Pengguna',
  'admin.mergeUsers.into.description' => 'Pilih pengguna yang akan memperoleh hak kepenulisan pengguna sebelumnya, tugas pengeditan, dll.',
  'admin.mergeUsers.from.description' => 'Pilih pengguna (atau beberapa pengguna) untuk digabungkan ke akun pengguna lainnya (contoh, ketika seseorang mempunyai dua akun). Akun yang pertama dipilih akan dihapus dan semua naskah, penugasan, dll akan dialihkan ke akun kedua.',
  'admin.mergeUsers.allUsers' => 'Semua Pengguna yang Terdaftar',
  'admin.mergeUsers.confirm' => 'Anda yakin hendak menggabungkan akun {$oldAccountCount} ke dalam akun "{$newUsername}"? Akun {$oldAccountCount} akan dihapus. Tindakan ini tidak dapat dibatalkan.',
  'admin.mergeUsers.noneEnrolled' => 'Tidak ada pengguna yang terdaftar.',
  'admin.scheduledTask.subscriptionExpiryReminder' => 'Pengingat Masa Berakhir Langganan',
  'admin.scheduledTask.openAccessNotification' => 'Pemberitahuan Akses Terbuka',
  'admin.scheduledTask.reviewReminder' => 'Pengingat Review',
  'admin.settings.defaultMetricDescription' => '
		Instalasi OJS Anda diatur untuk direkam lebih dari satu metrik pemakaian. Satistik pemakaian akan ditampilkan dalam beberapa konteks.
		Terdapat kasus di mana hanya satu statistik pemakaian yang harus digunakan, misalnya, untuk menampilkan urutan artikel yang paling sering digunakan atau untuk mengurutkan
		hasil pencarian. Silakan pilih salah satu jenis metrik sebagai bawaan.
	',
  'admin.settings.disableBulkEmailRoles.contextDisabled' => 'Fitur email massal telah dinonaktifkan untuk jurnal ini. Aktifkan fitur ini pada  <a href="{$siteSettingsUrl}">Administrasi > Pengaturan Situs</a>.',
  'admin.settings.disableBulkEmailRoles.description' => 'Seorang Manajer Jurnal bisa mengirimkan email massal kepada setiap peran yang terpilih berikut ini. Gunakan pengaturan ini untuk membatasi penyalahgunaan fitur notifikasi email. Sebagai contoh, akan lebih aman untuk menonaktifkan email massal ke pembaca, pengarang, atau kelompok pengguna besar lainnya yang tidak diperkenankan untuk menerima email-email sejenis itu.<br><br>Fitur email massal dapat dinonaktifkan secara menyeluruh pada jurnal ini melalui <a href="{$siteSettingsUrl}">Administrasi > Pengaturan Situs</a>.',
  'admin.settings.enableBulkEmails.description' => 'Pilihlah jurnal yang diizinkan untuk mengirim email secara massal. Jika fitur ini diaktifkan, seorang Manajer Jurnal bisa mengirimkan email ke seluruh pengguna yang terdaftar pada jurnal.<br><br>Penyalahgunaan fitur ini untuk pengiriman email yang tidak seharusnya mungkin melanggar aturan anti-spam di beberapa wilayah hukum dan bisa menyebabkan email server Anda diblokir sebagai spam. Carilah saran teknis sebelum mengaktifkan fitur ini dan pertimbangkan untuk berkonsultasi dengan Manajer Jurnal untuk memastikannya digunakan dengan tepat.<br><br>Pembatasan lebih lanjut pada fitur ini dapat diaktifkan untuk masing-masing jurnal dengan mengunjungi pengaturan pemandu pemasangan (wizard) pada daftar <a href="{$hostedContextsUrl}">Jurnal yang Dikelola</a>.',
  'admin.contexts.form.primaryLocaleNotSupported' => 'Bahasa utama harus merupakan bahasa yang didukung jurnal.',
);