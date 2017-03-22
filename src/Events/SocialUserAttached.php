<?php

namespace ZFort\SocialAuth\Events;

use Illuminate\Contracts\Auth\Authenticatable;
use Laravel\Socialite\Contracts\User as SocialUser;

class SocialUserAttached extends SocialEvent
{
    /**
     * @var Authenticatable
     */
    public $user;

    /**
     * @var object
     */
    public $social;

    /**
     * @var SocialUser
     */
    public $socialUser;

    /**
     * SocialUserAuthenticated constructor.
     * @param Authenticatable $user
     * @param $social
     * @param SocialUser $socialUser
     */
    public function __construct(Authenticatable $user, $social, SocialUser $socialUser)
    {
        $this->user = $user;
        $this->social = $social;
        $this->socialUser = $socialUser;
    }
}
