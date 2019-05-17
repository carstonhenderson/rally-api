<?php

namespace Tests\Feature;

use App\Entry;
Use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;


class EntriesTest extends TestCase
{
    use WithFaker, RefreshDatabase;

    /** @test */
    public function a_user_can_create_an_entry()
    {
        $this->actingAs(factory(User::class)->create());

        $this->get('/entries/create')->assertOk();
    }

    /** @test */
    public function a_user_can_store_an_entry()
    {
        $this->actingAs(factory(User::class)->create());

        $attributes = collect(factory(Entry::class)->raw())->forget('user_id')->toArray();

        $this->post('/entries', $attributes);
        
        $this->assertDatabaseHas('entries', $attributes);
    }

    /** @test */
    public function a_user_can_view_entries()
    {
        $this->actingAs(factory(User::class)->create());

        $this->get('/entries')->assertOk();
    }

    /** @test */
    public function a_user_can_view_an_entry()
    {
        $this->actingAs(factory(User::class)->create());

        $entry = auth()->user()->entries()->save(factory(Entry::class)->make());

        $this->get("/entries/{$entry->id}")->assertOk();
    }

    /** @test */
    public function a_user_can_edit_an_entry()
    {
        $this->actingAs(factory(User::class)->create());

        $entry = auth()->user()->entries()->save(factory(Entry::class)->make());

        $this->get("/entries/{$entry->id}/edit")->assertOk();
    }

    /** @test */
    public function a_user_can_udpate_an_entry()
    {
        $this->actingAs(factory(User::class)->create());

        $entry = auth()->user()->entries()->save(factory(Entry::class)->make());

        $attributes = collect(factory(Entry::class)->raw())->forget('user_id')->toArray();

        $this->patch("/entries/{$entry->id}", $attributes);

        $this->assertDatabaseHas('entries', $attributes);
    }

    /** @test */
    public function a_user_can_delete_an_entry()
    {
        $this->actingAs(factory(User::class)->create());

        $entry = auth()->user()->entries()->save(factory(Entry::class)->make());

        $this->delete("/entries/{$entry->id}");

        $this->assertDatabaseMissing('entries', $entry->getAttributes());
    }

    /** @test */
    public function a_user_can_only_view_their_own_entries()
    {
        $this->actingAs(factory(User::class)->create());

        $entry = factory(Entry::class)->create();

        $this->get("/entries/{$entry->id}")->assertForbidden();
    }

    /** @test */
    public function a_user_can_only_edit_their_own_entries()
    {
        $this->actingAs(factory(User::class)->create());

        $entry = factory(Entry::class)->create();

        $this->get("/entries/{$entry->id}/edit")->assertForbidden();
    }

    /** @test */
    public function a_user_can_only_udpate_their_own_entries()
    {
        $this->actingAs(factory(User::class)->create());

        $entry = factory(Entry::class)->create();

        $attributes = collect(factory(Entry::class)->raw())->forget('user_id')->toArray();

        $this->patch("/entries/{$entry->id}", $attributes)->assertForbidden();
    }

    /** @test */
    public function a_user_can_only_delete_their_own_entries()
    {
        $this->actingAs(factory(User::class)->create());

        $entry = factory(Entry::class)->create();

        $this->delete("/entries/{$entry->id}")->assertForbidden();
    }
}
