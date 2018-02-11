<template>
    <div 
        class="day" 
        v-bind:class="{ empty: !dayNumber, active: isSelectedDate }"
    >
        {{ dayNumber == 0 ? "&nbsp;" : dayNumber }}
    </div>
</template>

<script>
    export default {
        props: ["dayNumber", "weekday", "isSelectedDate"],
        mounted() {
            
        }
    }
</script>
