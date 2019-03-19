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
                pageLength: 10
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

            $('.notif-button').click(function () {
                if (table.row('.selected').data()) {
                    let taskId = table.row('.selected').data()[0];
                    $.ajax({
                        url: "/app/handlers/handler_set_notification.php",
                        data: {
                            taskid: taskId
                        }
                    }).done(function(response) {
                        console.log(response);
                        $('.toast').toast('show');
                        $('.toast').find('.toast-body').text(response === '1' ? 'Уведомление создано' : response === '-1' ? 'Уведомление уже существует' : 'Произошла ошибка');
                    });
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
                        datetime: $('#formDateTime').val()
                    }
                }).done(function(response) {
                    console.log(response);
                    $('.toast').toast('show');
                    $('.toast').find('.toast-body').text(response === '1' ? 'Данные успешно сохранены' : 'Произошла ошибка');
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
                        desc: $('#formDescription').val(),
                        datetime: $('#formDateTime').val()
                    }
                }).done(function(response) {
                    window.location = '/main';
                });
            });
            break;
        case 'notifications':
            let tableNotif = $('#notifications').DataTable({
                searching: false,
                info: false,
                lengthChange: false,
                pageLength: 10
            });

            $('#notifications tbody').on('click', 'tr', function () {

                if ($(this).hasClass('selected')) {
                    $(this).removeClass('selected');
                    $('.unsubscribe-button').prop('disabled', true);
                }
                else {
                    tableNotif.$('tr.selected').removeClass('selected');
                    $(this).addClass('selected');
                    $('.unsubscribe-button').prop('disabled', false);
                }
            });

            $('.btn-confirm').click(function () {
                let notifId = tableNotif.row('.selected').data()[0];
                $.ajax({
                    url: "/app/handlers/handler_unsubscribe.php",
                    data: {
                        id: notifId
                    }
                }).done(function(response) {
                    window.location = '/notifications';
                });
            });
            break;
        case 'test':
            $('[data-toggle="tooltip"]').tooltip();
            $('[data-toggle="popover"]').popover();
            break;
    }

    $.ajax({
        url: "/app/handlers/handler_get_subscriptions.php",
    }).done(function(response) {
        let data = JSON.parse(response);
        let currDate = Date.now();
        let tick = [];
        for (let i = 0; i < data.length; i++) {
            let dateDiff = new Date(data[i]['datetime']) - currDate;
            console.log(dateDiff);
            if (dateDiff > 0) {
                setTimeout(() => { alert('Уведомление:\n\nПользователь: ' + data[i]['username'] + '\nОписание: ' + data[i]['description']) }, dateDiff);
            }
        }
    });

    $('#datetimepicker1').datetimepicker({
        format: 'YYYY-MM-DD HH:mm:ss',
    });

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