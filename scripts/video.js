window.onload = function() {
    var video = document.getElementById('myVideo');
    var videoSource = "your-video-file.mp4";

    video.src = videoSource;

    video.load();

    video.play();
};