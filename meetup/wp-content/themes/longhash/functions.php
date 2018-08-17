<?php

add_filter( 'snow_monkey_recent_posts_widget_args_4', function( $query_args ) { //4のウィジェットに設定を行う。
$query_args['category_name'] = 'event'; //カテゴリーeventもののみを表示する
return $query_args;
} );

add_filter( 'snow_monkey_recent_posts_widget_args_2', function( $query_args ) { //2のウィジェットに設定を行う。
    $query_args['category_name'] = 'report'; //カテゴリーreportもののみを表示する
    return $query_args;
} );