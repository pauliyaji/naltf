<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 2,
                'title' => 'permission_create',
            ],
            [
                'id'    => 3,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 4,
                'title' => 'permission_show',
            ],
            [
                'id'    => 5,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 6,
                'title' => 'permission_access',
            ],
            [
                'id'    => 7,
                'title' => 'role_create',
            ],
            [
                'id'    => 8,
                'title' => 'role_edit',
            ],
            [
                'id'    => 9,
                'title' => 'role_show',
            ],
            [
                'id'    => 10,
                'title' => 'role_delete',
            ],
            [
                'id'    => 11,
                'title' => 'role_access',
            ],
            [
                'id'    => 12,
                'title' => 'user_create',
            ],
            [
                'id'    => 13,
                'title' => 'user_edit',
            ],
            [
                'id'    => 14,
                'title' => 'user_show',
            ],
            [
                'id'    => 15,
                'title' => 'user_delete',
            ],
            [
                'id'    => 16,
                'title' => 'user_access',
            ],
            [
                'id'    => 17,
                'title' => 'audit_log_show',
            ],
            [
                'id'    => 18,
                'title' => 'audit_log_access',
            ],
            [
                'id'    => 19,
                'title' => 'user_alert_create',
            ],
            [
                'id'    => 20,
                'title' => 'user_alert_show',
            ],
            [
                'id'    => 21,
                'title' => 'user_alert_delete',
            ],
            [
                'id'    => 22,
                'title' => 'user_alert_access',
            ],
            [
                'id'    => 23,
                'title' => 'content_management_access',
            ],
            [
                'id'    => 24,
                'title' => 'content_category_create',
            ],
            [
                'id'    => 25,
                'title' => 'content_category_edit',
            ],
            [
                'id'    => 26,
                'title' => 'content_category_show',
            ],
            [
                'id'    => 27,
                'title' => 'content_category_delete',
            ],
            [
                'id'    => 28,
                'title' => 'content_category_access',
            ],
            [
                'id'    => 29,
                'title' => 'content_tag_create',
            ],
            [
                'id'    => 30,
                'title' => 'content_tag_edit',
            ],
            [
                'id'    => 31,
                'title' => 'content_tag_show',
            ],
            [
                'id'    => 32,
                'title' => 'content_tag_delete',
            ],
            [
                'id'    => 33,
                'title' => 'content_tag_access',
            ],
            [
                'id'    => 34,
                'title' => 'content_page_create',
            ],
            [
                'id'    => 35,
                'title' => 'content_page_edit',
            ],
            [
                'id'    => 36,
                'title' => 'content_page_show',
            ],
            [
                'id'    => 37,
                'title' => 'content_page_delete',
            ],
            [
                'id'    => 38,
                'title' => 'content_page_access',
            ],
            [
                'id'    => 39,
                'title' => 'task_management_access',
            ],
            [
                'id'    => 40,
                'title' => 'task_status_create',
            ],
            [
                'id'    => 41,
                'title' => 'task_status_edit',
            ],
            [
                'id'    => 42,
                'title' => 'task_status_show',
            ],
            [
                'id'    => 43,
                'title' => 'task_status_delete',
            ],
            [
                'id'    => 44,
                'title' => 'task_status_access',
            ],
            [
                'id'    => 45,
                'title' => 'task_tag_create',
            ],
            [
                'id'    => 46,
                'title' => 'task_tag_edit',
            ],
            [
                'id'    => 47,
                'title' => 'task_tag_show',
            ],
            [
                'id'    => 48,
                'title' => 'task_tag_delete',
            ],
            [
                'id'    => 49,
                'title' => 'task_tag_access',
            ],
            [
                'id'    => 50,
                'title' => 'task_create',
            ],
            [
                'id'    => 51,
                'title' => 'task_edit',
            ],
            [
                'id'    => 52,
                'title' => 'task_show',
            ],
            [
                'id'    => 53,
                'title' => 'task_delete',
            ],
            [
                'id'    => 54,
                'title' => 'task_access',
            ],
            [
                'id'    => 55,
                'title' => 'tasks_calendar_access',
            ],
            [
                'id'    => 56,
                'title' => 'faq_management_access',
            ],
            [
                'id'    => 57,
                'title' => 'faq_category_create',
            ],
            [
                'id'    => 58,
                'title' => 'faq_category_edit',
            ],
            [
                'id'    => 59,
                'title' => 'faq_category_show',
            ],
            [
                'id'    => 60,
                'title' => 'faq_category_delete',
            ],
            [
                'id'    => 61,
                'title' => 'faq_category_access',
            ],
            [
                'id'    => 62,
                'title' => 'faq_question_create',
            ],
            [
                'id'    => 63,
                'title' => 'faq_question_edit',
            ],
            [
                'id'    => 64,
                'title' => 'faq_question_show',
            ],
            [
                'id'    => 65,
                'title' => 'faq_question_delete',
            ],
            [
                'id'    => 66,
                'title' => 'faq_question_access',
            ],
            [
                'id'    => 67,
                'title' => 'category_create',
            ],
            [
                'id'    => 68,
                'title' => 'category_edit',
            ],
            [
                'id'    => 69,
                'title' => 'category_show',
            ],
            [
                'id'    => 70,
                'title' => 'category_delete',
            ],
            [
                'id'    => 71,
                'title' => 'category_access',
            ],
            [
                'id'    => 72,
                'title' => 'resource_create',
            ],
            [
                'id'    => 73,
                'title' => 'resource_edit',
            ],
            [
                'id'    => 74,
                'title' => 'resource_show',
            ],
            [
                'id'    => 75,
                'title' => 'resource_delete',
            ],
            [
                'id'    => 76,
                'title' => 'resource_access',
            ],
            [
                'id'    => 77,
                'title' => 'profile_password_edit',
            ],
        ];

        Permission::insert($permissions);
    }
}
