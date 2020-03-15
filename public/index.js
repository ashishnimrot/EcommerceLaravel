
var responceJson = "";

$(document).ready(function(){

    function ipLookUp () {
        $.ajax('http://ip-api.com/json')
            .then(
                function success(response) {
                    responceJson = response;
                    $("#modalMessage").html('You are in <b>'+response.country+'</b> ! <br>Do you want to change currency rate as per <b>'+response.country+'</b> ?');
                },

                function fail(data, status) {
                    console.log('Request failed.  Returned status of',
                        status);
                }
            );
    }

    if (localStorage.getItem("isCur") === null) {
        ipLookUp();
        $("#countryAlertModal").modal('show');
    }

});

function acceptCountryModal() {
    $.ajax("/setCountry/"+responceJson.country);
    localStorage.setItem("isCur", 'true');
    var url = new URL(window.location.href);
    window.location.href = url.href;
}

function denileCountryModal() {
    localStorage.setItem("isCur", 'false');
}
