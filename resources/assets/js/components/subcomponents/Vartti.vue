<template>
    <div 
        class="quarterHour" 
        v-bind:class="{ painted }"
        @mouseover="shouldPaint"
    >
    </div>
</template>

<script>
    export default {
        props: ["isPainted"],
        data: function() {
            return {
                "painted": false
            }
        },
        methods: {
           shouldPaint: function() {
               this.painted = !this.painted;
           }
        }
    }
</script>
