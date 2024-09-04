<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('main');
    }

    public function php()
    {
        $nohp = '60126555446';
        $text = "*NOTIFIKASI eVOC*

        Hi Alisa,

        No Rujukan : Test12345

        Terima Kasih kerana menggunakan sistem ini. Maklumbalas dan tindakan akan diberikan dengan kadar segera.
        Anda boleh menyemak maklumbalas yang diberikan melalui sistem eVOC dan notifikasi akan diberikan dari semasa ke semasa.

        Sekian Terima Kasih.


        **Notifikasi komputer. Tidak perlu dibalas.
        ";


        $curl = curl_init();

        $data = [
        'phone_number' => $nohp,
        'message' => $text,
        ];

        curl_setopt_array($curl, [
        CURLOPT_URL => 'https://onsend.io/api/v1/send',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => json_encode($data),
        CURLOPT_HTTPHEADER => [
        'Accept: application/json',
        'Authorization: Bearer 4731e3a29396a9b37131760a122b1c5e8cd9892cc7edbd375d1b35473b6a0c9c',
        'Content-Type: application/json',
        ],
        ]);

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo 'cURL Error #:' . $err;
        } else {
            echo $response;
        }
    }

    public function axios()
    {
        return view('axios');
    }

    public function ajax()
    {
        return view('ajax');
    }
    public function fetch()
    {
        return view('fetch');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
