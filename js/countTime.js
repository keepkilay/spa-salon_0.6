// При заходе на страницу спросите с помощью инпута день рождения
// пользователя. Когда он зайдет с следующий раз - напишите сколько
// месяцев, дней, часов, минут и секунд осталось до его дня рождения.
// И пусть по этим числам запуститься обратный отсчет (то есть они будут тикать)

// При следующем входе на сайт напишите, сколько дней осталось до его дня рождения.
// Если сегодня день рождения пользователя — поздравьте его! 
// Отобразите персональную скидку 5% на все услуги салона.

// document.addEventListener('DOMContentLoaded', function () {
//   // конечная дата
//   const deadline = new Date(new Date().getFullYear(), new Date().getMonth() + 1, 01);
//   // id таймера
//   let timerId = null;
//   // склонение числительных
//   function declensionNum(num, words) {
//     return words[(num % 100 > 4 && num % 100 < 20) ? 2 : [2, 0, 1, 1, 1, 2][(num % 10 < 5) ? num % 10 : 5]];
//   }
//   // вычисляем разницу дат и устанавливаем оставшееся времени в качестве содержимого элементов
//   function countdownTimer() {
//     const diff = deadline - new Date();
//     if (diff <= 0) {
//       clearInterval(timerId);
//     }
//     const days = diff > 0 ? Math.floor(diff / 1000 / 60 / 60 / 24) : 0;
//     const hours = diff > 0 ? Math.floor(diff / 1000 / 60 / 60) % 24 : 0;
//     const minutes = diff > 0 ? Math.floor(diff / 1000 / 60) % 60 : 0;
//     const seconds = diff > 0 ? Math.floor(diff / 1000) % 60 : 0;
//     $days.textContent = days < 10 ? '0' + days : days;
//     $hours.textContent = hours < 10 ? '0' + hours : hours;
//     $minutes.textContent = minutes < 10 ? '0' + minutes : minutes;
//     $seconds.textContent = seconds < 10 ? '0' + seconds : seconds;
//     $days.dataset.title = declensionNum(days, ['день', 'дня', 'дней']);
//     $hours.dataset.title = declensionNum(hours, ['час', 'часа', 'часов']);
//     $minutes.dataset.title = declensionNum(minutes, ['минута', 'минуты', 'минут']);
//     $seconds.dataset.title = declensionNum(seconds, ['секунда', 'секунды', 'секунд']);
//   }
//   // получаем элементы, содержащие компоненты даты
//   const $days = document.querySelector('.timer__days');
//   const $hours = document.querySelector('.timer__hours');
//   const $minutes = document.querySelector('.timer__minutes');
//   const $seconds = document.querySelector('.timer__seconds');
//   // вызываем функцию countdownTimer
//   countdownTimer();
//   // вызываем функцию countdownTimer каждую секунду
//   timerId = setInterval(countdownTimer, 1000);
// });
