<template>
    <div>
        <div v-if="testimonials.length > 0" class="testimonials_title text-center">
            <h1>Testimonials</h1>
        </div>
        <div class="comments">
            <template v-if="testimonials.length > 0">
                <div v-for="comment of testimonials" :key="comment.id" class="comment_block">
                    <div class="speech">
                        <div class="spech_title">{{ comment.Employee }}</div>
                        <div class="spech_sub_title">{{ comment.Employees_position }} - {{ comment.Company }}</div>
                        <div class="spech_content">{{ comment.Review }}</div>
                    </div>
                    <div class="author_block">
                        <div class="avatar_comment_block">
                            <img src="/css/front/img/Avatar.png" alt="avatar failed">
                        </div>
                        <div class="author_raiting">
                            <div class="author_name">{{ comment.Reviewer }}</div>
                            <div class="rating">
                                <span class="star"
                                      :class="getStarClass(1, Number (comment.Rating).toFixed(1))">&#9733;</span>
                                <span class="star"
                                      :class="getStarClass(2, Number (comment.Rating).toFixed(1))">&#9733;</span>
                                <span class="star"
                                      :class="getStarClass(3, Number (comment.Rating).toFixed(1))">&#9733;</span>
                                <span class="star"
                                      :class="getStarClass(4, Number (comment.Rating).toFixed(1))">&#9733;</span>
                                <span class="star"
                                      :class="getStarClass(5, Number (comment.Rating).toFixed(1))">&#9733;</span>
                            </div>
                        </div>
                    </div>
                </div>
            </template>
        </div>
        <div v-if="pagination !== null && testimonials.length > 0">
            <div class="pagination">
                <template v-for="link of pagination.links">
                    <a href="#" class="prev"
                       v-if="link.label.includes('Previous') && link.url !== null"
                       @click="getList(link.url)"
                    >
                        <span class="icon-ArrowLeft"></span>
                    </a>
                    <a href="#" class="page"
                       v-else-if="!link.label.includes('Previous') && !link.label.includes('Next') && link.url !== null"
                       @click="getList(link.url)"
                       :class="link.active ? 'active' : ''">{{ link.label }}</a>
                </template>
                <a href="#" class="next" v-if="pagination.current_page < pagination.last_page"><span
                    class="icon-ArrowRight"></span></a>
            </div>
        </div>
    </div>

</template>

<script>
export default {
    data() {
        return {
            testimonials: [],
            pagination: null
        };
    },
    methods: {
        async getList(url = '') {
            await this.$store.dispatch('testimonials/testimonialsList', url);
            this.testimonials = await this.$store.getters['testimonials/testimonialsList'];
            this.pagination = await this.$store.getters['testimonials/meta'];
        },
        getStarClass(starNumber, raiting) {
            let integerPart = Math.floor(raiting);
            let decimalPart = Math.abs(raiting % 1);
            if (integerPart === 0 && decimalPart > 0 && starNumber === 1) {
                return 'star-' + decimalPart.toString().slice(-1) + '0';
            } else if (starNumber <= integerPart && decimalPart > 0) {
                return 'star-100';
            } else if (starNumber === integerPart++ && decimalPart > 0) {
                return 'star-' + decimalPart.toString().slice(-1) + '0';
            }
            return '';
        }
    },
    async mounted() {
        await this.getList();
    }
}
</script>

<style scoped>

</style>
