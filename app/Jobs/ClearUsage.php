<?php

namespace PageMeta\Jobs;

use PageMeta\Jobs\Job;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use PageMeta\User;

class ClearUsage extends Job implements ShouldQueue
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
            $used = \Cache::get("requests:users:{$user->id}");
            if(!is_null($used) && $used > 0) {
                $user->requests_left -= $used;
                $user->save();
                \Cache::forget("requests:users:{$user->id}");
            }
        }
    }
}
