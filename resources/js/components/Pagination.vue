<template>
    <nav>
        <ul class="pagination">
            <li v-if="currentPage > 1">
                <a href="#" class="prev"
                   v-if="currentPage > 1"
                   @click="goToPage((currentPage - 1))"
                ><span class="icon-ArrowLeft"></span></a>
            </li>
            <li v-if="(currentPage - 1) > 1">
                <a href="#" :class="currentPage === 1 ? 'active' : ''" @click.prevent="goToPage(1)">1</a>
            </li>
            <li v-if="currentPage >= 4">
                <span>...</span>
            </li>
            <li v-for="page in pages" :key="page" >
                <a href="#" :class="page === currentPage ? 'active' : ''"
                @click.prevent="goToPage(page)">{{ page }}</a>
            </li>
            <li v-if="currentPage <= totalPages - 3">
                <span>...</span>
            </li>
            <li v-if="(currentPage + 1) < totalPages">
                <a href="#" :class="currentPage === totalPages ? 'active' : ''" @click.prevent="goToPage(totalPages)">{{ totalPages }}</a>
            </li>
            <li v-if="currentPage < totalPages">
                <a href="#" class="next" v-if="currentPage < totalPages"
                   @click.prevent="goToPage((currentPage +1))"><span
                    class="icon-ArrowRight"></span></a>
            </li>
        </ul>
    </nav>
</template>

<script>
export default {
    props: {
        currentPage: {
            type: Number,
            required: true,
        },
        totalPages: {
            type: Number,
            required: true,
        },
    },
    computed: {
        pages() {
            const pages = [];

            if (this.totalPages <= 3) {
                for (let i = 1; i <= this.totalPages; i++) {
                    pages.push(i);
                }
            } else if (this.currentPage <= 2) {
                for (let i = 1; i <= 3; i++) {
                    pages.push(i);
                }
            } else if (this.currentPage >= this.totalPages - 1) {
                for (let i = this.totalPages - 2; i <= this.totalPages; i++) {
                    pages.push(i);
                }
            } else {
                for (let i = this.currentPage - 1; i <= this.currentPage + 1; i++) {
                    pages.push(i);
                }
            }

            return pages;
        },
    },
    methods: {
        goToPage(page) {
            this.$emit('page-changed', page);
        },
    },
};
</script>


<style scoped>

</style>
