<?php
 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class daftarlombaCont extends Controller
{
    public function viewdaftarlomba(){
        
        $daftarlomba = DB::table('daftar_lomba')
        ->get();

            return view('daftarlomba')
            ->with('daftarlomba',$daftarlomba)
            ->with('act','viewdaftarlomba');
       
    }

     public function viewdaftarlombaWithMsg($msg){
        
        $daftarlomba = DB::table('daftar_lomba')
        ->get();

            return view('daftarlomba')
            ->with('daftarlomba',$daftarlomba)
            ->with('msg',$msg)
            ->with('act','viewdaftarlomba');
    }


     public function viewTambahdaftarlomba(){
        return view('daftarlomba')
        ->with('act','viewTambahdaftarlomba');
        

     }

     public function viewEditdaftarlomba($id_guru){
        
        $daftarlomba = DB::table('daftar_lomba')
        ->where('id_guru','=',$id_guru)->first();

        return view('daftarlomba')
        ->with('daftarlomba',$daftarlomba)
        ->with('act','viewEditdaftarlomba');
    }
     public function viewDetaildaftarlomba($id_guru){
        
        $daftarlomba = DB::table('daftar_lomba')
        ->where('id_guru','=',$id_guru)->first();

        return view('daftarlomba')
        ->with('daftarlomba',$daftarlomba)
        ->with('act','viewDetaildaftarlomba');
    }


    public function viewDeletedaftarlomba($id_guru){
        $daftarlomba = DB::table('daftar_lomba')
        ->get();

        $daftarlomba_del = DB::table('daftar_lomba')->where('id_guru','=',$id_guru)->first();

        return view('daftarlomba')
        ->with('daftarlomba',$daftarlomba)
        ->with('daftarlomba_del',$daftarlomba_del)
        ->with('act','viewDeletedaftarlomba');
    }

    public function prosesTambahdaftarlomba(Request $req){
        $id_guru = $req->id_guru;
        $nama_guru = $req->nama_guru;
        $jenis_kelamin = $req->jenis_kelamin;
        $alamat = $req->alamat;
        $email = $req->email;
        $kelas_mengajar = $req->kelas_mengajar;
       // $hasil_lomba = $req->hasil_lomba;
        //if($req->hasFile('Scan')){
         //   $req->file('Scan');
          //  $upload = Storage::putFile('public/daftarlomba', $req->file('Scan'));

          //  $storage = 'storage/';
            //$slash= '/';
           // $cacah = explode("/",$upload);
           // $Scan = $storage.$cacah[1].$slash.$cacah[2];
       // }
        //else{
          //  $Scan = 'user/img/noimage.png';
        //}
        
        
        $tambahdaftarlomba = DB::table('daftar_lomba')->insert(
            ['id_guru' => $id_guru, 
            'nama_guru' => $nama_guru, 
            'jenis_kelamin' => $jenis_kelamin, 
            'alamat' => $alamat,
            'email' => $email,
            'kelas_mengajar' => $kelas_mengajar,
            
            ]
        );

        if($tambahdaftarlomba){
            return redirect('admin/daftarlomba/msg/1');
        }else{
            return redirect('admin/daftarlomba/msg/2');;
        }

    }

    public function prosesEditdaftarlomba(Request $req){
        $id_guru = $req->id_guru;
        $nama_guru = $req->nama_guru;
        $jenis_kelamin = $req->jenis_kelamin;
        $alamat = $req->alamat;
        $email = $req->email;
        $kelas_mengajar = $req->kelas_mengajar;
      //  $hasil_lomba = $req->hasil_lomba;
      //  if($req->hasFile('Scan')){
       //     $req->file('Scan');
       //     $upload = Storage::putFile('public/daftarlomba', $req->file('Scan'));

         //   $storage = 'storage/';
         //   $slash= '/';
         //   $cacah = explode("/",$upload);
         //   $Scan = $storage.$cacah[1].$slash.$cacah[2];
        //}
       // else{
         //   $Scan = 'user/img/noimage.png';
        //}
        
        $editdaftarlomba = DB::table('daftar_lomba')
            ->where('id_guru','=',$id_guru)
            ->update([
                'nama_guru' => $nama_guru, 
                'jenis_kelamin' => $jenis_kelamin, 
                'alamat' => $alamat,
                'email' => $email,
                'kelas_mengajar' => $kelas_mengajar,
                ]);

        if($editdaftarlomba){
            return redirect('/admin/daftarlomba/msg/3');
        }else{
            return redirect('/admin/daftarlomba/msg/4');
        }
    }


    public function prosesDeletedaftarlomba($id_guru){

        $del = DB::table('daftar_lomba')->where('id_guru', '=', $id_guru)->delete();

        return redirect('admin/daftarlomba/msg/5');
    }

}
