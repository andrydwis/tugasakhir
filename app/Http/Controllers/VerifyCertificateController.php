<?php

namespace App\Http\Controllers;

use App\Models\CertificateUser;
use Illuminate\Http\Request;

class VerifyCertificateController extends Controller
{
    //
    public function index()
    {
        return view('user.certificate.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nomor_seri' => ['required']
        ]);

        $certificateUser = CertificateUser::where('serial_number', $request->nomor_seri)->first();
        if($certificateUser){
            return 'valid';
        }else{
            return 'gak valid';
        }
    }
}
