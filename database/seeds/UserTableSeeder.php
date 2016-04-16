<?php
use Faker\Generator;
use TeachMe\Entities\User;
use Faker\Factory as Faker;
class UserTableSeeder extends BaseSeeder {

  public function getModel()
	{
		return new User();
	}

	public function run()
	{
	  $this->createAdmin();
    $this->createMultiple(50);
	}

	public function getDummyData(Generator $faker, array $customValues = array())
	{
		return [
			'name' => $faker->name,
			'email' => $faker->email,
			'password' => bcrypt('123')
		];
	}

  private function createAdmin()
  {
     $this->create([
       "name"=>"Jose Luis",
       "email"=>"crasho1481@gmail.com",
       "password"=>bcrypt("admin")
     ]);
  }
}
