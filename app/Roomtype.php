<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Request;

class Roomtype extends Model
{
    public function paginate()
    {
        $perPage = Request::get('per_page', 10);

        $page = Request::get('page', 1);

        $start = ($page-1)*$perPage;

        $total = '';

        $data = file_get_contents("http://ceshi.liuzhangcun.com/taobao.xhotel.roomtype.get.php".$total);

        $data = json_decode($data, true);

        extract($data);

        $movies = static::hydrate($data);

        $paginator = new LengthAwarePaginator($movies, $total, $perPage);

        $paginator->setPath(url()->current());

        return $paginator;
    }

    public static function with($relations)
    {
        return new static;
    }
}
