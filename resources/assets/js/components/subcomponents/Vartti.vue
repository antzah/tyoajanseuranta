<template>
    <div 
        class="quarterHour" 
        v-bind:class="{ painted }"
        @mouseover="shouldPaint"
        @click="quarterClicked(quarter)"
    >
    </div>
</template>

<script>
    export default {
        props: [
            "painted", 
            "isMouseDown", 
            "quarter", 
            "clicks"
        ],
        methods: {
            shouldPaint: function() {
                if (this.isMouseDown) this.painted = !this.painted;
            },
            quarterClicked(quarter) {
                this.$parent.$emit('quarterClicked', quarter);
            }
        }
    }
</script>
