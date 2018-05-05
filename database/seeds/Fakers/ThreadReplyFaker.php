<?php

use App\Reply;
use App\Thread;
use Illuminate\Database\Seeder;
use Illuminate\Support\Collection;

/**
 * Class ThreadReplyFaker
 */
class ThreadReplyFaker extends Seeder
{
    /**
     * Run Database Seeder
     */
    public function run()
    {
        $threads = $this->seedThreads();
        $this->seedReplies($threads);
    }

    /**
     * @return Collection
     */
    private function seedThreads(): Collection
    {
        return factory(Thread::class, 50)->create();
    }

    /**
     * @param Collection $threads
     */
    private function seedReplies(Collection $threads)
    {
        $threads->each(
            function (Thread $thread) {
                factory(Reply::class, rand(1, 10))->create(
                    [
                        'thread_id' => $thread->id,
                    ]
                );
            }
        );
    }
}
