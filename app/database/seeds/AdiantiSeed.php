<?php


use Phinx\Seed\AbstractSeed;

class AdiantiSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * https://book.cakephp.org/phinx/0/en/seeding.html
     */
    public function run()
    {
        /**
         * Communication Tables
         */
        // Insert system_document_category
        $data = [
            [
                'id' => '1',
                'name' => 'Documentação',
            ]
        ];
        $system_document_category = $this->table('system_document_category');
        $system_document_category->insert($data)->save();


        /**
         * Permission Tables
         */
        // Insert system_group
        $data = [
            [
                'id' => '1',
                'name' => 'Admin',
            ],[
                'id' => '2',
                'name' => 'Standard',
            ]
        ];
        $system_group = $this->table('system_group');
        $system_group->insert($data)->save();


        // Insert system_program
        $data = [
            [
                'id' => '1',
                'name' => 'System Group Form',
                'controller' => 'SystemGroupForm',
            ],[
                'id' => '2',
                'name' => 'System Group List',
                'controller' => 'SystemGroupList',
            ],[
                'id' => '3',
                'name' => 'System Program Form',
                'controller' => 'SystemProgramForm',
            ],[
                'id' => '4',
                'name' => 'System Program List',
                'controller' => 'SystemProgramList',
            ],[
                'id' => '5',
                'name' => 'System User Form',
                'controller' => 'SystemUserForm',
            ],[
                'id' => '6',
                'name' => 'System User List',
                'controller' => 'SystemUserList',
            ],[
                'id' => '7',
                'name' => 'Common Page',
                'controller' => 'CommonPage',
            ],[
                'id' => '8',
                'name' => 'System PHP Info',
                'controller' => 'SystemPHPInfoView',
            ],[
                'id' => '9',
                'name' => 'System ChangeLog View',
                'controller' => 'SystemChangeLogView',
            ],[
                'id' => '10',
                'name' => 'Welcome View',
                'controller' => 'WelcomeView',
            ],[
                'id' => '11',
                'name' => 'System Sql Log',
                'controller' => 'SystemSqlLogList',
            ],[
                'id' => '12',
                'name' => 'System Profile View',
                'controller' => 'SystemProfileView',
            ],[
                'id' => '13',
                'name' => 'System Profile Form',
                'controller' => 'SystemProfileForm',
            ],[
                'id' => '14',
                'name' => 'System SQL Panel',
                'controller' => 'SystemSQLPanel',
            ],[
                'id' => '15',
                'name' => 'System Access Log',
                'controller' => 'SystemAccessLogList',
            ],[
                'id' => '16',
                'name' => 'System Message Form',
                'controller' => 'SystemMessageForm',
            ],[
                'id' => '17',
                'name' => 'System Message List',
                'controller' => 'SystemMessageList',
            ],[
                'id' => '18',
                'name' => 'System Message Form View',
                'controller' => 'SystemMessageFormView',
            ],[
                'id' => '19',
                'name' => 'System Notification List',
                'controller' => 'SystemNotificationList',
            ],[
                'id' => '20',
                'name' => 'System Notification Form View',
                'controller' => 'SystemNotificationFormView',
            ],[
                'id' => '21',
                'name' => 'System Document Category List',
                'controller' => 'SystemDocumentCategoryFormList',
            ],[
                'id' => '22',
                'name' => 'System Document Form',
                'controller' => 'SystemDocumentForm',
            ],[
                'id' => '23',
                'name' => 'System Document Upload Form',
                'controller' => 'SystemDocumentUploadForm',
            ],[
                'id' => '24',
                'name' => 'System Document List',
                'controller' => 'SystemDocumentList',
            ],[
                'id' => '25',
                'name' => 'System Shared Document List',
                'controller' => 'SystemSharedDocumentList',
            ],[
                'id' => '26',
                'name' => 'System Unit Form',
                'controller' => 'SystemUnitForm',
            ],[
                'id' => '27',
                'name' => 'System Unit List',
                'controller' => 'SystemUnitList',
            ],[
                'id' => '28',
                'name' => 'System Access stats',
                'controller' => 'SystemAccessLogStats',
            ],[
                'id' => '29',
                'name' => 'System Preference form',
                'controller' => 'SystemPreferenceForm',
            ],[
                'id' => '30',
                'name' => 'System Support form',
                'controller' => 'SystemSupportForm',
            ],[
                'id' => '31',
                'name' => 'System PHP Error',
                'controller' => 'SystemPHPErrorLogView',
            ],[
                'id' => '32',
                'name' => 'System Database Browser',
                'controller' => 'SystemDatabaseExplorer',
            ],[
                'id' => '33',
                'name' => 'System Table List',
                'controller' => 'SystemTableList',
            ],[
                'id' => '34',
                'name' => 'System Data Browser',
                'controller' => 'SystemDataBrowser',
            ],[
                'id' => '35',
                'name' => 'System Menu Editor',
                'controller' => 'SystemMenuEditor',
            ],[
                'id' => '36',
                'name' => 'System Request Log',
                'controller' => 'SystemRequestLogList',
            ],[
                'id' => '37',
                'name' => 'System Request Log View',
                'controller' => 'SystemRequestLogView',
            ],[
                'id' => '38',
                'name' => 'System Administration Dashboard',
                'controller' => 'SystemAdministrationDashboard',
            ],[
                'id' => '39',
                'name' => 'System Log Dashboard',
                'controller' => 'SystemLogDashboard',
            ],[
                'id' => '40',
                'name' => 'System Session dump',
                'controller' => 'SystemSessionDumpView',
            ]
        ];
        $system_program = $this->table('system_program');
        $system_program->insert($data)->save();



        $data = [
            [
                'id' => '1',
                'name' => 'Administrator',
                'login' => 'admin',
                'password' => '21232f297a57a5a743894a0e4a801fc3',
                'email' => 'admin@admin.net',
                'frontpage_id' => '10',
                'system_unit_id' => NULL,
                'active' => 'Y',
            ]
        ];
        $system_user = $this->table('system_user');
        $system_user->insert($data)->save();



        $data = [
            [
                'id' => '1',
                'system_user_id' => '1',
                'system_group_id' => '1',
            ],[
                'id' => '2',
                'system_user_id' => '1',
                'system_group_id' => '2',
            ]
        ];
        $system_user_group = $this->table('system_user_group');
        $system_user_group->insert($data)->save();



        $data = [
            [
                'id' => '1',
                'system_group_id' => '1',
                'system_program_id' => '1',
            ],[
                'id' => '2',
                'system_group_id' => '1',
                'system_program_id' => '2',
            ],[
                'id' => '3',
                'system_group_id' => '1',
                'system_program_id' => '3',
            ],[
                'id' => '4',
                'system_group_id' => '1',
                'system_program_id' => '4',
            ],[
                'id' => '5',
                'system_group_id' => '1',
                'system_program_id' => '5',
            ],[
                'id' => '6',
                'system_group_id' => '1',
                'system_program_id' => '6',
            ],[
                'id' => '7',
                'system_group_id' => '1',
                'system_program_id' => '8',
            ],[
                'id' => '8',
                'system_group_id' => '1',
                'system_program_id' => '9',
            ],[
                'id' => '9',
                'system_group_id' => '1',
                'system_program_id' => '11',
            ],[
                'id' => '10',
                'system_group_id' => '1',
                'system_program_id' => '14',
            ],[
                'id' => '11',
                'system_group_id' => '1',
                'system_program_id' => '15',
            ],[
                'id' => '20',
                'system_group_id' => '1',
                'system_program_id' => '21',
            ],[
                'id' => '25',
                'system_group_id' => '1',
                'system_program_id' => '26',
            ],[
                'id' => '26',
                'system_group_id' => '1',
                'system_program_id' => '27',
            ],[
                'id' => '27',
                'system_group_id' => '1',
                'system_program_id' => '28',
            ],[
                'id' => '28',
                'system_group_id' => '1',
                'system_program_id' => '29',
            ],[
                'id' => '30',
                'system_group_id' => '1',
                'system_program_id' => '31',
            ],[
                'id' => '31',
                'system_group_id' => '1',
                'system_program_id' => '32',
            ],[
                'id' => '32',
                'system_group_id' => '1',
                'system_program_id' => '33',
            ],[
                'id' => '33',
                'system_group_id' => '1',
                'system_program_id' => '34',
            ],[
                'id' => '34',
                'system_group_id' => '1',
                'system_program_id' => '35',
            ],[
                'id' => '36',
                'system_group_id' => '1',
                'system_program_id' => '36',
            ],[
                'id' => '37',
                'system_group_id' => '1',
                'system_program_id' => '37',
            ],[
                'id' => '38',
                'system_group_id' => '1',
                'system_program_id' => '38',
            ],[
                'id' => '39',
                'system_group_id' => '1',
                'system_program_id' => '39',
            ],[
                'id' => '40',
                'system_group_id' => '1',
                'system_program_id' => '40',
            ],[
                'id' => '41',
                'system_group_id' => '1',
                'system_program_id' => '7',
            ],[
                'id' => '42',
                'system_group_id' => '1',
                'system_program_id' => '10',
            ],[
                'id' => '43',
                'system_group_id' => '2',
                'system_program_id' => '10',
            ],[
                'id' => '44',
                'system_group_id' => '2',
                'system_program_id' => '12',
            ],[
                'id' => '45',
                'system_group_id' => '2',
                'system_program_id' => '13',
            ],[
                'id' => '46',
                'system_group_id' => '2',
                'system_program_id' => '16',
            ],[
                'id' => '47',
                'system_group_id' => '2',
                'system_program_id' => '17',
            ],[
                'id' => '48',
                'system_group_id' => '2',
                'system_program_id' => '18',
            ],[
                'id' => '49',
                'system_group_id' => '2',
                'system_program_id' => '19',
            ],[
                'id' => '50',
                'system_group_id' => '2',
                'system_program_id' => '20',
            ],[
                'id' => '51',
                'system_group_id' => '2',
                'system_program_id' => '22',
            ],[
                'id' => '52',
                'system_group_id' => '2',
                'system_program_id' => '23',
            ],[
                'id' => '53',
                'system_group_id' => '2',
                'system_program_id' => '24',
            ],[
                'id' => '54',
                'system_group_id' => '2',
                'system_program_id' => '25',
            ],[
                'id' => '55',
                'system_group_id' => '2',
                'system_program_id' => '30',
            ],
        ];
        $system_group_program = $this->table('system_group_program');
        $system_group_program->insert($data)->save();




    }
}
