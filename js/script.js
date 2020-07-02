var fire_confirm = false;

$(document).ready(function(){

    /** Validate Form */
    $("#compose-post").validate({
        rules : {
            'title' : {
                required : true,
                minlength: 8    
            },
            'content' : {
                required : true,
                minlength : 8
            },
            'date' : {
                required : true
            }
        }
    });
    /** EOF Form Validation */

    /** Preview Image */
    $("input[name='featured']").on('change', function(){
        /** Add Image to preview Block */
        $(".featured-image-preview").html("<img src='" + $(this).val() + "' alt='img-preview'>");
        /** Show image preview box */
        $(".featured-image-preview").slideDown();
    });
    /** EOF Preview Image */

    /** Remove image from preview */
    $("#preview-image").click(function(button){
        
        button.preventDefault(); 

        /** Show Box */
        $(".featured-image-preview").slideDown();
    
    });
    $("#remove-image").click(function(button){
        
        /** Prevent Default Form Submiting */
        button.preventDefault();

        /** Remove Image From Preview */
        $("input[name='featured']").val();

        /** Hide Box */
        $(".featured-image-preview").slideUp();

    });
    /** EOF Remove image from preview */
    /** Reset Post */
    $("#reset-post").click(function(button){

        /** Prevent Form Submit */
        button.preventDefault();

        /** Reset Form */
        $("form").trigger("reset");

    });

    /** EOF Reset Post */
    /** Preview Post */
    $("#preview-post-ajax").click(function(link){

        /** Prevent Open link */
        link.preventDefault();

        /** Post D */
        var post_id_php = $(this).attr('data-id');

        /** Use post request */
        $.post( 'ajax_post.php', { post_id : post_id_php }, function(response){

            /** Response hold array with */
            /** some data */
            var response_data = JSON.parse(response);

            /** Prepare modal */
            $("#simpleModal .modal-title").html(response_data.post_title);
            $("#simpleModal .modal-body").html(response_data.post_content);
            $("#open-ajax-post").attr('data-id', response_data.post_ID);

            $("#simpleModal").modal();

        });

    });
    $("#open-ajax-post").click(function(){
        /** Set new location */
        var new_location = $(this).attr('data-id');

        window.location.href = "post.php?post_id=" + new_location;

    });
    /** EOF Preview Post */

});
