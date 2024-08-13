<?php

interface AuthenticatorInterface {
    public function authenticate($credentials);
}

class UsernamePasswordAuthenticator implements AuthenticatorInterface {

    public function authenticate($credentials) {
        $username = $credentials['username'];
        $password = $credentials['password'];

        // Simulate username and password authentication
        if ($username === 'user' && $password === 'pass') {
            return "User authenticated with username and password.";
        }
        return "Invalid username or password.";
    }
}

class OAuthAuthenticator implements AuthenticatorInterface {

    public function authenticate($credentials) {
        $token = $credentials['token'];

        // Simulate OAuth token authentication
        if ($token === 'valid_token') {
            return "User authenticated with OAuth token.";
        }
        return "Invalid OAuth token.";
    }
}

class AuthenticationService {
    private $authenticator;

    public function __construct(AuthenticatorInterface $authenticator) {
        $this->authenticator = $authenticator;
    }

    public function login($credentials) {
        return $this->authenticator->authenticate($credentials);
    }
}

// Usage example
$credentials = ['username' => 'user', 'password' => 'pass'];
$usernamePasswordAuth = new AuthenticationService(new UsernamePasswordAuthenticator());
echo $usernamePasswordAuth->login($credentials) . "\n";

$credentials = ['token' => 'valid_token'];
$oauthAuth = new AuthenticationService(new OAuthAuthenticator());
echo $oauthAuth->login($credentials) . "\n";

?>
