<section>
    <h1><?php echo $judul ?></h1>
    <p align='justify'>Pada pengertian codeigniter diatas tadi dijelaskan bahwa codeigniter menggunakan metode MVC.
        apa itu MVC? kita juga harus mengetahui apa itu MVC sebelum masuk dan lebih jauh dalam belajar codeigniter.</p>
        <p> MVC adalah teknik atau konsep yang memisahkan komponen utama menjadi tiga komponen yaitu model, view dan controller.</p>
                <ol type="a">
                <li>Model</li>
    <p align='justify'>Model adalah kelas yang mempersentasikan atau memodelkan tipe data yang akan digunakan oleh aplikasi.
        Model juga dapat didefinisikan sabagai bagian penanganan yang berhubungan dengan pengolahan atau manipulasi databese.
        seperti misalnya mengambil data dari database, menginput dan pengolahan database lain
        nya.
        semua instruksi atau fungsi yang berhubungan dengan pengolahan database diletakan di dalam model. sebgai contoh,
        jika ingin membuat aplikasi untuk menghitung luas dan keliling lingkaran, maka dapat memodelkan objek lingkaran sebagai kelas model.</p>
    <p align='justify'>Sebagai catatan, semua model harus disimpan di dalam folder application\models</p>
    <li>View</li>
    <p align='justify'>View merupakan bagian yang menangani halaman user interface atau halaman yang muncul pada user(pada browser).
        Tampilan dari user interface dikumpulkan pada view untuk memisahkannya dengan controller dan model sehingga
        memudahkan web designer dalam melakukan pengembangan tampilan halaman website.</p>
    <li>Controller</li>
    <p align='justify'>Controller merupakan kumpulan intruksi aksi yang menghbungkan model dan view,
        jadi user tidak akan berhubungan dengan model secara langsung, intinya data yang tersimpan di database(model)di ambil
        oleh controller dan kemudian controller pula yang menampilkan nya ke view. Jadi controller lah yang mengolah intruksi.</p>
    <p align='justify'> Dari penjelasan tentang model dan controller di atas dapat disimpulkan bahwa controller sebagai penghubung view dan model.
        Misalnya pada aplikasi yang menampilkan data dengan menggunakan konsep mvc, controller mengambil intruksi yang 
        mengambil data pada database, kemudian co troller yang meneruskannya pada view untuk ditampilkan. jadi jelas sudah 
        dan sangat mudah dalam pengembanga  aplikasi dengan cara mvc ini karena web designer atau front-end developer
        tidak perlu lagi berhubungan dengan controller, dia hanya perlu berhubungan dengan view untuk mendesign tampilan aplikasi,
        karena back-end developer yang menangani bagian controller dan modelnya. jadi pembagian tugas pun 
        menjadi dan pengembangan aplikasi dapat dilakukan dengan cepat dan terstruktur.</p>
</section>
