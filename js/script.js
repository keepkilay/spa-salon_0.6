let dateFirstInner; // дата и время первого входа

var results = document.cookie.match(/firstinner=(.+?)(;|$)/);

if(!results){
    var cookie_date = new Date();
    cookie_date.setDate(cookie_date.getDate() + 1);
    document.cookie = "firstinner="+cookie_date+";expires=" + cookie_date.toUTCString();
    dateFirstInner = cookie_date;
}else{
    dateFirstInner = new Date(results[1]);
}

function counts(){
    let date = dateFirstInner;
    console.log(dateFirstInner);
    let now = new Date(); // определение текущей даты
    gap = date - now;// получить количество милисекунд от 1 Янв 2024 года до сегоднящней даты


    let days = Math.floor(gap / 1000 / 60 / 60 / 24);
    let hours = Math.floor(gap / 1000 / 60 / 60 ) % 24;
    let minutes = Math.floor(gap / 1000 / 60 ) % 60;
    let seconds = Math.floor(gap / 1000 ) % 60;

    if (gap < 0 ){
        document.getElementById('group').innerText = 'Акция завершена';
    }else{
        if(days==0){
            document.getElementById('d').style.display = 'none';
        }
        if(hours==0){
            document.getElementById('h').style.display = 'none';
        }
    document.getElementById('d').innerText = days + ' дней';
    document.getElementById('h').innerText = hours + ' часа';
    document.getElementById('m').innerText = minutes + ' минуты';
    document.getElementById('s').innerText = seconds + ' секунд';
}}
counts();

setInterval(counts, 1000);// для того чтобы обновлялся каждую секунду добавляем интервал функцию