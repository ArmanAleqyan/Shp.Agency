<?php

namespace App\Http\Controllers\AdminFunction;


use App\Models\ContentNine;
use App\Models\ContentNineTeamName;
use App\Models\ContentNineText;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ContentNineController extends Controller
{
    public  function index(){

        $photo = ContentNine::all();
        $headerTeam = $photo[0]->header;
        $photoTeam1 = $photo[0]->photo1;
        $photoTeam2 = $photo[0]->photo2;
        $photoTeam3 = $photo[0]->photo3;
        $photoTeam4 = $photo[0]->photo4;
        $photoTeam5 = $photo[0]->photo5;
        $photoTeam6 = $photo[0]->photo6;
        $photoTeam7 = $photo[0]->photo7;

        $text = ContentNineText::all();
        $textTeam1 = $text[0]->text1;
        $textTeam2 = $text[0]->text2;
        $textTeam3 = $text[0]->text3;
        $textTeam4 = $text[0]->text4;
        $textTeam5 = $text[0]->text5;
        $textTeam6 = $text[0]->text6;
        $textTeam7 = $text[0]->text7;
        $textTeam8 = $text[0]->text8;

        $name = ContentNineTeamName::all();
        $name1 = $name[0]->name1;
        $name2 = $name[0]->name2;
        $name3 = $name[0]->name3;
        $name4 = $name[0]->name4;
        $name5 = $name[0]->name5;
        $name6 = $name[0]->name6;
        $name7 = $name[0]->name7;
        $name8 = $name[0]->name8;


        return view('admin.contentnine.contentnine', compact('headerTeam',
            'photoTeam1','photoTeam2','photoTeam3',
        'photoTeam4','photoTeam5','photoTeam6','photoTeam7',
            'textTeam1', 'textTeam2','textTeam3','textTeam4','textTeam5','textTeam6','textTeam7','textTeam8',
            'name1','name2','name3','name4','name5','name6','name7', 'name8'));
    }

    public function update1(Request $request){
        $post = ContentNine::where('id', '=', 1)->update([
            'header' => $request->header
        ]);

        if ($post) {
            return redirect()->route('contentnine')->with('ok', 'ok');
        } else {
            return redirect()->route('contentnine')->with('error');
        }

    }
    public function update2(Request $request){

        $photo = $request->file('photo1');

         if ($photo) {
            $destinationPath = 'uploads/Team';
            $originalFile = time() . $photo->getClientOriginalName();
            $photo->storeAs($destinationPath, $originalFile);
            $photo = $originalFile;
            $post = ContentNine::where('id', '=', 1)->update([
                'photo1' => $photo
            ]);

        }



        $name = $request->name1;

        if($name){
            $update =    ContentNineTeamName::where('id', '=' , 1)->update([
                'name1' => $name
            ]);
        }else{
            $update =    ContentNineTeamName::where('id', '=' , 1)->update([
                'name1' => ""
            ]);
        }

        $link = ContentNineText::where('id', '=', 1)->update([
            'text1' => $request->text1
        ]);
        if($link){
            return redirect()->route('contentnine')->with('ok', 'ok');
        }else {
            $link = ContentNineText::where('id', '=', 1)->update([
                'text1' => " "
            ]);
            return redirect()->route('contentnine')->with('error');
        }


    }
    public function update3(Request $request){

        $photo = $request->file('photo2');

        if ($photo) {
            $destinationPath = 'uploads/Team';
            $originalFile = time() . $photo->getClientOriginalName();
            $photo->storeAs($destinationPath, $originalFile);
            $photo = $originalFile;

            $post = ContentNine::where('id', '=', 1)->update([
                'photo2' => $photo
            ]);

        }
        $link = ContentNineText::where('id', '=', 1)->update([
            'text2' => $request->text2
        ]);
        $name = $request->name2;

        if($name){
            $update =    ContentNineTeamName::where('id', '=' , 1)->update([
                'name2' => $name
            ]);
            if($update){
                return redirect()->route('contentnine')->with('ok', 'ok');
            }else {
                return redirect()->route('contentnine')->with('error');
            }
        }else{
            $update =    ContentNineTeamName::where('id', '=' , 1)->update([
                'name2' => " "
            ]);
        }



        if($link){
            return redirect()->route('contentnine')->with('ok', 'ok');
        }else {
            return redirect()->route('contentnine')->with('error');
        }
    }
    public function update4(Request $request){

        $photo = $request->file('photo3');

        if ($photo) {
            $destinationPath = 'uploads/Team';
            $originalFile = time() . $photo->getClientOriginalName();
            $photo->storeAs($destinationPath, $originalFile);
            $photo = $originalFile;

            $post = ContentNine::where('id', '=', 1)->update([
                'photo3' => $photo
            ]);


        }

        $name = $request->name3;

        if($name){
            $update =    ContentNineTeamName::where('id', '=' , 1)->update([
                'name3' => $name
            ]);
        }else{
            $update =    ContentNineTeamName::where('id', '=' , 1)->update([
                'name3' => ""
            ]);
        }

        $link = ContentNineText::where('id', '=', 1)->update([
            'text3' => $request->text3
        ]);
        if($link){
            return redirect()->route('contentnine')->with('ok', 'ok');
        }else {
            return redirect()->route('contentnine')->with('error');
        }
    }
    public function update5(Request $request){
        $photo = $request->file('photo4');

        $name = $request->name4;

        if($name){
            $update =    ContentNineTeamName::where('id', '=' , 1)->update([
                'name4' => $name
            ]);
        }else{
            $update =    ContentNineTeamName::where('id', '=' , 1)->update([
                'name4' => ""
            ]);
        }



        if ($photo) {
            $destinationPath = 'uploads/Team';
            $originalFile = time() . $photo->getClientOriginalName();
            $photo->storeAs($destinationPath, $originalFile);
            $photo = $originalFile;

            $post = ContentNine::where('id', '=', 1)->update([
                'photo4' => $photo
            ]);

        }

        $link = ContentNineText::where('id', '=', 1)->update([
            'text4' => $request->text4
        ]);

        if($link){
            return redirect()->route('contentnine')->with('ok', 'ok');
        }else {
            $link = ContentNineText::where('id', '=', 1)->update([
                'text4' => ""
            ]);
            return redirect()->route('contentnine')->with('error');
        }
    }
    public function update6(Request $request){

        $photo = $request->file('photo5');


        $name = $request->name5;

        if($name){
            $update =    ContentNineTeamName::where('id', '=' , 1)->update([
                'name5' => $name
            ]);
        }else{
            $update =    ContentNineTeamName::where('id', '=' , 1)->update([
                'name5' => ""
            ]);
        }


        if ($photo) {
            $destinationPath = 'uploads/Team';
            $originalFile = time() . $photo->getClientOriginalName();
            $photo->storeAs($destinationPath, $originalFile);
            $photo = $originalFile;

            $post = ContentNine::where('id', '=', 1)->update([
                'photo5' => $photo
            ]);

        }

        $link = ContentNineText::where('id', '=', 1)->update([
            'text5' => $request->text5
        ]);

        if($link){
            return redirect()->route('contentnine')->with('ok', 'ok');
        }else {
            $link = ContentNineText::where('id', '=', 1)->update([
                'text5' => ""
            ]);
            return redirect()->route('contentnine')->with('error');
        }
    }







    public function update7(Request $request){

        $photo = $request->file('photo6');

        $name = $request->name6;

        if ($photo) {
            $destinationPath = 'uploads/Team';
            $originalFile = time() . $photo->getClientOriginalName();
            $photo->storeas($destinationPath, $originalFile);
            $photo = $originalFile;

            $post = ContentNine::where('id', '=', 1)->update([
                'photo6' => $photo
            ]);

        }

        if($name){
            $update =    ContentNineTeamName::where('id', '=' , 1)->update([
                'name6' => $name
            ]);
        }else{
            $update =    ContentNineTeamName::where('id', '=' , 1)->update([
                'name6' => ""
            ]);
        }


        if($name){
            $link = ContentNineText::where('id', '=', 1)->update([
                'text6' => $request->text6
            ]);
            return redirect()->route('contentnine')->with('ok', 'ok');
        }else {

            $link = ContentNineText::where('id', '=', 1)->update([
                'text6' => ""
            ]);
            return redirect()->route('contentnine')->with('error');
        }
    }






    public function update8(Request $request){

        $photo = $request->file('photo7');




        if ($photo) {
            $destinationPath = 'uploads/Team';
            $originalFile = time() . $photo->getClientOriginalName();
            $photo->storeAs($destinationPath, $originalFile);
            $photo = $originalFile;

            $post = ContentNine::where('id', '=', 1)->update([
                'photo7' => $photo
            ]);
        }

        $name = $request->name7;

        if($name){
            $update =    ContentNineTeamName::where('id', '=' , 1)->update([
                'name7' => $name
            ]);
        }else{
            $update =    ContentNineTeamName::where('id', '=' , 1)->update([
                'name7' => " "
            ]);
        }

        $link = ContentNineText::where('id', '=', 1)->update([
            'text7' => $request->text7
        ]);

        if($link){
            return redirect()->route('contentnine')->with('ok', 'ok');
        }else {
            $link = ContentNineText::where('id', '=', 1)->update([
                'text7' => ""
            ]);
            return redirect()->route('contentnine')->with('error');
        }
    }

    public function delete1(Request $request){
        
    $post = ContentNine::where('id', '=', 1)->update([
        'photo1' => " "
    ]);
    $post = ContentNineText::where('id', '=', 1)->update([
        'text1' => " "
    ]);
    $post =    ContentNineTeamName::where('id', '=' , 1)->update([
        'name1' => " "
    ]);

        return redirect()->route('contentnine')->with('ok', 'ok');
    
    }

    public function delete2(Request $request){
 
    $post = ContentNine::where('id', '=', 1)->update([
        'photo2' => " "
    ]);
    $post = ContentNineText::where('id', '=', 1)->update([
        'text2' => " "
    ]);
    $post =    ContentNineTeamName::where('id', '=' , 1)->update([
        'name2' => " "
    ]);

        return redirect()->route('contentnine')->with('ok', 'ok');
    
    
  }
   
        public function delete3(Request $request){
        
            $post = ContentNine::where('id', '=', 1)->update([
                'photo3' => " "
            ]);
            $post = ContentNineText::where('id', '=', 1)->update([
                'text3' => " "
            ]);
            $post =    ContentNineTeamName::where('id', '=' , 1)->update([
                'name3' => " "
            ]);
        
          
                return redirect()->route('contentnine')->with('ok', 'ok');
            
            }
            public function delete4(Request $request){
        
                $post = ContentNine::where('id', '=', 1)->update([
                    'photo4' => " "
                ]);
                $post = ContentNineText::where('id', '=', 1)->update([
                    'text4' => " "
                ]);
                $post =    ContentNineTeamName::where('id', '=' , 1)->update([
                    'name4' => " "
                ]);
            
               
                    return redirect()->route('contentnine')->with('ok', 'ok');
                
                }
                public function delete5(Request $request){
        
                    $post = ContentNine::where('id', '=', 1)->update([
                        'photo5' => " "
                    ]);
                    $post = ContentNineText::where('id', '=', 1)->update([
                        'text5' => " "
                    ]);
                    $post =    ContentNineTeamName::where('id', '=' , 1)->update([
                        'name5' => " "
                    ]);
                
                   
                        return redirect()->route('contentnine')->with('ok', 'ok');
                    
                    }
                    public function delete6(Request $request){
        
                        $post = ContentNine::where('id', '=', 1)->update([
                            'photo6' => " "
                        ]);
                        $post = ContentNineText::where('id', '=', 1)->update([
                            'text6' => " "
                        ]);
                        $post =    ContentNineTeamName::where('id', '=' , 1)->update([
                            'name6' => " "
                        ]);
                    
                      
                            return redirect()->route('contentnine')->with('ok', 'ok');
                        
                        }
                        public function delete7(Request $request){
        
                            $post = ContentNine::where('id', '=', 1)->update([
                                'photo7' => " "
                            ]);
                            $post = ContentNineText::where('id', '=', 1)->update([
                                'text7' => " "
                            ]);
                            $post =    ContentNineTeamName::where('id', '=' , 1)->update([
                                'name7' => " "
                            ]);
                        
                            
                                return redirect()->route('contentnine')->with('ok', 'ok');
                            
                            }
}
