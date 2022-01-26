import ItemIndex from './components/items/index.vue';
import ItemCreate from './components/items/create.vue';
import ItemEdit from './components/items/edit.vue';

export const routes = [
    {
        path: '/items',
        component: ItemIndex,
        name: "ItemIndex"
    },
    {
        path: '/items/create',
        component: ItemCreate,
        name: "ItemCreate"
    },
    {
        path: '/items/edit/:itemId',
        component: ItemEdit,
        name: "ItemEdit"
    }
];
