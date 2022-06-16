<?php

namespace App\Http\Controllers\AdminFunction;


use App\Models\contentheader;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;


class ContentHeaderController extends Controller
{
    public function index(){
    
        $logo = contentheader::all();
        
         $genereallogo =  $logo[0]->logo;
         $canvasphoto =  $logo[0]->canvasphoto;
         $butontext = $logo[0]->buttontext;
         $generaltitle = $logo[0]->generaltitle;
        return view('admin.contentheader.ContentHeader' ,
            compact('genereallogo', 'canvasphoto','butontext','generaltitle'));
    }



    public function update(Request $request){
        $header = contentheader::all();
        $file_exists = $header[0]->canvasphoto;
        $logo_exist = $header[0]->logo;
        $logo = $request->file('logo');
        $file_exist  = $request->file('canvasphoto');
        $button = $request->buttontext;
        $general = $request->generaltitle;

        if ($file_exist){
            $destinationPath = 'uploads/header';
            $originalFile = time().$file_exist->getClientOriginalName();
            $file_exist->storeAs($destinationPath, $originalFile);
       
            $file_exist = $originalFile;
            if ($logo){
            $posts =  contentheader::where('id', '=' , 1)->update([
                'logo' => $logo,
                'canvasphoto' => $file_exist,
                'generaltitle' => $request->generaltitle,
                'buttontext' => $request->buttontext,
            ]);
            if ($posts){
                return redirect()->route('contentheader')->with('ok','ok');
            }
            }else{
                $posts =  contentheader::where('id', '=' , 1)->update([
                    'logo' => $logo_exist,
                    'canvasphoto' => $file_exist,
                    'generaltitle' => $request->generaltitle,
                    'buttontext' => $request->buttontext,
                ]);
                if ($posts){
                    return redirect()->route('contentheader')->with('ok', 'ok');
                }
            }
        }
        if ($logo){

            $destinationPath = 'uploads/header';
            $originalFile = time().$logo->getClientOriginalName();
            $logo->storeAs($destinationPath, $originalFile);
            $logo = $originalFile;
            if($file_exist){
            $posts =  contentheader::where('id', '=' , 1)->update([
                'logo' => $logo,
                'canvasphoto' => $file_exist,
                'generaltitle' => $request->generaltitle,
                'buttontext' => $request->buttontext,
            ]);
                if ($posts){
                    return redirect()->route('contentheader')->with('ok','ok');
                }
                if ($posts){
                    return redirect()->route('contentheader')->with('ok', 'ok');
                }
            }else{
                $posts =  contentheader::where('id', '=' , 1)->update([
                    'logo' => $logo,
                    'canvasphoto' => $file_exists,
                    'generaltitle' => $request->generaltitle,
                    'buttontext' => $request->buttontext,
                ]);
                if ($posts){
                    return redirect()->route('contentheader')->with('ok', 'ok');
                }
            }
        }
        if($button){
            $posts =  contentheader::where('id', '=' , 1)->update([
                'buttontext' => $request->buttontext,
            ]);
        }else{
            $posts =  contentheader::where('id', '=' , 1)->update([
                'buttontext' => " ",
            ]);
        }
        if($general){
            $posts =  contentheader::where('id', '=' , 1)->update([
                'generaltitle' => $request->generaltitle,
            ]);

        }else{
            $posts =  contentheader::where('id', '=' , 1)->update([
                'generaltitle' => " ",
            ]);

        }




    return redirect()->route('contentheader')->with('ok','ok');




    }
}
