<?php

Yii::import('system.test.CDbFixtureManager');

class FixtureCommand extends CConsoleCommand {

  public function actionIndex() {
    
    /* @var $fixtureManager CDbFixtureManager */
    $fixtureManager=new CDbFixtureManager();
    $fixtureManager->basePath=Yii::getPathOfAlias('application.my_fixtures');
    $fixtureManager->init();

    // Just print some info about the tables
    foreach ($fixtureManager->getFixtures() as $name => $path) {
      echo "Loaded {$name} table from {$path}\n";
    }
    
  }

}
