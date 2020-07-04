<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * ブログ的な投稿を保持するテーブルモデル
 */
class Blog extends Model
{
    // 論理削除にしたい場合 // なければ物理削除になる
    // use SoftDeletes;

    /**
     * モデルと関連しているテーブル
     *
     * @var string
     */
    protected $table = 'blog';

    /**
     * 一覧表示用のページャー情報とともに返却
     *
     * @return void
     */
    public function getView()
    {
        return $this->latest()->paginate(5);
    }

    /**
     * 特定の1件を返す
     * - id 指定がなければcreated_at最新
     *
     * @param integer $id
     * @return Blog
     */
    public function findOne(int $id = null)
    {
        if (is_null($id)) {
            return $this->latest()->first();
        }
        
        return $this->find($id);
    }
}
