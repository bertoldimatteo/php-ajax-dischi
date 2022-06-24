const app = new Vue({
    el: '#root',
    data: {
        musics: [],
    },
    created() {
        axios.get('http://localhost/php-ajax-dischi/server/api.php')
        .then((response) => {
            this.musics = response.data;
            console.log(response)
        })
        .catch((error) => {
            console.log(error);
        });
    }
})