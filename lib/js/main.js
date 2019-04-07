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
            /* ----------------------------------------------------------------------------------------------------- */
            $('[data-toggle="tooltip"]').tooltip();
            $('[data-toggle="popover"]').popover();

            class Character {
                constructor(name, options, card) {
                    this.name = name;
                    this.race = options.race;
                    this.gender = options.gender;
                    this.type = options.type;
                    this.level = options.level;
                    this.isLegendary = options.isLegendary;
                }

                addCard(card) {
                    this.card = card;
                }
            }

            let charactersArray = [];

            const fileds = [
                {
                    id: 'char-name',
                    type: 'string'
                },
                {
                    id: 'char-race',
                    type: 'option'
                },
                {
                    id: 'char-gender',
                    type: 'option'
                },
                {
                    id: 'char-type',
                    type: 'option'
                },
                {
                    id: 'char-level',
                    type: 'number'
                },
                {
                    id: 'char-islegen',
                    type: 'check'
                }
            ];

            const translator = new Map([
                ['human', 'Человек'],
                ['ork', 'Орк'],
                ['dwarf', 'Гном'],
                ['troll', 'Тролль'],
                ['male', 'Мужской'],
                ['female', 'Женский'],
                ['archer', 'Лучник'],
                ['mage', 'Маг'],
                ['warrior', 'Воин']
            ]);

            $('.add-char').click(() => {
                if (checkFields()) {
                    const character = new Character(
                        $('#char-name').val(),
                        {
                            race: $('#char-race').val(),
                            gender: $('#char-gender').val(),
                            type: $('#char-type').val(),
                            level: $('#char-level').val(),
                            isLegendary: $('#char-islegen').prop("checked")
                        }
                    );
                    charactersArray.push(character);
                    character.addCard(getCard(character));
                    console.log(charactersArray);
                    $('.cards-layout').append(character.card);
                }
            });

            function validate(value, type) {
                switch (type) {
                    case 'string':
                    case 'option':
                        return !!value;
                        break;
                    case 'number':
                        if (value) {
                            return !value.match(/\D/) ? true : false;
                        } else false;
                        break;
                    case 'check':
                        return true;
                        break;
                }
            }

            function addTempClass(object, className, time) {
                object.addClass(className);
                setTimeout(() => { object.removeClass(className); }, time)
            }

            function checkFields() {
                let isValid = true;
                for (field of fileds) {
                    if (!validate($('#' + field.id).val(), field.type)) {
                        addTempClass($('#' + field.id), 'invalid', 500)
                        isValid = false;
                    }
                }
                return isValid;
            }

            function getCard(character) {
                const card = $(`<div class="card hero-card opacity-hover transition-500 ${character.isLegendary ? 'legendary' : 'common'}" style="width: 18rem;">
                        <div style="background-image: url('/resources/image/${character.race[0]}${character.gender[0]}${character.type[0]}.jpg')" class="card-img-top hero-img">
                    </div>`);
                const cardBody = $(`<div class="card-body">
                    <h5 class="card-title">${character.name}</h5>
                    <p class="card-text">
                        <p><b>Пол: </b>${t(character.gender)}</p>
                        <p><b>Раса: </b>${t(character.race)}</p>                                
                        <p><b>Тип: </b>${t(character.type)}</p>                          
                        <p><b>Уровень: </b>${character.level}</p>
                    </p>
                </div>`);
                const deleteButton = $('<a style="cursor: pointer" class="btn btn-danger opacity-hover-btn btn-delete opacity-0 transition-500">Удалить</a>');
                const nameAtList = $(`<span>${character.name}: ${t(character.type)} ${t(character.race)} ${character.level}-го уровня</span><br/>`);
                cardBody.mouseenter(function () {
                    deleteButton.css('opacity', 1);
                }).mouseleave(function () {
                    deleteButton.css('opacity', 0);
                });
                deleteButton.click((elem) => {
                    const index = charactersArray.indexOf(character);
                    charactersArray.splice(index, 1);
                    card.remove();
                    nameAtList.remove();
                });
                cardBody.append(deleteButton);
                card.append(cardBody);
                $('.hero-list').append(nameAtList);
                return card;
            }

            function deleteCard(elem) {
                console.log(elem);
            }

            function t(text) {
                return translator.has(text) ? translator.get(text) : text
            }
            /* ----------------------------------------------------------------------------------------------------- */
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