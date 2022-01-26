<template>
    <div class="container">
        <h2 class="text-center">Update Item</h2>
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
                    <div class="form-group">
                        <label>Price</label>
                        <input type="text" class="form-control mb-2" v-model="item.price">
                    </div>
                    <button type="button" class="btn btn-primary" @click="updateItem()"> Update </button>
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
    mounted() {
        this.editItem(this.$route.params.itemId);
    },
    methods: {
        editItem(itemId) {
            this.axios.get(`http://127.0.0.1:8000/api/items/${itemId}`)
                .then((res) => {
                    this.item = res.data;
                });
        },
        updateItem() {
            this.axios
                .patch(`http://127.0.0.1:8000/api/items/${this.$route.params.itemId}`, this.item)
                .then((res) => {
                    this.$router.push({ name: 'ItemIndex' });
                });
        }
    }
}
</script>
