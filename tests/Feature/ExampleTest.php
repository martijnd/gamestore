<?php

namespace Tests\Feature;

 it('tests the homepage', function () {
     $response = $this->get('/');

     $response->assertSee('Test');
 });
