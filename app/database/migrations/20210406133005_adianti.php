<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class Adianti extends AbstractMigration
{
    public function up()
    {
        /**
         * Criação do padrão adianti através de um migration do PHINX
         */

        /**
         * Permission BLOCK
         */
        // Create table permission.system_group
        $system_group = $this->table('system_group',                                        ['signed' => FALSE]);
        $system_group->addColumn('name', 'string',                                          ['limit' => 100, 'null' => TRUE])
                     ->addTimestampsWithTimezone()
                     ->create();

        // System Group Seeds
        $data = [
            ['id' => '1','name' => 'Admin'],
            ['id' => '2','name' => 'Standard'],
            ['id' => '3','name' => 'Recepção'],
            ['id' => '4','name' => 'Profissionais'],
            ['id' => '5','name' => 'Gestores'],
        ];
        $this->table('system_group')->insert($data)->save();

        // Create table permission.system_program
        $system_program = $this->table('system_program',                                    ['signed' => FALSE]);
        $system_program->addColumn('name', 'string',                                        ['limit' => 100, 'null' => TRUE])
                       ->addColumn('controller', 'string',                                  ['limit' => 100, 'null' => TRUE])
                       ->addTimestampsWithTimezone()
                       ->create();

        /**
         * Default Adianti Programs Seed
         */
        $data = [
            ['id' => '1',   'name'    => 'System Group Form',                   'controller'    => 'SystemGroupForm'],
            ['id' => '2',   'name'    => 'System Group List',                   'controller'    => 'SystemGroupList'],
            ['id' => '3',   'name'    => 'System Program Form',                 'controller'    => 'SystemProgramForm'],
            ['id' => '4',   'name'    => 'System Program List',                 'controller'    => 'SystemProgramList'],
            ['id' => '5',   'name'    => 'System User Form',                    'controller'    => 'SystemUserForm'],
            ['id' => '6',   'name'    => 'System User List',                    'controller'    => 'SystemUserList'],
            ['id' => '7',   'name'    => 'Common Page',                         'controller'    => 'CommonPage'],
            ['id' => '8',   'name'    => 'System PHP Info',                     'controller'    => 'SystemPHPInfoView'],
            ['id' => '9',   'name'    => 'System ChangeLog View',               'controller'    => 'SystemChangeLogView'],
            ['id' => '10',  'name'    => 'Welcome View',                        'controller'    => 'WelcomeView'],
            ['id' => '11',  'name'    => 'System Sql Log',                      'controller'    => 'SystemSqlLogList'],
            ['id' => '12',  'name'    => 'System Profile View',                 'controller'    => 'SystemProfileView'],
            ['id' => '13',  'name'    => 'System Profile Form',                 'controller'    => 'SystemProfileForm'],
            ['id' => '14',  'name'    => 'System SQL Panel',                    'controller'    => 'SystemSQLPanel'],
            ['id' => '15',  'name'    => 'System Access Log',                   'controller'    => 'SystemAccessLogList'],
            ['id' => '16',  'name'    => 'System Message Form',                 'controller'    => 'SystemMessageForm'],
            ['id' => '17',  'name'    => 'System Message List',                 'controller'    => 'SystemMessageList'],
            ['id' => '18',  'name'    => 'System Message Form View',            'controller'    => 'SystemMessageFormView'],
            ['id' => '19',  'name'    => 'System Notification List',            'controller'    => 'SystemNotificationList'],
            ['id' => '20',  'name'    => 'System Notification Form View',       'controller'    => 'SystemNotificationFormView'],
            ['id' => '21',  'name'    => 'System Document Category List',       'controller'    => 'SystemDocumentCategoryFormList'],
            ['id' => '22',  'name'    => 'System Document Form',                'controller'    => 'SystemDocumentForm'],
            ['id' => '23',  'name'    => 'System Document Upload Form',         'controller'    => 'SystemDocumentUploadForm'],
            ['id' => '24',  'name'    => 'System Document List',                'controller'    => 'SystemDocumentList'],
            ['id' => '25',  'name'    => 'System Shared Document List',         'controller'    => 'SystemSharedDocumentList'],
            ['id' => '26',  'name'    => 'System Unit Form',                    'controller'    => 'SystemUnitForm'],
            ['id' => '27',  'name'    => 'System Unit List',                    'controller'    => 'SystemUnitList'],
            ['id' => '28',  'name'    => 'System Access stats',                 'controller'    => 'SystemAccessLogStats'],
            ['id' => '29',  'name'    => 'System Preference form',              'controller'    => 'SystemPreferenceForm'],
            ['id' => '30',  'name'    => 'System Support form',                 'controller'    => 'SystemSupportForm'],
            ['id' => '31',  'name'    => 'System PHP Error',                    'controller'    => 'SystemPHPErrorLogView'],
            ['id' => '32',  'name'    => 'System Database Browser',             'controller'    => 'SystemDatabaseExplorer'],
            ['id' => '33',  'name'    => 'System Table List',                   'controller'    => 'SystemTableList'],
            ['id' => '34',  'name'    => 'System Data Browser',                 'controller'    => 'SystemDataBrowser'],
            ['id' => '35',  'name'    => 'System Menu Editor',                  'controller'    => 'SystemMenuEditor'],
            ['id' => '36',  'name'    => 'System Request Log',                  'controller'    => 'SystemRequestLogList'],
            ['id' => '37',  'name'    => 'System Request Log View',             'controller'    => 'SystemRequestLogView'],
            ['id' => '38',  'name'    => 'System Administration Dashboard',     'controller'    => 'SystemAdministrationDashboard'],
            ['id' => '39',  'name'    => 'System Log Dashboard',                'controller'    => 'SystemLogDashboard'],
            ['id' => '40',  'name'    => 'System Session dump',                 'controller'    => 'SystemSessionDumpView']
        ];
        $this->table('system_program')->insert($data)->save();

        /**
         * Custom Programs Seed
         */
        $data = [
            ['id' => '41',  'name'    => 'Cidade Form',                         'controller'    => 'CidadeForm'],
            ['id' => '42',  'name'    => 'Cidade List',                         'controller'    => 'CidadeList'],
            ['id' => '43',  'name'    => 'Especialidade Form',                  'controller'    => 'EspecialidadeForm'],
            ['id' => '44',  'name'    => 'Especialidade List',                  'controller'    => 'EspecialidadeList'],
            ['id' => '45',  'name'    => 'Estado Form',                         'controller'    => 'EstadoForm'],
            ['id' => '46',  'name'    => 'Estado List',                         'controller'    => 'EstadoList'],
            ['id' => '47',  'name'    => 'Medicamento Form',                    'controller'    => 'MedicamentoForm'],
            ['id' => '48',  'name'    => 'MedicamentoList',                     'controller'    => 'MedicamentoList'],
            ['id' => '49',  'name'    => 'Paciente Form',                       'controller'    => 'PacienteForm'],
            ['id' => '50',  'name'    => 'Paciente List',                       'controller'    => 'PacienteList'],
            ['id' => '51',  'name'    => 'Plano de Saude Form',                 'controller'    => 'PlanodesaudeForm'],
            ['id' => '52',  'name'    => 'Plano de Saude List',                 'controller'    => 'PlanodesaudeList'],
            ['id' => '53',  'name'    => 'Regiao Form',                         'controller'    => 'RegiaoForm'],
            ['id' => '54',  'name'    => 'Regiao List',                         'controller'    => 'RegiaoList'],
            ['id' => '55',  'name'    => 'Sintoma Form',                        'controller'    => 'SintomaForm'],
            ['id' => '56',  'name'    => 'Sintoma List',                        'controller'    => 'SintomaList'],
            ['id' => '57',  'name'    => 'Agendamento Form',                    'controller'    => 'AgendamentoForm'],
            ['id' => '58',  'name'    => 'Agendamento List',                    'controller'    => 'AgendamentoList'],
            ['id' => '59',  'name'    => 'Atestado Form',                       'controller'    => 'AtestadoForm'],
            ['id' => '60',  'name'    => 'Atestado List',                       'controller'    => 'AtestadoList'],
            ['id' => '61',  'name'    => 'Consulta Form',                       'controller'    => 'ConsultaForm'],
            ['id' => '62',  'name'    => 'Consulta List',                       'controller'    => 'ConsultaList'],
            ['id' => '63',  'name'    => 'OrgaoClasse Form',                    'controller'    => 'OrgaoClasseForm'],
            ['id' => '64',  'name'    => 'OrgaoClasse List',                    'controller'    => 'OrgaoClasseList'],
            ['id' => '65',  'name'    => 'Profissional Form',                   'controller'    => 'ProfissionalForm'],
            ['id' => '66',  'name'    => 'Profissional List',                   'controller'    => 'ProfissionalList'],
            ['id' => '67',  'name'    => 'Receita Form',                        'controller'    => 'ReceitaForm'],
            ['id' => '68',  'name'    => 'Receita List',                        'controller'    => 'ReceitaList'],
            ['id' => '69',  'name'    => 'Questionario Anamnese Form',          'controller'    => 'QuestionarioAnamneseForm'],
            ['id' => '70',  'name'    => 'Questionario Anamnese List',          'controller'    => 'QuestionarioAnamneseList'],
            ['id' => '71',  'name'    => 'Status Agendamento Form',             'controller'    => 'StatusAgendamentoForm'],
            ['id' => '72',  'name'    => 'Status Agendamento List',             'controller'    => 'StatusAgendamentoList'],
        ];
        $this->table('system_program')->insert($data)->save();


        // Create table permission.system_unit
        $system_unit = $this->table('system_unit',                                          ['signed' => FALSE]);
        $system_unit->addColumn('name', 'string',                                           ['limit' => 100, 'null' => TRUE])
                    ->addColumn('connection_name', 'string',                                ['limit' => 100, 'null' => TRUE])
                    ->addTimestampsWithTimezone()
                    ->create();

        $data = [
            ['id' => 1,     'name' => 'MATRIZ',     'connection_name' => 'emedsys']
        ];
        $this->table('system_unit')->insert($data)->save();

        
        // Create table permission.system_preference
        $system_preference = $this->table('system_preference',                              ['signed' => FALSE, 'null' => TRUE]);
        $system_preference->addColumn('value', 'text',                                      ['null' => TRUE])
                          ->addTimestampsWithTimezone()
                          ->create();

        // Create table permission.system_user
        $system_user = $this->table('system_user',                                          ['signed' => FALSE]);
        $system_user->addColumn('name', 'string',                                           ['limit' => 100])
                    ->addColumn('login', 'string',                                          ['limit' => 100])
                    ->addColumn('password', 'string',                                       ['limit' => 100])
                    ->addColumn('email', 'string',                                          ['limit' => 100])
                    ->addColumn('frontpage_id', 'integer',                                  ['signed' => FALSE, 'null' => TRUE])
                    ->addColumn('system_unit_id', 'integer',                                ['signed' => FALSE, 'null' => TRUE])
                    ->addColumn('active', 'string',                                         ['limit' => 1, 'null' => TRUE])
                    ->addForeignKey('frontpage_id', 'system_program', 'id',                 ['delete'=> 'SET_NULL', 'update'=> 'NO_ACTION'])
                    ->addForeignKey('system_unit_id', 'system_unit', 'id',                  ['delete'=> 'SET_NULL', 'update'=> 'NO_ACTION'])
                    ->addIndex(['frontpage_id'],                                            ['name' => 'sys_user_program_idx'])
                    ->addTimestampsWithTimezone()
                    ->create();

        // Create SYS ADMIN User
        $data = [
            [
                'id' => '1',
                'name' => 'Administrator',
                'login' => 'admin',
                'password' => '21232f297a57a5a743894a0e4a801fc3',
                'email' => 'admin@admin.net',
                'frontpage_id' => '10',
                'system_unit_id' => '1',
                'active' => 'Y',
            ]
        ];
        $this->table('system_user')->insert($data)->save();


        // Create table permission.system_user_unit
        $system_user_unit = $this->table('system_user_unit',                                ['signed' => FALSE]);
        $system_user_unit->addColumn('system_user_id', 'integer',                           ['signed' => FALSE])
                         ->addColumn('system_unit_id', 'integer',                           ['signed' => FALSE])
                         ->addForeignKey('system_user_id', 'system_user', 'id',             ['delete'=> 'CASCADE', 'update'=> 'CASCADE'])
                         ->addForeignKey('system_unit_id', 'system_unit', 'id',             ['delete'=> 'CASCADE', 'update'=> 'CASCADE'])
                         ->addIndex(['system_user_id'],                                     ['name' => 'sys_user_unit_user_idx'])
                         ->addIndex(['system_unit_id'],                                     ['name' => 'sys_user_unit_unit_idx'])
                         ->addTimestampsWithTimezone()
                         ->create();

        // Add System User Unit ID
        $data = [
            ['system_user_id' => 1, 'system_unit_id' => 1]
        ];
        $this->table('system_user_unit')->insert($data)->save();

        // Create table permission.system_user_group
        $system_user_group = $this->table('system_user_group',                              ['signed' => FALSE]);
        $system_user_group->addColumn('system_user_id', 'integer',                          ['signed' => FALSE])
                          ->addColumn('system_group_id', 'integer',                         ['signed' => FALSE])
                          ->addForeignKey('system_user_id', 'system_user', 'id',            ['delete'=> 'CASCADE', 'update'=> 'CASCADE'])
                          ->addForeignKey('system_group_id', 'system_group', 'id',          ['delete'=> 'CASCADE', 'update'=> 'CASCADE'])
                          ->addIndex(['system_user_id'],                                    ['name' => 'sys_user_group_user_idx'])
                          ->addIndex(['system_group_id'],                                   ['name' => 'sys_user_group_group_idx'])
                          ->addTimestampsWithTimezone()
                          ->create();

        // Create System User Group binds
        $data = [
            ['id' => '1',   'system_user_id' => '1',    'system_group_id' => '1'],
            ['id' => '2',   'system_user_id' => '1',    'system_group_id' => '2'],
        ];
        $this->table('system_user_group')->insert($data)->save();

        // Create table permission.system_group_program
        $system_group_program = $this->table('system_group_program',                        ['signed' => FALSE]);
        $system_group_program->addColumn('system_group_id', 'integer',                      ['signed' => FALSE])
                             ->addColumn('system_program_id', 'integer',                    ['signed' => FALSE])
                             ->addForeignKey('system_group_id', 'system_group', 'id',       ['delete'=> 'CASCADE', 'update'=> 'CASCADE'])
                             ->addForeignKey('system_program_id', 'system_program', 'id',   ['delete'=> 'CASCADE', 'update'=> 'CASCADE'])
                             ->addIndex(['system_group_id'],                                ['name' => 'sys_group_program_group_idx'])
                             ->addIndex(['system_program_id'],                              ['name' => 'sys_group_program_program_idx'])
                             ->addTimestampsWithTimezone()
                             ->create();

        // Create System Group Program binds
        $data = [
            ['id' => '1',       'system_group_id' => '1',       'system_program_id' => '1'],
            ['id' => '2',       'system_group_id' => '1',       'system_program_id' => '2'],
            ['id' => '3',       'system_group_id' => '1',       'system_program_id' => '3'],
            ['id' => '4',       'system_group_id' => '1',       'system_program_id' => '4'],
            ['id' => '5',       'system_group_id' => '1',       'system_program_id' => '5'],
            ['id' => '6',       'system_group_id' => '1',       'system_program_id' => '6'],
            ['id' => '7',       'system_group_id' => '1',       'system_program_id' => '8'],
            ['id' => '8',       'system_group_id' => '1',       'system_program_id' => '9'],
            ['id' => '9',       'system_group_id' => '1',       'system_program_id' => '11'],
            ['id' => '10',      'system_group_id' => '1',       'system_program_id' => '14'],
            ['id' => '11',      'system_group_id' => '1',       'system_program_id' => '15'],
            ['id' => '20',      'system_group_id' => '1',       'system_program_id' => '21'],
            ['id' => '25',      'system_group_id' => '1',       'system_program_id' => '26'],
            ['id' => '26',      'system_group_id' => '1',       'system_program_id' => '27'],
            ['id' => '27',      'system_group_id' => '1',       'system_program_id' => '28'],
            ['id' => '28',      'system_group_id' => '1',       'system_program_id' => '29'],
            ['id' => '30',      'system_group_id' => '1',       'system_program_id' => '31'],
            ['id' => '31',      'system_group_id' => '1',       'system_program_id' => '32'],
            ['id' => '32',      'system_group_id' => '1',       'system_program_id' => '33'],
            ['id' => '33',      'system_group_id' => '1',       'system_program_id' => '34'],
            ['id' => '34',      'system_group_id' => '1',       'system_program_id' => '35'],
            ['id' => '36',      'system_group_id' => '1',       'system_program_id' => '36'],
            ['id' => '37',      'system_group_id' => '1',       'system_program_id' => '37'],
            ['id' => '38',      'system_group_id' => '1',       'system_program_id' => '38'],
            ['id' => '39',      'system_group_id' => '1',       'system_program_id' => '39'],
            ['id' => '40',      'system_group_id' => '1',       'system_program_id' => '40'],
            ['id' => '41',      'system_group_id' => '1',       'system_program_id' => '7'],
            ['id' => '42',      'system_group_id' => '1',       'system_program_id' => '10'],
            ['id' => '43',      'system_group_id' => '2',       'system_program_id' => '10'],
            ['id' => '44',      'system_group_id' => '2',       'system_program_id' => '12'],
            ['id' => '45',      'system_group_id' => '2',       'system_program_id' => '13'],
            ['id' => '46',      'system_group_id' => '2',       'system_program_id' => '16'],
            ['id' => '47',      'system_group_id' => '2',       'system_program_id' => '17'],
            ['id' => '48',      'system_group_id' => '2',       'system_program_id' => '18'],
            ['id' => '49',      'system_group_id' => '2',       'system_program_id' => '19'],
            ['id' => '50',      'system_group_id' => '2',       'system_program_id' => '20'],
            ['id' => '51',      'system_group_id' => '2',       'system_program_id' => '22'],
            ['id' => '52',      'system_group_id' => '2',       'system_program_id' => '23'],
            ['id' => '53',      'system_group_id' => '2',       'system_program_id' => '24'],
            ['id' => '54',      'system_group_id' => '2',       'system_program_id' => '25'],
            ['id' => '55',      'system_group_id' => '2',       'system_program_id' => '30'],
            [                   'system_group_id' => '1',       'system_program_id' => '41'],
            [                   'system_group_id' => '1',       'system_program_id' => '42'],
            [                   'system_group_id' => '1',       'system_program_id' => '43'],
            [                   'system_group_id' => '1',       'system_program_id' => '44'],
            [                   'system_group_id' => '1',       'system_program_id' => '45'],
            [                   'system_group_id' => '1',       'system_program_id' => '46'],
            [                   'system_group_id' => '1',       'system_program_id' => '47'],
            [                   'system_group_id' => '1',       'system_program_id' => '48'],
            [                   'system_group_id' => '1',       'system_program_id' => '49'],
            [                   'system_group_id' => '1',       'system_program_id' => '50'],
            [                   'system_group_id' => '1',       'system_program_id' => '51'],
            [                   'system_group_id' => '1',       'system_program_id' => '52'],
            [                   'system_group_id' => '1',       'system_program_id' => '53'],
            [                   'system_group_id' => '1',       'system_program_id' => '54'],
            [                   'system_group_id' => '1',       'system_program_id' => '55'],
            [                   'system_group_id' => '1',       'system_program_id' => '56'],
            [                   'system_group_id' => '1',       'system_program_id' => '57'],
            [                   'system_group_id' => '1',       'system_program_id' => '58'],
            [                   'system_group_id' => '1',       'system_program_id' => '59'],
            [                   'system_group_id' => '1',       'system_program_id' => '60'],
            [                   'system_group_id' => '1',       'system_program_id' => '61'],
            [                   'system_group_id' => '1',       'system_program_id' => '62'],
            [                   'system_group_id' => '1',       'system_program_id' => '63'],
            [                   'system_group_id' => '1',       'system_program_id' => '64'],
            [                   'system_group_id' => '1',       'system_program_id' => '65'],
            [                   'system_group_id' => '1',       'system_program_id' => '66'],
            [                   'system_group_id' => '1',       'system_program_id' => '67'],
            [                   'system_group_id' => '1',       'system_program_id' => '68'],
            [                   'system_group_id' => '1',       'system_program_id' => '69'],
            [                   'system_group_id' => '1',       'system_program_id' => '70'],
            [                   'system_group_id' => '1',       'system_program_id' => '71'],
            [                   'system_group_id' => '1',       'system_program_id' => '72'],

        ];
        $this->table('system_group_program')->insert($data)->save();

        /**
         * Adiciona os programas específicos para cada grupo
         * (Ainda a definir)
         */

        

        // Create table permission.system_user_program
        $system_user_program = $this->table('system_user_program',                          ['signed' => FALSE]);
        $system_user_program->addColumn('system_user_id', 'integer',                        ['signed' => FALSE])
                            ->addColumn('system_program_id', 'integer',                     ['signed' => FALSE])
                            ->addForeignKey('system_user_id', 'system_user', 'id',          ['delete'=> 'CASCADE', 'update'=> 'CASCADE'])
                            ->addForeignKey('system_program_id', 'system_program', 'id',    ['delete'=> 'CASCADE', 'update'=> 'CASCADE'])
                            ->addIndex(['system_user_id'],                                  ['name' => 'sys_user_program_user_idx'])
                            ->addIndex(['system_program_id'],                               ['name' => 'sys_user_program_program_idx'])
                            ->addTimestampsWithTimezone()
                            ->create();

        /**
         * Communication BLOCK
         */
        // Create table communication.system_message
        $system_message = $this->table('system_message',                                    ['signed' => FALSE]);
        $system_message->addColumn('system_user_id', 'integer',                             ['signed' => FALSE])
                       ->addColumn('system_user_to_id', 'integer',                          ['signed' => FALSE])
                       ->addColumn('subject', 'text',                                       ['null' => TRUE])
                       ->addColumn('message', 'text',                                       ['null' => TRUE])
                       ->addColumn('dt_message', 'text')
                       ->addColumn('checked', 'boolean')
                       ->addForeignKey('system_user_id', 'system_user', 'id',               ['delete'=> 'CASCADE', 'update'=> 'CASCADE'])
                       ->addForeignKey('system_user_to_id', 'system_user', 'id',            ['delete'=> 'CASCADE', 'update'=> 'CASCADE'])
                       ->addTimestampsWithTimezone()
                       ->create();

        // Create table communication.system_notification
        $system_notification = $this->table('system_notification',                          ['signed' => FALSE]);
        $system_notification->addColumn('system_user_id', 'integer',                        ['signed' => FALSE])
                            ->addColumn('system_user_to_id', 'integer',                     ['signed' => FALSE])
                            ->addColumn('subject', 'text',                                  ['null' => TRUE])
                            ->addColumn('message', 'text',                                  ['null' => TRUE])
                            ->addColumn('dt_message', 'text')
                            ->addColumn('action_url', 'text',                               ['null' => TRUE])
                            ->addColumn('action_label', 'text',                             ['null' => TRUE])
                            ->addColumn('icon', 'text',                                     ['null' => TRUE])
                            ->addColumn('checked', 'boolean')
                            ->addForeignKey('system_user_id', 'system_user', 'id',          ['delete'=> 'CASCADE', 'update'=> 'CASCADE'])
                            ->addForeignKey('system_user_to_id', 'system_user', 'id',       ['delete'=> 'CASCADE', 'update'=> 'CASCADE'])
                            ->addTimestampsWithTimezone()
                            ->create();

        // Create table communication.system_document_category
        $system_document_category = $this->table('system_document_category',                ['signed' => FALSE]);
        $system_document_category->addColumn('name', 'text')
                                 ->addTimestampsWithTimezone()
                                 ->create();

        // Insert system_document_category
        $data = [
            [ 'id' => '1',  'name' => 'Documentação' ]
        ];
        $this->table('system_document_category')->insert($data)->save();

        // Create table communication.system_document
        $system_document = $this->table('system_document',                                  ['signed' => FALSE]);
        $system_document->addColumn('system_user_id', 'integer',                            ['signed' => FALSE])
                        ->addColumn('title', 'text',                                        ['null' => TRUE])
                        ->addColumn('description', 'text',                                  ['null' => TRUE])
                        ->addColumn('category_id', 'integer',                               ['signed' => FALSE])
                        ->addColumn('submission_date', 'date')
                        ->addColumn('archive_date', 'date')
                        ->addColumn('filename', 'text',                                     ['null' => TRUE])
                        ->addForeignKey('system_user_id', 'system_user', 'id',              ['delete'=> 'CASCADE', 'update'=> 'CASCADE'])
                        ->addForeignKey('category_id', 'system_document_category', 'id',    ['delete'=> 'CASCADE', 'update'=> 'CASCADE'])
                        ->addTimestampsWithTimezone()
                        ->create();

        // Create table communication.system_document_user
        $system_document_user = $this->table('system_document_user',                        ['signed' => FALSE]);
        $system_document_user->addColumn('document_id', 'integer',                          ['signed' => FALSE])
                             ->addColumn('system_user_id', 'integer',                       ['signed' => FALSE])
                             ->addForeignKey('document_id', 'system_document', 'id',        ['delete'=> 'CASCADE', 'update'=> 'CASCADE'])
                             ->addForeignKey('system_user_id', 'system_user', 'id',         ['delete'=> 'CASCADE', 'update'=> 'CASCADE'])
                             ->addTimestampsWithTimezone()
                             ->create();

        // Create table communication.system_document_group
        $system_document_group = $this->table('system_document_group',                      ['signed' => FALSE]);
        $system_document_group->addColumn('document_id', 'integer',                         ['signed' => FALSE])
                    ->addColumn('system_group_id', 'integer',                               ['signed' => FALSE])
                    ->addForeignKey('system_group_id', 'system_group', 'id',                ['delete'=> 'CASCADE', 'update'=> 'CASCADE'])
                    ->addForeignKey('document_id', 'system_document', 'id',                 ['delete'=> 'CASCADE', 'update'=> 'CASCADE'])
                    ->addTimestampsWithTimezone()
                    ->create();

        /**
         * Log BLOCK
         */
        // Create table log.system_change_log
        $system_change_log = $this->table('system_change_log',                              ['signed' => FALSE]);
        $system_change_log->addColumn('logdate', 'timestamp',                               ['null' => TRUE])
                          ->addColumn('login', 'text',                                      ['null' => TRUE])
                          ->addColumn('tablename', 'text',                                  ['null' => TRUE])
                          ->addColumn('primarykey', 'text',                                 ['null' => TRUE])
                          ->addColumn('pkvalue', 'text',                                    ['null' => TRUE])
                          ->addColumn('operation', 'text',                                  ['null' => TRUE])
                          ->addColumn('columnname', 'text',                                 ['null' => TRUE])
                          ->addColumn('oldvalue', 'text',                                   ['null' => TRUE])
                          ->addColumn('newvalue', 'text',                                   ['null' => TRUE])
                          ->addColumn('access_ip', 'text',                                  ['null' => TRUE])
                          ->addColumn('transaction_id', 'text',                             ['null' => TRUE])
                          ->addColumn('log_trace', 'text',                                  ['null' => TRUE])
                          ->addColumn('session_id', 'text',                                 ['null' => TRUE])
                          ->addColumn('class_name', 'text',                                 ['null' => TRUE])
                          ->addColumn('php_sapi', 'text',                                   ['null' => TRUE])
                          ->addColumn('log_year', 'string',                                 ['limit' => 4,'null' => TRUE])
                          ->addColumn('log_month', 'string',                                ['limit' => 2,'null' => TRUE])
                          ->addColumn('log_day', 'string',                                  ['limit' => 2,'null' => TRUE])
                          ->create();

        // Create table log.system_sql_log
        $system_sql_log = $this->table('system_sql_log',                                    ['signed' => FALSE]);
        $system_sql_log->addColumn('logdate', 'timestamp',                                  ['null' => TRUE])
                       ->addColumn('login', 'text',                                         ['null' => TRUE])
                       ->addColumn('database_name', 'text',                                 ['null' => TRUE])
                       ->addColumn('sql_command', 'text',                                   ['null' => TRUE])
                       ->addColumn('statement_type', 'text',                                ['null' => TRUE])
                       ->addColumn('access_ip', 'string',                                   ['limit' => 45])
                       ->addColumn('transaction_id', 'text',                                ['null' => TRUE])
                       ->addColumn('log_trace', 'text',                                     ['null' => TRUE])
                       ->addColumn('session_id', 'text',                                    ['null' => TRUE])
                       ->addColumn('class_name', 'text',                                    ['null' => TRUE])
                       ->addColumn('php_sapi', 'text',                                      ['null' => TRUE])
                       ->addColumn('request_id', 'text',                                    ['null' => TRUE])
                       ->addColumn('log_year', 'string',                                    ['limit' => 4,'null' => TRUE])
                       ->addColumn('log_month', 'string',                                   ['limit' => 2,'null' => TRUE])
                       ->addColumn('log_day', 'string',                                     ['limit' => 2,'null' => TRUE])
                       ->create();

        // Create table log.system_access_log
        $system_access_log = $this->table('system_access_log',                              ['signed' => FALSE]);
        $system_access_log->addColumn('sessionid', 'text',                                  ['null' => TRUE])
                          ->addColumn('login', 'text',                                      ['null' => TRUE])
                          ->addColumn('login_time', 'timestamp',                            ['null' => TRUE])
                          ->addColumn('login_year', 'string',                               ['limit' => 4,'null' => TRUE])
                          ->addColumn('login_month', 'string',                              ['limit' => 2,'null' => TRUE])
                          ->addColumn('login_day', 'string',                                ['limit' => 2,'null' => TRUE])
                          ->addColumn('logout_time', 'timestamp',                           ['null' => TRUE])
                          ->addColumn('impersonated', 'string',                             ['limit' => 1,'null' => TRUE])
                          ->addColumn('access_ip', 'string',                                ['limit' => 45,'null' => TRUE])
                          ->create();
                    
        // Create table log.system_request_log
        $system_request_log = $this->table('system_request_log',                            ['signed' => FALSE]);
        $system_request_log->addColumn('endpoint', 'text',                                  ['null' => TRUE])
                           ->addColumn('logdate', 'text',                                   ['null' => TRUE])
                           ->addColumn('log_year', 'string',                                ['limit' => 4,'null' => TRUE])
                           ->addColumn('log_month', 'string',                               ['limit' => 2,'null' => TRUE])
                           ->addColumn('log_day', 'string',                                 ['limit' => 2,'null' => TRUE])
                           ->addColumn('session_id', 'text',                                ['null' => TRUE])
                           ->addColumn('login', 'text',                                     ['null' => TRUE])
                           ->addColumn('access_ip', 'text',                                 ['null' => TRUE])
                           ->addColumn('class_name', 'text',                                ['null' => TRUE])
                           ->addColumn('http_host', 'text',                                 ['null' => TRUE])
                           ->addColumn('server_port', 'text',                               ['null' => TRUE])
                           ->addColumn('request_uri', 'text',                               ['null' => TRUE])
                           ->addColumn('request_method', 'text',                            ['null' => TRUE])
                           ->addColumn('query_string', 'text',                              ['null' => TRUE])
                           ->addColumn('request_headers', 'text',                           ['null' => TRUE])
                           ->addColumn('request_body', 'text',                              ['null' => TRUE])
                           ->addColumn('request_duration', 'integer',                       ['signed' => FALSE])
                           ->create();
    }



    public function down()
    {
        $this->table('system_request_log')->drop()->save();
        $this->table('system_access_log')->drop()->save();
        $this->table('system_sql_log')->drop()->save();
        $this->table('system_change_log')->drop()->save();
        $this->table('system_document_group')->drop()->save();
        $this->table('system_document_user')->drop()->save();
        $this->table('system_document')->drop()->save();
        $this->table('system_document_category')->drop()->save();
        $this->table('system_notification')->drop()->save();
        $this->table('system_message')->drop()->save();
        $this->table('system_user_program')->drop()->save();
        $this->table('system_group_program')->drop()->save();
        $this->table('system_user_group')->drop()->save();
        $this->table('system_user_unit')->drop()->save();
        $this->table('system_user')->drop()->save();
        $this->table('system_preference')->drop()->save();
        $this->table('system_unit')->drop()->save();
        $this->table('system_program')->drop()->save();
        $this->table('system_group')->drop()->save();
    }
}
