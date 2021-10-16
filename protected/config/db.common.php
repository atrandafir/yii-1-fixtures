<?php
/**
 * Aquí usamos un comando de Yii para unir la configuración de base de datos común para todos los entornos 
 * con la configuración de base de datos específico para este entorno.
 */
return CMap::mergeArray(
    array(
        'emulatePrepare' => true,
        'enableProfiling' => (true),
        'enableParamLogging' => (true), // descomentar para loguear valores en las consultas sql
        'charset' => 'utf8',
        'tablePrefix' => '', 
    ),
    require(dirname(__FILE__).'/db.php') 
);