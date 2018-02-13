<template>
    <div class="row">
        <div class="col-lg-3 col-md-4 col-12">
            <div class="calendar">
                <div class="month title">
                    <button @click="minusMonth" class="btn float-left">
                        <i class="fas fa-caret-left"></i>
                    </button> 
                    {{ selectedDate.format("MMMM YYYY") }}
                    <button @click="plusMonth" class="btn  float-right">
                        <i class="fas fa-caret-right"></i>
                    </button> 
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
                    />
                </div>
            </div>
        </div>
        <div class="col-lg-9 col-md-8 col-12">
            <div class="selectedDayContainer">
                <h3>{{ selectedDate.format("dddd") }} {{ selectedDate.format("D.M.YYYY") }}</h3>
                <button @click="minusDay" type="button" class="btn btn-outline-info btn-sm">Edellinen päivä</button>
                <button @click="plusDay" type="button" class="btn btn-outline-info btn-sm">Seuraava päivä</button>
                <div class="spacer"></div>
                <div class="row">
                    <div class="col-12">
                        <div class="hourIndicator" :key="n" v-for="n in 24">
                            {{ (n < 11) ? "0" + (n-1) : n-1 }}
                        </div>
                    </div>
                </div>
                <vartti 
                    :key="n" 
                    v-for="n in 96" 
                />
            </div>
        </div>
    </div>
</template>

<script>

import päivä from "./subcomponents/päivä";
import vartti from "./subcomponents/vartti";

function emptyDaysBeforeStart(month, year) {
    var day = moment(new Date(year, month, 1));
    var weekday = day.isoWeekday();
    return weekday - 1;
}

export default {
    components: {
        'paiva': päivä,
        'vartti': vartti
    },
    data: function() {
        return {
            "currentDate": moment(),
            "selectedDate": moment(),
            "selectedDay": moment().get("date"),
            "selectedMonth": moment().get("month"),
            "selectedYear": moment().get("year"),
            daysInSelectedMonth: moment().daysInMonth(),    
            "emptyDaysBeforeStart": emptyDaysBeforeStart(moment().get("month"), moment().get("year"))
        }
    },
    methods: {
        refresh: function() {
            this.selectedDay = this.selectedDate.get("date");
            this.selectedMonth = this.selectedDate.get("month");
            this.selectedYear = this.selectedDate.get("year");
            this.daysInSelectedMonth = this.selectedDate.daysInMonth();
            this.emptyDaysBeforeStart = emptyDaysBeforeStart(this.selectedMonth, this.selectedYear);
        },
        minusMonth: function() {
            this.selectedDate.set("date", 1);
            this.selectedDate.subtract(1, "month");
            this.refresh();
        },
        plusMonth: function () {
            this.selectedDate.set("date", 1);
            this.selectedDate.add(1, "month");
            this.refresh();
        },
        plusDay: function() {
            this.selectedDate.add(1, "day");
            this.refresh();
        },
        minusDay: function() {
            this.selectedDate.subtract(1, "day");
            this.refresh();
        },
    },
    created() {
        this.$on('selectDay', function(day) {
            this.selectedDate = moment(new Date(this.selectedYear, this.selectedMonth, day));
            this.refresh();
        });
    },
    mounted() {
    }
}

</script>