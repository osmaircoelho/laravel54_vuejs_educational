<?php

use Illuminate\Database\Seeder;
use SON\Models\ClassInformation;
use SON\Models\Student;
use SON\Models\Subject;
use SON\Models\Teacher;

class ClassInformationsTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		$students = Student::all();
		$teachers = Teacher::all();
		$subjects = Subject::all();

		factory( ClassInformation::class, 50 )
			->create()
			->each( function ( ClassInformation $model ) use ( $students, $teachers, $subjects ) {

                /* pega 10 estudantes aletoriamentes*/
                /** @var Illuminate\Support\Collection $studentsCol */
				$studentsCol = $students->random( 10 );

				$model->students()->attach( $studentsCol->pluck( 'id' ) );

				$teaching = rand( 3, 9 );

				$teachersCol = $teachers->random( $teaching );
				$subjectsCol = $subjects->random( $teaching );
				foreach ( range( 1, $teaching ) as $value ) {
					$model->teachings()->create( [
						'subject_id' => $subjectsCol->get( $value - 1 )->id,
						'teacher_id' => $teachersCol->get( $value - 1 )->id,
					]);
				}
			});

	}
}
