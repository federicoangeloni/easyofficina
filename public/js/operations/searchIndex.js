var autocomplete_name = function() {

    $("#name").autocomplete({
        source: function (request, response) {
            $.ajax({
                url: "search/autocomplete_name",
                dataType: "json",
                data: {
                    name: request.term,
                    surname: $('#surname').val()
                },
                success: function (data) {
                    response(data);
                }
            });
        },
        select: function (event, ui) {
            $('#name').val(ui.item.value);
        },
        minLength: 0
    }).focus(function () {
        if (this.value == "") {
            $(this).autocomplete("search");
        }
    });

}();

var autocomplete_surname = function(){

    $("#surname").autocomplete({
        source: function(request, response) {
            $.ajax({
                url: "search/autocomplete_surname",
                dataType: "json",
                data: {
                    surname : request.term,
                    name : $('#name').val()
                },
                success: function(data) {
                    response(data);
                }
            });
        },
        select: function(event, ui) {
            $('#surname').val(ui.item.value);
        },
        minLength: 0
    }).focus(function(){
        if (this.value == ""){
            $(this).autocomplete("search");
        }
    });

}();


