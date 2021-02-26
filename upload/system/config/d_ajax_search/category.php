<?php
$_['d_ajax_search_category'] = [
	'table' => [
		'name' => 'c',
		'full_name' => 'category',
		'key' => 'category_id'
	],
	'tables' => [
		[
			'name' => 'cd',
			'join_to' => 'c',
			'full_name' => 'category_description',
			'key' => 'category_id',
			'join' => 'LEFT JOIN',
			'multi_language' => 1
		],
		[
			'name' => 'ct',
			'join_to' => 'cd',
			'full_name' => 'category_to_store',
			'key' => 'category_id',
			'join' => 'LEFT JOIN',
			'multi_language' => 1
		]
	],
	'query' => [

		'Name' => [
			'key' => 'cd.name',
			'rule' => 'LIKE',
			'tooltip' => 'Search by Name'
		],

		'Description' => [
			'key' => 'cd.description',
			'rule' => 'LIKE',
			'tooltip' => 'Search by Description',
		],
	],


	'select' => [
		'image' => 'c.image',
		'name' => 'cd.name',
		'description' => 'cd.description',
		'store_id' => 'ct.store_id',
	]
];