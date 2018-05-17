<?php

namespace App\REST\DTO;


class Membership
	{
		public $userId = '';

		public $courseId = '';

		public $dataSourceId = '';

		public $created = '';

		public $availability = '';

		public $courseRoleId = 'Student';
	}

class MembershipForCreation
{
    public $userId = '';

    public $courseId = '';

    public $dataSourceId = '';

    //public $created = '';

    public $availability = '';

    public $courseRoleId = 'Student';

    public function SetFromMembership(Membership $memb) {
        $this->userId = $memb->userId;
        $this->courseId = $memb->courseId;
        $this->dataSourceId = $memb->dataSourceId;
        $this->availability = $memb->availability;
        $this->courseRoleId = $memb->courseRoleId;
    }
}