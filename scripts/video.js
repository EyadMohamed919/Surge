window.onload = function() {
    var video = document.getElementById('aboutVideo');
    var videoSource = "Public/video_vertical.mp4";

    video.src = videoSource;

    video.load();

    video.play();
};