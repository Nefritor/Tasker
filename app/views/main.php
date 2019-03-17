<table id="tasks" class="table table-striped table-bordered" style="width:100%">
    <?php
    if (!empty($_SESSION)) {
        echo '<div class="dt-buttons">';
        if ($_SESSION['is_admin'] == true) {
            echo '<button class="dt-button edit-button" tabindex="0" aria-controls="tasks" type="button">
                <span>Редактировать</span>
            </button>';
        }
        echo '
            <button class="dt-button notif-button" tabindex="0" aria-controls="tasks" type="button">
                <span>Создать уведомление</span>
            </button>
        </div>';
    }
    ?>

    <thead>
    <tr>
        <th hidden>ID</th>
        <th width="200">Пользователь</th>
        <th width="250">Электорнная почта</th>
        <th>Описание</th>
        <th width="200">Дата и время</th>
    </tr>
    </thead>
    <tbody>
    <?php

    foreach ($data as $datum) {
        echo '<tr><td hidden>'.$datum['id'].'</td><td>'.$datum['username'].'</td><td>'.$datum['email'].'</td><td>'.$datum['description'].'</td><td>'.$datum['datetime'].'</td></tr>';
    }

    ?>
</table>