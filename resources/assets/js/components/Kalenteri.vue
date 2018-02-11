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
            <div class="week">
                <div class="day empty"></div>
                <div class="day empty"></div>
                <div class="day empty"></div>
                <div class="day">1</div>
                <div class="day">2</div>
                <div class="day saturday">3</div>
                <div class="day active sunday">4</div>
            </div>
            <div class="week">
                <div class="day">5</div>
                <div class="day">6</div>
                <div class="day">7</div>
                <div class="day">8</div>
                <div class="day">9</div>
                <div class="day saturday">10</div>
                <div class="day sunday">11</div>
            </div>
            <div class="week">
                <div class="day">12</div>
                <div class="day">13</div>
                <div class="day">14</div>
                <div class="day">15</div>
                <div class="day">16</div>
                <div class="day saturday">17</div>
                <div class="day sunday">18</div>
            </div>
            <div class="week">
                <div class="day">19</div>
                <div class="day">20</div>
                <div class="day">21</div>
                <div class="day">22</div>
                <div class="day">23</div>
                <div class="day saturday">24</div>
                <div class="day sunday">25</div>
            </div>
            <div class="week">
                <div class="day">26</div>
                <div class="day">27</div>
                <div class="day">28</div>
                <div class="day empty"></div>
                <div class="day empty"></div>
                <div class="day empty saturday"></div>
                <div class="day empty sunday"></div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Calendar mounted.')
        }
    }
</script>
