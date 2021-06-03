<?php

namespace App\Http\Controllers;

use App\Models\Notes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class PagesController extends Controller
{
    public function index()
    {
        $Notes = DB::table('notes')->where('status','0')->get();
        return view('pages.index', array('Notes' => $Notes));
    }

    public function add_note()
    {
        return view('pages.note-add');
    }

    public function show($Note)
    {
        $Notes = Notes::where('id',$Note)->first();
        return view('pages.note-show' ,array('Notes' => $Notes));
    }

    public function add(Request $request)
    {
       if ($request->images != '') {
        $request->validate([
            'images' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $imageName = time().rand(0,100000).'.'.$request->images->extension();
        $request->images->move(public_path('images'), $imageName);
        $title = $request->input('title');
        $content = $request->input('content');
        DB::table('notes')->insert(
            array('note_title' => $title,
            'note_content' => $content,
            'status'=>'0',
            'note_images' => $imageName)
        );
       }
       else{
        $title = $request->input('title');
        $content = $request->input('content');
        DB::table('notes')->insert(
            array('note_title' => $title,
            'note_content' => $content,
            'status'=>'0')
        );
       }

        return redirect()->to('/');
    }
    public function design($Note)
    {
        $Notes = Notes::where('id',$Note)->first();
        return view('pages.note-design',array('Notes' => $Notes)) ;
    }
    public function changed(Request $request,$Note)
    {
        $title = $request->input('title');
        $content = $request->input('content');
        Notes::Where('id',$Note)->update(
            array('note_title' => $title,
            'note_content' => $content,
            'status'=>'0')
        );
        return redirect()->to('/show/'.$Note.'');
    }
    public function delete($Note)
    {
        $NoteStatus = Notes::Where('id',$Note)->get('status');
        if ($NoteStatus == '[{"status":0}]') {
            Notes::where('id',$Note)->update(
                array('status'=>'1')
            );
            return redirect()->to('/');
        }
        elseif ($NoteStatus == '[{"status":1}]') {
            Notes::where('id',$Note)->update(
                array('status'=>'2')
            );
            return redirect()->to('/trash');
        }

    }
    public function trash()
    {
        $Notes = Notes::where('status','1')->get();
        return view('pages.trash',array('Notes' => $Notes));
    }
    public function restore($Note)
    {
        Notes::where('id',$Note)->update(
            array('status'=>'0')
        );
        return redirect()->to('/trash');
    }
}
