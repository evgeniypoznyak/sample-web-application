$(function() {

const form = $('#info');
    form.on('submit', function (e) {
        e.preventDefault();

    })

const resultHTML = $('#res');


    $('#byId').on('click', function () {
        $.ajax({
            type: "POST",
            data: {
                by: 'id',
            },
            url: 'getInfo.php',

            beforeSend: function () {

                resultHTML.html('');

            },

            success: function (res) {
                let responce = JSON.parse(res)

                let html = 'AJAX RESULT: <ul>';
                responce.forEach( function (t) {

                    html += `<li>ID: ${t.id} - NAME: ${t.name}</li>`;

                });

                html += `</ul>`;
                resultHTML.html(html);


            },
            error: function (xhr) {

                console.log('error');

            }
        });


    });




    $('#byName').on('click', function () {
        $.ajax({
            type: "POST",
            data: {
                by: 'name',
            },
            url: 'getInfo.php',

            beforeSend: function () {

                resultHTML.html('');

            },

            success: function (res) {
                let responce = JSON.parse(res)
                let html = 'AJAX RESULT: <ul>';
                responce.forEach( function (t) {

                    html += `<li>ID: ${t.id} - NAME: ${t.name}</li>`;

                });

                html += `</ul>`;
                resultHTML.html(html);


            },
            error: function (xhr) {
                console.log('error');

            }
        });


    });




});