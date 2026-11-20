<?php

test('returns a successful response', function () {
    $response = $this->get(route('home'));

    $response->assertOk()
        ->assertViewIs('welcome')
        ->assertSee('Build something')
        ->assertSee('Laravel');
});
