<?php

return [
	// MainController
	'' => [
		'controller' => 'main',
		'action' => 'index',
	],
    'advertisement' => [
        'controller' => 'advertisement',
        'action' => 'index',
    ],
    'advertisement/index/{page:\d+}' => [
        'controller' => 'advertisement',
        'action' => 'index',
    ],
    'entrant' => [
        'controller' => 'entrant',
        'action' => 'index',
    ],
    'entrant/index/{page:\d+}' => [
        'controller' => 'entrant',
        'action' => 'index',
    ],
    'post/{id:\d+}' => [
        'controller' => 'entrant',
        'action' => 'post',
    ],
    'study' => [
        'controller' => 'study',
        'action' => 'index',
    ],
    'study/index/{page:\d+}' => [
        'controller' => 'study',
        'action' => 'index',
    ],
    'eduactiv' => [
        'controller' => 'eduactiv',
        'action' => 'index',
    ],
    'eduactiv/index/{page:\d+}' => [
        'controller' => 'eduactiv',
        'action' => 'index',
    ],
    'achiev' => [
        'controller' => 'achiev',
        'action' => 'index',
    ],
    'achiev/index/{page:\d+}' => [
        'controller' => 'achiev',
        'action' => 'index',
    ],
    'reference' => [
        'controller' => 'reference',
        'action' => 'index',
    ],
    'reference/index/{page:\d+}' => [
        'controller' => 'reference',
        'action' => 'index',
    ],
	// AdminController
	'admin/login' => [
		'controller' => 'admin',
		'action' => 'login',
	],
	'admin/logout' => [
		'controller' => 'admin',
		'action' => 'logout',
	],
	'admin/add' => [
		'controller' => 'admin',
		'action' => 'add',
	],
	'admin/edit/{id:\d+}' => [
		'controller' => 'admin',
		'action' => 'edit',
	],
    'admin/editusers/{id:\d+}' => [
        'controller' => 'admin',
        'action' => 'editusers',
    ],
	'admin/delete/{id:\d+}' => [
		'controller' => 'admin',
		'action' => 'delete',
	],
    'admin/deleteusers/{id:\d+}' => [
        'controller' => 'admin',
        'action' => 'deleteusers',
    ],
	'admin/posts/{page:\d+}' => [
		'controller' => 'admin',
		'action' => 'posts',
	],
	'admin/posts' => [
		'controller' => 'admin',
		'action' => 'posts',
	],
    'admin/admins' => [
        'controller' => 'admin',
        'action' => 'admins',
    ],
    'admin/register' => [
        'controller' => 'admin',
        'action' => 'register',
    ],
];