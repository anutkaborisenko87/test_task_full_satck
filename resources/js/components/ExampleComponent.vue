<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Example Component</div>

                    <div class="card-body">
                        I'm an example component.
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        async mounted() {
            await this.$store.dispatch('testmonials/usersList');
            let usersList = await this.$store.getters['testmonials/usersList'];
            console.log(usersList);
        }
    }
</script>
