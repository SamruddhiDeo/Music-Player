//Declarations
playButtons = document.getElementsByClassName("playbtn")
songCover = document.getElementById("songCover")
songAudio = document.getElementById("songAudio")
songName = document.getElementById("songName")
let currentTime = 0;

//Main logic starts here
Array.from(playButtons).forEach((e) => {
    e.addEventListener("click", () => {
        if ((e.className == "play playbtn") && songAudio.getAttribute("src") == e.nextElementSibling.innerText) {
            makeAllPlay()
            e.setAttribute("class", "pause playbtn");
            e.setAttribute("src", "musicimg/pause.svg");
            cover = e.previousElementSibling.previousElementSibling.previousElementSibling.getAttribute("src")
            songCover.setAttribute("src", cover)
            audio = e.nextElementSibling.innerText
            songAudio.setAttribute("src", audio)
            songName.innerText = e.previousElementSibling.previousElementSibling.innerText
            songAudio.currentTime = currentTime
            songAudio.play()
        }
        else if ((e.className == "play playbtn")) {
            makeAllPlay()
            e.setAttribute("class", "pause playbtn");
            e.setAttribute("src", "musicimg/pause.svg");
            cover = e.previousElementSibling.previousElementSibling.previousElementSibling.getAttribute("src")
            songCover.setAttribute("src", cover)
            audio = e.nextElementSibling.innerText
            songAudio.setAttribute("src", audio)
            songName.innerText = e.previousElementSibling.previousElementSibling.innerText
            songAudio.currentTime = 0
            songAudio.play()
        }
        else {
            e.setAttribute("class", "play playbtn");
            e.setAttribute("src", "musicimg/play.svg");
            songAudio.pause()
            currentTime = songAudio.currentTime;
        }
    })
})

//function to make all buttons play
function makeAllPlay() {
    Array.from(playButtons).forEach((e) => {
        e.setAttribute("class", "play playbtn");
        e.setAttribute("src", "musicimg/play.svg");
    })
}

//If main cover audio is play make that songs play button as play
setInterval(() => {
    if (songAudio.paused) {
        Array.from(playButtons).forEach((e) => {
            if ((songAudio.paused)) {
                if (songAudio.getAttribute("src") == e.nextElementSibling.innerText) {
                    e.setAttribute("class", "play playbtn");
                    e.setAttribute("src", "musicimg/play.svg");
                }
            }
        })
    }
    else {
        Array.from(playButtons).forEach((e) => {
            console.log(!songAudio.paused)
            if (!(songAudio.paused)) {
                if (songAudio.getAttribute("src") == e.nextElementSibling.innerText) {
                    e.setAttribute("class", "pause playbtn");
                    e.setAttribute("src", "musicimg/pause.svg");
                }
            }
        })
    }
}, 1000);
