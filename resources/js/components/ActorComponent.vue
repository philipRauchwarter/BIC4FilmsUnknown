<template>
    <div class="film">
        <div class="box">
            <article class="media">
                <div class="media-content">
                    <div class="content">
                        <p>
                            <strong>{{actor.name}}</strong> <small>{{actor.film_id}}</small>
                            <br>
                            {{actor.description}}
                        </p>
                    </div>
                    <div class="level">
                        <div class="level-left">
                            <div class="level-item">
                                Created: {{actor.created_at | moment('DD.MM.YYYY') }}
                                <br>
                                Last Modified: {{actor.updated_at | moment('DD.MM.YYYY') }}
                            </div>
                        </div>
                        <div class="level-right">
                            <div class="control">
                                <b-button @click="modifyActor(actor.id)" class="button is-success is-outlined">
                                    Modify
                                </b-button>
                                <b-button @click="deleteActor(actor.id)" class="button is-danger is-outlined">
                                    Delete
                                </b-button>
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
        methods: {},
    };
</script>

<style scoped>

</style>
