//console.log('CIAOOOOO');
/**
 * Get Albums From Api
 */
const app = new Vue({
    el:'#app',
    data: {
        albums: [],
    },
    created() {
        //Get data qua alla creazione qua prendi url di dove hai creato tu il foglio dei database
        
        const dataURL = 'http://localhost/php-ajax-dischi/Milestrone-2/scripts/get-albums.php';

        // dove arriva il dato
        axios.get(dataURL)
             .then(result => {
                 console.log(result.data);
                 // per la verifica che siano dentro vai su Vue dev
                 this.albums = result.data;
             })
             .catch(err => {
                 console.log(err);
             })
    },
});