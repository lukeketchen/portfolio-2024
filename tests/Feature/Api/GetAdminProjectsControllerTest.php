<?php

use App\Models\User;
use Laravel\Sanctum\Sanctum;

//it('Gets Projects if logged in', function () {
//    $user = \App\Models\User::factory()->create();
//    $project = \App\Models\Project::factory()->create();
//
//    $response = $this->actingAs($user)->getJson('/api/v1/admin/projects');
//
////    $response = $this->getJson('/api/v1/admin/projects');
//
//    dd('Test - Gets Projects if logged in', $response);
//
//    $response->assertStatus(200);
//
//
//});

test('task list can be retrieved', function () {
    Sanctum::actingAs(
        User::factory()->create(),
        ['view-tasks']
    );

    $response = $this->get('/api/task');

    $response->assertOk();
});