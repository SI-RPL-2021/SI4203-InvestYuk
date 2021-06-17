<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
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
        $this->middleware('auth', ['except' => 
        // showVideo dan showKuis diberi authentication manual di view
        ['index', 'show', 'showTopic']]);
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
        // hapus session variable jika user sempat melakukan kuis sebelumnya
        Session::forget('numSoal');
        Session::forget('arrSoal');
        Session::forget('arrJawaban');
        Session::forget('cocokJawaban');
        Session::forget('totBenar');

        $kelas = Kelas::find($id);
        return view('kelas/kelas-join')->with('kelas', $kelas);
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showTopic($id)
    {
        $kelas = Kelas::find($id);

        if($kelas->name_topic == null){
            return back()->withErrors([
                'email' => 'This class does not have any topic',
            ]);
        }
        return view('kelas/menonton-materi')->with('kelas', $kelas);
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showVideo($id)
    {
        $kelas = Kelas::find($id);

        if($kelas->name_video == null){
            return back()->withErrors([
                'email' => 'This class does not have any video',
            ]);
        }
        return view('kelas/menonton-video')->with('kelas', $kelas);
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showKuis($id)
    {
        $kelas = Kelas::find($id);

        if($kelas->name_kuis == null){
            return back()->withErrors([
                'email' => 'This class does not have any kuis',
            ]);
        }
        $kuis = Kuis::where("kelas_id", $id)->first();
        
        if(Session::get('numSoal') == null){
            Session::put('numSoal', 1);

            //unpack kuisnya        
            $pathFile = $_SERVER['DOCUMENT_ROOT']."\\storage\\file_kelass\\".$kuis->name_kuis.".txt";
            $testFile = fopen($pathFile, "r");        
            $fileReaded = fread($testFile, filesize($pathFile));
            
            $arrKuis = explode('$%^', $fileReaded);

            // dd($arrKuis);

            
            if($kuis->jenis_kuis == 'pilgan'){
                for ($i=0; $i < $kuis->count_kuis; $i++) { 
                    $arrSoal[$i] = $arrKuis[7*$i + 1];
                    $arrJawaban[$i] = $arrKuis[7*$i + 6];
                    // for ($j=$i; $j < 4; $j++) { 
                        //     $arrPilihan[$j] = $arrKuis[$j + 2];
                        // }
                    }
            }else{
                for ($i=0; $i < $kuis->count_kuis; $i++) { 
                    $arrSoal[$i] = $arrKuis[3*$i + 1];
                    $arrJawaban[$i] = $arrKuis[3*$i + 2];
                }
            }

            // dd($arrSoal);

            Session::put('arrSoal', $arrSoal);
            Session::put('arrJawaban', $arrJawaban);
            
            fclose($testFile);
            
        } else{
            if(Session::get('numSoal') <= $kuis->count_kuis){
                Session::put('numSoal', Session::get('numSoal') + 1);
            }
        }
        return view('kelas/menonton-kuis')->with(['kelas' => $kelas, 'kuis' => $kuis]);
    }
    public function resultKuis($id, Request $request)
    {
        $kelas = Kelas::find($id);
        $kuis = Kuis::where("kelas_id", $id)->first();
        $cocokJawaban = $request->jawaban_kuis;

        if(Session::get('cocokJawaban') == null){
            Session::put('cocokJawaban', [$cocokJawaban]);
            if(Session::get('numSoal') != 1){
                for ($i=0; $i < $kuis->count_kuis; $i++) { 
                    Session::put('cocokJawaban', [' ']);
                }
            }
        } else{
            Session::push('cocokJawaban', $cocokJawaban);
        }
        
        
        if(($cocokJawaban) == Session::get('arrJawaban')[Session::get('numSoal') - 1]){
            Session::put('totBenar', Session::get('totBenar') + 1);
        } else{
            Session::put('totBenar', Session::get('totBenar') + 0);
        }
        
        return redirect()->route('kelas.show.kuis', $kelas->id);
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

        return view('kelas/kelas-buat-kuis3-essay');
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
            return redirect(route('kelas.create.pilgan.kuis'));
        }else{
            return redirect(route('kelas.create.essay.kuis'));
        }
    }
    public function storeFile(Request $request)
    {
        // video, Kuis jadi satu karena mereka aja yang terpisah dan optional
        // pas masuk ke halaman video Kuis materi, perlu kirim id juga
        // perlu di route juga dispesifikin, cek route untuk view
        // karena konsepnya mirip sama kirim id post bagian view
        
        // dd($request->file_topic->getMimeType());
        // dd($request);

        // if($request->file_topic){
        //     $this->validate($request, [
        //         'name_topic' => 'required|string|max:255',
        //         'file_topic' => 'required|mimes:application/pdf,text/plain,text/txt,text/csv,text/xlx,text/xls,text/pdf|max:1999'
        //     ]);
        // }
        // if($request->file_video){
        //     $this->validate($request, [
        //         'name_video' => 'required|string|max:255',
        //         'file_video' => 'required|mimes:text/plain,application/pdf,image/gif,video/x-ms-asf,video/x-flv,video/mp4,
        //         application/x-mpegURL,video/MP2T,video/3gpp,video/quicktime,video/x-msvideo,
        //         video/x-ms-wmv,video/avi,image,gif|max:1999'
        //     ]);
        // }
        // if($request->jenis_kuis == 'pilgan'){
        //     $this->validate($request, [
        //         'jenis_kuis' => 'required|string|max:255',
        //         'soal_kuis' => 'required|string|max:255',
        //         'jawaban_kuis' => 'required|string|max:255',
        //         'option1' => 'required|string|max:255',
        //         'option2' => 'required|string|max:255',
        //         'option3' => 'required|string|max:255',
        //         'option4' => 'required|string|max:255',
        //     ]);
        // }
        // if($request->jenis_kuis == 'essay'){
        //     $this->validate($request, [
        //         'jenis_kuis' => 'required|string|max:255',
        //         'soal_kuis' => 'required|string|max:255',
        //         'jawaban_kuis' => 'required|string|max:255',
        //     ]);
        // }

        $kelas = Kelas::where('teacher_id', auth()->user()->id)->latest()->first();

        // Handle File Upload
        if($request->hasFile('file_topic') or $request->hasFile('file_video')){
            $file_to_save = 'file_topic';
            if($request->file_topic == null){
                $file_to_save = 'file_video';
            }

            // dd($request->file_topic);
            // Get filename with the extension
            $filenameWithExt = $request->file($file_to_save)->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file($file_to_save)->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file($file_to_save)->storeAs('public/file_kelass', $fileNameToStore);

            // cara munculin, img style="width:100%" src="/storage/cover_images/{{$post->file_topic}}"
            // perlu disamping method post di view, 'enctype' => 'multipart/form-data'
		
        } else {
            $fileNameToStore = '';
        }

        // dd(Kuis::where('name_kuis', $kelas->id.'_'.auth()->user()->id.'_'.$request->jenis_kuis)->first());
        
        // Add something to existing Kelas
        if($request->file_topic){
            $kelas->name_topic = $request['name_topic'];
            $kelas->file_topic = $fileNameToStore;
            $kelas->save();
        }
        if($request->file_video){
            $kelas->name_video = $request['name_video'];
            $kelas->file_video = $fileNameToStore;
            $kelas->save();
        }
        if(Kuis::where('name_kuis', $kelas->id.'_'.auth()->user()->id.'_'.$request->jenis_kuis)->first() == null){
            $name_kuis = $kelas->id.'_'.auth()->user()->id.'_'.$request->jenis_kuis;
            $i = '1';
            
            $kuis = new Kuis;
            $kuis->kelas_id = $kelas->id;
            $kuis->teacher_id = auth()->user()->id;
            $kuis->name_kuis = $name_kuis;
            $kuis->jenis_kuis = $request->jenis_kuis;
            $kuis->count_kuis = $i;

            if($request->jenis_kuis == 'pilgan'){
                $kuisFile = fopen($_SERVER['DOCUMENT_ROOT']."\\storage\\file_kelass\\".$name_kuis.".txt", "w");

                $longString = 
                $i."$%^"
                .$request->soal_kuis."$%^"
                .$request->option1."$%^"
                .$request->option2."$%^"
                .$request->option3."$%^"
                .$request->option4."$%^"
                .$request->jawaban_kuis."$%^"
                ;

                fwrite($kuisFile, $longString);
                fclose($kuisFile);
                
                $kuis->file_kuis = $kuisFile;
                $kuis->save();

                $kelas->file_kuis = $name_kuis;
            }
            if($request->jenis_kuis == 'essay'){
                $kuisFile = fopen($_SERVER['DOCUMENT_ROOT']."\\storage\\file_kelass\\".$name_kuis.".txt", "w");

                $longString = 
                $i."$%^"
                .$request->soal_kuis."$%^"
                .$request->jawaban_kuis."$%^"
                ;
                
                fwrite($kuisFile, $longString);
                fclose($kuisFile);

                $kuis->file_kuis = $kuisFile;
                $kuis->save();

                $kelas->file_kuis = $name_kuis;
            }

            $kelas->name_kuis = $name_kuis;
            $kelas->save();
        }else {
            $name_kuis = $kelas->id.'_'.auth()->user()->id.'_'.$request->jenis_kuis;
            $kuis = Kuis::where('name_kuis', $name_kuis)->first();
            $i = $kuis['count_kuis'];
            $i += 1;

            if($request->jenis_kuis == 'pilgan'){
                $pathFile = $_SERVER['DOCUMENT_ROOT']."\\storage\\file_kelass\\".$kuis->name_kuis.".txt";
                $testFile = fopen($pathFile, "r");
                
                $fileReaded = fread($testFile, filesize($pathFile));
                $longString = 
                $i."$%^"
                .$request->soal_kuis."$%^"
                .$request->option1."$%^"
                .$request->option2."$%^"
                .$request->option3."$%^"
                .$request->option4."$%^"
                .$request->jawaban_kuis."$%^"
                ;
                
                $combineString = $fileReaded.$longString;

                fclose($testFile);
                $kuisFile = fopen($_SERVER['DOCUMENT_ROOT']."\\storage\\file_kelass\\".$kuis->name_kuis.".txt", "w");
                
                fwrite($kuisFile, $combineString);
                fclose($kuisFile);
                
                $kuis->count_kuis = $i;
                $kuis->file_kuis = $kuisFile;
                $kuis->save();
                
                $kelas->file_kuis = $name_kuis;
            }
            if($request->jenis_kuis == 'essay'){
                $pathFile = $_SERVER['DOCUMENT_ROOT']."\\storage\\file_kelass\\".$kuis->name_kuis.".txt";
                $testFile = fopen($pathFile, "r");
                
                $fileReaded = fread($testFile, filesize($pathFile));
                $longString = 
                $i."$%^"
                .$request->soal_kuis."$%^"
                .$request->jawaban_kuis."$%^"
                ;
                
                $combineString = $fileReaded.$longString;

                fclose($testFile);
                $kuisFile = fopen($_SERVER['DOCUMENT_ROOT']."\\storage\\file_kelass\\".$name_kuis.".txt", "w");
                
                fwrite($kuisFile, $combineString);
                fclose($kuisFile);
                
                $kuis->count_kuis = $i;
                $kuis->file_kuis = $kuisFile;
                $kuis->save();
                
                $kelas->file_kuis = $name_kuis;
            }

            $kelas->name_kuis = $name_kuis;
            $kelas->save();
        }
        return redirect()->back()->with('success', 'Kelas Updated');
        // success msg still not working
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
