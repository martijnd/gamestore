<?php

namespace Tests\Feature;

 use function Pest\Laravel\getJson;
 use function Tests\authenticate;

 it('tests the homepage', function () {
     $response = $this->get('/');

     $response->assertSee('Latest games');
 });

 it('tests the api', function () {
    authenticate();
    $response = getJson('/api/games');
    $response->assertStatus(200);
 });
