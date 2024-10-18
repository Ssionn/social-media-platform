<?php

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use function Pest\Laravel\actingAs;
use function Pest\Laravel\assertDatabaseHas;

uses(RefreshDatabase::class);

it('allows a user to log in', function () {
    $user = User::factory()->create([
        'name' => 'John Doe',
        'username' => 'johndoe',
        'email' => 'john@doe.com',
        'password' => Hash::make('password'),
    ]);

    actingAs($user)
        ->get('/app')
        ->assertStatus(200);
});

it('allows a user to register', function () {
   $user = User::create([
       'id' => 1,
       'name' => 'John Doe',
       'username' => 'johndoe',
       'email' => 'john@doe.com',
       'password' => Hash::make('password'),
   ]);

   expect($user->name)->toBe('John Doe')
       ->and($user->username)->toBe('johndoe')
       ->and($user->email)->toBe('john@doe.com')
       ->and($user->password)->toBe($user->password);

   assertDatabaseHas('users', [
       'name' => 'John Doe',
   ]);
});
