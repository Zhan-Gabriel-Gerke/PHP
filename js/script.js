function wall(){
    const housesmall = document.getElementById("housesmall");
    if (housesmall.getContext) {
        let mj = housesmall.getContext("2d");
        mj.fillStyle = '#964B00'
        mj.fillRect(120, 150, 250 ,200)
    }
}
function roof(){
    const housesmall = document.getElementById("housesmall");
    if (housesmall.getContext) {
        let mj = housesmall.getContext("2d");
        mj.beginPath();
        mj.strokeStyle='black'
        mj.lineWidth = 5;
        mj.fillStyle = '#964B00'
        mj.moveTo(30, 150);
        mj.lineTo(470, 150);
        mj.lineTo(250, 100);
        mj.lineTo(30, 150);
        mj.stroke();
        mj.fill();
        // mj.fillStyle = 'black';
        //mj.fillRect(20, 150, 450 ,5);
    }
}
function windowww(){
    const housesmall = document.getElementById("housesmall");
    if (housesmall.getContext) {
        let mj = housesmall.getContext("2d");
        mj.fillStyle = 'white';
        mj.fillRect(140, 180, 50 ,50);
        mj.fillStyle = 'white';
        mj.fillRect(295, 180, 50 ,50);
        mj.fillStyle = 'black';
        mj.fillRect(140, 180, 5 ,50);
        mj.fillStyle = 'black';
        mj.fillRect(295, 180, 5 ,50);
        mj.fillStyle = 'black';
        mj.fillRect(140, 180, 50 ,5);
        mj.fillStyle = 'black';
        mj.fillRect(295, 180, 50 ,5);
        mj.fillStyle = 'black';
        mj.fillRect(190, 180, 5 ,50);
        mj.fillStyle = 'black';
        mj.fillRect(345, 180, 5 ,50);
        mj.fillStyle = 'black';
        mj.fillRect(140, 230, 55 ,5);
        mj.fillStyle = 'black';
        mj.fillRect(295, 230, 55 ,5);
        mj.fillStyle = 'black';
        mj.fillRect(140, 205, 55 ,5);
        mj.fillStyle = 'black';
        mj.fillRect(295, 205, 55 ,5);
    }
}
function chimney(){
    const housesmall = document.getElementById("housesmall");
    if (housesmall.getContext) {
        let mj = housesmall.getContext("2d");
        mj.beginPath();
        mj.strokeStyle='black'
        mj.lineWidth = 5;
        mj.fillStyle = '#964B00'
        mj.moveTo(280, 70);
        mj.lineTo(320, 70);
        mj.lineTo(320, 150);
        mj.lineTo(280, 150);
        mj.lineTo(280, 68);
        mj.stroke();
        mj.fill();
        //mj.fillStyle = '#964B00';
        //mj.fillRect(280, 70, 40 ,50);

    }
}

function doorfuc(){
    const housesmall = document.getElementById("housesmall");
    if (housesmall.getContext) {
        let mj = housesmall.getContext("2d");
        mj.fillStyle = 'white';
        mj.fillRect(220, 250, 50 ,90);
        mj.fillStyle = 'black';
        mj.fillRect(220, 250, 5 ,90);
        mj.fillStyle = 'black';
        mj.fillRect(270, 250, 5 ,90);
        mj.fillStyle = 'black';
        mj.fillRect(220, 250, 50 ,5);
        mj.fillStyle = 'black';
        mj.fillRect(220, 340, 55 ,5);
        mj.fillStyle = 'black';
        mj.fillRect(245, 250, 5 ,90);
        mj.fillStyle = 'black';
        mj.fillRect(220, 295, 50 ,5);
    }
}

function grass(){
    const housesmall = document.getElementById("housesmall");
    if (housesmall.getContext) {
        let mj = housesmall.getContext("2d");
        mj.beginPath();
        mj.fillStyle = 'lightgreen'
        mj.moveTo(0, 190);
        mj.lineTo(500, 190);
        mj.lineTo(500, 500);
        mj.lineTo(0, 500);
        mj.lineTo(0, 190);
        mj.stroke();
        mj.fill();
    }
}

function skyfun(){
    const housesmall = document.getElementById("housesmall");
    if (housesmall.getContext) {
        let mj = housesmall.getContext("2d");
        mj.beginPath();
        mj.fillStyle = 'lightblue'
        mj.moveTo(0, 190);
        mj.lineTo(500, 190);
        mj.lineTo(500, 0);
        mj.lineTo(0, 0);
        mj.lineTo(0, 190);
        mj.fill();
    }
}
function drawnfullhouse(){
    grass();
    skyfun();
    wall();
    roof();
    windowww();
    chimney();
    doorfuc();
}
function removeMajake() {
    const housesmall = document.getElementById("housesmall");
    if (housesmall.getContext) {
        let mj = housesmall.getContext("2d"); //canvas nimi
        mj.clearRect(0, 0, 500, 500);
    }
}