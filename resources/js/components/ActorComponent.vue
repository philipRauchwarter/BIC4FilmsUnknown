<template>
    <div class="film">
        <div class="box">
            <article class="media">
                <div class="media-content">
                    <div class="content">
                        <p>
                            <strong>{{actor.name}}</strong>
                            <br/>
                            Played in: <a href="ActorComponent.vue"><small>
                            {{actor.film.name}}</small></a>
                            <br>
                            {{actor.description}}
                        </p>
                    </div>
                    <div class="level">
                        <div class="level-left">
                            <div class="level-item">
                                Created: {{actor.created_at | moment('DD.MM.YYYY, hh:mm') }}
                                <br>
                                Last Modified: {{actor.updated_at | moment('DD.MM.YYYY, hh:mm') }}
                            </div>
                        </div>
                        <div class="level-right">
                            <div class="control">
                                <button @click="modifyActor(actor)" class="button is-success is-outlined">
                                    Modify
                                </button>
                                <button @click="deleteActor(actor)" class="button is-danger is-outlined">
                                    Delete
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
        </div>
    </div>
</template>

<script>
    export default {
        name: "ActorComponent",
        props: ['actor'],
        data: function () {
            return {}
        },
        methods: {
            deleteActor(actor) {
                axios.delete('./actor/'+actor.slug).then(response => {
                    console.log(response)
                });
                window.location.reload()
            }
        },
    };
</script>

<style scoped>

</style>
