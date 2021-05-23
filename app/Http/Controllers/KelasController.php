<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Kelas;
use App\Models\User;

class KelasController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $kelass = Kelas::orderBy('created_at','desc')->paginate(10);
        return view('kelas/kelas', ['kelass'=>$kelass, 'users'=>$users]);
    }




    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // masukin bagian student seen
        // kemungkinan besar pake cookies, dicek kalau udah punya, berarti gak usah nambahin

        //munculin halaman materi
        $kelass = Kelas::find($id);
        return view('kelas/kelas-join')->with('kelass', $kelass);
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showTopic($id)
    {
        //munculin halaman Topic
        // $kelass = Kelas::find($id);
        // return view('kelas/kelas-join-materi')->with('kelass', $kelass);
        // return redirect();
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showVideo($id)
    {
        //munculin halaman video
        // $kelass = Kelas::find($id);
        // return view('kelas/kelas-join-video')->with('kelass', $kelass);
        // return redirect();
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showKuis($id)
    {
        //munculin halaman Kuis
        // $kelass = Kelas::find($id);
        // return view('kelas/kelas-join-kuis')->with('kelass', $kelass);
        // return redirect();
    }




    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Check for correct role
        if(auth()->user()->role == 'Student'){
            return redirect('/')->withErrors([
                'role' => 'The provided credentials do not match our records. biirrrara',
                ]);
        }

        return view('kelas/kelas-buat');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createTopic($id)
    {
        // Check for correct role
        if(auth()->user()->role == 'Student'){
            return redirect('/')->withErrors([
                'role' => 'The provided credentials do not match our records. biirrrara',
                ]);
        }

        return view('kelas/kelas-buat-materi');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createVideo($id)
    {
        // Check for correct role
        if(auth()->user()->role == 'Student'){
            return redirect('/')->withErrors([
                'role' => 'The provided credentials do not match our records. biirrrara',
                ]);
        }

        return view('kelas/kelas-buat-video');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createKuis($id)
    {
        // Check for correct role
        if(auth()->user()->role == 'Student'){
            return redirect('/')->withErrors([
                'role' => 'The provided credentials do not match our records. biirrrara',
                ]);
        }

        return view('kelas/kelas-buat-kuis');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name_kelas' => 'required|string|max:255',
            'desc_kelas' => 'required|string|max:255',
        ]);

        // Create Kelas        
        $kelas = new Kelas;
        $kelas->name_kelas = $request->input('name_kelas');
        $kelas->desc_kelas = $request->input('desc_kelas');
        $kelas->teacher_id = auth()->user()->id;
        $kelas->save();

        return redirect()->with('success', 'Kelas Created');
    }
    public function storeFile(Request $request, $id)
    {
        // video, Kuis jadi satu karena mereka aja yang terpisah dan optional
        // pas masuk ke halaman video Kuis materi, perlu kirim id juga
        // perlu di route juga dispesifikin, cek route untuk view
        // karena konsepnya mirip sama kirim id post bagian view

        if($request->file_topic){
            $this->validate($request, [
                'name_topic' => 'required|string|max:255',
                'file_topic' => 'required|mimes:csv,txt,xlx,xls,pdf|max:1999'
            ]);
        }
        if($request->file_video){
            $this->validate($request, [
                'name_video' => 'required|string|max:255',
                'file_topic' => 'required|mimes:video/x-ms-asf,video/x-flv,video/mp4,
                application/x-mpegURL,video/MP2T,video/3gpp,video/quicktime,video/x-msvideo,
                video/x-ms-wmv,video/avi,video/gif|max:1999'
            ]);
        }
        if($request->file_kuis){
            $this->validate($request, [
                'name_kuis' => 'required|string|max:255',
                'file_topic' => 'required|mimes:csv,txt,xlx,xls,pdf|max:1999'
            ]);
        }

        $kelas = Kelas::find($id);

        // Handle File Upload
        if($request->hasFile('file_topic')){
            // Get filename with the extension
            $filenameWithExt = $request->file('file_topic')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('file_topic')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('file_topic')->storeAs('public/file_kelass', $fileNameToStore);

            // cara munculin, img style="width:100%" src="/storage/cover_images/{{$post->file_topic}}"
            // perlu disamping method post di view, 'enctype' => 'multipart/form-data'
		
        } else {
            $fileNameToStore = '';
        }

        // Add something to existing Kelas
        if($request->file_topic){
            $kelas->name_topic = $request->input('name_topic');
            $kelas->file_topic = $fileNameToStore;
        }
        if($request->file_video){
            $kelas->name_video = $request->input('name_video');
            $kelas->file_video = $fileNameToStore;
        }
        if($request->file_kuis){
            $kelas->name_kuis = $request->input('name_kuis');
            $kelas->file_kuis = $fileNameToStore;
        }
        $kelas->save();

        return redirect()->with('success', 'Kelas Updated');
    }



    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // belum ada rencana bakal bisa lakuin edit
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // mungkin bisa lihat daftar kelas yang udah dibuat oleh user (teacher) tersebut
        // baru ada opsi edit, baru masuk ke laman create seperti biasa --> ini masukin ke func edit di atas
        // mungkin, tapi karena gak ada card update, jadi seharusnya aman sih
        
        $kelas = Kelas::find($id);

        // Check for correct role
        if(auth()->user()->role !== $post->user_id){
            return redirect('/')->withErrors([
                'id' => 'The provided credentials do not match our records. diff account',
                ]);
        }
        
        return redirect();
    }





    

    /**
     * Catat seorang student telah menyelesaikan kelas.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function finished(Request $request, $id)
    {
        // masukin bagian student finished
        // kemungkinan besar pake cookies, dicek kalau udah punya, berarti gak usah nambahin

        // dipanggil kalau student menekan tombol selesai

        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}