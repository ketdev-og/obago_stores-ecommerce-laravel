<?php

namespace App\Jobs;

use App\Http\Controllers\mailController;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class SendVerificationEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $email;
    public $userNames;
    public $token;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($email, $userNames, $token)
    {
        $this->email = $email;
        $this->userNames = $userNames;
        $this->token = $token;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        mailController::sendEmail($this->email, $this->userNames, $this->token, null);
    }
}
