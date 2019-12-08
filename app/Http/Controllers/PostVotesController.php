<?php

namespace App\Http\Controllers;

use App\PostVote;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\PostDec;

class PostVotesController extends Controller
{
    //
    public function store(Request $request, $postId)
    {
        $vote = (int) $request->get('vote');
        $userId = auth()->user()->id;


        $postVote = PostVote::firstOrNew(['user_id'=> $userId, 'publicaciones_id'=>$postId]);

        if(! $postVote->exists){
            $postVote->vote = $vote;
            $postVote->save();
        }else{

            PostVote::where(['users_id' => $userId, 'publicaciones_id' => $postId])->upate(['vote' => $vote]);

        }


        // $postVote = new PostVote();
        // $postVote->users_id = $userId;
        // $postVote->publicaciones_id = $postId;
        // $postVote->vote = $vote;
        // $postVote->save();

        return response()->json([
            'vote_total'=> 1
        ]);
    }
}
