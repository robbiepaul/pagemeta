<?php

namespace PageMeta\Jobs;

use Carbon\Carbon;
use PageMeta\Jobs\Job;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use PageMeta\User;

class ResetUsage extends Job implements ShouldQueue
{
    use InteractsWithQueue, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $users = User::all();
        foreach($users as $k => $user) {
            if($user->requests_starts_at->lte(Carbon::now()) ) {
                $user->requests_starts_at = $user->requests_starts_at->addMonth();
                $user->requests_left = $user->requests_per_month;
                $user->save();
            }
        }
    }
}
