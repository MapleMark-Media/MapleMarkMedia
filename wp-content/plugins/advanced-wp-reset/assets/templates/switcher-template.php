<!-- Video alert -->

<?php 
// We don't show the video if the user does not want to
if ( !in_array ('switcher', $hidden_videos) ) { ?>

<div class="awpr-video-alert border border-[#00AD00] bg-[#00AD00]/10 px-5 py-4 mb-4 rounded flex items-center justify-between gap-3">

    <div class="flex items-center gap-3">

        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 35 36" class="w-8 h-8">

            <circle cx="17.308" cy="18.156" r="17.188" fill="#00AD00"/>

            <path fill="#E3F6E3" d="m13.254 11.316 10.292 6.513a.513.513 0 0 1 .178.194.566.566 0 0 1 0 .529.513.513 0 0 1-.178.194L13.254 25.26a.46.46 0 0 1-.492 0 .512.512 0 0 1-.18-.195.565.565 0 0 1-.065-.267V11.775a.57.57 0 0 1 .066-.267.513.513 0 0 1 .18-.194.46.46 0 0 1 .491.002Z"/>

        </svg>

        <p class="text-[#00AD00]">

            See how WP Switcher works, 

            <a class="video-popup-btn text-[#00AD00] hover:text-[#00AD00] focus:text-[#00AD00] active:text-[#00AD00] font-bold underline" data-autoplay="true" data-vbtype="video" href="https://youtu.be/UjE6kDUJj5E" data-maxwidth="800px">

                watch demo

            </a>

        </p>

    </div>

    <button type="button" class="awpr-video-alert-close-btn text-[#06283D] opacity-50 hover:opacity-100 transition awr-hide-video" data-video="switcher" >

        <span class="icon-close"></span>

    </button>

</div>

<?php } 

$ItemsFetcherService = 'awr\services\ToolsResetService';

if ( AWR_IS_PRO_VERSION )

    $ItemsFetcherService = 'awr\services_pro\ToolsResetService'; 

?>

<!-- Switch WP core version : Start -->

<div class="awpr-single-accordion <?php echo in_array('awr-acc-switch', $hidden_blocs) ? '' : 'awpr_accordion_default_opener'; ?>">

    

    <div class="awpr-accordion-title-wrapper awpr_accordion_handler" id="'awr-acc-switch'">

        <div class="awpr-accordion-title">

            <div class="awpr-heading-icon">

                <span class="icon-swap-horizontal"></span>

            </div>

            WordPress Core Switcher

            

            <?php echo $premium_bloc ?>

        </div>

        <div class="awpr-accordion-icon awpr-acc-arrow">

            <span class="icon-arrow-down text-base"></span>

        </div>

    </div>

    <div class="awpr-accordion-content-wrapper awpr_accordion_content_panel">

        <div class="awpr-accordion-content">

            <?php echo $premium_frame_div_start; ?>

                <div class="">

                    <p class="mb-3 mt-2 text-xs leading-relaxed">WP Switcher is a unique and powerful tool that allows you to quickly and easily switch between WordPress Core versions.</p>

                </div>

                <div class="grid gap-2 grid-cols-12 items-start justify-start py-4">

                    <div class="awpr-tools-item col-span-4">

                        <h3 class="font-semibold text-awpr-gray">Choose the target version</h3>

                        <p class="italic">Current version: <?php global $wp_version; echo $wp_version; ?></p>

                        <div class="flex gap-2 mt-5">

                            <?php print_deals_with_files_db ( true, true ); ?>

                        </div>

                    </div>

                                    <!-- Middle side -->

                    <div class="awpr-tools-desc col-span-8">

                        

                        <p class="mb-4">

                            <select name="version" id="wp_version_switch">

                                <?php

                                $versions = $ItemsFetcherService::get_instance()->get_wp_version_list();

                                foreach ($versions as $version) { ?>

                                    <option value="<?php echo $version; ?>"><?php echo $version; ?></option>

                                <?php } ?>

                            </select>

                        </p>

                        <!-- This div should only render when error occurs -->

                        <div class="bg-awpr-danger-light p-4 mb-4" style="display: none;">

                            <p id="wp_version_switch_errors">

                            </p>

                        </div>

                        <!-- / This div should only render when error occurs -->

                        <button id='button_for_wp-version' name='wp-version' value='Switch WP core version' class="awpr-button awpr-button-primary <?php echo $premium_button_class; ?>">

                            <span class="icon-swap-horizontal"></span>

                            <span class="awpr-icon-separator">|</span>

                            Switch WP Version

                        </button>

                    </div>

                </div>

            <?php echo $premium_frame_div_end; ?>

        </div>

    </div>

</div>

<!-- Switch WP core version : End -->

