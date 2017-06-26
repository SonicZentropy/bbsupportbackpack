<?php

namespace App\Repositories;

use App\Models\TrainingSession;


//Holds all data access logic for TrainingReg model so we can DI it to multiple places as needed
class TrainingSessionRepository {

	public function getAllTrainingSessions() {
		return TrainingSession::orderBy('first_session', 'asc')->get();
	}

	public function getNextThreeTrainingSessions() {
	    $now = new \DateTime;
	    $oneweek = $now->add(new \DateInterval('P1W'))->format('Y-m-d H:i:s');

		return TrainingSession::where([
		        ['number_enrolled', '<', '15'],
                ['first_session', '>=', $oneweek],
            ])
			->orderBy('first_session', 'asc')
			->take(3)
			->get();
	}

	public function getAllFutureTrainingSessions() {
        $now = new \DateTime;

        return TrainingSession::where([
            ['first_session', '>=', $now],
        ])
            ->orderBy('first_session', 'asc')
            ->get();
    }

    public function getAllPreviousTrainingSessions() {
        $now = new \DateTime;

        return TrainingSession::where([
                ['first_session', '<', $now],
                ])
            ->orderBy('first_session', 'desc')
            ->get();
    }

    public function getCurrentTrainingSessions() {
        $now = new \DateTime;

        return TrainingSession::where([
            ['first_session', '<=', $now],
            ['second_session', '>=', $now],
        ])
            ->orderBy('first_session', 'asc')
            ->get();
    }

}