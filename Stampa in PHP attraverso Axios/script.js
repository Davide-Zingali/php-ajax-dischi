new Vue({
    el: '#container',
    data: {
        albums: []
    },
    mounted: function () {
        axios
            .get('data/data.php')
            .then((res) => {
            this.albums = res.data;
        });
    }
})