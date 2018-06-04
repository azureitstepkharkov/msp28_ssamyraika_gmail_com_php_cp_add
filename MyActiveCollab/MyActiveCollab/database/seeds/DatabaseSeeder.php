<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(ProjectsTableSeeder::class);
        $this->call(RoleUserTableSeeder::class);
        $this->call(TasksTableSeeder::class);
        $this->call(TaskUserTableSeeder::class);
        $this->call(TaskCommentTableSeeder::class);
        $this->call(TaskFileTableSeeder::class);
        $this->call(TechnologiesTableSeeder::class);
        $this->call(TechnologyUserTableSeeder::class);
        $this->call(ProjectTechnologyTableSeeder::class);
        $this->call(TaskTechnologyTableSeeder::class);
        $this->call(ContactTypesTableSeeder::class);
        $this->call(ContactTableSeeder::class);
        $this->call(UserContactTableSeeder::class);
        $this->call(UserCommentTableSeeder::class);
    }
}
