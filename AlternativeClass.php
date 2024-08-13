<?php

class UsernamePasswordAuthenticator {

    public function login($username, $password) {
        // Simulate username and password authentication
        if ($username === 'user' && $password === 'pass') {
            return "User authenticated with username and password.";
        }
        return "Invalid username or password.";
    }
}

class OAuthAuthenticator {

    public function authenticateWithToken($token) {
        // Simulate OAuth token authentication
        if ($token === 'valid_token') {
            return "User authenticated with OAuth token.";
        }
        return "Invalid OAuth token.";
    }
}

// Usage example
$usernamePasswordAuth = new UsernamePasswordAuthenticator();
echo $usernamePasswordAuth->login('user', 'pass') . "\n";

$oauthAuth = new OAuthAuthenticator();
echo $oauthAuth->authenticateWithToken('valid_token') . "\n";

?>
