<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileUploadController extends Controller
{
    public function fileUpload() {
        return view('file-upload');
    }

    public function prosesFileUpload(Request $request) {

        // dump($request->berkas);
        //dump($request->file('file'));
        //return "Pemrosesan file upload disini";
        // if($request->hasFile('berkas')) {
        //     echo "path(): ".$request->berkas->path();
        //     echo "<br>";
        //     echo "extension(): ".$request->berkas->extension();
        //     echo "<br>";
        //     echo "getClientOriginalExtension(): ".$request->berkas->getClientOriginalExtension();
        //     echo "<br>";A
        //     echo "getMimeType(): ".$request->berkas->getMimeType();
        //     echo "<br>";
        //     echo "getClientOriginalName(): ".$request->berkas->getClientOriginalName();
        //     echo "<br>";
        //     echo "getSize(): ".$request->berkas->getSize();
        // }
        // else {
        //     echo "Tidak ada berkas yang di upload";
        // }

        $request->validate([
            'nama'=>'required|string|max:225',
            'berkas'=>'required|file|image|max:500'
        ]);

            //$path = $request->berkas->store('upload');
            //$path = $request->berkas->storeAs('upload','berkas');
            //$namaFile=$request->berkas->getClientOriginalName();
            //$extfile=$request->berkas->getClientOriginalName();
            //$namaFile = 'web-'.time().".".$extfile;
            //$path=$request->berkas->storeAs('public', $namaFile);

            $file = $request->file('berkas');
            $namaFile = $request->input('nama').".". $file->getClientOriginalExtension();

            $path = $file->move('gambar', $namaFile);
            $path = str_replace("\\","//", $path);
            // echo "Variabel path berisi: $path <br>";

            $pathBaru=asset('gambar/'. $namaFile);

            // echo "Proses upload berhasil, file berada di: $path";
            // echo "<br>";
            // echo "Tampilkan link: <a href='$pathBaru'>$pathBaru</a>";
            //echo $request->berkas->getClientOriginalName(). " lolos validasi";

            echo "Gambar berhasil di upload ke <a href='$pathBaru'>$namaFile</a>";
            echo "<br><br>";
            echo "<img src='$pathBaru'>";
    }
}
