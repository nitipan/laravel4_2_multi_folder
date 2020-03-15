<?php

class RegistrationController extends BaseController
{
    public function create()
    {
        $users = User::all();
        // $user  = new User;
        // $user->email = 'test';
        // $user->save();
        return View::make('registration.create', [
            'users' => $users
        ]);
    }
}
