// Disable sortable metabox
jQuery(document).ready( function($) {
    console.log("running");
    $('.meta-box-sortables').sortable({
        disabled: true
    });

    $('.postbox .hndle').css('cursor', 'pointer');
});