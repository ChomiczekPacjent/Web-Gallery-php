{foreach $properties as $row}
    <div class="u-container-style u-list-item u-repeater-item" style="margin-bottom: 50px; min-height: 375px;">
        <div class="u-container-layout u-similar-container u-container-layout-1">
            {if isset($row.main_image)}
                <img src="{$conf->app_url}/{$row.main_image}" alt="" class="u-image u-image-default u-preserve-proportions u-image-1" style="height: 400px; width: 550px;">
            {else}
                <img src="{$conf->app_url}/assets/images/default_image.jpg" alt="" class="u-image u-image-default u-preserve-proportions u-image-1" style="height: 400px; width: 550px;">
            {/if}
            
            <h2 class="u-text u-text-2" style="margin-top: -400px; margin-left: 600px">{$row.address}</h2>
            <p class="u-custom-font u-font-pt-sans u-text u-text-3" style="margin-left: 600px">Value: {$row.price} PLN</p>
            <p style="margin-left: 600px">Author: {$row.owner_name}</p>
            <a href="{url action='property_details' id=$row.idProperty}" class="u-active-white u-border-1 u-border-white u-btn u-button-style u-hover-white u-none u-text-active-palette-5-dark-3 u-text-body-alt-color u-text-hover-palette-5-dark-3 u-btn-1" style="margin-left: 600px;">More</a>
            
        </div>
    </div>
{/foreach}

