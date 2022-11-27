document.addEventListener('DOMContentLoaded', () => {

    const form = $('#url-parse-form');
    const button = form.find('button')
    const tableWrapper = $('#table-wrapper');

    form.on('submit', (e) => {
        e.preventDefault();
        button.attr('disabled', true);
        tableWrapper.html('<div class="text-center"> Пожалуйста, ожидайте</div>');

        $.ajax({
            method: 'GET',
            url: 'http://loc.l:1025/api/v1/parse',
            data: form.serialize(),
            cache: false,
            success: (response) => {
                if (!response['tags']) {
                    return;
                }
                let tableHTML = '<div class="row">';
                response['tags'].forEach((el) => {
                    tableHTML += `<div class="col-6 text-center">${el['name']}</div><div class="col-6 text-center">${el['count']}</div>`;
                })
                tableHTML += '</div>';
                tableWrapper.html(tableHTML);
                button.attr('disabled', false);
            }
        })
    });


});
