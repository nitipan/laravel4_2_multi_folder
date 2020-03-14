<?php

class RegistrationController extends BaseController
{
    public function create()
    {
        return View::make('registration.create');
    }
}
