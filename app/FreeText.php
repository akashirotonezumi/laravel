<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * １行だけ登録するテーブル
 */
class FreeText extends Model
{
    /**
     * モデルと関連しているテーブル
     *
     * @var string
     */
    protected $table = 'free_text';

    /**
     * ページャー返却
     */
    public function getPagination(int $num) {
        return $this->latest()->paginate($num);
    }

    /**
     * テキストを登録
     *
     * @param string $txt
     * @return void
     */
    public function setTxt(string $txt)
    {
        $this->insert([
            'txt' => $txt,
            'created_at' => now(),
        ]);
    }
}
