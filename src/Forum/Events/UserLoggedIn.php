<?php namespace Flarum\Forum\Events;

use Flarum\Core\Models\User;

class UserLoggedIn
{
    public $user;

    public $token;

    public function __construct(User $user, $token)
    {
        $this->user = $user;
        $this->token = $token;
    }
}
