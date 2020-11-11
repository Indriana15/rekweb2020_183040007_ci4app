<?php

namespace App\Controllers;



class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | WebProgrammingUNPAS',
            'tes' => ['satu', 'dua', 'tiga']
        ];
        return view('pages/home', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'About Me'
        ];
        return view('pages/about', $data);
    }

    public function contact()
    {
        $data = [
            'title' => 'Contact Us',
            'alamat' => [
                [
                    'tipe' => 'Rumah',
                    'alamat' => 'JL. abc No.123',
                    'kota' => 'Bandung'
                ],
                [
                    'tipe' => 'Kantor',
                    'alamat' => 'JL. Setiabudi No.193',
                    'kota' => 'Bandung'
                ]
            ]
        ];

        return view('pages/contact', $data);
    }

    //--------------------------------------------------------------------

}
