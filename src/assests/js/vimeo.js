/**
 * Created by pawan on 18/8/18.
 */
//
$(".vimeo_video").click(function(){
    var data_url = $(this).attr("data-url");
    var data_title = $(this).attr("data-title");
    var vimeo_id = getVimeoId(data_url);
    var url = 'https://player.vimeo.com/video/'+vimeo_id;
    $("#myModal .modal-title").html(data_title);
    $('#vimeo_iframe').attr('src', url);

});

$("#myModal").on("hidden.bs.modal", function () {
    $('#vimeo_iframe').attr('src', '');
});


function getVimeoId( url ) {
    // Look for a string with 'vimeo', then whatever, then a
    // forward slash and a group of digits.
    var match = /vimeo.*\/(\d+)/i.exec( url );
    // If the match isn't null (i.e. it matched)
    if ( match ) {
        // The grouped/matched digits from the regex
        return match[1];
    }
}