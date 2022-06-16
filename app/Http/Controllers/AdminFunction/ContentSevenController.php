<?php

namespace App\Http\Controllers\AdminFunction;


use App\Models\ContentSeven;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ContentSevenController extends Controller
{
    public function index(){

        $header = contentseven::all();

        $generaltitle = $header[0]->generaltitle;
        $lefttitle = $header[0]->lefttitle;

        $logo_exist1 = $header[0]->photo1;
        $logo_exist2 = $header[0]->photo2;
        $logo_exist3 = $header[0]->photo3;
        $logo_exist4 = $header[0]->photo4;
        return view('admin.contentseven.contentseven', compact(
            'logo_exist1','logo_exist2','logo_exist3','logo_exist4','generaltitle','lefttitle'));
    }

    public function update(Request $request){

        $header = contentseven::all();
        $logo_exist1 = $header[0]->photo1;
        $logo_exist2 = $header[0]->photo2;
        $logo_exist3 = $header[0]->photo3;
        $logo_exist4 = $header[0]->photo4;


        $logo = $request->file('photo1');
        $logo2 = $request->file('photo2');
        $logo3 = $request->file('photo3');
        $logo4 = $request->file('photo4');

        $general = $request->generaltitle;

        $left = $request->lefttitle;


        if ($logo){
            $destinationPath = 'uploads/contentseven';
            $originalFile = time().$logo->getClientOriginalName();
            $logo->storeAs($destinationPath, $originalFile);
            $logo = $originalFile;
            $posts =  contentseven::where('id', '=' , 1)->update([
                'photo1' => $logo,
                'photo2' => $logo_exist2,
                'photo3' => $logo_exist3,
                'photo4' => $logo_exist4,
                'generaltitle' =>$general,
                'lefttitle' => $left,
            ]);
        }
        if ($logo2){
            $destinationPath = 'uploads/contentseven';
            $originalFile = time().$logo2->getClientOriginalName();
            $logo2->storeAs($destinationPath, $originalFile);
            $logo2 = $originalFile;
            $posts =  contentseven::where('id', '=' , 1)->update([
                'photo1' => $logo_exist1,
                'photo2' => $logo2,
                'photo3' => $logo_exist3,
                'photo4' => $logo_exist4,
                'generaltitle' => $general,
                'lefttitle' => $left,
            ]);
        }
        if ($logo3){
            $destinationPath = 'uploads/contentseven';
            $originalFile = time().$logo3->getClientOriginalName();
            $logo3->storeAs($destinationPath, $originalFile);
            $logo3 = $originalFile;
            $posts =  contentseven::where('id', '=' , 1)->update([
                'photo1' => $logo_exist1,
                'photo2' => $logo_exist2,
                'photo3' => $logo3,
                'photo4' => $logo_exist4,
                'generaltitle' => $general,
                'lefttitle' => $left,
            ]);
        }
        if ($logo4){
            $destinationPath = 'uploads/contentseven';
            $originalFile = time().$logo4->getClientOriginalName();
            $logo4->storeAs($destinationPath, $originalFile);
            $logo4 = $originalFile;
            $posts =  contentseven::where('id', '=' , 1)->update([
                'photo1' => $logo_exist1,
                'photo2' => $logo_exist2,
                'photo3' => $logo_exist3,
                'photo4' => $logo4,
                'generaltitle' => $general,
                'lefttitle' => $left,
            ]);
        }
        if ($general){
            $posts =  contentseven::where('id', '=' , 1)->update([
                'generaltitle' => $request->generaltitle,
            ]);
        }else{
            $posts =  contentseven::where('id', '=' , 1)->update([
                'generaltitle' => " ",
            ]);
        }
        if ($left){
            $posts =  contentseven::where('id', '=' , 1)->update([
                'lefttitle' => $left,
            ]);
        }else{
            $posts =  contentseven::where('id', '=' , 1)->update([
                'lefttitle' => " ",
            ]);
        }
        if($posts){
            return redirect()->route('contentseven')->with('ok', 'ok');
        }else{
            return redirect()->route('contentseven')->with('error');
        }



    }
}
