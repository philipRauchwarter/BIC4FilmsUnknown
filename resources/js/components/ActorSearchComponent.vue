<template>
    <div id="app">
        <div class="search-wrapper">
            <input type="text" v v-on="onchange: search" placeholder="Search Actor..." />
            <label>Search Actor:</label>
        </div>
        <div class="wrapper">
            <div class="card" v-for="actor in filteredList">
                <a v-bind:href="'/actor/'+actor.slug" target="_blank">
                    <!--<img v-bind:src="post.img"/>-->
                    <small>Name: {{ actor.author }}</small>
                    {{ actor.description }}
                </a>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "ActorSearchComponent",
        data: function() {
            return {
                actors: [],
                filteredList: []
            }

        },
        filteredList() {
                    return this.postList.filter(actor => {
                        return actor.name.toLowerCase().includes(this.search.toLowerCase())
                    })
        },
        created() {
                axios.get('../list/actor')
                    .then(response => this.actors = response.data)
                    .catch(e => console.log(e));
        },
        methods:
            search(){
                actor.name.toLowerCase().includes(this.search.toLowerCase())
            }
    }

</script>

<style scoped>

</style>
