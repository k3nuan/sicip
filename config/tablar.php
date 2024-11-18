<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Title
    |--------------------------------------------------------------------------
    | Here you can change the default title of your admin panel.
    |
    */

    'title' => 'WebApp',
    'title_prefix' => '',
    'title_postfix' => '',
    'bottom_title' => 'WebApp',
    'current_version' => 'v4.8',


    /*
    |--------------------------------------------------------------------------
    | Admin Panel Logo
    |--------------------------------------------------------------------------
    |
    | Here you can change the logo of your admin panel.
    |
    */

    'logo' => '<b>Web</b>app',
    'logo_img_alt' => 'Admin Logo',

    /*
    |--------------------------------------------------------------------------
    | Authentication Logo
    |--------------------------------------------------------------------------
    |
    | Here you can set up an alternative logo to use on your login and register
    | screens. When disabled, the admin panel logo will be used instead.
    |
    */

    'auth_logo' => [
        'enabled' => false,
        'img' => [
            'path' => 'assets/app-logo.svg',
            'alt' => 'Auth Logo',
            'class' => '',
            'width' => 50,
            'height' => 50,
        ],
    ],

    /*
     *
     * Default path is 'resources/views/vendor/tablar' as null. Set your custom path here If you need.
     */

    'views_path' => null,

    /*
    |--------------------------------------------------------------------------
    | Layout
    |--------------------------------------------------------------------------
    | Here we change the layout of your admin panel.
    |
    | For detailed instructions you can look at the layout section here:
    |
    */

    'layout' => 'vertical',
    //boxed, combo, condensed, fluid, fluid-vertical, horizontal, navbar-overlap, navbar-sticky, rtl, vertical, vertical-right, vertical-transparent

    'layout_light_sidebar' => true,
    'layout_light_topbar' => true,
    'layout_enable_top_header' => true,

    /*
    |--------------------------------------------------------------------------
    | Sticky Navbar for Top Nav
    |--------------------------------------------------------------------------
    |
    | Here you can enable/disable the sticky functionality of Top Navigation Bar.
    |
    | For detailed instructions, you can look at the Top Navigation Bar classes here:
    |
    */

    'sticky_top_nav_bar' => false,

    /*
    |--------------------------------------------------------------------------
    | Admin Panel Classes
    |--------------------------------------------------------------------------
    |
    | Here you can change the look and behavior of the admin panel.
    |
    | For detailed instructions, you can look at the admin panel classes here:
    |
    */

    'classes_body' => '',

    /*
    |--------------------------------------------------------------------------
    | URLs
    |--------------------------------------------------------------------------
    |
    | Here we can modify the url settings of the admin panel.
    |
    | For detailed instructions, you can look at the urls section here:
    |
    */

    'use_route_url' => true,
    'dashboard_url' => 'home',
    'logout_url' => 'logout',
    'login_url' => 'login',
    'register_url' => 'register',
    'password_reset_url' => 'password.request',
    'password_email_url' => 'password.email',
    'profile_url' => false,
    'setting_url' => false,

    /*
    |--------------------------------------------------------------------------
    | Display Alert
    |--------------------------------------------------------------------------
    |
    | Display Alert Visibility.
    |
    */
    'display_alert' => false,

    /*
    |--------------------------------------------------------------------------
    | Menu Items
    |--------------------------------------------------------------------------
    |
    | Here we can modify the sidebar/top navigation of the admin panel.
    |
    | For detailed instructions you can look here:
    |
    */

    'menu' => [
        // Navbar items:
        [
            'text' => 'Inicio',
            'icon' => 'ti ti-home',
            'url' => 'home',
            //'hasAnyRole' => ['admin']
        ],
        [
            'text' => 'Configuración',
            'url' => '#',
            'icon' => 'ti ti-settings-cog',
            'hasAnyRole' => ['Super-Admin'],
            'submenu' => [
                [
                    'text' => 'Usuarios',
                    'url' => 'config-users',
                    'icon' => 'ti ti-user-cog',
                    'active' => ['config-users'],
                    'hasAnyRole' => ['admin'],
                ],
                [
                    'text' => 'Servidores',
                    'url' => 'config-servers',
                    'icon' => 'ti ti-server-cog',
                    'active' => ['config-servers*'],
                    'hasAnyRole' => ['admin', 'unix', 'win'],
                    'submenu' => [
                        [
                            'text' => 'Ambientes',
                            'url' => 'config-server-envs',
                            'icon' => 'ti ti-topology-ring-3',
                        ],
                        [
                            'text' => 'Conexiones',
                            'url' => 'config-server-cons',
                            'icon' => 'ti ti-cloud-network',
                        ],
                        [
                            'text' => 'Direcciones IP',
                            'url' => 'config-server-ips',
                            'icon' => 'ti ti-network',
                        ],
                        [
                            'text' => 'Impacto',
                            'url' => 'config-server-impacts',
                            'icon' => 'ti ti-urgent',
                        ],
                        [
                            'text' => 'Servicios / Capa',
                            'url' => 'config-server-layers',
                            'icon' => 'ti ti-layers-difference',
                        ],
                        [
                            'text' => 'Sistemas Operativo',
                            'url' => 'config-server-systems',
                            'icon' => 'ti ti-brand-ubuntu',
                        ],
                        [
                            'text' => 'Status',
                            'url' => 'config-server-statuses',
                            'icon' => 'ti ti-status-change',
                        ],
                        [
                            'text' => 'Tipo de Servidor',
                            'url' => 'config-server-types',
                            'icon' => 'ti ti-server-bolt',
                        ],                        
                        [
                            'text' => 'Ubicaciones',
                            'url' => 'config-server-locations',
                            'icon' => 'ti ti-map',
                        ],
                        [
                            'text' => 'Virtualizadores',
                            'url' => 'config-server-virtuals',
                            'icon' => 'ti ti-box-model',
                        ],
                    ],
                ],
                [
                    'text' => 'Base de Datos',
                    'url' => 'config-databases',
                    'icon' => 'ti ti-database-cog',
                    'active' => ['config-databases'],
                    'hasAnyRole' => ['admin', 'database'],
                ],
                [
                    'text' => 'Respaldos',
                    'url' => '#',
                    'icon' => 'ti ti-cloud-cog',
                    'active' => ['config-backup*'],
                    'hasAnyRole' => ['admin', 'backup'],
                    'submenu' => [
                        [
                            'text' => 'Cajas',
                            'url' => 'config-backup-boxes',
                            'icon' => 'ti ti-box',
                        ],
                        [
                            'text' => 'Esquemas',
                            'url' => 'config-backup-schemes',
                            'icon' => 'ti ti-schema',
                        ],
                        [
                            'text' => 'Horarios',
                            'url' => 'config-backup-schedules',
                            'icon' => 'ti ti-clock-2',
                        ],
                    ],
                ],
                [
                    'text' => 'Aplicaciones',
                    'url' => 'config-apps',
                    'icon' => 'ti ti-device-desktop-cog',
                    'active' => ['config-apps'],
                    'hasAnyRole' => ['admin', 'app'],
                ],
            ],
        ],
        [
            'text' => 'Registro',
            'url' => '#',
            'icon' => 'ti ti-text-plus',
            'active' => ['add-*'],
            'hasAnyRole' => ['admin', 'unix', 'win', 'database', 'backup', 'app'],
            'submenu' => [
                [
                    'text' => 'Servidores',
                    'url' => 'add-servers',
                    'icon' => 'ti ti-server-2',
                    'active' => ['add-server*'],
                    'hasAnyRole' => ['admin', 'unix', 'win'],
                ],
                [
                    'text' => 'Almacenamiento',
                    'url' => 'add-storages',
                    'icon' => 'ti ti-device-sd-card',
                    'active' => ['add-storage*'],
                    'hasAnyRole' => ['admin', 'backup'],
                ],
                [
                    'text' => 'Respaldos',
                    'url' => 'add-backups',
                    'icon' => 'ti ti-database-export',
                    'active' => ['add-backup*'],
                    'hasAnyRole' => ['admin', 'backup'],
                ],
                [
                    'text' => 'Aplicaciones',
                    'url' => 'add-apps',
                    'icon' => 'ti ti-device-desktop-cog',
                    'active' => ['add-apps*'],
                    'hasAnyRole' => ['admin', 'app'],
                ],
                [
                    'text' => 'Base de Datos',
                    'url' => 'add-databases',
                    'icon' => 'ti ti-database',
                    'active' => ['add-databases*'],
                    'hasAnyRole' => ['admin', 'database'],
                ],
                [
                    'text' => 'Conecciones',
                    'url' => 'add-connections',
                    'icon' => 'ti ti-network',
                    'active' => ['add-connections*'],
                    'hasAnyRole' => ['admin', 'unix', 'win', 'database', 'backup', 'app'],
                ],
            ],
        ],
        [
            'text' => 'Consultas',
            'url' => '#',
            'icon' => 'ti ti-list-search',
            'active' => ['show*'],
            'hasAnyRole' => ['admin', 'unix', 'win', 'database', 'backup', 'app'],
            'submenu' => [
                [
                    'text' => 'Serv Password',
                    'url' => '/show/connections',
                    'icon' => 'ti ti-network',
                ],
                [
                    'text' => 'Serv Ubicacion',
                    'url' => '/show/locations',
                    'icon' => 'ti ti-network',
                ],                
                [
                    'text' => 'Serv Almacenamiento',
                    'url' => '/show/storages',
                    'icon' => 'ti ti-network',
                ],  
                [
                    'text' => 'Serv Respaldos',
                    'url' => '/show/backups',
                    'icon' => 'ti ti-network',
                ],
            ],
        ],
        [
            'text' => 'Reportes',
            'url' => '#',
            'icon' => 'ti ti-report-search',
            'active' => ['support3'],
            'hasAnyRole' => ['admin', 'unix', 'win', 'database', 'backup', 'app'],
            'submenu' => [
                [
                    'text' => 'Servidores',
                    'url' => '/show/servers',
                    'icon' => 'ti ti-ti ti-server-2',
                ],
            ],
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Menu Filters
    |--------------------------------------------------------------------------
    |
    | Here we can modify the menu filters of the admin panel.
    |
    | For detailed instructions you can look the menu filters section here:
    |
    */

    'filters' => [
        //TakiElias\Tablar\Menu\Filters\GateFilter::class,
        TakiElias\Tablar\Menu\Filters\HrefFilter::class,
        TakiElias\Tablar\Menu\Filters\SearchFilter::class,
        TakiElias\Tablar\Menu\Filters\ActiveFilter::class,
        TakiElias\Tablar\Menu\Filters\ClassesFilter::class,
        TakiElias\Tablar\Menu\Filters\LangFilter::class,
        TakiElias\Tablar\Menu\Filters\DataFilter::class,
        \App\Filter\RolePermissionMenuFilter::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Vite
    |--------------------------------------------------------------------------
    |
    | Here we can enable the Vite support.
    |
    | For detailed instructions you can look the Vite here:
    | https://laravel-vite.dev
    |
    */

    'vite' => true,

    /*
    |--------------------------------------------------------------------------
    | Livewire
    |--------------------------------------------------------------------------
    |
    | Here we can enable the Livewire support.
    |
    | For detailed instructions you can look the livewire here:
    | https://livewire.laravel.com
    |
    */

    'livewire' => false,
];
