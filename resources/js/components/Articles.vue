<template>
    <div>
        <h2>Article</h2>
        <form @submit.prevent="addArticle" class="mb-2">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" id="title" class="form-control" placeholder="Title" v-model="article.title">                
            </div>
            <div class="form-group">
                <label for="body">Body</label>
                <textarea id="body" class="form-control" placeholder="Body" v-model="article.body"></textarea>

            </div>
            <button type="submit" class="btn btn-light btn-block">Save</button><br>
        </form>


        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li :class="[{disabled: !pagination.prev_page_url}]" 
                    class="page-item">
                    <a class="page-link" href="#"
                        @click="fetchArticles(pagination.prev_page_url)">Previous</a>
                </li>

                <li class="page-item" disabled><a class="page-link text-dark" href="#">Page {{pagination.current_page}} of {{pagination.last_page}}</a></li>

                <li :class="[{disabled: !pagination.next_page_url}]" 
                    class="page-item">
                    <a class="page-link" href="#"
                        @click="fetchArticles(pagination.next_page_url)">Next</a>
                </li>
            </ul>
        </nav>

        <div v-for="article in articles" :key="article.id" class="card card-body mb-2">
            <h4>{{ article.title }}</h4>
            <h6>{{ article.body }}</h6>
            <hr>
            <!--pass the entire article uses article-->
            <button @click="editArticle(article)" class="btn btn-warning mb-2">Edit</button>
            <button @click="deleteArticle(article.id)" class="btn btn-danger">Delete</button>
        </div>
    </div>
    
</template>

<script>
export default{
    data(){
        return{
            articles: [],
            article: {
                id: '',
                title: '',
                body: ''
            },
            article_id: '',
            pagination: {},
            edit: false
        }
    },
    created(){
        this.fetchArticles();
    },
    methods: {
        //fetchArticle(){
        fetchArticles(page_url){
            //fetch('/api/articles')
            let vm = this;
            page_url = page_url || '/api/articles'
            fetch(page_url)
            .then(res => res.json())
            .then(res => {
                //console.log(res.data)
                this.articles = res.data;
                vm.makePagination(res.meta, res.links);
            })
            .catch(err => console.log(err));
        }, 
        makePagination(meta, links){
            let pagination = {
                current_page: meta.current_page,
                last_page: meta.last_page,
                next_page_url: links.next,
                prev_page_url: links.prev
            }

            this.pagination = pagination;
        },
        deleteArticle(id){
            if(confirm('Are you sure?')){
                fetch(`api/article/${id}`, {
                    method: 'delete'
                })
                .then(res => res.json())
                .then(data => {
                    alert('Article removed');
                    this.fetchArticles();
                })
                .catch(err => console.log(err))
            }
        }, 
        addArticle() {
            //handle add and update
            if(this.edit === false) {
                //Add
                fetch('api/article', {
                    method: 'post',
                    body: JSON.stringify(this.article),
                    //to send data wrapped in a json string
                    headers: {
                        'Content-Type': 'application/json'
                    }
                })
                .then(res => res.json())
                .then(data => console.log(res.data))
                .catch(err => console.log(err))
            }else{
                //update
                fetch('api/article', {
                    method: 'put',
                    body: JSON.stringify(this.article),
                    //to send data wrapped in a json string
                    headers: {
                        'Content-Type': 'application/json'
                    }
                })
                .then(res => res.json())
                .then(data => {
                    this.article.title = '';
                    this.article.body = '';
                    alert('Article updated');
                    this.fetchArticles();
                })
                .catch(err => console.log(err))
            }
        },
        editArticle(article){
            this.edit=true;
            this.article.id = article.id;
            this.article.article_id = article.id;
            this.article.title = article.title;
            this.article.body = article.body;
        }
    }
};
</script>

<style>

</style>