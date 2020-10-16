<template>
    <div class="root">
        <h1>{{msg}}</h1>
        <div class="container">
        <div class="row">
            <div id="select" class="col">
                <p>名前</p>
            </div>
            <div id="result" class="col-8">
                <p>ここに結果</p>
            </div>
        </div>
        </div>
    </div>
</template>

<script>
    export default {
        data: function () {
            return {
                msg: 'Hello World!'
            }
        },
    }
</script>

<style>
</style>
