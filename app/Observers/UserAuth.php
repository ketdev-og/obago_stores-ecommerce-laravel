<?php

namespace App\Observers;

use App\Http\Controllers\mailController;
use App\Models\User;
use App\Models\UserverifyEmailAddress;

class UserAuth
{
    /**
     * Handle the User "created" event.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function created(User $user)
    {
        $guard = "user";
        $verifyToken = sha1(time());
        $userNames = $user->firstName." ".$user->lastName;
                       $verifyEmail = UserverifyEmailAddress::create([
                        'user_id' => $user->id, 
                        'verifyToken' => $verifyToken  
                       ]);
        
                       if($verifyEmail){
                           mailController::sendEmail($user->email, $userNames, $verifyEmail->verifyToken, $guard);
                        }
    }

    /**
     * Handle the User "updated" event.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function updated(User $user)
    {
        //
    }

    /**
     * Handle the User "deleted" event.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function deleted(User $user)
    {
        //
    }

    /**
     * Handle the User "restored" event.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function restored(User $user)
    {
        //
    }

    /**
     * Handle the User "force deleted" event.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function forceDeleted(User $user)
    {
        //
    }
}
