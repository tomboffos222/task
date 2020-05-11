<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class LinkController extends Controller
{
    //
    public function Links(){
        $links = session()->get('links');

        if($links){
            $data['links'] = array_reverse($links);
        }else{
            $data['links'] = null;

        }
        return view('welcome',$data);

    }
    public function Link($id){
        $links = session()->get('links');
        $data['link'] = $links[$id];
        return view('link',$data);
    }
    public function CreateLink(Request $request){
        $rules = [
            'link' => 'required',
            'title'=> 'required',
            'description' => 'required',
            'image'=>'required'
        ];
        $messages = [
            "image.required" => "Загрузите фото",
            "title.required" => "Введите название",
            "description" => "Введите описание",
            "link.required" => "Введите ссылку",

        ];
        $validator = $this->validator($request->all(),$rules,$messages);
        if ($validator->fails()){
            return back()->withErrors($validator->errors());
        }else{
            if($request->hasFile('image')){
                $image = $request->file('image');
                $imageName = time().Str::random(5).'.'.$image->getClientOriginalExtension();
                $imagePath = public_path('/uploads');
                $image->move($imagePath,$imageName);
                $link['title'] = $request['title'];
                $link['link'] = $request['link'];
                $link['description'] = $request['description'];
                $link['image'] = '/uploads/'.$imageName;


                $links =  session()->get('links');

                if ($links){
                    $link['id'] =array_key_last($links)+1;
                    $link['route'] = route('Link',$link['id']);

                    $links[] = $link;
                    session()->put('links',$links);
                    session()->save();
                }else{
                    $links = [];
                    $link['id'] = 0;
                    $link['route'] = route('Link',0);
                    $links[] = $link;
                    session()->put('links',$links);
                    session()->save();
                }
                return redirect()->route('Links')->with('message','Ссылка сделана');
            }
        }
    }

}
