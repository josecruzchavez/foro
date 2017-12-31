<?php

// use Illuminate\Foundation\Testing\WithoutMiddleware;
// use Illuminate\Foundation\Testing\DatabaseMigrations;
// use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends FeatureTestCase
{

     function test_basic_example()
    {
         $user = factory(\App\User::class)->create([
            'name' => 'Jose Cruz',
            'email' => 'josecruzchavez10@gmail.com',
        ]);

        $this->actingAs($user, 'api')
            ->visit('api/user')
            ->see('Jose Cruz')
            ->see('josecruzchavez10@gmail.com');
    }
}
