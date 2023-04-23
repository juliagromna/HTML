canvas = document.getElementById("my_canvas");
ctx = canvas.getContext("2d");
const startbtn =document.querySelector('#startbtn');

startbtn.addEventListener('click',()=>{
    start();
})

function start(){

//zmienne dla panelu
let panelX=canvas.width/2-50;
let panelY=canvas.height-10;
let pressLeft=false;
let pressRight=false;
//zmienne dla kuli
let radius=15;
let x=panelX+50;
let y=panelY-radius;
let dx=1;
let dy=2;


//zmienne dla brick
let brickColumn=5;
let brickRow=8;
let brickHeight=15;
let brickWidth=40;
let brickPadding=10;

//zmienna zliczająca wynik
let score=0;

bricks=[];
for(c=0;c<brickColumn;c++){
    bricks[c]=[];
    for(r=0;r<brickRow;r++){
        bricks[c][r]={x:c,y:r,status:1};
    }
}

document.addEventListener('keyup', keyUpHandler);
document.addEventListener('keydown',keyDownHandler);



function drawBall(){
    ctx.beginPath();
    ctx.arc(x,y,radius,0,Math.PI*2);
    ctx.strokeStyle = "rgb(125, 118, 87)";
    ctx.stroke();
    ctx.closePath();
}

function drawPanel(){
    ctx.beginPath();
    ctx.rect(panelX,panelY,100,10);
    ctx.fillStyle="rgb((125, 118, 87)";
    ctx.fill();
    ctx.closePath();
}

function keyDownHandler(e){
    if(e.key =="Left" || e.key =="ArrowLeft"){
        pressLeft=true;
    }
    if(e.key =="Right" || e.key =="ArrowRight"){
        pressRight=true;
    }
}

function keyUpHandler(e){
    if(e.key =="Left" || e.key =="ArrowLeft"){
        pressLeft=false;
    }
    if(e.key =="Right" || e.key =="ArrowRight"){
        pressRight=false;
    }
}

function drawBricks(){
    for(c=0;c<brickColumn;c++){
        for(r=0;r<brickRow;r++){
            if(bricks[c][r].status==1){
            bricks[c][r].x=(r*(brickWidth+brickPadding));
            bricks[c][r].y=(c*(brickHeight+brickPadding));
            ctx.beginPath();
            ctx.rect(bricks[c][r].x,bricks[c][r].y,brickWidth,brickHeight);
            ctx.fillStyle="rgb(125, 118, 87)";
            ctx.fill();
            ctx.closePath();
            }
        }
    }
}

function collisionDetect(){   
    for(c=0;c<brickColumn;c++){
        for(r=0;r<brickRow;r++){
            b=bricks[c][r];
            if(b.status==1){
                if(x-radius>b.x && x-radius<b.x + brickWidth && y-radius>b.y && y-radius<b.y+brickHeight){
                    dy=-dy;
                    b.status=0;
                    score++;
                    if(score==40) {alert ("BRAWO! wygrana!");}
                }
            }
        }
    }
}

function draw(){
    ctx.clearRect(0,0,canvas.width,canvas.height);
    drawBall();
    drawPanel();
    drawBricks();
    collisionDetect();

    if(x-radius<0 || x+radius>canvas.width){
        dx=-dx;
    }else if(y-radius<0 || y+radius>canvas.height){
        dy=-dy;
    } else if(x>panelX && x<panelX+100 && y+radius>canvas.height-10){
        dy=-dy;
    }else if(y+radius>canvas.height-10){
        alert("nie trafiono w paletke");
    }

    if(pressLeft && panelX > 0){
        panelX -= 4;
    } else if(pressRight && panelX < canvas.width - 100){
        panelX +=4;
    }

    x+= dx;
    y-= dy;
}

setInterval(draw,10);}