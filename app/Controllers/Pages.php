<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'tittle' => 'Home | Arthas',
            'tes' => ['satu', 'dua', 'tiga']
        ];
        return view('pages/home', $data);
    }

    public function about()
    {
        $data = [
            'tittle' => 'About Me',
        ];
        return view('pages/about', $data);
    }

    public function contact()
    {
        $data = [
            'tittle' => 'Contact Us',
            'Alamat' => [
                "tipe" => 'Rumah',
                "alamat" => 'Jl. abc No. 25',
                "kota" => 'Cirebon'
            ],
            [
                "tipe" => 'kantor',
                "alamat" => 'Jl. Cipto No.30',
                "kota" => 'Cirebon'
            ]
        ];
        return view('pages/contact', $data);
    }
    //--------------------------------------------------------------------

}
