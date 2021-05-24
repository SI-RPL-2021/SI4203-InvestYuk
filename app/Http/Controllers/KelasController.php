<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Kelas;
use App\Models\Kuis;
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

        // dd(Kelas::count());

        // if(Kelas::count() !== 0){
        //     $kelass = Kelas::where('teacher_id', auth()->user()->id)->first();
        //     // echo $kelass;
        //     // echo '<br>'.$kelass->id;
        // }else {
        //     $kelass['id'] = '#';
        // }

        return view('kelas/kelas-buat');
        //, ['klass' => $kelass, 'users' => auth()->user()->id]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createTopic()
    {
        // Check for correct role
        if(auth()->user()->role == 'Student'){
            return redirect('/')->withErrors([
                'role' => 'The provided credentials do not match our records. biirrrara',
                ]);
        }
        
        // $kelass = Kelas::where('teacher_id', auth()->user()->id)->latest()->first();
        // dd($kelass);

        return view('kelas/kelas-buat-materi');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createVideo()
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
    public function createKuis()
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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createJenisKuis()
    {
        // Check for correct role
        if(auth()->user()->role == 'Student'){
            return redirect('/')->withErrors([
                'role' => 'The provided credentials do not match our records. biirrrara',
                ]);
        }

        return view('kelas/kelas-buat-kuis2');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createEssayKuis()
    {
        // Check for correct role
        if(auth()->user()->role == 'Student'){
            return redirect('/')->withErrors([
                'role' => 'The provided credentials do not match our records. biirrrara',
                ]);
        }

        return view('kelas/kelas-buat-kuis-essay');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createPilganKuis()
    {
        // Check for correct role
        if(auth()->user()->role == 'Student'){
            return redirect('/')->withErrors([
                'role' => 'The provided credentials do not match our records. biirrrara',
                ]);
        }

        return view('kelas/kelas-buat-kuis3-pg');
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

        return redirect()->back()->with('kelass', $kelas)->with('success', 'Kelas Created');
    }
    public function storeJenisKuis(Request $request)
    {
        if($request->jenisKuis == 'option1'){
            return route('kelas.create.pilgan.kuis');
        }else{
            return route('kelas.create.essay.kuis');
        }
    }
    public function storeFile(Request $request)
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
        if($request->jenis_kuis == 'pilgan'){
            $this->validate($request, [
                'jenis_kuis' => 'required|string|max:255',
                'soal_kuis' => 'required|string|max:255',
                'jawaban_kuis' => 'required|string|max:255',
                'option1' => 'required|string|max:255',
                'option2' => 'required|string|max:255',
                'option3' => 'required|string|max:255',
                'option4' => 'required|string|max:255',
            ]);
        }
        if($request->jenis_kuis == 'essay'){
            $this->validate($request, [
                'jenis_kuis' => 'required|string|max:255',
                'soal_kuis' => 'required|string|max:255',
                'jawaban_kuis' => 'required|string|max:255',
            ]);
        }

        $kelass = Kelas::where('teacher_id', auth()->user()->id)->latest()->first();

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
            $kelas->save();
        }
        if($request->file_video){
            $kelas->name_video = $request->input('name_video');
            $kelas->file_video = $fileNameToStore;
            $kelas->save();
        }
        if(!!Kuis::where('name_kuis', $kelass->id.'_'.auth()->user()->id.'_'.$request->jenis_kuis)->first()){
            $name_kuis = $kelass->id.'_'.auth()->user()->id.'_'.$request->jenis_kuis;
            $i = '1';

            $kuis = new Kuis;
            $kuis->kelas_id = $kelass->id;
            $kuis->teacher_id = auth()->user()->id;
            $kuis->name_kuis = $name_kuis;
            $kuis->jenis_kuis = $request->jenis_kuis;
            $kuis->count_kuis = $i;

            if($request->jenis_kuis == 'pilgan'){
                $kuisFile = fopen("public/file_kelass/".$name_kuis, "w");

                $arr['1']['soal'] = $request->soal_kuis.'\n';
                $arr['1']['jawaban']['a'] = $request->option1.'\n';
                $arr['1']['jawaban']['b'] = $request->option2.'\n';
                $arr['1']['jawaban']['c'] = $request->option3.'\n';
                $arr['1']['jawaban']['d'] = $request->option4.'\n';
                $arr['1']['benar'] = $request->jawaban.'\n';

                fwrite($kuisFile, $arr);
                fclose($kuisFile);
                $kuis->save();
            }
            if($request->jenis_kuis == 'essay'){
                $kuisFile = fopen("public/file_kelass/".$name_kuis, "w");

                $arr['1']['soal'] = $request->soal_kuis.'\n';
                $arr['1']['benar'] = $request->jawaban.'\n';
                
                fwrite($kuisFile, $txt);
                fclose($kuisFile);
                $kuis->save();
            }
        }else {
            $kuis = Kuis::where('name_kuis', $kelass->id.'_'.auth()->user()->id.'_'.$request->jenis_kuis)->first();
            $i = $kuis->count_kuis;

            if($request->jenis_kuis == 'pilgan'){
                $kuisFile = fopen("public/file_kelass/".$request->name_kuis, "w");
                $tempKuis = new SplFileObject($kuisFile);

                while (range($i)) {
                    $arr[$i]['soal'] = $myFile->fgets() . PHP_EOL;
                    $arr[$i]['jawaban']['a'] = $myFile->fgets() . PHP_EOL;
                    $arr[$i]['jawaban']['b'] = $myFile->fgets() . PHP_EOL;
                    $arr[$i]['jawaban']['c'] = $myFile->fgets() . PHP_EOL;
                    $arr[$i]['jawaban']['d'] = $myFile->fgets() . PHP_EOL;
                    $arr[$i]['benar'] = $myFile->fgets() . PHP_EOL;
                }

                $i += 1;
                $arr[$i]['soal'] = $request->soal_kuis.'\n';
                $arr[$i]['jawaban']['a'] = $request->option1.'\n';
                $arr[$i]['jawaban']['b'] = $request->option2.'\n';
                $arr[$i]['jawaban']['c'] = $request->option3.'\n';
                $arr[$i]['jawaban']['d'] = $request->option4.'\n';
                $arr[$i]['benar'] = $request->jawaban.'\n';

                fwrite($kuisFile, $arr);
                fclose($kuisFile);
                $kuis->save();
            }
            if($request->jenis_kuis == 'essay'){
                $kuisFile = fopen("public/file_kelass/".$request->name_kuis, "w");
                $tempKuis = new SplFileObject($kuisFile);

                while (range($i)) {
                    $arr[$i]['soal'] = $myFile->fgets() . PHP_EOL;
                    $arr[$i]['benar'] = $myFile->fgets() . PHP_EOL;
                }

                $i += 1;

                $arr[$i]['soal'] = $request->soal_kuis.'\n';
                $arr[$i]['benar'] = $request->jawaban.'\n';
                
                fwrite($kuisFile, $txt);
                fclose($kuisFile);
                $kuis->save();
            }
        }

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
