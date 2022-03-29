<?php
 
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
 
class FormPenggunaController extends Controller
{
    public function register()
    {
        return view('register');
    }
 
    public function proses(Request $request)
    {
        
        $this->validate($request,[
           'Foto' => 'required|mimes:jpg,png,jpeg,pdf|max:2048',
           'Suhu' => 'required|numeric|between:35,45.5',
           'Kondisi' => 'required',
           'No_Pendaftaran' => 'required|numeric',
           'Nama' => 'required|min:5|max:20',
           'Tempat_Lahir' => 'required',
           'Tanggal_Lahir' => 'required',
           'Alamat_Tinggal' => 'required',
           'Pekerjaan' => 'required',
           'Jenis_Kelamin'  => 'required|not_in:--Jenis Kelamin',
           'Agama'  => 'required|not_in:--Agama',
           'NIK' => 'required|numeric',
           'Golongan_Darah'  => 'required|not_in:--Golongan Darah',
           'No_Hp' => 'required|numeric',
           'email' => 'required|email',
           'Klinik'  => 'required|not_in:--Klinik'

        
        ]);
        
        $foto_link = $this->saveFoto( $request, 1 );
        $request->Foto = $foto_link;
        
        return view('proses',['data' => $request]);
    }

    public function saveFoto(Request $request, $id)
    {
        $foto = $request->Foto; // typedata : file
        $foto_name = ''; // typedata : string
        if ($foto !== NULL) {
            $foto_name = 'foto' . '-' . $id . "." . $foto->extension(); // typedata : string
            $foto_name = str_replace(' ', '-', strtolower($foto_name)); // typedata : string
            $foto->storeAs(null, $foto_name, ['disk' => 'public']); // memanggil function untuk menaruh file di storage
        }
        return asset('storage') . '/' . $foto_name; // me return path/to/file.ext
    }
}

