<?php

namespace App\Http\Controllers\Painel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


//adicionando o model posts
use App\Models\Post;

class PostsController extends Controller
{
    //

protected $model;
protected $name = 'post';
protected $view = 'painel.post';
protected $route = 'posts';



  public function __construct (Post $posts)

  {
    $this->model =$posts;
  }

}
