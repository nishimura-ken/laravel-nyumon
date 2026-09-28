<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Diary;

class ApiDiaryController extends Controller
{
    //
    public function index()
    {
        $diaries = Diary::all();

        $result = $diaries->map(function ($diary) {
            return [
                'id' => $diary->id,
                'title' => $diary->title,
                'body' => $diary->body,
                'created_at' => $diary->created_at
                    ->copy()
                    ->timezone('Asia/Tokyo')
                    ->toIso8601String(),
                'updated_at' => $diary->updated_at
                    ->copy()
                    ->timezone('Asia/Tokyo')
                    ->toIso8601String(),
            ];
        });

        return response()->json($result);
    }
}
