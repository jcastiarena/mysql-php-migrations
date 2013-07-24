<?php

class Migration_2013_07_24_14_06_49 extends MpmMigration
{

	public function up(PDO &$pdo)
	{
		$pdo->exec("


		ALTER TABLE roles DROP FOREIGN KEY parent_role;

		ALTER TABLE roles CHANGE parentId parent_id BIGINT (20) ;

		ALTER TABLE roles ADD CONSTRAINT fk_parent_role FOREIGN KEY (parent_id) references roles(id);

		ALTER TABLE roles  CHANGE displayName display_name VARCHAR (255);


		");
	}

	public function down(PDO &$pdo)
	{
		
	}

}

?>