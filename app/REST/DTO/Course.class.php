<?php

namespace App\REST\DTO;


class Course {
	public $id = '';
	public $externalId = 'BBDN-Java-PHP-Demo';
	public $courseId = 'BBDN-Java-PHP-Demo';
	public $name = 'Course Used For REST Demo - PHP';
	public $description = 'Course Used For REST Demo - PHP';
	public $allowGuests = FALSE;
	public $readOnly = FALSE;
	public $termId = '';
	public $dataSourceId = '';
	public $uuid = '';
	public $created = '';
	public $organization = '';
	public $availability = '';
	public $enrollment = '';
	public $locale =  '';

	public function SetCourseID($courseID) {
	    $this->courseId = $courseID;
	    return $this;
    }

    public function SetCourseName($CourseName) {
	    $this->name = $CourseName;
	    return $this;
    }

    public function SetDescription($Description) {
	    $this->description = $Description;
	    return $this;
    }
}