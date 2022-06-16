<?php

namespace App\Http\Controllers\AdminFunction;


use App\Http\Requests\PartnerRequest;
use App\Models\ContentFor;
use App\Models\ContentForLink;
use App\Models\partner;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ContentForControler extends Controller
{
    public function index()
    {
        $headers =  partner::all();
        $header = $headers[0]->header;


        //////////////////////////////////////

        $links = ContentForLink::all();


        $link1 = $links[0]->link1;



        return view('admin.contentfor.contentfor', compact(
            'header'
            ));
    }

    public function header(Request $request)
    {

        $post = partner::where('logo', '!=' , " ")->update([
            'header' => $request->partnerheader
        ]);

        if ($post) {
            return redirect()->route('contentfor')->with('headerok', 'headerok');
        } else {
            return redirect()->route('contentfor')->with('error');
        }

    }

    public function create(PartnerRequest $request)
    {

        $headers =  partner::all();
        $header = $headers[0]->header;
        $photo = $request->file('photo');

        if ($photo) {
            $destinationPath = 'uploads/partner';
            $originalFile = time() . $photo->getClientOriginalName();
            $photo->storeAs($destinationPath, $originalFile);
            $photo = $originalFile;
            $url = $request->url;
            $posturl = "";
            if ($url){
                $posturl = $url;
            }else{
                $posturl = "#";
            }
            $post = partner::create([
                'header' => $header,
                'line' => $request->line,
                'url' => $posturl,
                'logo' => $photo
            ]);
           
            if ($post){
                return redirect()->route('contentfor')->with('ok', 'ok');
            }else{
                return redirect()->route('contentfor')->with('error', 'error');
            }
        }else{
            return redirect()->route('contentfor')->with('error', 'error');
        }
    }

    public function line1(){

        $partner = partner::where('line', '=', 'line1')->get();

        return view('admin.contentfor.line1', compact('partner'));
    }

    public function line2(){
        $partner = partner::where('line', '=', 'line2')->get();
        return view('admin.contentfor.line2', compact('partner'));
    }

    public function line3(){
        $partner = partner::where('line', '=', 'line3')->get();
        return view('admin.contentfor.line3', compact('partner'));
    }

    public function update(Request $request, $id)
    {

        $server = partner::where('id', '=' , $id)->get();



        $photo = $request->file('photo');

        if ($photo) {
            $destinationPath = 'uploads/partner';
            $originalFile = time() . $photo->getClientOriginalName();
            $photo->storeAs($destinationPath, $originalFile);
            $photo = $originalFile;

            $url = $request->url;
            if ($url){
                $posturl = $url;
            }else{
                $posturl = "#";
            }
            $post = partner::where('id', '=', $id)->update([
                'url' => $posturl,
                'logo' => $photo,
            ]);
            if ($post){
                return  back()->with('ok', 'ok');
            }else{
                return back()->with('error', 'error');
            }
        }else{

            $url = $request->url;
            if ($url){
                $posturl = $url;
            }else{
                $posturl = "#";
            }
            $post = partner::where('id', '=', $id)->update([
                'url' => $posturl,
                'logo' => $server[0]->logo,
            ]);
            return back()->with('ok', 'ok');
        }
    }

    public function delete(Request $request, $id){

        $delete = partner::where('id', '=' , $id)->delete();

        if ($delete){
            return  back()->with('ok', 'ok');
        }

    }
}
