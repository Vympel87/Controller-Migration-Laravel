<?php

namespace App\Models;

class Post
{
    private static $news_posts = [
        [
            "title" => "WhatsApp Resmi Rilis Fitur Channels, Grup Komunikasi Nyaris Satu Arah",
            "slug" => "WhatsApp-Resmi-Rilis-Fitur-Channels,-Grup-Komunikasi-Nyaris-Satu-Arah",
            "image" => "whatsapp-channel-1_169.png",
            "author" => "Simon Riley",
            "body" => "Tidak ada personalisasi yang dilakukan oleh Whatsapp. 
                        Anda dapat memilih Saluran mana yang paling populer, paling aktif, paling baru, dan lain sebagainya sesuai dengan preferensi Anda masing-masing.
                        Setelah memilih akun dan berlangganan, pengguna akan menerima notifikasi dari saluran yang mereka ikuti saja. 
                        Pemilik Saluran dapat mengirimkan pesan, foto, video, dokumen, dan lain sebagainya."
        ],
        [
            "title" => "Utara Khatulistiwa Hujan dan Selatan RI Kering, Simak Penjelasan Pakar",
            "slug" => "Utara-Khatulistiwa-Hujan-dan-Selatan-RI-Kering,-Simak-Penjelasan-Pakar",
            "image" => "download.jpeg",
            "author" => "Soap Mactavis",
            "body" => "berdasarkan prediksi BMKG, angin timuran yang berasal dari Australia masih bakal aktif hingga November 2023, 
                        terutama di Indonesia bagian selatan, wilayah yang paling dekat dengan Benua Australia. Sementara itu, angin baratan, 
                        penanda awal mula musim hujan yang berasal dari Benua Asia diprediksi akan datang lebih lambat dari normalnya."
        ]
    ];

    public static function all() 
    {
        return collect(self::$news_posts);
    }

    public static function find($slug) 
    {
        $posts = static::all();
        // $post = [];
        // foreach($posts as $p) {
        //     if ($p["slug"] === $slug) {
        //         $post = $p;
        //     }
        // }

        return $posts->firstWhere('slug', $slug);
    }
}
