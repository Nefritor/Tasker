<form>
    <input type="hidden" id="formId" value="<?= $data[0]['id'] ?>">
    <div class="form-group">
        <label>Пользователь: <b><?= $data[0]['username'] ?></b></label>
    </div>
    <div class="form-group">
        <label>Электорнная почта: <b><?= $data[0]['email'] ?></b></label>
    </div>
    <div class="form-group">
        <label for="formDescription">Описание</label>
        <textarea class="form-control" id="formDescription"><?= $data[0]['description'] ?></textarea>
    </div>
    <div class="form-group">
        <label for="formDateTime">Дата и время</label>
        <div class="input-group date" id="datetimepicker1" data-target-input="nearest">
            <input type="text" class="form-control datetimepicker-input" data-target="#datetimepicker1" id="formDateTime" value="<?= $data[0]['datetime'] ?>"/>
            <div class="input-group-append" data-target="#datetimepicker1" data-toggle="datetimepicker">
                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
            </div>
        </div>
    </div>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#confirmModal">Сохранить</button>

    <div class="modal fade" id="confirmModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Изменить задачу?</h5>
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
</form>