<?php

it('has teste 1 page', function () {
    $response = $this->get('/teste 1');

    $response->assertStatus(200);
});
