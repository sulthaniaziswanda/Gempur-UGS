<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Upload;
use Notification;
use App\Notifications\NewUploadNotification;

class UploadsController extends Controller
{
    /**
     * Show a list of all of the application's users.
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $uploads = Upload::all();
        return view('uploads.index', compact('uploads'));
    }

    public function create()
    {   
        return view('uploads.create');
    }

    public function store(Request $request)
    {   
        
        $request -> validate([
            'bukti_upload'  => 'required|file|image|mimes:jpeg,png,jpg|max:4096',
            'keterangan'    => 'required'
        ]);

        $file = $request->file('bukti_upload');
        $nama_file = time()."_".$file->getClientOriginalName();

        $tujuan_upload = 'images';
        $file->move($tujuan_upload,$nama_file);
        $uploads = upload::create([
			'bukti_upload'  => $nama_file,
			'keterangan'    => $request->keterangan,
        ]);
        $users = user::all();
        Notification::send($users, new NewUploadNotification($uploads));
        return redirect('/uploads/create')->with('status', 'File Berhasil Diupload');
    }

    public function show(Upload $upload)
    {
        return view('uploads.show', compact('upload'));
    }

    public function destroy(Upload $upload)
    {
        Upload::destroy($upload->id);
        return redirect('/uploads')->with('status', 'Data Berhasil Dihapus');
    }
}
