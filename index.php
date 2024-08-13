<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include './vendor/autoload.php';

use Aws\S3\S3Client;


$s3Client = new S3Client([
    'credentials' => [
        'key' => 'AKIAYS2NTXKO2Y7XFYOQ',
        'secret' => '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',
    ],
    'region' => 'us-west-2',
    'version' => '2006-03-01'
]);


//Listing all S3 Bucket
$buckets = $s3Client->listBuckets();
foreach ($buckets['Buckets'] as $bucket) {
    echo $bucket['Name'] . "\n";
}

?>