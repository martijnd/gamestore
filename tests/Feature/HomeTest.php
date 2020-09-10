<?php

namespace Tests\Feature;

 use function Pest\Laravel\get;
 use function Tests\login;

 it('tests the homepage', function () {
     login();
     $response = get('/');

     $response->assertSee('Latest games');
 });
