let pipe = document.getElementById("pipe");
let hole = document.getElementById("hole");
let bird = document.getElementById("bird");
let jumping = 0;
let cnt = 0;

hole.addEventListener('animationiteration', () => {
    let random = -((Math.random()*300)+150);
    hole.style.top = random + "px";
    document.getElementById("cnt").innerHTML = cnt;
    cnt++;
});
setInterval(function(){
    let birdTop = parseInt(window.getComputedStyle(bird).getPropertyValue("top"));
    
    if(jumping==0){
        bird.style.top = (birdTop+3)+"px";
    }

    let pipeLeft = parseInt(window.getComputedStyle(pipe).getPropertyValue("left"));
    let holeTop = parseInt(window.getComputedStyle(hole).getPropertyValue("top"));
    let cTop = -(530-birdTop);

    if((birdTop>460)||((pipeLeft<50)&&(pipeLeft>-50)&&((cTop<holeTop - 10)||(cTop>holeTop+134)))){
        alert("Game over.\nScore: "+(cnt-1));
        bird.style.top = 100 + "px";
        cnt=0;
    }
},10);

function jump(){
    jumping = 1;
    let jumpCount = 0;
    
    let jumpInterval = setInterval(function(){
        let characterTop = parseInt(window.getComputedStyle(bird).getPropertyValue("top"));
        
        if((characterTop>6)&&(jumpCount<15)){
            bird.style.top = (characterTop-5)+"px";
        }

        if(jumpCount>20){
            clearInterval(jumpInterval);
            jumping=0;
            jumpCount=0;
        }
        jumpCount++;
    },10);
}