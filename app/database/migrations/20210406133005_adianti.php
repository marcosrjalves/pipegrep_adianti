<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class Adianti extends AbstractMigration
{
    public function change(): void
    {
        /**
         * Criação do padrão adianti através de um migration do PHINX
         */

        /**
         * Permission BLOCK
         */
        // Create table permission.system_group
        $system_group = $this->table('system_group', ['signed' => FALSE]);
        $system_group->addColumn('name', 'string', ['limit' => 100])
                    ->addTimestampsWithTimezone()
                    ->create();

        // Create table permission.system_program
        $system_program = $this->table('system_program', ['signed' => FALSE]);
        $system_program->addColumn('name', 'string', ['limit' => 100])
                    ->addColumn('controller', 'string', ['limit' => 100])
                    ->addTimestampsWithTimezone()
                    ->create();

        // Create table permission.system_unit
        $system_unit = $this->table('system_unit', ['signed' => FALSE]);
        $system_unit->addColumn('name', 'string', ['limit' => 100])
                    ->addColumn('connection_name', 'string', ['limit' => 100])
                    ->addTimestampsWithTimezone()
                    ->create();

        // Create table permission.system_preference
        $system_preference = $this->table('system_preference', ['signed' => FALSE]);
        $system_preference->addColumn('value', 'text')
                    ->addTimestampsWithTimezone()
                    ->create();

        // Create table permission.system_user
        $system_user = $this->table('system_user', ['signed' => FALSE]);
        $system_user->addColumn('name', 'string', ['limit' => 100])
                    ->addColumn('login', 'string', ['limit' => 100])
                    ->addColumn('password', 'string', ['limit' => 100])
                    ->addColumn('email', 'string', ['limit' => 100])
                    ->addColumn('frontpage_id', 'integer', ['signed' => FALSE, 'null' => TRUE])
                    ->addColumn('system_unit_id', 'integer', ['signed' => FALSE, 'null' => TRUE])
                    ->addColumn('active', 'string', ['limit' => 1])
                    ->addForeignKey('frontpage_id', 'system_program', 'id', ['delete'=> 'SET_NULL', 'update'=> 'NO_ACTION'])
                    ->addForeignKey('system_unit_id', 'system_unit', 'id', ['delete'=> 'SET_NULL', 'update'=> 'NO_ACTION'])
                    ->addIndex(['frontpage_id'], ['name' => 'sys_user_program_idx'])
                    ->addTimestampsWithTimezone()
                    ->create();

        // Create table permission.system_user_unit
        $system_user_unit = $this->table('system_user_unit', ['signed' => FALSE]);
        $system_user_unit->addColumn('system_user_id', 'integer', ['signed' => FALSE])
                    ->addColumn('system_unit_id', 'integer', ['signed' => FALSE])
                    ->addForeignKey('system_user_id', 'system_user', 'id', ['delete'=> 'CASCADE', 'update'=> 'CASCADE'])
                    ->addForeignKey('system_unit_id', 'system_unit', 'id', ['delete'=> 'CASCADE', 'update'=> 'CASCADE'])
                    ->addTimestampsWithTimezone()
                    ->create();

        // Create table permission.system_user_group
        $system_user_group = $this->table('system_user_group', ['signed' => FALSE]);
        $system_user_group->addColumn('system_user_id', 'integer', ['signed' => FALSE])
                    ->addColumn('system_group_id', 'integer', ['signed' => FALSE])
                    ->addForeignKey('system_user_id', 'system_user', 'id', ['delete'=> 'CASCADE', 'update'=> 'CASCADE'])
                    ->addForeignKey('system_group_id', 'system_group', 'id', ['delete'=> 'CASCADE', 'update'=> 'CASCADE'])
                    ->addIndex(['system_user_id'], ['name' => 'sys_user_group_user_idx'])
                    ->addIndex(['system_group_id'], ['name' => 'sys_user_group_group_idx'])
                    ->addTimestampsWithTimezone()
                    ->create();

        // Create table permission.system_group_program
        $system_group_program = $this->table('system_group_program', ['signed' => FALSE]);
        $system_group_program->addColumn('system_group_id', 'integer', ['signed' => FALSE])
                    ->addColumn('system_program_id', 'integer', ['signed' => FALSE])
                    ->addForeignKey('system_group_id', 'system_group', 'id', ['delete'=> 'CASCADE', 'update'=> 'CASCADE'])
                    ->addForeignKey('system_program_id', 'system_program', 'id', ['delete'=> 'CASCADE', 'update'=> 'CASCADE'])
                    ->addIndex(['system_group_id'], ['name' => 'sys_group_program_group_idx'])
                    ->addIndex(['system_program_id'], ['name' => 'sys_group_program_program_idx'])
                    ->addTimestampsWithTimezone()
                    ->create();

        // Create table permission.system_user_program
        $system_user_program = $this->table('system_user_program', ['signed' => FALSE]);
        $system_user_program->addColumn('system_user_id', 'integer', ['signed' => FALSE])
                    ->addColumn('system_program_id', 'integer', ['signed' => FALSE])
                    ->addForeignKey('system_user_id', 'system_user', 'id', ['delete'=> 'CASCADE', 'update'=> 'CASCADE'])
                    ->addForeignKey('system_program_id', 'system_program', 'id', ['delete'=> 'CASCADE', 'update'=> 'CASCADE'])
                    ->addIndex(['system_user_id'], ['name' => 'sys_user_program_user_idx'])
                    ->addIndex(['system_program_id'], ['name' => 'sys_user_program_program_idx'])
                    ->addTimestampsWithTimezone()
                    ->create();

        /**
         * Communication BLOCK
         */
        // Create table communication.system_message
        $system_message = $this->table('system_message', ['signed' => FALSE]);
        $system_message->addColumn('system_user_id', 'integer', ['signed' => FALSE])
                    ->addColumn('system_user_to_id', 'integer', ['signed' => FALSE])
                    ->addColumn('subject', 'text')
                    ->addColumn('message', 'text')
                    ->addColumn('dt_message', 'text')
                    ->addColumn('checked', 'boolean')
                    ->addForeignKey('system_user_id', 'system_user', 'id')
                    ->addForeignKey('system_user_to_id', 'system_user', 'id')
                    ->addTimestampsWithTimezone()
                    ->create();

        // Create table communication.system_notification
        $system_notification = $this->table('system_notification', ['signed' => FALSE]);
        $system_notification->addColumn('system_user_id', 'integer', ['signed' => FALSE])
                    ->addColumn('system_user_to_id', 'integer', ['signed' => FALSE])
                    ->addColumn('subject', 'text')
                    ->addColumn('message', 'text')
                    ->addColumn('dt_message', 'text')
                    ->addColumn('action_url', 'text')
                    ->addColumn('action_label', 'text')
                    ->addColumn('icon', 'text')
                    ->addColumn('checked', 'boolean')
                    ->addForeignKey('system_user_id', 'system_user', 'id')
                    ->addForeignKey('system_user_to_id', 'system_user', 'id')
                    ->addTimestampsWithTimezone()
                    ->create();

        // Create table communication.system_document_category
        $system_document_category = $this->table('system_document_category', ['signed' => FALSE]);
        $system_document_category->addColumn('name', 'text')
                    ->addTimestampsWithTimezone()
                    ->create();

        // Create table communication.system_document
        $system_document = $this->table('system_document', ['signed' => FALSE]);
        $system_document->addColumn('system_user_id', 'integer', ['signed' => FALSE])
                    ->addColumn('title', 'text')
                    ->addColumn('description', 'text')
                    ->addColumn('category_id', 'integer', ['signed' => FALSE])
                    ->addColumn('submission_date', 'date')
                    ->addColumn('archive_date', 'date')
                    ->addColumn('filename', 'text')
                    ->addForeignKey('system_user_id', 'system_user', 'id')
                    ->addForeignKey('category_id', 'system_document_category', 'id')
                    ->addTimestampsWithTimezone()
                    ->create();

        // Create table communication.system_document_user
        $system_document_user = $this->table('system_document_user', ['signed' => FALSE]);
        $system_document_user->addColumn('document_id', 'integer', ['signed' => FALSE])
                    ->addColumn('system_user_id', 'integer', ['signed' => FALSE])
                    ->addForeignKey('document_id', 'system_document', 'id')
                    ->addForeignKey('system_user_id', 'system_user', 'id')
                    ->addTimestampsWithTimezone()
                    ->create();

        // Create table communication.system_document_group
        $system_document_group = $this->table('system_document_group', ['signed' => FALSE]);
        $system_document_group->addColumn('document_id', 'integer', ['signed' => FALSE])
                    ->addColumn('system_group_id', 'integer', ['signed' => FALSE])
                    ->addForeignKey('system_group_id', 'system_group', 'id')
                    ->addForeignKey('document_id', 'system_document', 'id')
                    ->addTimestampsWithTimezone()
                    ->create();

        /**
         * Log BLOCK
         */
        // Create table log.system_change_log
        $system_change_log = $this->table('system_change_log', ['signed' => FALSE]);
        $system_change_log->addColumn('logdate', 'timestamp')
                    ->addColumn('login', 'text')
                    ->addColumn('tablename', 'text')
                    ->addColumn('primarykey', 'text')
                    ->addColumn('pkvalue', 'text')
                    ->addColumn('operation', 'text')
                    ->addColumn('columnname', 'text')
                    ->addColumn('oldvalue', 'text')
                    ->addColumn('newvalue', 'text')
                    ->addColumn('access_ip', 'text')
                    ->addColumn('transaction_id', 'text')
                    ->addColumn('log_trace', 'text')
                    ->addColumn('session_id', 'text')
                    ->addColumn('class_name', 'text')
                    ->addColumn('php_sapi', 'text')
                    ->addColumn('log_year', 'string', ['limit' => 4])
                    ->addColumn('log_month', 'string', ['limit' => 2])
                    ->addColumn('log_day', 'string', ['limit' => 2])
                    ->create();

        // Create table log.system_sql_log
        $system_sql_log = $this->table('system_sql_log', ['signed' => FALSE]);
        $system_sql_log->addColumn('logdate', 'timestamp')
                    ->addColumn('login', 'text')
                    ->addColumn('database_name', 'text')
                    ->addColumn('sql_command', 'text')
                    ->addColumn('statement_type', 'text')
                    ->addColumn('access_ip', 'string', ['limit' => 45])
                    ->addColumn('transaction_id', 'text')
                    ->addColumn('log_trace', 'text')
                    ->addColumn('session_id', 'text')
                    ->addColumn('class_name', 'text')
                    ->addColumn('php_sapi', 'text')
                    ->addColumn('request_id', 'text')
                    ->addColumn('log_year', 'string', ['limit' => 4])
                    ->addColumn('log_month', 'string', ['limit' => 2])
                    ->addColumn('log_day', 'string', ['limit' => 2])
                    ->create();

        // Create table log.system_access_log
        $system_access_log = $this->table('system_access_log', ['signed' => FALSE]);
        $system_access_log->addColumn('sessionid', 'text')
                    ->addColumn('login', 'text')
                    ->addColumn('login_time', 'timestamp')
                    ->addColumn('login_year', 'string', ['limit' => 4])
                    ->addColumn('login_month', 'string', ['limit' => 2])
                    ->addColumn('login_day', 'string', ['limit' => 2])
                    ->addColumn('logout_time', 'timestamp')
                    ->addColumn('impersonated', 'string', ['limit' => 1])
                    ->addColumn('access_ip', 'string', ['limit' => 45])
                    ->create();
                    
        // Create table log.system_request_log
        $system_request_log = $this->table('system_request_log', ['signed' => FALSE]);
        $system_request_log->addColumn('endpoint', 'text')
                    ->addColumn('logdate', 'text')
                    ->addColumn('log_year', 'string', ['limit' => 4])
                    ->addColumn('log_month', 'string', ['limit' => 2])
                    ->addColumn('log_day', 'string', ['limit' => 2])
                    ->addColumn('session_id', 'text')
                    ->addColumn('login', 'text')
                    ->addColumn('access_ip', 'text')
                    ->addColumn('class_name', 'text')
                    ->addColumn('http_host', 'text')
                    ->addColumn('server_port', 'text')
                    ->addColumn('request_uri', 'text')
                    ->addColumn('request_method', 'text')
                    ->addColumn('query_string', 'text')
                    ->addColumn('request_headers', 'text')
                    ->addColumn('request_body', 'text')
                    ->addColumn('request_duration', 'integer', ['signed' => FALSE])
                    ->create();
    }
}
