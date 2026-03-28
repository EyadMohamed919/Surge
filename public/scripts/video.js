window.onload = function() {
    var video = document.getElementById('aboutVideo');
    var videoSource = "public/video_vertical.mp4";

    video.src = videoSource;

    video.load();

    video.play();
};