<?php

class m211016_102610_demo_tables extends CDbMigration
{
	public function up()
	{
      $this->execute("
        
      CREATE TABLE `project` ( 
        `id` INT NOT NULL AUTO_INCREMENT , 
        `name` VARCHAR(128) NOT NULL , 
        `company` VARCHAR(128) NOT NULL , 
        `open` TINYINT(1) NOT NULL DEFAULT '1' , 
        PRIMARY KEY (`id`)) 
      ENGINE = InnoDB;  
      
      CREATE TABLE `task` ( 
        `id` INT NOT NULL AUTO_INCREMENT , 
        `project_id` INT NOT NULL , 
        `description` VARCHAR(255) NOT NULL , 
        `completed` TINYINT(1) NOT NULL DEFAULT '0' , 
        PRIMARY KEY (`id`), 
        INDEX (`project_id`), 
        INDEX (`completed`)) 
      ENGINE = InnoDB;
      
      ALTER TABLE `task` 
        ADD FOREIGN KEY (`project_id`) REFERENCES `project`(`id`) 
          ON DELETE CASCADE ON UPDATE RESTRICT;

      ");
	}

	public function down()
	{
		echo "m211016_102610_demo_tables does not support migration down.\n";
		return false;
	}

	/*
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
	}

	public function safeDown()
	{
	}
	*/
}