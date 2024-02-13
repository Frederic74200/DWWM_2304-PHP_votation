console.log("ok");
import { Db } from "./Db.js";
import { Candidat } from "./Candidat.js";

const urlJson = "http://localhost:3000/api/candidats";

const app = {
    data() {
        return {
            nbCandidats: "toto",
            listeCandidats: [],
            listeRand: []
        }
    },
    async mounted() {
        let json = await Db.fetchJson(urlJson);
        for (let item of json) {
            this.listeCandidats.push(new Candidat(item));
        }
        this.listeRand = this.listeCandidats.sort((a, b) => 0.5 - Math.random());


        console.log(this.listeCandidats);
    },
    computed: {

    },
    methods: {

    }
}

Vue.createApp(app).mount('#app');