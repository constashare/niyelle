<?php

return [

    /*
    |-----------------------------------------------------------------------------
    | Your GetStream.io API credentials (you can them from getstream.io/dashboard)
    |-----------------------------------------------------------------------------
    |
    */

    'api_key' => 'z4pw47pwepbu',
    'api_secret' => 'jgmp2ejwrqechxpu5adyb69ktrx8xmvzfd4mh6gvgdzdmuc4swqmsazedpaa842k',
    'api_app_id' => '19846',
    /*
    |-----------------------------------------------------------------------------
    | Client connection options
    |-----------------------------------------------------------------------------
    |
    */
    'location' => 'us-east',
    'timeout' => 3,
    /*
    |-----------------------------------------------------------------------------
    | The default feed manager class
    |-----------------------------------------------------------------------------
    |
    */

    'feed_manager_class' => 'GetStream\StreamLaravel\StreamLaravelManager',

    /*
    |-----------------------------------------------------------------------------
    | The feed that keeps content created by its author
    |-----------------------------------------------------------------------------
    |
    */
    'user_feed' => 'user',
	
	/*
   |-----------------------------------------------------------------------------
   | The feed that keeps content created by its brand
   |-----------------------------------------------------------------------------
   |
   */
	'brand_feed' => 'brand',
	
	/*
   |-----------------------------------------------------------------------------
   | The feed that keeps content for the public
   |-----------------------------------------------------------------------------
   |
   */
	'public_feed' => 'public',
    /*
    |-----------------------------------------------------------------------------
    | The feed containing notification activities
    |-----------------------------------------------------------------------------
    |
    */
    'notification_feed' => 'notification',
	
	
    /*
    |-----------------------------------------------------------------------------
    | The feeds that shows activities from followed user feeds
    |-----------------------------------------------------------------------------
    |
    */
    'news_feeds' => array(
        'timeline' => 'timeline',
        'timeline_aggregated' => 'timeline_aggregated',
    )
];
