
$(document).ready(function () {
    power.insertReview();


insertOnClick($('#narcos'),narcos);
insertOnClick($('#power'),power);
insertOnClick($('#break'),breaking);
insertOnClick($('#rick'),ricky);
insertOnClick($('#robot'),robot);
insertOnClick($('#orange'),orange);
insertOnClick($('#ozark'),ozark);

insertOnClick($('#empire'),empire);
    insertOnClick();
    $('#btn2').click(function () {

});

 //   breaking.insertReview();
      function insertOnClick(element,review) {
    element.click(function () {
        review.insertReview();

    });
}
});