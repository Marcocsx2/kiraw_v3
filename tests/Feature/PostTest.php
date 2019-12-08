<?php

namespace Tests\Feature;

use App\PostVote;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PostTest extends TestCase
{
    
    public function it_calculates_total_votes()
    {
        $post = factory(\App\Publicaciones::class)->create();

        PostVote::create([
            'publicaciones_id' => $post->id,
            'users_id' => 1,
            'vote'=>1,
        ]);

        PostVote::create([
            'publicaciones_id' => $post->id,
            'users_id' => 2,
            'vote'=>1,
        ]);

        PostVote::create([
            'publicaciones_id' => $post->id,
            'users_id' => 3,
            'vote'=>1,
        ]);

        $total = $post->totalVotes();


        $this->assertEquals($total,3);

    }

}
