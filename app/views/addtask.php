<form>
    <input type="hidden" id="formId" value="">
    <div class="form-group">
        <label for="formUsername">Пользователь</label>
        <input type="text" class="form-control" id="formUsername" placeholder="Введите ваше имя">
    </div>
    <div class="form-group">
        <label for="formEmail">Электронная почта</label>
        <input type="email" class="form-control" id="formEmail" aria-describedby="emailHelp" placeholder="Введите электронную почту">
    </div>
    <div class="form-group">
        <label for="formDescription">Описание</label>
        <textarea class="form-control" id="formDescription"></textarea>
    </div>
    <div class="form-group">
        <label for="formDescription">Дата и время</label>
        <div class="input-group date" id="datetimepicker1" data-target-input="nearest">
            <input type="text" class="form-control datetimepicker-input" data-target="#datetimepicker1" id="formDateTime"/>
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
                    <h5 class="modal-title" id="exampleModalLabel">Добавить задачу?</h5>
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