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
                <label class="label">Description</label>
                <div class="control">
                    <textarea class="textarea" v-model="description" rows="5"/>
                </div>
            </div>
            <div class="field">
                <label class="label">Enter Film Id</label>
                <div class="field">
                    <input class="input" type="text" v-model='film_id' name="film_id">
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
            },
        }
    }

</script>
