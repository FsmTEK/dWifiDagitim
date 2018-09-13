    $("#login-button").click(function(event){
    event.preventDefault();
    $('form').fadeOut(500);
    $('.wrapper').addClass('form-success');
});
    twttr.widgets.createShareButton(
        "https:\/\/dev.twitter.com\/web\/tweet-button",
        document.getElementById("tweet-container"),
        {
            size: "large",
            text: "custom share text",
            hashtags: "example,demo",
            via: "twitterdev",
            related: "twitterapi,twitter"
        }
    );