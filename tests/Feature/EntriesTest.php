<?php

namespace Tests\Feature;

use App\Entry;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;


class EntriesTest extends TestCase
{
    use WithFaker, RefreshDatabase;

    /** @test */
    public function a_user_can_create_an_entry()
    {        
        $this->get('/entries/create')->assertOk();
    }

    /** @test */
    public function a_user_can_store_an_entry()
    {        
        $attributes = factory(Entry::class)->raw();

        $this->post('/entries', $attributes);
        
        $this->assertDatabaseHas('entries', $attributes);
    }

    /** @test */
    public function a_user_can_view_entries()
    {
        $this->get('/entries')->assertOk();
    }

    /** @test */
    public function a_user_can_view_an_entry()
    {
        $entry = factory(Entry::class)->create();

        $this->get("/entries/{$entry->id}")->assertOk();
    }

    /** @test */
    public function a_user_can_edit_an_entry()
    {
        $entry = factory(Entry::class)->create();

        $this->get("/entries/{$entry->id}/edit")->assertOk();
    }

    /** @test */
    public function a_user_can_udpate_an_entry()
    {
        $entry = factory(Entry::class)->create();

        $attributes = factory(Entry::class)->raw();

        $this->patch("/entries/{$entry->id}", $attributes);

        $this->assertDatabaseHas('entries', $attributes);
    }

    /** @test */
    public function a_user_can_delete_an_entry()
    {
        $entry = factory(Entry::class)->create();

        $this->delete("/entries/{$entry->id}");

        $this->assertDatabaseMissing('entries', $entry->getAttributes());
    }
}
