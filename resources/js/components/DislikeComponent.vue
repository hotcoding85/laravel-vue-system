<template>
    <div class="container">
        <div id="success" class="mb-3"></div>
        
       <a style="cursor: pointer" @click.prevent="dislikeBlog">
           <i class="fa fa-thumbs-o-down" aria-hidden="true"></i> 
           ({{ allDislike }})
       </a>
    </div>
</template>
 
<script>
    export default {
        props:['blog'],
        data(){
            return {
                allDislike:'',
            }
        },
        methods:{
            dislikeBlog(){
                axios.post('/dislike/'+this.blog, {blog: this.blog})
                .then(res =>{
                    this.renderDislike()
                    $('#success').html(res.data.message)
                })
                .catch()
            },
            renderDislike(){
                axios.post('/dislike', {blog:this.blog})
                .then(res =>{
                    console.log(res.data.blog.dislike)
                    this.allDislike = res.data.blog.dislike
                })
            }
        },
        mounted() {
            this.renderDislike()
        }
    }
</script>