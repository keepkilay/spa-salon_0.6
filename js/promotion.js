//Разместите на главной странице индивидуальную акцию. 
//Запишите в время входа пользователя на сайт. При обновлении
//страницы выводите сколько часов-минут-секунд осталось 
//пользователю до истечения персональной скидки (отсчёт начинаем с 24 часов).




// function contador() {
//     var dd = localStorage.getItem("dd");
//     var hr = localStorage.getItem("hr");
//     var mm = localStorage.getItem("mm");
//     var ss = localStorage.getItem("ss");
//     if (!dd || !hr || !mm || !ss) {
//        dd = "1";
//        hr = "23";
//        mm = "59";
//        ss = "59";
//        localStorage.setItem("dd", dd);
//        localStorage.setItem("hr", hr);
//        localStorage.setItem("mm", mm);
//        localStorage.setItem("ss", ss);
//     }
//     var interval = setInterval(function () {
//        if (dd == 0 && hr == 0 && mm == 0 && ss == 0) {
//           clearInterval(interval);

//        }
//        ss--;
//        if (ss == 0) {
//           ss = 59;
//           mm--;
//           if (mm == 0) {
//              mm = 59;
//              hr--;
//           }
//           if (hr == 0) {
//              hr = 24;
//              dd--;
//           }
//        }
//        if (dd.toString().length < 2) dd = "0" + dd;
//        if (hr.toString().length < 2) hr = "0" + hr;
//        if (mm.toString().length < 2) mm = "0" + mm;
//        if (ss.toString().length < 2) ss = "0" + ss;
//        $(".contador").html("<div class='timer-info day'>" + dd + "</div> : <div class='timer-info hora'>" + hr + "</div> : <div class='timer-info minuto'>" + mm + "</div> : <div class='timer-info segundo'>" + ss + "</div>");
//        localStorage.setItem("dd", dd);
//        localStorage.setItem("hr", hr);
//        localStorage.setItem("mm", mm);
//        localStorage.setItem("ss", ss);
//     }, 1000);
//  }
//  window.onload = contador;

//  /**
// 	 * Счетчик обратного отсчета
// 	 *
// 	 * @param mixed $date
// 	 * @return
// 	 */
//  function downcounter($date){
//     $check_time = strtotime($date) - time();
//     if($check_time <= 0){
//         return false;
//     }

//     $days = floor($check_time/86400);
//     $hours = floor(($check_time%86400)/3600);
//     $minutes = floor(($check_time%3600)/60);
//     $seconds = $check_time%60; 

//     $str = '';
//     if($days > 0) $str .= declension($days,array('день','дня','дней')).' ';
//     if($hours > 0) $str .= declension($hours,array('час','часа','часов')).' ';
//     if($minutes > 0) $str .= declension($minutes,array('минута','минуты','минут')).' ';
//     if($seconds > 0) $str .= declension($seconds,array('секунда','секунды','секунд'));

//     return $str;
// }





//ТО ЧТО НИЖЕ, ДОЛЖНО СРАБОТАТЬ НА PHP


// /**
//  * Функция склонения слов
//  *
//  * @param mixed $digit
//  * @param mixed $expr
//  * @param bool $onlyword
//  * @return
//  */
// function declension($digit,$expr,$onlyword=false){
//     if(!is_array($expr)) $expr = array_filter(explode(' ', $expr));
//     if(empty($expr[2])) $expr[2]=$expr[1];
//     $i=preg_replace('/[^0-9]+/s','',$digit)%100;
//     if($onlyword) $digit='';
//     if($i>=5 && $i<=20) $res=$digit.' '.$expr[2];
//     else
//     {
//         $i%=10;
//         if($i==1) $res=$digit.' '.$expr[0];
//         elseif($i>=2 && $i<=4) $res=$digit.' '.$expr[1];
//         else $res=$digit.' '.$expr[2];
//     }
//     return trim($res);
// }

// РАБОТАЕТ НА JAVASCTIPT

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
