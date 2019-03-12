<form>
    <input type="hidden" id="formId" value="<?= $data['id'] ?>">
    <div class="form-group">
        <label>Пользователь: <b><?= $data['username'] ?></b></label>
    </div>
    <div class="form-group">
        <label>Электорнная почта: <b><?= $data['email'] ?></b></label>
    </div>
    <div class="form-group">
        <label for="formDescription">Описание</label>
        <textarea class="form-control" id="formDescription"><?= $data['description'] ?></textarea>
    </div>
    <div class="form-group">
        <label for="formStatus">Статус</label>
        <select class="form-control" id="formStatus">
            <option <?= $data['status'] ? selected : '' ?> value=true>Выполнено</option>
            <option <?= $data['status'] ? '' : selected ?> value=false>Не выполнено</option>
        </select>
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