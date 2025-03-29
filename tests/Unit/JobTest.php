<?php

namespace Tests\Unit;

use App\Models\Employer;
use App\Models\Job;
use PHPUnit\Framework\TestCase;

class JobTest extends TestCase
{
    public function test_it_belongs_to_an_employer()
    {
        // arrange
      $employer = Employer::factory()->create();
      $job = Job::factory()->create([
        'employer_id' => $employer->id,
      ]);

      // act asert
      $this->assertTrue($job->employer->is($employer));


    }
}
