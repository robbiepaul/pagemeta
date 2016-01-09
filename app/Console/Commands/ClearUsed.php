<?php

namespace PageMeta\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Foundation\Inspiring;
use PageMeta\User;

class ClearUsed extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'pagemeta:clearused';

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
            $used = \Cache::get("requests:users:{$user->id}");
            if(!is_null($used) && $used > 0) {
                $user->requests_left -= $used;
                $user->save();
                \Cache::forget("requests:users:{$user->id}");
            }
        }

        $this->comment("Complete");
    }
}
