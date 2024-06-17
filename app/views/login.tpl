{extends file="template.tpl"}

{block name=content}
    <body class="u-body">
	<section class="u-clearfix u-palette-5-dark-3 u-section-2" id="carousel_fd80">
            <div class="u-clearfix u-sheet u-sheet-1" style="min-height: 623px;">
              <h1 class="u-text u-text-1" style="text-align: center; margin-bottom: 10px;">Login</h1>
              
                <form class="pure-form pure-form-stacked" method="post" action="{$conf->action_root}login">
                    <fieldset style="width: 100px; margin: auto;">
                        <label for="login">Login: </label>
                        <input type="text" name="login" id="login" placeholder="Login" style="color: black;" {if isset($login)}value="{$login}"{/if}/>
                        <label for="password">Password: </label>
                        <input type="password" name="password" id="password" placeholder="Password" style="color: black;"/>
                        <button type="submit" class="pure-button pure-button-primary" style="background-color: black; margin-top: 5px;">Login</button>
                    </fieldset>
                </form>  

                <div style="text-align: center; color: white;">
                    <a href="{$conf->action_root}show_register">Sign up</a>
                </div>
                        
                {foreach $msgs->getMessages() as $msg}
                    <p style="background-color: #d22d35; padding: 3px 3px 3px 6px; width: 300px; border-radius: 3px; margin: 20px auto 20px auto;">{$msg->text}</p>
                {/foreach}         
            </div>
        </section>
{/block}