<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        Role::create(['name' => 'Icarus']);

        $permissions = [
            'permission_access',
            'permission_show',
            'permission_create',
            'permission_edit',
            'permission_delete',
            'role_access',
            'role_show',
            'role_create',
            'role_edit',
            'role_delete',
            'user_access',
            'user_show',
            'user_create',
            'user_edit',
            'user_delete',
            'awarding_body_access',
            'awarding_body_show',
            'awarding_body_create',
            'awarding_body_edit',
            'awarding_body_delete',
            'exam_session_access',
            'exam_session_show',
            'exam_session_create',
            'exam_session_edit',
            'exam_session_delete',
            'course_level_access',
            'course_level_show',
            'course_level_create',
            'course_level_edit',
            'course_level_delete',
            'subject_access',
            'subject_show',
            'subject_create',
            'subject_edit',
            'subject_delete',
            'course_access',
            'course_show',
            'course_create',
            'course_edit',
            'course_delete',
            'variant_access',
            'variant_show',
            'variant_create',
            'variant_edit',
            'variant_delete',
            'lecture_access',
            'lecture_show',
            'lecture_create',
            'lecture_edit',
            'lecture_delete',
        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }

        $tutorRole = Role::create(['name' => 'Tutor']);

        $tutorPermissions = [
            'course_access',
            'course_show',
            'course_create',
            'course_edit',
            'course_delete',
            'variant_access',
            'variant_show',
            'variant_create',
            'variant_edit',
            'variant_delete',
            'lecture_access',
            'lecture_show',
            'lecture_create',
            'lecture_edit',
            'lecture_delete',
        ];

        foreach ($tutorPermissions as $permission) {
            $tutorRole->givePermissionTo($permission);
        }

        $assistantRole = Role::create(['name' => 'Assistant']);

        $assistantPermissions = [
            'course_access',
            'course_show',
            'course_edit',
            'variant_access',
            'variant_show',
            'variant_edit',
            'lecture_access',
            'lecture_show',
            'lecture_edit',
        ];

        foreach ($assistantPermissions as $permission) {
            $assistantRole->givePermissionTo($permission);
        }

        $studentPermissions = [
            'course_access',
            'course_show',
            'variant_access',
            'variant_show',
            'lecture_access',
            'lecture_show',
        ];

        $studentRole = Role::create(['name' => 'Student']);

        foreach ($studentPermissions as $permission) {
            $studentRole->givePermissionTo($permission);
        }
    }
}
