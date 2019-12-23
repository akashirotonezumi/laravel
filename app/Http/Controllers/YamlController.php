<?php

namespace App\Http\Controllers;

use Yaml;

/**
 * 別ファイルからデータを取得
 */
class YamlController extends Controller
{
    /**
     * データを取得し返す
     *
     * @return Response
     */
    public function __invoke()
    {
        return view('page.yaml', ['data' => $this->getYaml()]);
    }

    /**
     * 取得
     */
    private function getYaml()
    {
        $yaml = Yaml::parse(
            file_get_contents(database_path('yaml.yml'))
        );

        return $yaml['yaml'];
    }
}
