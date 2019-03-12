$(document).ready(function() {
    let patharray = window.location.pathname.split('/');
    let pathname = patharray[1] + (patharray[2] ? '/' + patharray[2] : '');

    console.log(pathname);

    switch (pathname) {
        case '':
        case 'main':
            let table = $('#tasks').DataTable({
                searching: false,
                info: false,
                lengthChange: false,
                pageLength: 3
            });

            $('#tasks tbody').on('click', 'tr', function () {

                if ($(this).hasClass('selected')) {
                    $(this).removeClass('selected');
                }
                else {
                    table.$('tr.selected').removeClass('selected');
                    $(this).addClass('selected');
                }
            });

            $('.edit-button').click(function () {
            if (table.row('.selected').data()) {
                let taskId = table.row('.selected').data()[0];

                window.location = "/main/edittask/" + taskId;

            }
        });
            break;
        case 'main/edittask':
            $('.btn-confirm').click(function () {
                $.ajax({
                    url: "/app/handlers/handler_savetask.php",
                    data: {
                        id: $('#formId').val(),
                        desc: $('#formDescription').val(),
                        status: $('#formStatus').val()
                    }
                }).done(function(response) {
                    console.log(response);
                    $('.toast').toast('show');
                    $('.toast').find('.toast-body').text(response === 'success' ? 'Данные успешно сохранены' : 'Произошла ошибка');
                });
            });
            break;
        case 'addtask':
            $('.btn-confirm').click(function () {
                $.ajax({
                    url: "/app/handlers/handler_addtask.php",
                    data: {
                        username: $('#formUsername').val(),
                        email: $('#formEmail').val(),
                        desc: $('#formDescription').val()
                    }
                }).done(function(response) {
                    window.location = '/main';
                });
            });
            break;
    }
    if (window.location.pathname.split('/')[1] !== '') {
        $(`.nav-item > .nav-link[href='/${window.location.pathname.split('/')[1]}']`).addClass('active');
    } else {
        $(`.nav-item > .nav-link[href='/main']`).addClass('active');
    }

    $('.end-session').click(function () {
        $.ajax({
            url: "/app/handlers/handler_login.php",
            method: 'post',
            data: {
                end_session: true
            }
        }).done(function(response) {
            console.log(response);
        });
    });
} );