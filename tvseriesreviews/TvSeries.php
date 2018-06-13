
<script>
function Review(
    name,
    genre,
    imdbRating,
    pukksRating,
    imdbReview,
    pukksThoughts
) {
    this.genre = genre;
    this.imdbRating = imdbRating;
    this.pukksRating = pukksRating;
    this.imdbReview = imdbReview;
    this.pukksThoughts = pukksThoughts;
}

var empire = new Review(
    'Empire',
   ['Music', 'Drama'],
    '7.7/10',
    '8.5/10',
    'A hip-hop mogul must choose a successor among his three sons who are battling for control ' +
    'over his multi-million dollar company, while his ex-wife schemes to reclaim what is hers.',
    'I thought I wans\'t a  fan of musicals but after wathcing Empire I\'ve learnt its\n' +
    'not that iits a musical it\'s that I just don\'t enjoy the music. This is an interesting\n' +
    'top drama series id say it\'s a sort of hood Dallas if anybody remembers that show.'
);
var robot = new Review(
    'Mr Robot',
    ['Crime','Drama','Thriler'],
    '8.6/10',
    '9.5/10',

)
</script>
