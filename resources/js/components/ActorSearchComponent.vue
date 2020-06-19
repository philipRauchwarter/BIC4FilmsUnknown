<template>
    <div id="app">
        <div class="search-wrapper">
            <input type="text" v-model="search" placeholder="Search title.."/>
            <label>Search title:</label>
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
        data: {
            search: '',
            postList: [],
            computed: {
                filteredList() {
                    return this.postList.filter(actor => {
                        return actor.name.toLowerCase().includes(this.search.toLowerCase())
                    })
                }
            }
        }
    }
</script>

<style scoped>

</style>
