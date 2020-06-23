<template>
    <div id="app">
        <div class="input-container">
            <input type="text" v-on:keyup.enter="filteredList" placeholder="Type a name" v-model="search" />
        </div>
        <div class="column">
            <div v-for="actor in filList">
                <actor-component :actor="actor"></actor-component>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "ActorSearchComponent",
        data: function () {
            return {
                search:"",
                actors: [],
                filList: [],

            }

        },
        created() {
            axios.get('../list/actor')
                .then(response => this.actors = response.data)
                .catch(e => console.log(e+"test"));
        },
        methods: {

            filteredList: function () {
                this.filList=[];
                this.filList=this.actors.filter(actor => {
                    return actor.name.toLowerCase().includes(this.search.toLowerCase())
                })
            }
        }
    }

</script>

<style scoped>

</style>
