<template>
    <div class="calendar">
        <div class="month title">
            Helmikuu 2018
        </div>
        <div class="days">
            <div class="weekdays">
                <div class="day-of-the-week">MA</div>
                <div class="day-of-the-week">TI</div>
                <div class="day-of-the-week">KE</div>
                <div class="day-of-the-week">TO</div>
                <div class="day-of-the-week">PE</div>
                <div class="day-of-the-week">LA</div>
                <div class="day-of-the-week">SU</div>
            </div>
            <paiva 
                v-for="n in emptyDaysBeforeStart" 
                :key="n" 
                day-number=0
            />
            <paiva 
                v-for="n in daysInSelectedMonth" 
                :key="n+100" 
                :day-number="n"
                :is-selected-date="n == selectedDay"
                @click.native="selectedDay = n"
            />
        </div>
    </div>
</template>

<script>

import päivä from "./subcomponents/päivä";

function emptyDaysBeforeStart(month, year) {
    var day = moment(new Date(year, month, 1));
    var weekday = day.isoWeekday();
    return weekday - 1;
}

var currentDate = moment(),
    selectedDate = currentDate,
    daysInSelectedMonth = selectedDate.daysInMonth()
    emptyDaysBeforeStart = emptyDaysBeforeStart(selectedDate.get("month"), selectedDate.get("year"));

export default {
    components: {
        'paiva': päivä
    },
    semiRandomKey: function() {
        return Math.ceil(Math.random()*99999999); // I know this is dirty. I am sorry.
    },
    clicked: function() {
        console.log("clicked");
    },
    data: function() {
        return {
            currentDate,
            selectedDate,
            daysInSelectedMonth: selectedDate.daysInMonth(),    
            emptyDaysBeforeStart,
            "selectedDay": selectedDate.get("date")
        }
    },
    mounted() {
        console.log();
    }
}

</script>