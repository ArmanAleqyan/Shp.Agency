<?php

namespace App\Http\Controllers\AdminFunction;


use App\Models\FormContacus;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class FormContactusController extends Controller
{
public function index(){

    $contact = FormContacus::all();

    $contactus = $contact[0]->formcontact;
    $cv  = $contact[0]->formcv;

    return view('admin.contentform.formcontact', compact('contactus', 'cv'));
}


public function create(Request $request){
    $contact = $request->form;

    $post = FormContacus::where('id', '=', 1)->update([
       'formcontact' => $contact
    ]);

    if ($post){
        return redirect()->route('formcontactus')->with('ok', 'ok');
    }
}

  public function creates(Request $request){
      $contact = $request->form;

      $post = FormContacus::where('id', '=', 1)->update([
          'formcv' => $contact
      ]);

      if ($post){
          return redirect()->route('formcontactus')->with('ok', 'ok');
      }
  }
}
