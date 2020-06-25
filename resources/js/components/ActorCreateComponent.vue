<template>
    <div class="container">
        <div class="content">
            <div class="field">
                <label class="label">Name</label>
                <div class="control">
                    <input class="input" type="text" v-model='name' name="name">
                </div>
            </div>
            <div class="field">
                <label class="label">Film</label>
                <div class="select">
                    <select v-model="film_id">
                        <option v-for="film in films" :value="film.id">
                            {{film.name}}
                        </option>
                    </select>
                </div>
            </div>
            <div class="field">
                <label class="label">Description</label>
                <div class="control">
                    <textarea class="textarea" v-model="description" rows="5"/>
                </div>
            </div>
            <div class="control">
                <button @click="createActor()" class="button is-success">Create</button>
            </div>
        </div>
    </div>

</template>

<script>
    import Form from "../utilities/Form";
    export default {
        data() {
            return {
                name: '',
                description: '',
                film_id: '',
                films: [],
                film: {
                    id: '',
                    name: '',
                },
            }
        },

        methods: {

            createActor: function () {

                let data = {
                    name: this.name,
                    description: this.description,
                    film_id: this.film_id
                }
                let form = new Form(data);
                form.post('/actor')
                    .catch(e => console.log(e));
                this.name = '';
                this.description = '';
                this.film_id = '';
            }
        },
        created() {
            axios.get('/list/film')
                .then(response => {
                    this.films = response.data;

                });
        }

    }
</script>
