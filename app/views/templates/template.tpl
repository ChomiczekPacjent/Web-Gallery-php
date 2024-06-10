<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
        <meta name="page_type" content="np-template-header-footer-from-plugin">
        <title>{$page_title|default:"Tytuł domyślny"}</title>
        <link rel="stylesheet" href="{$conf->app_url}/assets/css/nicepage.css" media="screen">
        <link rel="stylesheet" href="{$conf->app_url}/assets/css/style.css" media="screen">
        <script class="u-script" type="text/javascript" src="{$conf->app_url}/assets/js/jquery.js" defer=""></script>
        <script class="u-script" type="text/javascript" src="{$conf->app_url}/assets/js/nicepage.js" defer=""></script>
        <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
        <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700|PT+Sans:400,400i,700,700i">
        <link rel="stylesheet" href="https://unpkg.com/purecss@2.0.6/build/pure-min.css" integrity="sha384-Uu6IeWbM+gzNVXJcM9XV3SohHtmWE+3VGi496jvgX1jyvDTXfdK+rfZc8C1Aehk5" crossorigin="anonymous">
        <link rel="stylesheet" href="{$conf->app_url}/assets/css/all.css">
        <script type="text/javascript" src="{$conf->app_url}/assets/js/functions.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


        <meta name="theme-color" content="#478ac9">
        <meta property="og:title" content="{$page_title|default:'Tytuł domyślny'}">
        <meta property="og:type" content="website"> 
    </head>
    <body>
        <header class="u-clearfix u-header u-header" id="sec-08c3" style="background-color: black;">
            <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
                <a href="{$conf->action_root}mainpage" class="u-image u-logo u-image-1">
                  <img src="{$conf->app_url}/assets/images/kruk1.png" class="u-logo-image u-logo-image-1">
                </a>

                <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
                    <div class="u-nav-container">
                        <ul class="u-nav u-unstyled u-nav-1">
                            <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="{$conf->action_root}mainpage" style="padding: 10px 20px; color: white; font-size: 20px;">Artists</a></li>
                            <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="{$conf->action_root}property_list/1" style="padding: 10px 20px; color: white; font-size: 20px;">Gallery</a></li>
                            {if not \core\RoleUtils::inAnyRole()}
                                <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="{$conf->action_root}show_login" style="padding: 10px 20px; color: white; font-size: 20px;">Login</a></li>
                                <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="{$conf->action_root}show_register" style="padding: 10px 20px; color: white; font-size: 20px;">Sign up</a></li>
                            {/if}
                            {if \core\RoleUtils::inAnyRole()}
                                <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="{$conf->action_root}favorites" style="padding: 10px 20px; color: white; font-size: 20px;">Favourites</a></li>
                                <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="{$conf->action_root}logout" style="padding: 10px 20px; color: white; font-size: 20px;">Logout</a></li>
                                <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="{$conf->action_root}user_edit" style="padding: 10px 20px; color: white; font-size: 16px;">Logged in as a: {$logged_user->login}</a></li>
                            {/if}
                        </ul>
                    </div>
                </nav>
            </div>
        </header> 

        {block name=content} Treść domyślna. {/block}

        <footer class="u-align-center u-clearfix u-footer u-palette-2-base u-footer" id="sec-8349" style="background-color: black;">
            <div class="u-clearfix u-sheet u-sheet-1">
                <p class="u-small-text u-text u-text-variant u-text-1" style="display: inline-block; width: 50%;">Copyright © 2024 Me</p>
                <a href="https://www.instagram.com/" class="fa fa-instagram" style="display: inline-block; font-size: 20px;"></a>
                <a href="mailto:venteexx@gmail.com" style="display: inline-block; 10px;"><i class="fa fa-envelope" font-size: 40px;"></i></a>       
                <br> </br>
                <span class="u-small-text u-text u-text-variant u-text-1"></span>
            </div>
        </footer>
    </body>
</html>
