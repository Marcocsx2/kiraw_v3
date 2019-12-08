<?php

namespace Tests\Feature;

use App\Publicaciones;
use App\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PostVotesControllerTest extends TestCase
{

    use DatabaseMigrations;


   public function it_doesnt_allow_a_vote_without_being_authenticated()
   {
       $post = factory(Publicaciones::class)->create();

       $response = $this->json('POST',"/publicaciones/{$post->id}/vote", ['vote'=>1]);

       $response -> assertStatus(401);
   }


   public function it_allows_a_user_to_vote()
   {
       $user = factory(User::class)->create();
       $post = factory(Publicaciones::class)->create();


       $response = $this-> actingAs($user)

                        -> json('POST', "/publicaciones/{$post->id}/vote", ['vote'=> 1]);

        $response->assertStatus(200);
        $this->assertDatabaseHas('post_votes',[
                'publicaciones_id' => $post->id,
                'user_id' => $user->id,
                'vote'=> 1

        ]);               
   }

   public function it_returns_vote_total()
   {
       $user = factory(User::class)->create();
       $post = factory(Publicaciones::class)->create();


       $response = $this-> actingAs($user)

                        -> json('POST', "/publicaciones/{$post->id}/vote", ['vote'=> 1]);

        $response->assertStatus(200);
        
        $response->assertJson([
            'vote_total' => 1
        ]);
   }

   public function it_updates_vote_if_voted_twice()
   {
       $user = factory(User::class)->create();
       $post = factory(Publicaciones::class)->create();


       $response = $this-> actingAs($user)
                -> json('POST', "/publicaciones/{$post->id}/vote", ['vote'=> 1]);

       $response = $this-> actingAs($user)
                -> json('POST', "/publicaciones/{$post->id}/vote", ['vote'=> -1]);

        $response->assertStatus(200);
        $this->assertDatabaseHas('post_votes',[
                'publicaciones_id' => $post->id,
                'user_id' => $user->id,
                'vote'=> -1

        ]);               
   }

}
