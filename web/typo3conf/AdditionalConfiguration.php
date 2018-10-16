<?php
/**
 * it loads variable from .env.local file
 */

// Database Credentials
$GLOBALS['TYPO3_CONF_VARS']['DB']['Connections']['Default']['host'] = getenv('TYPO3_DB_CONNECTIONS_DEFAULT_HOST');
$GLOBALS['TYPO3_CONF_VARS']['DB']['Connections']['Default']['port'] = getenv('TYPO3_DB_CONNECTIONS_DEFAULT_PORT');
$GLOBALS['TYPO3_CONF_VARS']['DB']['Connections']['Default']['user'] = getenv('TYPO3_DB_CONNECTIONS_DEFAULT_USER');
$GLOBALS['TYPO3_CONF_VARS']['DB']['Connections']['Default']['password'] = getenv('TYPO3_DB_CONNECTIONS_DEFAULT_PASS');
$GLOBALS['TYPO3_CONF_VARS']['DB']['Connections']['Default']['dbname'] = getenv('TYPO3_DB_CONNECTIONS_DEFAULT_NAME');

// Mail
$GLOBALS['TYPO3_CONF_VARS']['MAIL']['transport'] = getenv('TYPO3_MAIL_TRANSPORT');
$GLOBALS['TYPO3_CONF_VARS']['MAIL']['transport_smtp_server'] = getenv('TYPO3_MAIL_TRANSPORT_SMTP_SERVER');
// System
$GLOBALS['TYPO3_CONF_VARS']['SYS']['trustedHostsPattern'] = getenv('TYPO3_TRUSTED_HOST_PATTERN');

$GLOBALS['TYPO3_CONF_VARS']['SYS']['sitename'] = getenv('TYPO3_SITENAME');

// Istall tool password
$GLOBALS['TYPO3_CONF_VARS']['BE']['installToolPassword'] = getenv('TYPO3_INSTALLTOOLPASSWORD');



$GLOBALS['TYPO3_CONF_VARS']['SYS']['devIPmask'] = '*';

// Loads the TYPO3_CONTEXT env and change some parameters
switch (\TYPO3\CMS\Core\Utility\GeneralUtility::getApplicationContext()) {
    case 'Development':
        $GLOBALS['TYPO3_CONF_VARS']['SYS']['displayErrors'] = 1;
        $GLOBALS['TYPO3_CONF_VARS']['SYS']['systemLogLevel'] = 1;
        $GLOBALS['TYPO3_CONF_VARS']['SYS']['exceptionalErrors'] = 28674;
        $GLOBALS['TYPO3_CONF_VARS']['SYS']['enableDeprecationLog'] = 'file';
        $GLOBALS['TYPO3_CONF_VARS']['SYS']['sqlDebug'] = 0;
        $GLOBALS['TYPO3_CONF_VARS']['BE']['debug'] = 0;
        $GLOBALS['TYPO3_CONF_VARS']['FE']['debug'] = 0;
        $GLOBALS['TYPO3_CONF_VARS']['SYS']['sitename'] = 'DEV';

        break;
    case 'Debug':
        $GLOBALS['TYPO3_CONF_VARS']['SYS']['displayErrors'] = 1;
        $GLOBALS['TYPO3_CONF_VARS']['SYS']['systemLogLevel'] = 0;
        $GLOBALS['TYPO3_CONF_VARS']['SYS']['exceptionalErrors'] = 28674;
        $GLOBALS['TYPO3_CONF_VARS']['SYS']['enableDeprecationLog'] = 'file';
        $GLOBALS['TYPO3_CONF_VARS']['SYS']['sqlDebug'] = 1;
        $GLOBALS['TYPO3_CONF_VARS']['BE']['debug'] = 1;
        $GLOBALS['TYPO3_CONF_VARS']['FE']['debug'] = 1;
        $GLOBALS['TYPO3_CONF_VARS']['SYS']['sitename'] = 'DEV/DEBUG';
        break;
    case 'Stage':
        $GLOBALS['TYPO3_CONF_VARS']['SYS']['displayErrors'] = 0;
        $GLOBALS['TYPO3_CONF_VARS']['SYS']['systemLogLevel'] = '2';
        $GLOBALS['TYPO3_CONF_VARS']['SYS']['exceptionalErrors'] = 20480;
        $GLOBALS['TYPO3_CONF_VARS']['SYS']['enableDeprecationLog'] = false;
        $GLOBALS['TYPO3_CONF_VARS']['SYS']['sqlDebug'] = 0;
        $GLOBALS['TYPO3_CONF_VARS']['BE']['debug'] = 0;
        $GLOBALS['TYPO3_CONF_VARS']['FE']['debug'] = 0;
        $GLOBALS['TYPO3_CONF_VARS']['SYS']['sitename'] = 'STAGE';
        break;
    case 'Production':
    default:
        $GLOBALS['TYPO3_CONF_VARS']['SYS']['displayErrors'] = 0;
        $GLOBALS['TYPO3_CONF_VARS']['SYS']['systemLogLevel'] = '2';
        $GLOBALS['TYPO3_CONF_VARS']['SYS']['exceptionalErrors'] = 20480;
        $GLOBALS['TYPO3_CONF_VARS']['SYS']['enableDeprecationLog'] = false;
        $GLOBALS['TYPO3_CONF_VARS']['SYS']['sqlDebug'] = 0;
        $GLOBALS['TYPO3_CONF_VARS']['BE']['debug'] = 0;
        $GLOBALS['TYPO3_CONF_VARS']['FE']['debug'] = 0;
        $GLOBALS['TYPO3_CONF_VARS']['SYS']['sitename'] = 'PRODUCTION';
}
