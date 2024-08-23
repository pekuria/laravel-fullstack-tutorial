<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

use App\Models\Employer;
use App\Models\Job;

class JobTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic unit test example.
     */
    // public function test_example(): void
    // {
    //     $this->assertTrue(true);
    // }

    public function test_job_belongs_to_an_employer(): void
    {
        $employer = Employer::factory()->create();

        $job = Job::factory()->create([
            'employer_id' => $employer->id
        ]);

        $this->assertTrue($job->employer->is($employer));
    }

    public function test_job_has_tags(): void
    {
        $job = Job::factory()->create();

        $job->tag('Frontend');

        $this->assertCount(1, $job->tags);
    }

}
