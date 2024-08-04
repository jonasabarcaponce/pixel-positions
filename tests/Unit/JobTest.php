<?php

use App\Models\Employer;
use App\Models\Job;

it('Belongs to an employer', function () {

    // Arrange - Create the world you need to perform the test 
    $employer = Employer::factory()->create();
    $job = Job::factory()->create([
        'employer_id' => $employer->id
    ]);

    // Act - Perform the test and pass the value to the assertion
    $BelongsToAnEmployer = $job->employer->is($employer); // (is compare eloquent instances to be identical). 

    // Assert - Declare what do you expect of this test.
    expect($BelongsToAnEmployer)->toBeTrue();

});
