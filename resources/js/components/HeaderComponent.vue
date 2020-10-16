<template>
    <div class="container-fluid mb-3" style="background-color: #e3f2fd;">
        <div class="container">
            <nav class="navbar navbar-light">
                <span class="navbar-brand mb-0 h1"><a href="/top">DBTest1</a></span>
                <div>
                    <button type="button" class="btn btn-link"><a href="/">Welcomeページへ</a></button>
                    <button type="button" class="btn btn-link"><a href="/top">Topページへ</a></button>
                    <!--
                    <router-link v-bind:to="{name: 'task.list'}">
                        <button class="btn btn-success">List</button>
                    </router-link>
                    <router-link v-bind:to="{name: 'task.create'}">
                        <button class="btn btn-success">ADD</button>
                    </router-link>
                -->
                </div>
            </nav>
        </div>
    </div>
</template>

<script>
    export default {}
</script>