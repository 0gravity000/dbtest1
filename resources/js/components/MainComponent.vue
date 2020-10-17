<template>
    <div class="root">
        <h1>{{msg}}</h1>
        <div class="container">
        <div class="row">
            <div id="select" class="col">
                <p>名前とemail</p>
                <button v-on:click="getFakerdatas">作成</button>
                <button v-on:click="deleteFakerdatas">全データ削除</button>
            </div>
            <div id="result" class="col-8">
                <p>結果</p>
                <tr v-for="fakerdata in fakerdatas">
                    <th scope="row">{{ fakerdata.id }}</th>
                    <td>{{ fakerdata.name }}</td>
                    <td>{{ fakerdata.email }}</td>
                </tr>

            </div>
        </div>
        </div>
    </div>
</template>

<script>
    export default {
        data: function () {
            return {
                msg: 'ランダムなデータを作成',
                fakerdatas: []
            }
        },
        methods: {
            getFakerdatas() {
                axios.get('/api/trial')
                    .then((res) => {
                        this.fakerdatas = res.data;
                    });
            },
            deleteFakerdatas() {
                axios.get('/api/trial/destroy')
                    .then((res) => {
                        this.fakerdatas = res.data;
                    });
            },
        },
        mounted() {
            this.getFakerdatas();
        }
    }
</script>

<style>
</style>
