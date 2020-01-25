<?php 

namespace App\Repositories;

use App\User;
use Auth;

class UserRepository {

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function subjects()
    {
        return $this->user->findOrFail(Auth::id())->subscription->package->classes->subjects;
    }

}