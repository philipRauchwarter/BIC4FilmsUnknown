<template>
    <div id="app">
        <div class="column">
        <div class="wrap">

            <div class="search">
                <input type="text" class="searchTerm" v-on:keyup.enter="filteredList" placeholder="Type a name" v-model="search" />
                <button type="submit" class="searchButton" @click="filteredList">
                    <i class="fa fa-search"></i>
                </button>
            </div>
        </div>

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
