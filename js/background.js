(function(){

    var btn = document.getElementById("play-background");
    /** @type {HTMLVideoElement} */
    var video = document.getElementById("background-video");
    var poster = document.getElementById("background-poster");

    btn.hidden = false

    btn.addEventListener("click", function(e) {
        e.preventDefault()

        if(btn.classList.contains("playing")) {
            video.pause();
        } else {
            video.play()
        }
    })

    video.addEventListener("pause", function(e) {
        btn.querySelector(".play").hidden = false;
        btn.querySelector(".pause").hidden = true;
        btn.classList.remove("playing")
    })

    video.addEventListener("play", function(e) {
        btn.querySelector(".play").hidden = true;
        btn.querySelector(".pause").hidden = false;
        poster.hidden = true;
        btn.classList.add("playing")
    })
})()