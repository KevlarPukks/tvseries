
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

function navToggle() {
    var x = document.getElementById("nav");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
};