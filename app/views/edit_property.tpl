{extends file="template.tpl"}

{block name=content}
  
<body class="u-body">
    <section class="u-clearfix u-palette-5-dark-3 u-section-2" id="carousel_fd80">
        <div class="u-clearfix u-sheet u-sheet-1" style="min-height: 450px">
            <h1 class="u-text u-text-1" style="text-align: center; margin-bottom: 10px;">Edit</h1>
            <div class="u-expanded-width u-list u-list-1" style="min-height: 450px">
                <div class="u-repeater u-repeater-1" style="min-height: 450px">
                    <form class="pure-form pure-form-stacked" method="post" action="{$conf->action_root}update_property" enctype="multipart/form-data" id="update_property_form">
                        <fieldset style="width: 100px; margin: auto;">
                            <label for="address">Type of art: </label>
                            <input type="text" name="address" id="address" placeholder="Painting, music..." value="{$property.address}" style="color: black;"/>
                            
                            <label for="description">Description: </label>
                            <textarea id="description" name="description" class="pure-input-1-2"  rows="10" cols="50" style="color: black; height: auto; width: auto; resize: none;">{$property.description}</textarea>
                            
                            <label for="price">Value: </label>
                            <input type="text" name="price" id="price" placeholder="Pln" value="{$property.price}" style="color: black;"/>
                            
                        
                            <input type="hidden" id="property_id" name="property_id" value="{$property.idProperty}"/>
                            
                            <label for="images">Add new: </label>
                            <input type="file" name="images[]" id="images" multiple style="color: black;"/>
                            <button type="submit" class="pure-button pure-button-primary" style="background-color: black; margin-top: 5px;">Save</button>
                        
                        
                        </fieldset>
                    </form>

                    <form method="post" action="{$conf->action_root}remove_all_images" style="text-align: center;">
                        <input type="hidden" name="property_id" value="{$property.idProperty}">
                        <button type="submit" class="pure-button pure-button-danger" style="background-color: #d22d35; margin-top: 10px;">Delete all files</button>
                    </form>

                   

                    {foreach $msgs->getMessages() as $msg}
                        <p style="background-color: #d22d35; padding: 3px 3px 3px 6px; width: 300px; border-radius: 3px; margin: 0 auto 20px auto;">{$msg->text}</p>
                    {/foreach}
                </div>
            </div>
        </div>
    </section>
</body>
{/block}
