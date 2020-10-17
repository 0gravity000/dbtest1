<template>
    <div class="root">
        <h1>{{msg}}</h1>
        <div class="container">
        <div class="row">
            <div id="select" class="col-2">
                <p>データ項目</p>
                <button v-on:click="createFakerdatas">作成</button>
                <button v-on:click="deleteFakerdatas">全データ削除</button>
            </div>
            <div id="result" class="col">
                <p>結果</p>
                <tr v-for="fakerdata in fakerdatas" v-bind:key="fakerdata.id">
                    <th scope="row">{{ fakerdata.id }}</th>
                    <td>{{ fakerdata.name }}</td>
                    <td>{{ fakerdata.email }}</td>
                    <td>{{ fakerdata.country }}</td>
                    <td>{{ fakerdata.postcode }}</td>
                    <td>{{ fakerdata.address }}</td><br>
                    <td>{{ fakerdata.company }}</td>
                    <td>{{ fakerdata.jobTitle }}</td>
                    <td>{{ fakerdata.phoneNumber }}</td>
                    <td>{{ fakerdata.URL }}</td>
                    <td>{{ fakerdata.ipv4 }}</td>
                    <td>{{ fakerdata.sentence }}</td>
                    <td>{{ fakerdata.text }}</td>
                    <td>{{ fakerdata.colorName }}</td>
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
            createFakerdatas() {
                axios.get('/api/trial/create')
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
