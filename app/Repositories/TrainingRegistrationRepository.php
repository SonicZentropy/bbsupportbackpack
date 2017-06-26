<?php

namespace App\Repositories;

use App\Models\TrainingRegistration;

//Holds all data access logic for TrainingReg model so we can DI it to multiple places as needed
class TrainingRegistrationRepository {

	public function getTrainingRegistrations() {
		return TrainingRegistration::orderBy('created_at', 'asc')->get();
	}
}