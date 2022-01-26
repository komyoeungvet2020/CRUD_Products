<template>
    <div class="container">
        <h2 class="text-center">Create Item</h2>
        <div class="row">
            <div class="col-md-12">
                <router-link :to="{ name: 'ItemIndex' }" class="btn btn-primary btn-sm float-right mb-2">Back</router-link>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <form>
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" v-model="item.name">
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea type="text" rows="5" class="form-control" v-model="item.description"></textarea>
                    </div>
                    <div class="form-group mb-2">
                        <label>Price</label>
                        <input type="number" class="form-control" v-model="item.price">
                    </div>
                    <button type="button" class="btn btn-primary" @click="createItem()">Create</button>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            item: {}
        }
    },
    methods: {
        createItem() {
            this.axios.post('http://127.0.0.1:8000/api/items', this.item)
                .then(response => (
                    this.$router.push({ name: 'ItemIndex' })
                ))
                .catch(err => console.log(err))
                .finally(() => this.loading = false)
        }
    }
}
</script>
