// первый вариант (не очень)

let time = 86400;
const countDownEl = document.getElementById("countdown");

setInterval(updateCountdown, 1000); // функция через 1 сек будут происходить изменения в параграфе; 


function updateCountdown(){
    const minutes = Math.floor(time / 60); // узнаем сколько минут
    let seconds = time % 60; // сколько секунд 
    seconds = seconds < 10 ? "0" + seconds: seconds;
    countDownEl.innerHTML = `${minutes}:${seconds}`;
    time--;
};


// второй вариант 

