<div >
    <ul id="menu">
    <?php 
    foreach ($menuConfig["pages"] as $page) {
        // dd($menuConfig);
        echo  "<li class=\"menuButton\"><a href=\"?page=". $page["slug"]."\">"
         . $page["name"] . "
        </a></li>";
    }
    ?>
    </ul>
</div>