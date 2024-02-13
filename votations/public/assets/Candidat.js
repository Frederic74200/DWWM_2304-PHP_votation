class Candidat {

    constructor(_json) {
        this.candidat_id = _json.id;
        this.candidat_nom = _json.nom;
        this.candidat_prenom = _json.prenom;
        this.candidat_slog = _json.slogan;
    }



}
export { Candidat }