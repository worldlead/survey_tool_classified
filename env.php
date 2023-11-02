<?php

/*---------------
configuration of an APP information
----------------*/




/*---------------
configuration for database in cloud
----------------*/




/*---------------
configuration for database in local machine
----------------*/



if (!defined('DB_DATABASE'))                    define('DB_DATABASE', 'survey_tool');

if (!defined('DB_HOST'))                        define('DB_HOST','127.0.0.1');

if (!defined('DB_USERNAME'))                    define('DB_USERNAME','root');

if (!defined('DB_PASSWORD'))                    define('DB_PASSWORD' ,'');

if (!defined('DB_PORT'))                        define('DB_PORT' ,'3306');

if (!defined('APP_HOST'))                       define('APP_HOST', 'http://localhost/survey');



/*---------------
configuration of brevo api
----------------*/



if (!defined('BREVO_API_KEY'))                      define('BREVO_API_KEY', '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');


/*---------------
configuration for AWS S3
----------------*/



if (!defined('AWS_ACCESS_KEY_ID'))                  define("AWS_ACCESS_KEY_ID", "XXXXXXX");
if (!defined('AWS_ACCESS_KEY_SECRET'))              define("AWS_ACCESS_KEY_SECRET", "XXXXXXXXXXXXXXXXXXXX");
if (!defined('AWS_ACCESS_REGION'))                  define("AWS_ACCESS_REGION", "XXXXX");
if (!defined('AWS_BUCKET_NAME'))                    define("AWS_BUCKET_NAME", "XXXXXXXX");

?>