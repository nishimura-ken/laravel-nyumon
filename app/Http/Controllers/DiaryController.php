<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Diary;

class DiaryController extends Controller
{
    // 日記一覧画面
    public function index()
    {
        //return 'Hello, Controller!';
        //$name = 'Laravel';
        //return view('diary.index', ['name' => $name]);
        
        // diariesテーブルから日記をすべて取得してビューに渡す
        $diaries = Diary::all();
        return view('diary.index', ['diaries' => $diaries]);
    }

    // 個別画面
    public function show($id)
    {
        // diariesテーブルからIDで検索してビューに渡す
        $diary = Diary::find($id);
        return view('diary.show', ['diary' => $diary]);
    }

    // 日記作成画面
    public function create()
    {
        return view('diary.create');
    }

    // 日記の保存
    public function save(Request $request)
    {
        // 入力内容を検証する
        $validated = $request->validate([
            'title' => 'required|max:20',
            'body' => 'required',
        ]);

        // 新しい日記を作成する
        $diary = new Diary();

        $diary->date = date('Y-m-d');
        $diary->title = $validated['title'];
        $diary->body = $validated['body'];

        // データベースに保存する
        $diary->save();

        // 保存後に入力フォームへ戻る
        return redirect()
            ->route('diary.create')
            ->with('message', '保存しました');
    }
}
