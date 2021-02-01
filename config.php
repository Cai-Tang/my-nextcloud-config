/**
 *  /usr/share/webapps/nextcloud
 */
<?php
$CONFIG = array (
  'instanceid' => '',
  'passwordsalt' => ''',
  'secret' => '',
  'trusted_domains' => 
  array (
    0 => 'localhost',
  ),
  'datadirectory' => '/var/nextcloud/data',
  'dbtype' => 'mysql',
  'version' => '20.0.6.1',
  'overwrite.cli.url' => 'localhost',
  'dbname' => 'nextcloud',
  'dbhost' => 'localhost',
  'dbport' => '',
  'dbtableprefix' => 'oc_',
  'mysql.utf8mb4' => true,
  'dbuser' => 'nextcloud',
  'dbpassword' => 'password',
  'installed' => true,
  'memcache.local' => '\\OC\\Memcache\\APCu',
  'memcache.locking' => '\\OC\\Memcache\\Redis',
  'memcache.distributed' => '\\OC\\Memcache\\Redis',
  'redis' => 
  array (
    'host' => '/run/redis/redis.sock',
  ),
  'objectstore' => 
  array (
    'class' => '\\OC\\Files\\ObjectStore\\S3',
    'arguments' => 
    array (
      'bucket' => '桶名',
      'autocreate' => false,
      'key' => '你的腾讯云key',
      'secret' => '你的腾讯云secret',
      'hostname' => 'cos.<对象存储所在地区>.myqcloud.com',
      'use_ssl' => true,
    ),
  ),
  'maintenance' => false,
  'updater.release.channel' => 'stable',
);
