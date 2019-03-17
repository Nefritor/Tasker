<table id="notifications" class="table table-striped table-bordered" style="width:100%">
    <?php
    echo '
        <div class="dt-buttons">
            <button type="dt-button button unsubscribe-button" class="dt-button unsubscribe-button" data-toggle="modal" tabindex="0" aria-controls="tasks" data-target="#confirmModal" data-target="#confirmModal" disabled>
                <span>Удалить уведомление</span>
            </button>
        </div>';
    ?>

    <thead>
    <tr>
        <th hidden>ID</th>
        <th width="200">Пользователь</th>
        <th>Описание задачи</th>
        <th width="200">Дата и время</th>
        <th width="200">Осталось</th>
    </tr>
    </thead>
    <tbody>
    <?php

    foreach ($data as $i => $datum) {
        if ($datum['is_visible']) {
            echo '<tr><td hidden>' . $datum['id'] . '</td><td>' . $datum['username'] . '</td><td>' . $datum['description'] . '</td><td>' . $datum['datetime'] . '</td><td id="timer-id-'.$i.'"></td></tr>';
        }
    }

    ?>
</table>

<script>
    <?php
        echo "
            let timer = [];
            let hours = [];
            let minutes = [];
            let seconds = [];
            let timerHTML = [];
            let interval = [];
            let tick = 1000;
        ";
        foreach ($data as $i => $datum) {
            if ($datum['is_visible']) {
                echo "
                    timerHTML[".$i."] = $('#timer-id-".$i."');
                    timer[".$i."] = parseInt((new Date('".$datum['datetime']."') - new Date()) / 1000);
                    interval[".$i."] = setInterval(() => { 
                        if (timer[".$i."] > 0) {
                            hours[".$i."] = parseInt(timer[".$i."] / (60 * 60));
                            minutes[".$i."] = parseInt(timer[".$i."] / 60 - hours[".$i."] * 60 );
                            seconds[".$i."] = parseInt(timer[".$i."] - hours[".$i."] * 3600 - minutes[".$i."] * 60);
                            timerHTML[".$i."].text(hours[".$i."] + 'ч. ' + minutes[".$i."] + 'м. ' + seconds[".$i."] + 'с.');
                            timer[".$i."] -= tick / 1000;
                        } else {
                            timerHTML[".$i."].text('Событие пройдено');
                             clearInterval(interval[".$i."]);
                        }
                    }, tick);
                ";
            }
        }
    ?>
</script>

<div class="modal fade" id="confirmModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Отписаться от задачи?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Нет</button>
                <button type="button" class="btn btn-primary btn-confirm" data-dismiss="modal">Да</button>
            </div>
        </div>
    </div>
</div>