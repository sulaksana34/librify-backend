<?php

namespace App\Controllers;

use Auth0\SDK\Auth0;

class Auth extends BaseController
{
    public function __construct()
    {
        $this->auth0 = new Auth0([
            'domain' => getenv('AUTH0_DOMAIN'),
            'clientId' => getenv('AUTH0_CLIENT_ID'),
            'clientSecret' => getenv('AUTH0_CLIENT_SECRET'),
            'cookieSecret' => getenv('AUTH0_COOKIE_SECRET')
        ]);
    }

    public function index() {
        $session = $this->auth0->getCredentials();

        if ($session === null) {
            // The user isn't logged in.
            echo '<p>Please <a href="/auth/login">log in</a>.</p>';
            return;
        }

        // The user is logged in.
        echo '<pre>';
        print_r($session->user);
        echo '</pre>';

        echo '<p>You can now <a href="/auth/logout">log out</a>.</p>';
    }

    public function callback()
    {
        // Have the SDK complete the authentication flow:
        $this->auth0->exchange(base_url('/auth/callback'));

        // Finally, redirect our end user back to the / index route, to display their user profile:
        header("Location: " . base_url('/auth'));
        exit;
    }

    public function login()
    {
        // It's a good idea to reset user sessions each time they go to login to avoid "invalid state" errors, should they hit network issues or other problems that interrupt a previous login process:
        $this->auth0->clear();

        // Finally, set up the local application session, and redirect the user to the Auth0 Universal Login Page to authenticate.
        header("Location: " . $this->auth0->login(base_url('/auth/callback')));
        exit;
    }

    public function logout()
    {
        // Clear the user's local session with our app, then redirect them to the Auth0 logout endpoint to clear their Auth0 session.
        header("Location: " . $this->auth0->logout(base_url('/auth')));
        exit;
    }
}