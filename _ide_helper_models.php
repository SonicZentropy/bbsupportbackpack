<?php
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string $institution
 * @property string $personal_id
 * @property int $isAdmin
 * @property string|null $remember_token
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\TrainingRegistration[] $registrations
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\TrainingSession[] $trainings
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereInstitution($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereIsAdmin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User wherePersonalId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\TrainingCompletions
 *
 * @property int $id
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TrainingCompletions whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TrainingCompletions whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TrainingCompletions whereUpdatedAt($value)
 */
	class TrainingCompletions extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\TrainingSession
 *
 * @property int $id
 * @property string $first_session
 * @property string $second_session
 * @property string $training_type
 * @property int $number_enrolled
 * @property string $title
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\User[] $users
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TrainingSession whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TrainingSession whereFirstSession($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TrainingSession whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TrainingSession whereNumberEnrolled($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TrainingSession whereSecondSession($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TrainingSession whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TrainingSession whereTrainingType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TrainingSession whereUpdatedAt($value)
 */
	class TrainingSession extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\TrainingUser
 *
 * @property int $id
 * @property int $user_id
 * @property int $training_id
 * @property int $attended1
 * @property int $attended2
 * @property int $completed
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TrainingUser whereAttended1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TrainingUser whereAttended2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TrainingUser whereCompleted($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TrainingUser whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TrainingUser whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TrainingUser whereTrainingId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TrainingUser whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TrainingUser whereUserId($value)
 */
	class TrainingUser extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\TrainingRegistration
 *
 * @property int $id
 * @property string $courses_taught
 * @property int $laptop
 * @property int $course_type
 * @property int $accommodations
 * @property int $has_been_reminded
 * @property int $has_been_reminded_second_id
 * @property int $training_session_id
 * @property int $registered_user_id
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TrainingRegistration whereAccommodations($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TrainingRegistration whereCourseType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TrainingRegistration whereCoursesTaught($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TrainingRegistration whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TrainingRegistration whereHasBeenReminded($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TrainingRegistration whereHasBeenRemindedSecondId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TrainingRegistration whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TrainingRegistration whereLaptop($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TrainingRegistration whereRegisteredUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TrainingRegistration whereTrainingSessionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TrainingRegistration whereUpdatedAt($value)
 */
	class TrainingRegistration extends \Eloquent {}
}

