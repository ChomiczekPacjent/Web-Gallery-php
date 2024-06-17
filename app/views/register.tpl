{extends file="template.tpl"}

{block name=content}
  
    <body class="u-body">
        <section class="u-clearfix u-palette-5-dark-3 u-section-2" id="carousel_fd80">
          <div class="u-clearfix u-sheet u-sheet-1" style="min-height: 623px">
            <h1 class="u-text u-text-1" style="text-align: center; margin-bottom: 10px;">Registration</h1>
            
                <form class="pure-form pure-form-stacked" method="post" action="{$conf->action_root}register" id="register_form">
                    <fieldset style="width: 300px; margin: auto;">
                        <label for="login">Login: </label>
                        <input type="text" name="login" placeholder="Login" style="color: black;"/>
                        
                        <label for="password">Password: </label>
                        <input type="password" name="password" placeholder="Password" style="color: black;"/>
                        
                        <label for="confirm_password">Repeat password: </label>
                        <input type="password" name="confirm_password" placeholder="Confirm password" style="color: black;"/>
                        
                        <label for="email">Email: </label>
                        <input type="email" name="email" placeholder="Email" style="color: black;"/>
                        
                        <label for="firstName">Name: </label>
                        <input type="text" name="firstName" placeholder="Name" style="color: black;"/>
                        
                        <label for="lastName">Surname: </label>
                        <input type="text" name="lastName" placeholder="Surname" style="color: black;"/>
                        
                        <button type="submit" class="pure-button pure-button-primary" style="background-color: black; margin-top: 5px;">Sign up</button>
                    </fieldset>
                </form>  
                
                {foreach $msgs->getMessages() as $msg}
                    <p style="background-color: #d22d35; padding: 3px 3px 3px 6px; width: 300px; border-radius: 3px; margin: 20px auto 20px auto;">{$msg->text}</p>
                {/foreach}
                    
          </div>
        </section>
                
{/block}
