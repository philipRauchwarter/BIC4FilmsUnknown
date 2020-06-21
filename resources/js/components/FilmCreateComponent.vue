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
            <div class="control">
                <button @click="createFilm()" class="button is-success">Create</button>
            </div>
        </div>
    </div>
</template>

<script>
    import Form from "../utilities/Form";
    export default {
        data() {
            return {
                slug:'',
                name: '',
                description: '',
                film_id: '',
                statusErr: 0,
                films: [],
                film: {
                    id: '',
                    name: '',
                },
            }
        },
        methods: {
            createFilm() {
                    let data = {
                        name: this.name,
                        description: this.description
                    }
                    let form = new Form(data);
                    form.post('/film')
                        .catch(e => console.log(e));

                this.name = '';
                this.description = '';
            },
        }
    }
</script>
