<?php

/**
 * Configuration overrides for WP_ENV === 'production'
 */

use Roots\WPConfig\Config;

// TODO: set this before the website is deployed to public, so that when someone pull the data from production db, all user pw is anonymized. Use additional hooks to anonymize email and other possible sensitive data.
// define( 'WPMDB_ANONYMIZATION_USER_LOGIN_WHITELIST', 'sagar, sarvesh, jorgo', );
// define( 'WPMDB_ANONYMIZATION_DEFAULT_PASSWORD', 's1mplePW' );
// https://github.com/deliciousbrains/wp-migrate-db-anonymization

Config::define( 'WPOSES_AWS_ACCESS_KEY_ID', getenv('WPOSES_AWS_ACCESS_KEY_ID') );
Config::define( 'WPOSES_AWS_SECRET_ACCESS_KEY', getenv('WPOSES_AWS_SECRET_ACCESS_KEY') );

Config::define( 'WPOSES_LICENCE', getenv('WPOSES_LICENCE') );

// Define SES Settings
Config::define( 'WPOSES_SETTINGS', serialize( array(
    // Send site emails via Amazon SES.
    'send-via-ses'          => true,
    // Enable open tracking.
    'enable-open-tracking'  => false,
    // Enable click tracking.
    'enable-click-tracking' =>  false,
    // Enable subsite settings (if on multisite).
    //'enable-subsite-settings' => true,
    // Amazon SES region (e.g. 'us-east-1' - leave blank for default region).
    'region'                => 'eu-west-1',
    // Changes the default email address used by WordPress
    'default-email'         => 'website@plant-for-the-planet.org',
    // Changes the default email name used by WordPress.
    'default-email-name'    => 'Plant-for-the-Planet',
    // Sets the "Reply-To" header for all outgoing emails.
    'reply-to'              => 'website@plant-for-the-planet.org',
    // Sets the "Return-Path" header used by Amazon SES.
    'return-path'           => 'website@plant-for-the-planet.org',
    // Amount of days to keep email logs (e.g. 30, 60, 90, 180, 365, 730)
    'log-duration'          => '730',
) ) );

Config::define( 'AS3CF_SETTINGS', serialize( array(
    // Storage Provider ('aws', 'do', 'gcp')
    'provider' => 'aws',
    // Access Key ID for Storage Provider (aws and do only, replace '*')
    'access-key-id' => getenv('S3_API_KEY'), //defined in .env
    // Secret Access Key for Storage Providers (aws and do only, replace '*')
    'secret-access-key' => getenv('S3_API_SECRET'), //defined in .env
    // GCP Key File Path (gcp only)
    // Make sure hidden from public website, i.e. outside site's document root.
    //'key-file-path' => '/path/to/key/file.json',
    // Use IAM Roles on Amazon Elastic Compute Cloud (EC2) or Google Compute Engine (GCE)
    //'use-server-roles' => false,
    // Bucket to upload files to
    'bucket' => getenv('S3_BUCKET_NAME'),
    // Bucket region (e.g. 'us-west-1' - leave blank for default region)
    'region' => getenv('S3_REGION'),
    // Automatically copy files to bucket on upload
    'copy-to-s3' => false,
    // Rewrite file URLs to bucket
    'serve-from-s3' => true,
    // Bucket URL format to use ('path', 'cloudfront')
    'domain' => getenv('S3_BUCKET_URL_FORMAT'),
    // Custom domain if 'domain' set to 'cloudfront'
    'cloudfront' =>  getenv('S3_CLOUDFRONT'),
    // Enable object prefix, useful if you use your bucket for other files
    'enable-object-prefix' => true,
    // Object prefix to use if 'enable-object-prefix' is 'true'
    'object-prefix' =>  getenv('S3_OBJECT_PREFIX'),
    // Organize bucket files into YYYY/MM directories
    'use-yearmonth-folders' => true,
    // Serve files over HTTPS
    'force-https' => true,
    // Remove the local file version once offloaded to bucket
    'remove-local-file' => true,
    // Append a timestamped folder to path of files offloaded to bucket
    'object-versioning' => false,
) ) );
