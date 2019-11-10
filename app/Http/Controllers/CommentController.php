<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;

class CommentController extends Controller
{
  public function store(Request $request)
{

  $input = $request->all();
  $input['user_id'] = 1;

  Comment::create($input);

  return back();
}

}
