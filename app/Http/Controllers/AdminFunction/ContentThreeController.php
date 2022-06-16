<?php

namespace App\Http\Controllers\AdminFunction;


use App\Models\ContentThree;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ContentThreeController extends Controller
{
    public function index(){

       $line = ContentThree::all();

       $line1 = $line[0]->line1;
       $line2 = $line[0]->line2;
       $line3 = $line[0]->line3;
       $line4 = $line[0]->line4;
       $line5 = $line[0]->line5;
       $line6 = $line[0]->line6;
       $line7 = $line[0]->line7;
       $line8 = $line[0]->line8;
       $line9 = $line[0]->line9;
       $line10 = $line[0]->line10;
       $line11 = $line[0]->line11;
       $line12 = $line[0]->line12;
       $line13 = $line[0]->line13;
       $line14 = $line[0]->line14;
       $line15 = $line[0]->line15;
       $line16 = $line[0]->line16;
       $line17 = $line[0]->line17;
       $line18 = $line[0]->line18;
       $header = $line[0]->header;

        return view('admin.contentthree.contentthree' ,
            compact(
                'line1',
                'line2',
                'line3',
                'line4',
                'line5',
                'line6',
                'line7',
                'line8',
                'line9',
                'line10',
                'line11',
                'line12',
                'line13',
                'line14',
                'line15',
                'line16',
                'line17',
                'line18',
                'header'
                ));
    }

    public function update(Request $request){


  $data = $request->all();


  if($data){

    $post =    ContentThree::where('id', '=', 1)->update([
        'header' => $request->header,
         'line1' => $request->line1,
         'line2' => $request->line2,
         'line3' => $request->line3,
         'line4' => $request->line4,
         'line5' => $request->line5,
         'line6' => $request->line6,
         'line7' => $request->line7,
         'line8' => $request->line8,
         'line9' => $request->line9,
         'line10' => $request->line10,
         'line11' => $request->line11,
         'line12' => $request->line12,
         'line13' => $request->line13,
         'line14' => $request->line14,
         'line15' => $request->line15,
         'line16' => $request->line16,
         'line17' => $request->line17,
         'line18' => $request->line18,
      ]);
  }if($post){
      return redirect()->route('contentthree')->with('ok', 'ok');
        }else{
            return redirect()->route('contentthree')->with('error');
        }


    }
}
