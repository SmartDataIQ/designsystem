php artisan vendor:publish --tag=designsystem-views --force
php artisan vendor:publish --tag=designsystem-assets --force


```php


{{ DesignSystem::setUser(Auth::user()) }}

{{ DesignSystem::setUserDropdown([
    [
        'url' => '/logout',
        'name' => 'Logout',
        'icon' => '<i class="fas fa-sign-out-alt"></i>'
    ]
]) }}

{{ DesignSystem::setNavItems([
        
            'Coachees' => [
                'url' => '/coachees',
                'name' => 'Coachees',            
                'items' => [                
                ]
            ],

            'Clients' => [
                'url' => '/clients',
                'name' => 'Clients',            
                'items' => [                
                ]
            ],
            
            'Coaches' => [
                'url' => '/coaches',
                'name' => 'Coaches',            
                'items' => [                
                ]
            ],

            'Users' => [
                'url' => '/users',
                'name' => 'Users',            
                'items' => [                
                ]
            ],

            'Profile' => [
                'url' => '/profile',
                'name' => 'Profile',            
                'items' => [                
                ]
            ]
        ]) 
    }}    

```