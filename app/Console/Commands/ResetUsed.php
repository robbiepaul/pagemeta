<?php

namespace PageMeta\Console\Commands;

use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Foundation\Inspiring;
use PageMeta\User;

class ResetUsed extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'pagemeta:resetused';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update users remaining usage from cache';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $users = User::all();
        foreach($users as $k => $user) {
            if($user->requests_starts_at->lte(Carbon::now()->subMonth()) ) {
                $user->requests_starts_at = $user->requests_starts_at->addMonth();
                $user->requests_left = $user->requests_per_month;
                $user->save();
            }
        }

        $this->comment("Complete");
    }
}
