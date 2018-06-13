function Review(
    name,
    genre,
    imdbRating,
    pukksRating,
    imdbReview,
    pukksThoughts,
    image
) {
    this.name = name;
    this.genre = genre;
    this.imdbRating = imdbRating;
    this.pukksRating = pukksRating;
    this.imdbReview = imdbReview;
    this.pukksThoughts = pukksThoughts;
    this.image = image;
    this.insertReview = function () {

        $("#name").text(this.name);
        $("#genre").text(this.genre);
        $("#imdbRating").text(this.imdbRating);
        $("#pukksRating").text(this.pukksRating);
        $("#imdbReview").text(this.imdbReview);
        $("#pukkasThoughts").html(this.pukksThoughts);
        $("#imageInsert").html(this.image);
    }
}