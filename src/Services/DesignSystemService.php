<?php

namespace Smartdataiq\Designsystem\Services;

class DesignSystemService
{
    private $pageTitle;
    private $breadcrumb;
    private $actionDropdown;
    private $widget;
    private $content;
    private $footer;
    private $dataTableContent;

    private  $navItems;

    public function getAppName()
    {
        return env('APP_NAME');
    }

    public function getAppVersion()
    {
        return env('APP_VERSION');
    }

    public function setNavItems($navs = [])
    {       
        if(count($navs) == 0){
            $navigation['Dashboard'] = 
            [
                'url' => '/dashboard',
                'class' => 'active',
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>',
                'items' => [
                    [
                        'name' => 'Analytics',
                        'url' => '/analytics'
                    ],
                    [
                        'name' => 'Sales',
                        'url' => '/sales'
                    ]
                ]
            ];
            $navigation['Apps'] = [
                'url' => '/settings',
                'class' => '',
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layers"><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline></svg>',
                'items' => [ 
                    [
                        'name' => 'Calendar',
                        'url' => '/calendar',
                        'class' => '',
                        'items' => [
                            [
                                'name' => 'Calendar3',
                                'url' => '/calendar3'
                            ],
                            [
                                'name' => 'Calendar4',
                                'url' => '/calendar4'
                            ]
                        ]
                    ],
                    [
                        'name' => 'Chat',
                        'url' => '/chat'
                    ],
                    [
                        'name' => 'Mailbox',
                        'url' => '/mailbox'
                    ],
                    
                ]
            ];
            $this->navItems = $navigation;
        }        
        else{
            $this->navItems = $navs;
        }
    }

    public function getNavItems()
    {
        return $this->navItems;
    }

    public function navbar(): string    
    {
        $navigation['Dashboard'] = 
        [
            'url' => '/dashboard',
            'class' => 'active',
            'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>',
            'items' => [
                [
                    'name' => 'Analytics',
                    'url' => '/analytics'
                ],
                [
                    'name' => 'Sales',
                    'url' => '/sales'
                ]
            ]
        ];
        $navigation['Apps'] = [
            'url' => '/settings',
            'class' => '',
            'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layers"><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline></svg>',
            'items' => [ 
                [
                    'name' => 'Calendar',
                    'url' => '/calendar',
                    'class' => '',
                    'items' => [
                        [
                            'name' => 'Calendar3',
                            'url' => '/calendar3'
                        ],
                        [
                            'name' => 'Calendar4',
                            'url' => '/calendar4'
                        ]
                    ]
                ],
                [
                    'name' => 'Chat',
                    'url' => '/chat'
                ],
                [
                    'name' => 'Mailbox',
                    'url' => '/mailbox'
                ],
                
            ]
        ];
        if($this->getNavItems() && count($this->getNavItems()) > 0){
            $navigation = $this->getNavItems();
        }
      
        $navbar = '';
        foreach ($navigation as $key => $parent) {
            $navbar .= ' <li class="menu">
                    <a href="' . ($parent['items'] ? '#' . strtolower($key) : $parent['url']) . '" ' . 
                       ($parent['items'] ? 'data-bs-toggle="dropdown"' : '') . ' aria-expanded="false" class="dropdown-toggle">
                        <div class="' . ($parent['class'] ?? '') . '">
                            ' . ($parent['icon'] ?? '') . '
                            <span>' . $key . '</span>
                        </div>
                        ' . ($parent['items'] ? '<div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                        </div>' : '') . '
                    </a>';

            if (!empty($parent['items'])) {
                $navbar .= '<ul class="dropdown-menu submenu list-unstyled" id="' . strtolower($key) . '" data-bs-parent="#accordionExample">';
                
                foreach ($parent['items'] as $item) {
                    if (isset($item['items']) && count($item['items']) > 0) {
                        $navbar .= '<li class="sub-submenu dropend">
                                <a href="'.$item['url'].'" data-bs-toggle="dropdown" aria-expanded="false" class="dropdown-toggle collapsed"> 
                                    '.$item['name'].'
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                                    </div>
                                </a>
                                <ul class="dropdown-menu list-unstyled sub-submenu">';
                                
                        foreach ($item['items'] as $subItem) {
                            $navbar .= '<li>
                                    <a href="'.$subItem['url'].'"> '.$subItem['name'].' </a>
                                </li>';
                        }
                                
                        $navbar .= '</ul></li>';
                    } else {
                        $navbar .= '<li>
                                <a href="'.$item['url'].'"> '.$item['name'].' </a>
                            </li>';
                    }
                }        
                $navbar .= '</ul>';
            }
            
            $navbar .= '</li>';
        }
        return $navbar;
    }
    
    public function setPageTitle($title = 'Your Page title')
    {
        $this->pageTitle = $title;
    }
    public function getPageTitle(){
        return $this->pageTitle;
    }

    public function setBreadcrumb($breadcrumbs = [])
    {
        $breadcrumbHtml = '<ol class="breadcrumb">';
        foreach($breadcrumbs as $breadcrumb){
            $breadcrumbHtml .= '<li class="breadcrumb-item"><a href="'.$breadcrumb['url'].'">'.$breadcrumb['name'].'</a></li>';
        }
        $breadcrumbHtml .= '</ol>';
        $this->breadcrumb = $breadcrumbHtml;
    }
    public function getBreadcrumb(){
        return $this->breadcrumb;
    }

    public function setActionDropdown($actionDropdown = [])
    {
        $actionDropdownHtml = '';
        foreach($actionDropdown as $action){
            $actionDropdownHtml .= '
            <a class="dropdown-item" data-value="'.$action['name'].'" href="'.$action['url'].'">
                '.$action['name'].'
            </a>';
        }        
        $this->actionDropdown = '
            <ul class="navbar-nav flex-row ms-auto breadcrumb-action-dropdown">
                <li class="nav-item more-dropdown">
                    <div class="dropdown  custom-dropdown-icon">
                        <a class="dropdown-toggle btn" href="#" role="button" id="customDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span>Settings</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down custom-dropdown-arrow"><polyline points="6 9 12 15 18 9"></polyline></svg>
                        </a>
    
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="customDropdown">
                            '.$actionDropdownHtml.'                                                
                        </div>                    
                    </div>
                </li>
            </ul>';
    }
    public function getActionDropdown(){
        return $this->actionDropdown;
    }
    
    /**
     * Set the widget
     * @param array $widget array of widget [['name' => 'John Doe', 'url' => '/', 'actionType' => 'dropdown', 'action' => [['name' => 'View', 'url' => '/view']], 'content' => 'Any content']]
     * @param string $widgetClass default is col-xl-4
     * @return void
     */
    public function setWidget( $widget = [], $widgetClass='col-xl-4')
    {
        $widgetHtml = '';
        
        if(count($widget) > 0){
           
            foreach($widget as $key => $item){   
                $contentHtml = '';
                if(isset($item['content'])){
                    $contentHtml = '<div style="margin-top: 32px;">
                        <div class="w-info">
                            '.$item['content'].'
                        </div>                                        
                    </div>';
                }
                $actionHtml = '';           
                if(isset($item['action'])){
                    $actionItemHtml = '';     
                    $aClass = 'dropdown-item';
                    if(isset($item['actionType']) && $item['actionType'] != 'dropdown'){
                        $aClass = 'btn btn-primary';
                    }
                    foreach($item['action'] as $action){
                        $actionItemHtml .= '<a class="'.$aClass.'" href="'.$action['url'].'">'.$action['name'].'</a>';
                    }
                    if(isset($item['actionType']) && $item['actionType'] == 'dropdown'){
                        $actionHtml = '
                        <div class="task-action">
                            <div class="dropdown">
                                <a class="dropdown-toggle" href="#" role="button" id="expenses" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                                </a>
                                <div class="dropdown-menu left" aria-labelledby="expenses" style="will-change: transform;">
                                    '.$actionItemHtml.'
                                </div>
                            </div>
                        </div>';
                    }
                    else{
                        $actionHtml = 
                        $actionHtml = '
                        <div class="task-action">
                                '.$actionItemHtml.'
                        </div>';
                    }
                    
                }
                $widgetHtml .= '
                <div class="'.$widgetClass.' col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                    <div class="widget widget-card-four">
                        <div class="widget-content">
                            <div class="w-header">
                                <div class="w-info">
                                    <h6 class="value">'.$item['name'].'</h6>
                                </div>
                                '.$actionHtml.'
                            </div>
                            '.$contentHtml.'
                        </div>                                                   
                    </div>                            
                </div>';
            }
        }
        $this->widget = $widgetHtml;
    }
    public function getWidget(){
        return $this->widget;
    }

    public function setContent($content = '')
    {
        $this->content = $content;
    }
    public function getContent(){
        return $this->content;
    }

    public function setFooter($footerText1 = '', $footerText2 = '')
    {
        $this->footer = '<div class="footer-wrapper">
            <div class="footer-section f-section-1">
                <p class="">'.$footerText1.'</p>
            </div>
            <div class="footer-section f-section-2">
                <p class="">'.$footerText2.'</p>
        </div>
        </div>';
    }
    public function getFooter(){
        return $this->footer;
    }

    public function setDataTable($title = '', $dataTableContent = '')
    {
        $this->dataTableContent = '<div class="card">
                <div class="card-header">
                    <h4>'.$title.'</h4>
                </div>
                <div class="card-body">
                    '.$dataTableContent.'
                </div>
            </div>';
    }
    public function getDataTable(){
        return $this->dataTableContent;
    }
}