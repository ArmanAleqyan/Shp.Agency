<?php

namespace App\Http\Controllers\AdminFunction;


use App\Models\EventContent;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class EventContentController extends Controller
{
    public function index(){

        $post = EventContent::where('title', '!=', " ")->get();

        $eventheader = EventContent::limit('1')->orderBy('created_at', 'DESC')->get();

        return view('admin.contentevent.contentevent' , compact('post','eventheader' ));
    }

    public function create(Request $request)
    {
        $title = $request->title;
        $lefttitle = $request->lefttitle;
        $photo1 = $request->file('photo');
        $photo2 = $request->file('photo1');
        $photo3 = $request->file('photo2');
        $photo4 = $request->file('photo3');
        $icon = $request->file('icon');

        if($icon){
            $destinationPath = 'uploads/event';
            $originalFile = time() . $icon->getClientOriginalName();
            $icon->storeAs($destinationPath, $originalFile);
            $icon = $originalFile;
        }else{
            $icon = "";
        }

        if($photo1){
            $destinationPath = 'uploads/event';
            $originalFile = time() . $photo1->getClientOriginalName();
            $photo1->storeAs($destinationPath, $originalFile);
            $photo1 = $originalFile;
        }else{
            $photo1 = "";
        }
if($photo2){
    $destinationPath = 'uploads/event';
    $originalFile = time() . $photo2->getClientOriginalName();
    $photo2->storeAs($destinationPath, $originalFile);
    $photo2 = $originalFile;

}else{
    $photo2 = "";
}
if($photo3){
    $destinationPath = 'uploads/event';
    $originalFile = time() . $photo3->getClientOriginalName();
    $photo3->storeAs($destinationPath, $originalFile);
    $photo3 = $originalFile;
}else{
    $photo3 = " ";
}

if ($photo4){
    $destinationPath = 'uploads/event';
    $originalFile = time() . $photo4->getClientOriginalName();
    $photo4->storeAs($destinationPath, $originalFile);
    $photo4 = $originalFile;

}else{
    $photo4 = "";
}

            $post = EventContent::create([
                'title' => $title,
                'icon' => $icon,
                'leftitle' => $lefttitle,
                'photo1' => $photo1,
                'photo2' => $photo2,
                'photo3' => $photo3,
                'photo4' => $photo4,
            ]);

            return redirect()->route('eventcontent')->with('ok', 'ok');
    }





    public function update($id){


        $link = EventContent::where('title', '!=', " ")->get();

        $post = EventContent::where('id', '=', $id)->get();

        return view('admin.contentevent.updateevent', compact('post', 'link'));
    }

    public function updatepost(Request $request, $id){




        $title = $request->title;
        $lefttitle = $request->lefttitle;
        $photo1 = $request->file('photo');
        $photo2 = $request->file('photo1');
        $photo3 = $request->file('photo2');
        $photo4 = $request->file('photo3');
        $icon = $request->file('icon');


        $post = EventContent::where('id', '=', $id)->get();


        if($icon){
            $destinationPath = 'uploads/event';
            $originalFile = time() . $icon->getClientOriginalName();
            $icon->storeAs($destinationPath, $originalFile);
            $icon = $originalFile;
        }else{
            $icon = $post[0]->icon;
        }

        if($photo1){
            $destinationPath = 'uploads/event';
            $originalFile = time() . $photo1->getClientOriginalName();
            $photo1->storeAs($destinationPath, $originalFile);
            $photo1 = $originalFile;
        }else{
            $photo1 = $post[0]->photo1;
        }
        if($photo2){
            $destinationPath = 'uploads/event';
            $originalFile = time() . $photo2->getClientOriginalName();
            $photo2->storeAs($destinationPath, $originalFile);
            $photo2 = $originalFile;

        }else{
            $photo2 = $post[0]->photo2;
        }
        if($photo3){
            $destinationPath = 'uploads/event';
            $originalFile = time() . $photo3->getClientOriginalName();
            $photo3->storeAs($destinationPath, $originalFile);
            $photo3 = $originalFile;
        }else{
            $photo3 = $post[0]->photo3;
        }

        if ($photo4){
            $destinationPath = 'uploads/event';
            $originalFile = time() . $photo4->getClientOriginalName();
            $photo4->storeAs($destinationPath, $originalFile);
            $photo4 = $originalFile;

        }else{
            $photo4 = $post[0]->photo4;
        }

        $post = EventContent::where('id', '=', $id)->update([
            'title' => $title,
            'icon' => $icon,
            'leftitle' => $lefttitle,
            'photo1' => $photo1,
            'photo2' => $photo2,
            'photo3' => $photo3,
            'photo4' => $photo4,
        ]);

        return back()->with('ok', 'ok');
    }

    public function delete(Request $request ,$id){


        $post = EventContent::where('id', '=', $id)->delete();

        return redirect()->route('eventcontent')->with('ok', 'ok');


    }

    public function updateeventheader(Request $request){
       $header = EventContent::where('title', '!=' , " ")->update([
           'leftitle' => $request->lefttitle
       ]);
       return redirect()->route('eventcontent')->with('ok', 'ok');

    }


}
