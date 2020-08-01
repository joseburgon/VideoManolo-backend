<?php

namespace Tests\Feature;

use App\Movie;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RetrieveMoviesTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function a_user_can_retrieve_movies()
    {
        $this->withoutExceptionHandling();

        $movies = factory(Movie::class, 2)->create();

        $response = $this->get('/api/movies');

        $response->assertStatus(200)
            ->assertJson([
                'data' => [
                    [
                        'data' => [
                            'type' => 'movies',
                            'movie_id' => $movies->first()->id,
                            'attributes' => [
                                'popularity' => $movies->first()->popularity,
                                'vote_count' => $movies->first()->vote_count,
                                'poster_path' => $movies->first()->poster_path,
                                'adult' => $movies->first()->adult,
                                'backdrop_path' => $movies->first()->backdrop_path,
                                'original_language' => $movies->first()->original_language,
                                'original_title' => $movies->first()->original_title,
                                'title' => $movies->first()->title,
                                'vote_average' => $movies->first()->vote_average,
                                'overview' => $movies->first()->overview,
                                'release_date' => $movies->first()->release_date,
                            ]
                        ]
                    ],
                    [
                        'data' => [
                            'type' => 'movies',
                            'movie_id' => $movies->last()->id,
                            'attributes' => [
                                'popularity' => $movies->last()->popularity,
                                'vote_count' => $movies->last()->vote_count,
                                'poster_path' => $movies->last()->poster_path,
                                'adult' => $movies->last()->adult,
                                'backdrop_path' => $movies->last()->backdrop_path,
                                'original_language' => $movies->last()->original_language,
                                'original_title' => $movies->last()->original_title,
                                'title' => $movies->last()->title,
                                'vote_average' => $movies->last()->vote_average,
                                'overview' => $movies->last()->overview,
                                'release_date' => $movies->last()->release_date,
                            ]
                        ]
                    ]
                ],
                'links' => [
                    'self' => url('/movies'),
                ]
            ]);
    }
}
