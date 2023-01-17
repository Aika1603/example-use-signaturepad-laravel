<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use App\Models\Signature;

class SignatureController extends Controller
{
    public function index()
    {
        return view('welcome', ['item' => Signature::first()]);
        
    }

    public function store(Request $req)
    {
        $exist = Signature::query();
        if($exist->count() > 0){
            $query = $exist->first();
        }else{
            $query = new Signature;
        }
        $query->petugas_signature = $req->petugas_signature != '' ? self::decode_img_base64($req->petugas_signature) : $query->petugas_signature;
        $query->customer_signature = $req->customer_signature != '' ? self::decode_img_base64($req->customer_signature) : $query->customer_signature;
        $query->save();

        return redirect()->back()->with('status', 'Berhasil update');
        
    }

    public function decode_img_base64($param)
    {   
        $data_uri = $param;
        $encoded_image = explode(",", $data_uri)[1];
        $decoded_image = base64_decode($encoded_image);
        $filename = Str::random(6).'signature.png';
        Storage::disk('public')->put("signature/".$filename, $decoded_image);
        return $filename;
    }
}
