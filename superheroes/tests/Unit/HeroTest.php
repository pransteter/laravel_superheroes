<?php

namespace Tests\Unit;

use App\Hero;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HeroTest extends TestCase
{
    /**
     * Create test
     *
     * @return void
     */
    public function testCreate()
    {
        $hero = factory(Hero::class)->make();

        $hero->save();

        $this->assertDatabaseHas('heroes', [
            'id' => $hero->id,
        ]);

        $hero->delete();
    }

    /**
     * Edit test
     *
     * @return void
     */
    public function testEdit()
    {
        $hero = factory(Hero::class)->create();

        $timestamp = strtotime('now');

        $hero->nickname = $hero->nickname . (string) $timestamp;

        $hero->save();

        $this->assertDatabaseHas('heroes', [
            'nickname' => $hero->nickname,
        ]);

        $hero->delete();
    }

    /**
     * Remove test
     *
     * @return void
     */
    public function testRemove()
    {
        $hero = factory(Hero::class)->create();

        $heroId = $hero->id;

        $hero->delete();

        $this->assertDatabaseMissing('heroes', [
            'id' => $heroId,
        ]);
    }

    /**
     * Http test for the Main Page.
     *
     * @return void
     */
    public function testHttpMainPage()
    {
        $response = $this->get('/hero');

        $response->assertStatus(200);
    }

    /**
     * Http test for the Create Page.
     *
     * @return void
     */
    public function testHttpCreatePage()
    {
        $response = $this->get('/hero/create');

        $response->assertStatus(200);
    }

    /**
     * Http test for the Edit Page.
     *
     * @return void
     */
    public function testHttpEditPage()
    {
        $hero = factory(Hero::class)->create();

        $response = $this->get(action('HeroController@edit', $hero->id));

        $response->assertStatus(200);

        $hero->delete();
    }

    /**
     * Http test for the View Page.
     *
     * @return void
     */
    public function testHttpViewPage()
    {
        $hero = factory(Hero::class)->create();

        $response = $this->get(action('HeroController@show', $hero->id));

        $response->assertStatus(200);

        $hero->delete();
    }
}
