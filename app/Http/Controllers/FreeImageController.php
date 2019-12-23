<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

/**
 * 画像保存
 */
class FreeImageController extends Controller
{
    /**
     * 保存先ディレクトリ名
     */
    private const DIR_NAME = 'public/freeImages';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $images = $this->getImages();

        return view('page.freeImage', ['images' => $images]);
    }

    /**
     * 選択画像をアップロードする
     *
     * @param Request $request
     * @return void
     */
    public function upload(Request $request)
    {
        $validatedData = $request->validate([
            'img' => 'required|file|image|mimetypes:image/jpeg,image/png|max:100'
        ]);

        if ($request->file('img')->isValid()) {
            $request->file('img')->store(self::DIR_NAME);
        }

        $images = $this->getImages();

        return view('page.freeImage', ['images' => $images]);
    }

    /**
     * 表示情報を取得
     *
     * @return array [src]
     */
    private function getImages()
    {
        $files = Storage::files(self::DIR_NAME);

        $images = [];
        foreach ($files as $file) {
            $images[] = Storage::url($file);
        }

        return $images;
    }
}
