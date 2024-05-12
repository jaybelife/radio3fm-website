$(document).ready(function () {
    var audioElement = $(".hfm-lva").get(0);

    $(".ply-btn").click(function () {
        audioElement.src = "https://stream.laut.fm/radio3fm";
        audioElement.play();
        $(".ply-btn").css("display", "none");
        $(".pse-btn").css("display", "block");
        Cookies.set("plyr-playing", "yes");
    });

    $(".pse-btn").click(function () {
        audioElement.pause();
        $(".pse-btn").css("display", "none");
        $(".ply-btn").css("display", "block");
        Cookies.set("plyr-playing", "no");
    });

    if (Cookies.get("plyr-playing") === "yes") {
        $(".ply-btn").css("display", "none");
        $(".pse-btn").css("display", "block");
        audioElement.src = "https://stream.laut.fm/dreamgamerde";
        audioElement.play();
    }
});