<table id="tasks" class="table table-striped table-bordered" style="width:100%">
    <?php
    if ($_SESSION['is_admin'] == true) {
        echo '<div class="dt-buttons">
            <button class="dt-button edit-button" tabindex="0" aria-controls="tasks" type="button">
                <span>Редактировать</span>
            </button>
        </div>';
    }
    ?>

    <thead>
    <tr>
        <th hidden>ID</th>
        <th>Пользователь</th>
        <th>Электорнная почта</th>
        <th>Описание</th>
        <th>Статус</th>
    </tr>
    </thead>
    <tbody>
    <?php

    foreach ($data as $datum) {
        echo '<tr><td hidden>'.$datum['id'].'</td><td>'.$datum['username'].'</td><td>'.$datum['email'].'</td><td>'.$datum['description'].'</td><td>'.($datum['status'] ? 'Выполнен' : 'Не выполнен').'</td></tr>';
    }

    ?>
</table>