<?php

namespace App\Http\Controllers\AdminFunction;


use App\Models\contenttwo;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;


class ContentTwoController extends Controller
{
    public function index(){

        $contenttwo = contenttwo::all();

        $abouttextone =  $contenttwo[0]->abouttextone;
        $abouttexttwo =  $contenttwo[0]->abouttextwo;
        $buttoncontact = $contenttwo[0]->buttoncontact;

        return view('admin.contenttwo.contenttwo' ,
            compact('abouttextone', 'abouttexttwo', 'buttoncontact'));
    }


    public function update(Request $request){



        $header = contenttwo::all();


         $data = $request->all();

        if($data){

          

            $posts = contenttwo::where('id', '=', '1')->update([
                'abouttextone' => $request->abouttextone,
                'abouttextwo' => $request->abouttextwo,
                'buttoncontact' => $request->buttoncontact,
            ]);
        }else{
        
            $posts = contenttwo::where('id', '=', '1')->update([
                'abouttextone' => " ",

                'abouttextwo' => " ",
                'buttoncontact' =>  " ",
            ]);
        }
        if($posts){
            return redirect()->route('contenttwo')->with('ok' , 'ok');
        }else{
            return redirect()->route('contenttwo')->with('error');
        }

    }
}
