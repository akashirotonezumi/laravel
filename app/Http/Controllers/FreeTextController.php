<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FreeText;

/**
 * テキスト投稿するページ
 */
class FreeTextController extends Controller
{
    /**
     * 一行登録用のテーブル
     *
     * @var FreeText
     */
    private $freeText;

    /**
     * 表示件数
     */
    private const VIEW_COUNT = 4;

    public function __construct(FreeText $freeText)
    {
        $this->freeText = $freeText;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $txt = $this->getViewData();

        return view('page.freeText', ['items' => $this->getViewData()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'txt' => 'required|string|max:50',
        ]);

        try {
            $this->freeText->setTxt($request->input('txt'));
        } catch (\Throwable $th) {
            //throw $th;
        }

        return view('page.freeText', ['items' => $this->getViewData()]);
    }

    /**
     * 表示データを取得
     */
    private function getViewData()
    {
        return $this->freeText->getPagination(self::VIEW_COUNT);
    }
}
