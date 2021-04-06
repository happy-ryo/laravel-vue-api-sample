<template>
    <div class="sample">
        <ol>
            <li v-for="item in items">
                {{ item.text }}
            </li>
        </ol>
    </div>
</template>

<script>
export default {
    data() {
        return {
            items: [
                {text: 'sample1'},
                {text: 'sample2'}
            ]
        }
    },
    mounted() {
        let vm = this;
        axios.get('/api/sample')
            .then(function (response) {
                vm.items = response.data;
            })
    }
}
</script>

<style scoped>

</style>
