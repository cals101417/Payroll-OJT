const dateFromEl = document.getElementById('datefrom');
const dateToEl = document.getElementById('dateto');
const workdaysEl = document.getElementById('workdays');
const absencesEl = document.getElementById('absent');
let dateFromValue;
let dateToValue;
let absencesValue;
dateFromEl.addEventListener('change', e => {
    dateFromValue = new Date(e.target.value).getTime();
    getWorkDays();
});
dateToEl.addEventListener('change', e => {
    dateToValue = new Date(e.target.value).getTime();
    getWorkDays();
});
absencesEl.addEventListener('blur', e => {
    absencesValue = +e.target.value;
    getWorkDays();
});
const getWorkDays = () => {
    if (dateFromValue && dateToValue) {
        let workdays = Math.ceil((dateToValue - dateFromValue) / (1000 * 3600 * 24));
        if (absencesValue) {
            workdays -= absencesValue;
        }
        workdaysEl.value = workdays;
        return workdays;
    }
};