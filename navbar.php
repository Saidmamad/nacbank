<div class="header">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="/nacbank/">NacBank</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">

                
                <?php 
                    /*
                    Add sections here. The object takes two parameters:
                    1) $pageName, which is the name of the page. 
                        --The $pageName should match with the name of the file
                        --Do not include the extension
                        Example: page1
                    2) $menuText - is the text of the menu, visible to the user
                    
                    Call displayMenu method to print the output of each object
                    */
                    $section1 = new NavigationMenu("index", "PHP");
                    $section2 = new NavigationMenu("page2", "Javascript");
                    // $section3 = new NavigationMenu("page3", "Menu 3");
                    $section3 = new NavigationMenu("page3", "Ajax");
                    // $menu->setPageName('page1');
                    // $menu->setMenuText("Home");
                    echo $section1->displayMenu();
                    echo $section2->displayMenu();
                    echo $section3->displayMenu();
                    // echo $section4->displayMenu();
                ?>
            </ul>
            
        </div>
    </nav>
</div> 