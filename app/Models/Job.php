<?php

namespace App\Models;

class Job {
    public static function all() : array {
        $jobs = [
            ['title' => 'Software Engineer', 'company' => 'Tech Corp', 'location' => 'Remote', 'salary' => 120000],
            ['title' => 'Data Scientist', 'company' => 'Data Inc', 'location' => 'New York', 'salary' => 130000],
            ['title' => 'Web Developer', 'company' => 'Web Solutions', 'location' => 'San Francisco', 'salary' => 110000],
            ['title' => 'Product Manager', 'company' => 'Innovate Ltd', 'location' => 'London', 'salary' => 140000],
            ['title' => 'UX Designer', 'company' => 'Design Studio', 'location' => 'Berlin', 'salary' => 100000],
            ['title' => 'DevOps Engineer', 'company' => 'Cloud Services', 'location' => 'Sydney', 'salary' => 125000],
            ['title' => 'QA Tester', 'company' => 'Quality Assurance', 'location' => 'Toronto', 'salary' => 95000],
            ['title' => 'System Administrator', 'company' => 'IT Solutions', 'location' => 'Singapore', 'salary' => 105000],
            ['title' => 'Database Administrator', 'company' => 'Data Management', 'location' => 'Tokyo', 'salary' => 115000],
            ['title' => 'Network Engineer', 'company' => 'Network Systems', 'location' => 'Amsterdam', 'salary' => 120000],    
        ];

        return $jobs;
    }
}