<?php

use App\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'         => '1',
                'title'      => 'user_management_access',
            ],
            [
                'id'         => '2',
                'title'      => 'permission_create',
            ],
            [
                'id'         => '3',
                'title'      => 'permission_edit',
            ],
            [
                'id'         => '4',
                'title'      => 'permission_show',
            ],
            [
                'id'         => '5',
                'title'      => 'permission_delete',
            ],
            [
                'id'         => '6',
                'title'      => 'permission_access',
            ],
            [
                'id'         => '7',
                'title'      => 'role_create',
            ],
            [
                'id'         => '8',
                'title'      => 'role_edit',
            ],
            [
                'id'         => '9',
                'title'      => 'role_show',
            ],
            [
                'id'         => '10',
                'title'      => 'role_delete',
            ],
            [
                'id'         => '11',
                'title'      => 'role_access',
            ],
            [
                'id'         => '12',
                'title'      => 'user_create',
            ],
            [
                'id'         => '13',
                'title'      => 'user_edit',
            ],
            [
                'id'         => '14',
                'title'      => 'user_show',
            ],
            [
                'id'         => '15',
                'title'      => 'user_delete',
            ],
            [
                'id'         => '16',
                'title'      => 'user_access',
            ],
            [
                'id'         => '17',
                'title'      => 'setting_create',
            ],
            [
                'id'         => '18',
                'title'      => 'setting_edit',
            ],
            [
                'id'         => '19',
                'title'      => 'setting_show',
            ],
            [
                'id'         => '20',
                'title'      => 'setting_delete',
            ],
            [
                'id'         => '21',
                'title'      => 'setting_access',
            ],
            [
                'id'         => '22',
                'title'      => 'audit_log_show',
            ],
            [
                'id'         => '23',
                'title'      => 'audit_log_access',
            ],
            [
                'id'         => '24',
                'title'      => 'teacher_create',
            ],
            [
                'id'         => '25',
                'title'      => 'teacher_edit',
            ],
            [
                'id'         => '26',
                'title'      => 'teacher_show',
            ],
            [
                'id'         => '32',
                'title'      => 'teacher_delete',
            ],
            [
                'id'         => '33',
                'title'      => 'teacher_access',
            ],
            [
                'id'         => '34',
                'title'      => 'room_create',
            ],
            [
                'id'         => '35',
                'title'      => 'room_edit',
            ],
            [
                'id'         => '36',
                'title'      => 'room_show',
            ],
            [
                'id'         => '37',
                'title'      => 'room_delete',
            ],
            [
                'id'         => '38',
                'title'      => 'room_access',
            ],
            [
                'id'         => '27',
                'title'      => 'schedule_create',
            ],
            [
                'id'         => '28',
                'title'      => 'schedule_edit',
            ],
            [
                'id'         => '29',
                'title'      => 'schedule_show',
            ],
            [
                'id'         => '30',
                'title'      => 'schedule_delete',
            ],
            [
                'id'         => '31',
                'title'      => 'schedule_access',
            ],

            [
                'id'         => '42',
                'title'      => 'gallery_create',
            ],
            [
                'id'         => '43',
                'title'      => 'gallery_edit',
            ],
            [
                'id'         => '44',
                'title'      => 'gallery_show',
            ],
            [
                'id'         => '45',
                'title'      => 'gallery_delete',
            ],
            [
                'id'         => '46',
                'title'      => 'gallery_access',
            ],
            [
                'id'         => '47',
                'title'      => 'sponsor_create',
            ],

            [
                'id'         => '52',
                'title'      => 'faq_create',
            ],
            [
                'id'         => '53',
                'title'      => 'faq_edit',
            ],
            [
                'id'         => '54',
                'title'      => 'faq_show',
            ],
            [
                'id'         => '55',
                'title'      => 'faq_delete',
            ],
            [
                'id'         => '56',
                'title'      => 'faq_access',
            ],
        ];

        Permission::insert($permissions);
    }
}
