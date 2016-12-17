<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
     use DatabaseTransactions;
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testTextHere(){
        $this->visit('/')
        ->click('Login')
        ->seePageIs('login');
    }

    public function test_Login_Work_Or_Not(){
        $this->visit('login')
                ->type("admin@example.com","email")
                ->type('pass123','password')
                ->press("Login")
                ->seePageIs("/");
    }

   
   public function testDatabase()
    {
        // Make call to application...

        $this->seeInDatabase('users', ['email' => 'admin@example.com']);
    }
}
