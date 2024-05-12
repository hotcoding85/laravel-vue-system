<template>
    <div class="container">
        <div id="success" class="mb-3"></div>

        <a style="cursor: pointer" @click.prevent="likeBlog">
            <i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
            ({{ alllikes }})
        </a>
    </div>
</template>

<script>
    export default {
        props: ['blog'],
        data() {
            return {
                alllikes: '',
            }
        },
        methods: {
            likeBlog() {
                axios.post('/like/' + this.blog, {
                        blog: this.blog
                    })
                    .then(res => {
                        this.renderLike()
                        $('#success').html(res.data.message)
                    })
                    .catch()
            },
            renderLike() {
                axios.post('/like', {
                        blog: this.blog
                    })
                    .then(res => {
                        console.log(res.data.blog.like)
                        this.alllikes = res.data.blog.like
                    })
            }
        },
        mounted() {
            this.renderLike()
        }
    }

</script>