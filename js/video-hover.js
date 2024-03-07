// Video Hover Play

const video1 = document.getElementsByClassName('wp1_vid');



for(var i = 0; i < video1.length; i++){
    video1[i].addEventListener ('mouseover', (event) => {
    event.target.play()
})	

    video1[i].addEventListener ('mouseout', (event) => {
        event.target.pause()
    })
}
