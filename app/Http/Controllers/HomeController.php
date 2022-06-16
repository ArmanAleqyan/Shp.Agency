<?php

namespace App\Http\Controllers;

use App\Models\ContentFooter;
use App\Models\ContentFor;
use App\Models\ContentForLink;
use App\Models\contentheader;
use App\Models\ContentJobs;
use App\Models\ContentNine;
use App\Models\ContentNineTeamName;
use App\Models\ContentNineText;
use App\Models\ContentSeven;
use App\Models\ContentThree;
use App\Models\contenttwo;
use App\Models\EventContent;
use App\Models\FormContacus;
use App\Models\MenuContent;
use App\Models\partner;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class HomeController extends Controller
{
    public  function index(){
        $header = contentheader::all();
        $genereallogo =  $header[0]->logo;
        $canvasphoto =  $header[0]->canvasphoto;
        $butontext = $header[0]->buttontext;

        ///////////////////////////////////////////////

        $contenttwo = contenttwo::all();

        $abouttextone =  $contenttwo[0]->abouttextone;
        $abouttexttwo =  $contenttwo[0]->abouttextwo;
        $buttoncontact = $contenttwo[0]->buttoncontact;

        $generaltitle = $header[0]->generaltitle;

        if($generaltitle){
            $generaltitleArr = explode(" ",$generaltitle);
        }else{
            $generaltitleArr = [" " , " " , "  " , " ", " " ];
        }


///////////////////////////////////////////////////////////////////////////////
///
///

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
        $header3 = $line[0]->header;

        //////////////////////////////////////////////////////////////
        ///

        $photo =  ContentFor::all();

        $header4 = $photo[0]->header;
        $photo1 = $photo[0]->photo1;
        $photo2 = $photo[0]->photo2;
        $photo3 = $photo[0]->photo3;
        $photo4 = $photo[0]->photo4;
        $photo5 = $photo[0]->photo5;
        $photo6 = $photo[0]->photo6;
        $photo7 = $photo[0]->photo7;
        $photo8 = $photo[0]->photo8;
        $photo9 = $photo[0]->photo9;
        $photo10 = $photo[0]->photo10;
        $photo11 = $photo[0]->photo11;
        $photo12 = $photo[0]->photo12;
        $photo13 = $photo[0]->photo13;
        $photo14 = $photo[0]->photo14;
        $photo15 = $photo[0]->photo15;
        $photo16 = $photo[0]->photo16;
        $photo17 = $photo[0]->photo17;
        $photo18 = $photo[0]->photo18;

        ////////////////////////////////////////////////////
        ///
        ///
        $links = ContentForLink::all();


        $link1 = $links[0]->link1;
        $link2 = $links[0]->link2;
        $link3 = $links[0]->link3;
        $link4 = $links[0]->link4;
        $link5 = $links[0]->link5;
        $link6 = $links[0]->link6;
        $link7 = $links[0]->link7;
        $link8 = $links[0]->link8;
        $link9 = $links[0]->link9;
        $link10 = $links[0]->link10;
        $link11 = $links[0]->link11;
        $link12 = $links[0]->link12;
        $link13 = $links[0]->link13;
        $link14 = $links[0]->link14;
        $link15 = $links[0]->link15;
        $link16 = $links[0]->link16;
        $link17 = $links[0]->link17;
        $link18 = $links[0]->link18;



        /////////////////////////////////////////////////////////
        $header = contentseven::all();

        $generaltitle = $header[0]->generaltitle;
        $lefttitle = $header[0]->lefttitle;

        $logo_exist1 = $header[0]->photo1;
        $logo_exist2 = $header[0]->photo2;
        $logo_exist3 = $header[0]->photo3;
        $logo_exist4 = $header[0]->photo4;

        ///////////////////////////////////////////////////////////
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
//////////////////////////////////////////////////////////////////////////
        $job =   ContentJobs::where('job', '!=', " ")->get();

        $job2 = ContentJobs::all();

        //////////////////////////////////////////////////////////////////////////

        $contentfooter = ContentFooter::all();
        $linefooter1 = $contentfooter[0]->line1;
        $linefooter2 = $contentfooter[0]->line2;
        $linefooter3 = $contentfooter[0]->line3;
        $phone = $contentfooter[0]->phone;
        $telegram = $contentfooter[0]->telegram;
        $WhatsApp  = $contentfooter[0]->WhatsApp;
        $linefooter7 = $contentfooter[0]->line7;
        $email = $contentfooter[0]->email;
        $address = $contentfooter[0]->address;
        $privacy = $contentfooter[0]->privacy;
        $privacytext = $contentfooter[0]->privacytext;
        $cookie = $contentfooter[0]->cookie;
        $cookietext =  $contentfooter[0]->cookietext;

    
        $instagram = $contentfooter[0]->instagram;
        $facebook = $contentfooter[0]->facebook;
        $linkdine = $contentfooter[0]->linkdine;

        ////////////////////////////////////////////////////////////
        $menu = MenuContent::where('name', '!=', ' ')->get();




        /////////////////////////////////////////////////////////////
        
        // $event = EventContent::limit('3')->where('title', '!=' , " ")->orderBy('created_at', 'DESC')->get();

        // $event2 = EventContent::where('created_at', '>', $event[2]->created_at)->where('title', '!=' , " ")->orderBy('created_at', 'DESC')->get();

        // $eventheader = EventContent::limit('1')->orderBy('created_at', 'DESC')->get();

        $event = EventContent::limit('3')->where('title', '!=' , " ")->orderBy('id', 'DESC')->get();

        $event2 = EventContent::where('id', '<', $event[2]->id)->where('title', '!=' , " ")->orderBy('id', 'DESC')->get();

        $eventheader = EventContent::limit('1')->orderBy('created_at', 'DESC')->get();




//////////////////////////////////////////////////////////////////////////////////////////
        $contact = FormContacus::all();

        $contactus = $contact[0]->formcontact;

        $contactus2  = explode(" ",$contactus);

        $cv  = $contact[0]->formcv;

        $cv2 = explode(" ",$cv);

//////////////////////////////////////////////////////////////////////////////
        $partner = partner::all();
        $partner1 = partner::where('line',  '=', 'line1' )->orderBy('created_at','DESC')->limit(50)->get();

        $partner2 = partner::where('line' , '=' , 'line2')->orderBy('created_at','DESC')->limit(50)->get();
        $partner3 = partner::where('line' , '=' , 'line3')->orderBy('created_at','DESC')->limit(50)->get();




//////////////////////////////////////////////////////////////////////////////
        return view('Home.home',
            compact('genereallogo', 'canvasphoto','butontext','generaltitleArr',
                'abouttextone', 'abouttexttwo', 'buttoncontact',
                'line1','line2','line3','line4','line5','line6','line7','line8','line9','line10',
                'line11','line12','line13','line14','line15','line16','line17','line18','header3',
                'header','photo1', 'photo2', 'photo3', 'photo4', 'photo5', 'photo6',
                'photo7','photo8','photo9','photo10','photo11','photo12','photo13','photo14',
                'photo15','photo16','photo17','photo18',
                'link1', 'link2','link3','link4','link5','link6','link7','link8','link9',
                'link10','link11','link12',
                'link13','link14','link15','link16','link17','link18',
                'logo_exist1','logo_exist2','logo_exist3','logo_exist4','generaltitle','lefttitle',
                'headerTeam','photoTeam1','photoTeam2','photoTeam3',
                'photoTeam4','photoTeam5','photoTeam6','photoTeam7',
                'textTeam1', 'textTeam2','textTeam3','textTeam4','textTeam5','textTeam6','textTeam7','textTeam8',
                'name1','name2','name3','name4','name5','name6','name7', 'name8','job',
                'linefooter1', 'linefooter2', 'linefooter3', 'linefooter7', 'phone', 'telegram', 'WhatsApp', 'email', 'address',
                'privacy', 'privacytext', 'cookie', 'cookietext', 'instagram', 'facebook', 'linkdine', 'menu','event','event2',
                'contactus2', 'cv2', 'header4', 'eventheader', 'job2', 'partner1','partner2','partner3',  'partner'
                ));
    }
}
