<template>
    <div class="column">
        <div v-for="actor in actors">
            <actor-component :actor="actor"></actor-component>
        </div>
    </div>
</template>

<script>
    import ActorComponent from "./ActorComponent";

    export default {
        name: "ActorListComponent",
        props: {
            actorList: {
                required: false,
            },
            user: {
                required: false,
            },
            showCategory: {
                required: false,
                default: true
            }
        },
        components: {ActorComponent},
        data: function () {
            return {
                actors: [],
            }
        },
        methods: {

        },
        created() {
            axios.get('./list/actor')
                .then(response => this.actors = response.data)
                .catch(e => console.log(e));        },
        watch: {
            actorList(newVal) {
                this.actors = newVal;
            }
        }
    }
</script>

<style scoped>

</style>
