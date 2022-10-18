console.log("JS OK!");

const app = new Vue({
  el: "#app",
  data() {
    return {
      albums: [],
    };
  },
  mounted() {
    this.getAlbums();
  },
  methods: {
    getAlbums() {
      axios
        .get("/php-ajax-dischi/data/data.php")
        .then(({ data }) => {
          if (data.success === true) {
            this.albums = data.response;
            console.log(this.albums);
          }
        })
        .catch((e) => console.log(e));
    },
  },
});
