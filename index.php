<?php 

require_once 'vendor/autoload.php';

$instagram = new \InstagramScraper\Instagram();
$media = $instagram->getMedias('mmeester');
$return = [];

foreach($media as $post) {
  array_push($return, [
    "caption" => $post->getCaption(),
    'thumbnail' => $post->getImageThumbnailUrl()
  ]);
}

echo "<pre>";
print_r($media);