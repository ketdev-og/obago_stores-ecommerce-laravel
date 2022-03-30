<?php

namespace App\Observers;

use App\Http\Controllers\mailController;
use App\Jobs\SendVerificationEmail;
use App\Models\Admin;
use App\Models\AdminverifyEmailAddress;

class AdminAuth
{
    /**
     * Handle the Admin "created" event.
     *
     * @param  \App\Models\Admin  $admin
     * @return void
     */
    public function created(Admin $admin)
    {
        $verifyToken = sha1(time());
        if($admin != null){
            $userNames = $admin->firstName." ".$admin->lastName;
           $verifyEmail = AdminverifyEmailAddress::create([
            'admin_id' => $admin->id,
            'verifyToken' => $verifyToken  
           ]);

           if($verifyEmail){
               $job = (new SendVerificationEmail($admin->email,$userNames,$verifyEmail->verifyToken))
                        ->delay(now()->addSeconds(1));
               dispatch($job);
               
            }
         }
    }

    /**
     * Handle the Admin "updated" event.
     *
     * @param  \App\Models\Admin  $admin
     * @return void
     */
    public function updated(Admin $admin)
    {
        //
    }

    /**
     * Handle the Admin "deleted" event.
     *
     * @param  \App\Models\Admin  $admin
     * @return void
     */
    public function deleted(Admin $admin)
    {
        //
    }

    /**
     * Handle the Admin "restored" event.
     *
     * @param  \App\Models\Admin  $admin
     * @return void
     */
    public function restored(Admin $admin)
    {
        //
    }

    /**
     * Handle the Admin "force deleted" event.
     *
     * @param  \App\Models\Admin  $admin
     * @return void
     */
    public function forceDeleted(Admin $admin)
    {
        //
    }
}
