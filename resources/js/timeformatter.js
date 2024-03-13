updateTimestamp()
setInterval(updateTimestamp,1e3);
function declOfNum(a,b){a=Math.abs(a)%100;let c=a%10;return 10<a&&20>a?b[2]:1<c&&5>c?b[1]:1===c?b[0]:b[2]}
function updateTimestamp() {
	var days = ['неділя', 'понеділок', 'вівторок', 'середу', 'четвер', 'пʼятниця', 'субота'];
	var sklon = ['минуле', 'минулий', 'минулий', 'минулу', 'минулий', 'минулу', 'минулу'];
	var unixtimestamp = Math.floor(Date.now() / 1000);
	var nowdate = new Date(Date.now());
    document.querySelectorAll('span.format-time').forEach(function (elem, i) {
        var seconds = unixtimestamp - elem.getAttribute('unix').valueOf();
        var date = new Date(elem.getAttribute('unix').valueOf() * 1000);
        var dayName = days[date.getDay()];
        var sklonName = sklon[date.getDay()];
        var predName = "У";
        if (date.getDay() == 2) predName = "У";

        if (seconds > 0) {
            if (seconds <= 15) $(elem).text("Тільки що");
            else if (seconds > 15 && seconds < 60) elem.innerHTML = seconds + ' ' + declOfNum(seconds, ["секунду", "секунди", "секунд"]) + " тому";
            else if (seconds >= 60 && seconds < 3600) elem.innerHTML = Math.floor(seconds / 60) + ' ' + declOfNum(Math.floor(seconds / 60), ["хвилину", "хвилини", "хвилин"]) + " тому";
            else if (seconds >= 3600 && seconds < 21600) elem.innerHTML = Math.floor(seconds / 60 / 60) + ' ' + declOfNum(Math.floor(seconds / 60 / 60), ["година", "години", "годин"]) + " тому";
            else if (nowdate.getDate() == date.getDate() && date.getMonth() == nowdate.getMonth() && date.getYear() == nowdate.getYear())
                elem.innerHTML = "Сьогодні о " + ("0" + date.getHours()).slice(-2) + ':' + ("0" + date.getMinutes()).slice(-2);
            else if (nowdate.getDate() == date.getDate() + 1 && date.getMonth() == nowdate.getMonth() && date.getYear() == nowdate.getYear())
                elem.innerHTML = "Вчора о " + ("0" + date.getHours()).slice(-2) + ':' + ("0" + date.getMinutes()).slice(-2);
            else if (nowdate.getDate() == date.getDate() + 2&& date.getMonth() == nowdate.getMonth() && date.getYear() == nowdate.getYear())
                elem.innerHTML = "Позавчора о " + ("0" + date.getHours()).slice(-2) + ':' + ("0" + date.getMinutes()).slice(-2);
            else if (date.getMonth() == nowdate.getMonth() && date.getYear() == nowdate.getYear() && (nowdate.getDate() - date.getDate()) <= 7)
                elem.innerHTML = predName + ' ' + dayName + " о " + ("0" + date.getHours()).slice(-2) + ':' + ("0" + date.getMinutes()).slice(-2);
            else if (date.getMonth() == nowdate.getMonth() && date.getYear() == nowdate.getYear() && (nowdate.getDate() - date.getDate()) <= 14)
                elem.innerHTML = "У " + sklonName + ' ' + dayName + " о " + ("0" + date.getHours()).slice(-2) + ':' + ("0" + date.getMinutes()).slice(-2);
            else elem.innerHTML = ("0" + date.getDate()).slice(-2) + '.' + ("0" + (date.getMonth() + 1)).slice(-2) + '.' + date.getFullYear() + ' о ' + ("0" + date.getHours()).slice(-2) + ':' + ("0" + date.getMinutes()).slice(-2);
        } else {
            if (seconds < 0 && seconds >= -15) $(elem).text("Прямо зараз");
            else if (seconds < -15 && seconds > -60) elem.innerHTML = 'Через ' + Math.abs(seconds) + ' ' + declOfNum(Math.abs(seconds), ["секунду", "секунди", "секунд"]);
            else if (seconds <= -60 && seconds > -3600) elem.innerHTML = 'Через ' + Math.floor(Math.abs(seconds) / 60) + ' ' + declOfNum(Math.floor(Math.abs(seconds) / 60), ["хвилину", "хвилини", "хвилин"]);
            else if (seconds < -3600 && seconds > -21600) elem.innerHTML = 'Через ' + Math.floor(Math.abs(seconds) / 60 / 60) + ' ' + declOfNum(Math.floor(Math.abs(seconds) / 60 / 60), ["година", "години", "годин"]);
            else if (nowdate.getDate() == date.getDate() && date.getMonth() == nowdate.getMonth() && date.getYear() == nowdate.getYear())
                elem.innerHTML = "Сьогодні о " + ("0" + date.getHours()).slice(-2) + ':' + ("0" + date.getMinutes()).slice(-2);
            else if (nowdate.getDate() + 1 == date.getDate() && date.getMonth() == nowdate.getMonth() && date.getYear() == nowdate.getYear())
                elem.innerHTML = "Завтра о " + ("0" + date.getHours()).slice(-2) + ':' + ("0" + date.getMinutes()).slice(-2);
            else if (nowdate.getDate() + 2 == date.getDate() && date.getMonth() == nowdate.getMonth() && date.getYear() == nowdate.getYear())
                elem.innerHTML = "Післязавтра о " + ("0" + date.getHours()).slice(-2) + ':' + ("0" + date.getMinutes()).slice(-2);
            else if (date.getMonth() == nowdate.getMonth() && date.getYear() == nowdate.getYear() && (nowdate.getDate() - date.getDate()) <= 7)
                elem.innerHTML(predName + ' ' + dayName + " о " + ("0" + date.getHours()).slice(-2) + ':' + ("0" + date.getMinutes()).slice(-2));
            else elem.innerHTML = ("0" + date.getDate()).slice(-2) + '.' + ("0" + (date.getMonth() + 1)).slice(-2) + '.' + date.getFullYear() + ' о ' + ("0" + date.getHours()).slice(-2) + ':' + ("0" + date.getMinutes()).slice(-2);
        }
    });
}
