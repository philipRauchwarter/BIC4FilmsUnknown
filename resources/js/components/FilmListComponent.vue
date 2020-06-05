<template>
    <table class="table is-fullwidth is-hoverable">
        <thead>
        <tr class="title is-6">
            <table-element element-type="th">Name</table-element>
            <table-element element-type="th">Beschreibung</table-element>
            <!--<table-element element-type="th" v-if="showCategory">Category</table-element>
            <table-element element-type="th" text-class="has-text-centered">Replies</table-element>-->
            <table-element element-type="th">Created</table-element>
            <table-element element-type="th">Modified</table-element>
            <table-element element-type="th"></table-element>
        </tr>
        </thead>
        <tbody>
        <tr v-for="film in films" :key="film.id">
            <table-element element-type="td">
                <a :href="'/film/' + film.slug"
                   :title="film.name">
                    <i class="fa fa-comment"></i>&nbsp;{{ film.name }}
                </a>
            </table-element>
            <table-element element-type="td">{{ film.name }}</table-element>
            <!--<table-element element-type="td" v-if="showCategory">{{ film.description }}</table-element>
            <table-element element-type="td" text-class="has-text-centered">{{ film.messages.length }}
            </table-element>-->
            <table-element element-type="td">{{ film.created_at | moment('DD.MM.YYYY') }}</table-element>
            <table-element element-type="td">{{ film.updated_at | moment('DD.MM.YYYY') }}</table-element>
            <table-element element-type="td">
                <p class="buttons" v-if="user.id === film.user.id">
                    <a :href="'/film/' + film.slug + '/edit'" class="button is-info is-outlined is-small">
                            <span class="icon">
                              <i class="fa fa-edit"></i>
                            </span>
                    </a>
                    <button v-if="!film.name.length" @click="openDeleteModal(film)"
                            class="button is-danger is-outlined is-small">
                            <span class="icon">
                              <i class="fa fa-remove"></i>
                            </span>
                    </button>
                </p>
            </table-element>
        </tr>
        </tbody>
    </table>
</template>

<script>
    export default {
        name: "FilmListComponent",
        props: {
            filmList: {
                required: true
            },
            user: {
                required: true
            },
            showCategory: {
                required: false,
                default: true
            }
        },
        components: {
            TableElement
        },
        data() {
            return {
                films: []
            }
        },
        methods: {
            openDeleteModal(film) {
                this.$emit('open-modal',
                    {
                        id: film.id,
                        title: film.title,
                        content: 'Do you really want to delete this Film?',
                        url: '/film/' + film.slug
                    });
            }
        },
        created() {
            this.films = this.filmList;
        },
        watch: {
            filmList(newVal) {
                this.films = newVal;
            }
        }
    }
</script>

<style scoped>

</style>
