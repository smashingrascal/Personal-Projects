$("#lNstyleselect").click(function () {

    $("#lNstyle-add").toggle();
    $("#lNstyle-show").toggle();
});

$('.colorpicker').colorpicker();

$("#Sselect-emblem").change(function(){
    setEmblem(this);
});

$("#Sselect-banner").change(function(){
    setBanner(this);
});

$("#Sselect-icon").change(function(){
    setIcon(this);
});

$("#Sselect-color").change(function(){
    setColor(this);
});


function setEmblem(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#Spreviewemblem').attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
    }
}

function setBanner(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#Spreviewbanner').attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
    }
}

function setIcon(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#Spreviewicon').attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
    }
}

function setColor(input) {

        var value = input.value;
        document.getElementById("Spreviewcolor").style.backgroundColor = value;

}
