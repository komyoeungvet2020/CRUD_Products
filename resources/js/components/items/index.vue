<template>
    <div class="container">
        <h2 class="text-center">Items List</h2>
        <div class="row">
            <div class="col-md-12">
                <router-link :to="{ name: 'ItemCreate' }" class="btn btn-primary btn-sm float-right mb-2">Add Item</router-link>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr v-for="(item, key) of items" v-bind:key="key">
                        <td>{{ key+1 }}</td>
                        <td>{{ item.name }}</td>
                        <td>{{ item.description }}</td>
                        <td>{{ item.price }}</td>
                        <td>
                            <router-link class="btn btn-success btn-sm" :to="{ name: 'ItemEdit', params: { itemId: item.id }}">Edit</router-link>
                            <button class="btn btn-danger btn-sm" @click="deleteItem(item.id)">Delete</button>
                        </td>
                        <td>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            items: {}
        }
    },
    created() {
        this.getItems();
    },
    methods: {
        getItems() {
            this.axios.get('http://127.0.0.1:8000/api/items')
                .then(response => {
                    this.items = response.data;
                });
        },
        deleteItem(itemId) {
            this.axios
                .delete(`http://127.0.0.1:8000/api/items/${itemId}`)
                .then(response => {
                    let i = this.items.map(data => data.id).indexOf(itemId);
                    this.items.splice(i, 1)
                });
        }
    }
}
</script>
