<?php

declare(strict_types=1);

namespace CodelyTv\Mooc\Courses\Infrastructure\Persistence;

use CodelyTv\Mooc\Courses\Domain\Course;
use CodelyTv\Mooc\Shared\Domain\Courses\CourseId;
use CodelyTv\Mooc\Courses\Domain\CourseRepository;
use CodelyTv\Shared\Infrastructure\Logger\MonologLogger;

final class DoctrineCourseRepository implements CourseRepository
{
    public function __construct(MonologLogger $logger)
    {
        $this->logger = $logger;
    }

    public function save(Course $course): void
    {
        $this->logger->info('Saving course', ['course' => $course]);
    }

    public function search(CourseId $id): ?Course
    {
        return $this->logger->info('Searching course', ['course_id' => $id]);
    }
}
