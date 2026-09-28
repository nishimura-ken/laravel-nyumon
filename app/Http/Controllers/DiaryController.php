<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Diary;

class DiaryController extends Controller
{
    //
    public function index()
    {
        //return 'Hello, Controller!';
        //$name = 'Laravel';
        //return view('diary.index', ['name' => $name]);
        
        // diariesテーブルから日記をすべて取得してビューに渡す
        $diaries = Diary::all();
        return view('diary.index', ['diaries' => $diaries]);
    }
}
