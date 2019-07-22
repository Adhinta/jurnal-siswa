<?php
 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Auth;

class prestasisiswaCont extends Controller
{
    public function previewPDF()
    {
        // file_get_contents(asset)
    }
    public function viewprestasisiswa()
    {
        $prestasi_siswa = DB::table('prestasi_siswa')
        ->get();

        // dd(Auth::user());
        return view('prestasi_siswa', [
            'prestasi_siswa'=>$prestasi_siswa,
            'act'=>'prestasi_siswa'
        ]);
    }

    public function viewprestasisiswaWithMsg($msg)
    {
        $prestasisiswa = DB::table('prestasi_siswa')->get();

        return view('prestasisiswa')
            ->with('prestasisiswa', $prestasisiswa)
            ->with('msg', $msg)
            ->with('act', 'viewprestasisiswa');
    }


    public function viewTambahprestasisiswa()
    {
        return view('prestasi_siswa')
        ->with('act', 'viewTambahprestasisiswa');
    }

    public function viewEditprestasisiswa($id_jurnal)
    {
        $prestasisiswa = DB::table('prestasi_siswa')
        ->where('id_jurnal', '=', $id_jurnal)->first();

        return view('prestasisiswa')
        ->with('prestasisiswa', $prestasisiswa)
        ->with('act', 'viewEditprestasisiswa');
    }

    public function viewDetailprestasisiswa($id_jurnal)
    {
        $prestasisiswa = DB::table('prestasi_siswa')
        ->where('id_jurnal', '=', $id_jurnal)->first();

        return view('prestasisiswa')
        ->with('prestasisiswa', $prestasisiswa)
        ->with('act', 'viewDetailprestasisiswa');
    }

    public function viewDeleteprestasisiswa($id_jurnal)
    {
        $prestasisiswa = DB::table('prestasi_siswa')
        ->get();

        $prestasisiswa_del = DB::table('prestasi_siswa')->where('id_jurnal', '=', $id_jurnal)->first();

        return view('prestasisiswa')
        ->with('prestasisiswa', $prestasisiswa)
        ->with('prestasisiswa_del', $prestasisiswa_del)
        ->with('act', 'viewDeleteprestasisiswa');
    }

    public function prosesTambahprestasisiswa(Request $req)
    {
        $id_jurnal = $req->id_jurnal;
        $nama_guru = $req->nama_guru;
        $id_guru = $req->id_guru;
        $hari = $req->hari;
        $tanggal = $req->tanggal;
        $agenda = $req->agenda;

        // dd($req->jurnal->getClientOriginalName());

        if ($req->hasFile('jurnal')) {
            $req->file('jurnal');
            $upload = Storage::putFile('public/gambar', $req->file('jurnal'));

            $storage = 'storage/';
            $slash= '/';
            $cacah = explode("/", $upload);
            $jurnal = $storage.$cacah[1].$slash.$cacah[2];
        } else {
            $jurnal = 'user/img/noimage.png';
        }
        
        
        $tambahprestasisiswa = DB::table('prestasi_siswa')->insert(
            [
                'id_jurnal' => $id_jurnal,
                'nama_guru' => $nama_guru,
                'id_guru' => $id_guru,
                'hari' => $hari,
                'tanggal' => $tanggal,
                'agenda' => $agenda,
                'jurnal' => $jurnal,
                'jurnal_name'=>$req->jurnal->getClientOriginalName()
            ]
        );

        if ($tambahprestasisiswa) {
            return redirect('admin/prestasisiswa/msg/1');
        } else {
            return redirect('admin/prestasisiswa/msg/2');
            ;
        }
    }

    public function prosesEditprestasisiswa(Request $req)
    {
        $id_jurnal = $req->id_jurnal;
        $nama_guru = $req->nama_guru;
        $id_guru = $req->id_guru;
        $hari = $req->hari;
        $tanggal = $req->tanggal;
        $agenda = $req->agenda;
        if ($req->hasFile('jurnal')) {
            $req->file('jurnal');
            $upload = Storage::putFile('public/prestasisiswa', $req->file('jurnal'));

            $storage = 'storage/';
            $slash= '/';
            $cacah = explode("/", $upload);
            $jurnal = $storage.$cacah[1].$slash.$cacah[2];
        } else {
            $jurnal = 'user/img/noimage.png';
        }
        
        $editprestasisiswa = DB::table('prestasi_siswa')
            ->where('id_jurnal', '=', $id_jurnal)
            ->update([
            'nama_guru' => $nama_guru,
            'id_guru' => $id_guru,
            'hari' => $hari,
            'tanggal' => $tanggal,
            'agenda' => $agenda,
            'jurnal' => $jurnal,
                ]);

        if ($editprestasisiswa) {
            return redirect('/admin/prestasisiswa/msg/3');
        } else {
            return redirect('/admin/prestasisiswa/msg/4');
        }
    }


    public function prosesDeleteprestasisiswa($id_jurnal)
    {
        $del = DB::table('prestasi_siswa')->where('id_jurnal', '=', $id_jurnal)->delete();

        return redirect('admin/prestasisiswa/msg/5');
    }
}
