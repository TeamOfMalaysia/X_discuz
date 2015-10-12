<?php
namespace App\Http\Controllers\Forum;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;


/**
 * @description discuz论坛的首页的类和控制器，通过apache劫持请求
 *
 * */
class ForumController extends Controller
{
    public function index()
    {

        return view('forum.index');
    }
}