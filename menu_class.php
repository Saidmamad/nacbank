<?php

class NavigationMenu{

    //public $isActiveClass = false;
    public $menuText = null;
    public $pageName = null;
    //public $link = null;
    //public $ClassName = null;


    public function __construct($pageName, $menuText) {
        $this->pageName = $pageName;
        $this->menuText = $menuText;
    }


    public function setMenuText($menuText){
        $this->menuText = $menuText;
    }

    public function getMenuText(){
        return $this->menuText;
    }


    public function setPageName($pageName){
        $this->pageName = $pageName;
    }
    public function getPageName(){
        return $this->pageName;
    }

    // URL for the href attribute of the <a> tag
    // 
    public function getURL(){
        return "/nacbank/".$this->getPageName().".php";
    }

    function displayMenu(){ //$isActiveClass, $ClassName,
        if($_SERVER['PHP_SELF'] == $this->getURL()){
            $isActive = "active";
        }
        else {
            $isActive = "";
        }
        $menu = '
        <li class="nav-item '.$isActive.'">
        <a class="nav-link" href="'.$this->getURL().'">'.$this->getMenuText().' </a>
    </li>';
        return $menu;
    }
}

?>


