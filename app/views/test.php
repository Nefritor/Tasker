<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="https://c.wallhere.com/photos/bb/d3/pictures_county_christmas_xmas_uk_sunset_england_cloud-961675.jpg!d" alt="First slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="https://c.wallhere.com/photos/16/47/tomb_lara_croft_rise_raider-831582.jpg!d" alt="Second slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="https://farm5.static.flickr.com/4431/35744214983_91f49a372a_b.jpg" alt="Third slide">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<br/>
<div class="container">
    <h1 class="display-4">Выполнение заданий</h1>
    <h3 class="my-5">Лабораторная работа №1</h3>
    <div class="container-fluid border rounded">
        <br/>
        <h5>7)</h5>
        <div class="border-bottom">
            <h6>i. создать статичный и адаптивный (fluid) контейнеры, понять разницу в их
                отображении при изменении размеров окна браузера</h6>
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <div class="container border" style="background-color: var(--teal)">container</div>
                    </div>
                    <div class="col-6">
                        <div class="container-fluid border" style="background-color: var(--cyan)">container-fluid</div>
                    </div>
                </div>
            </div>
            <br/>
        </div>
        <br/>
        <div class="border-bottom">
            <h6>ii. создать строки с различным количеством колонок, попробовать явное и
                неявное (auto-layout) задание ширины колонок. Понять принцип именования
                классов колонок различной ширины. Создать несколько строк с колонками
                одинаковой ширины с помощью класса .w-100</h6>
            <div class="container">
                <div class="row">
                    <div class="col border">col</div>
                    <div class="col border">col</div>
                    <div class="col border">col</div>
                    <div class="col border">col</div>
                    <div class="col border">col</div>
                    <div class="col border">col</div>
                </div>
                <br/>
                <div class="row">
                    <div class="col-3 border">col-3</div>
                    <div class="col-3 border">col-3</div>
                    <div class="col-3 border">col-3</div>
                    <div class="col-3 border">col-3</div>
                </div>
                <br/>
                <div class="row">
                    <div class="col-4 border">col-4</div>
                    <div class="col-4 border">col-4</div>
                    <div class="col-4 border">col-4</div>
                </div>
            </div>
            <br/>
        </div>
        <br/>
        <div class="border-bottom">
            <h6>iii. понять принципы адаптивной вёрстки с помощью классов колонок,
                предназначенных для различных размеров экранов. Создать разметку,
                количество колонок которой меняется в зависимости от размера экрана.
                Использовать классы visible-xx-yy и hidden-xx-yy для отображения и скрытия
                колонок при различных размерах экрана. Проверить отображение страницы
                на экранах мобильных устройств в режиме эмуляции с помощью Google
                Developer Tools</h6>
            <div class="container">
                <div class="row">
                    <div class="border col-md-2 col-sm-4">col-md-2 col-sm-4</div>
                    <div class="border col-md-2 col-sm-4">col-md-2 col-sm-4</div>
                    <div class="border col-md-2 col-sm-4">col-md-2 col-sm-4</div>
                    <div class="border col-md-2 col-sm-4 d-sm-none d-md-block">col-md-2 col-sm-4 d-sm-none d-md-block (исчезнут на sm-экране)</div>
                    <div class="border col-md-2 col-sm-4 d-sm-none d-md-block">col-md-2 col-sm-4 d-sm-none d-md-block (исчезнут на sm-экране)</div>
                    <div class="border col-md-2 col-sm-4 d-sm-none d-md-block">col-md-2 col-sm-4 d-sm-none d-md-block (исчезнут на sm-экране)</div>
                </div>
            </div>
            <br/>
        </div>
        <br/>
        <div class="border-bottom">
            <h6>iv. использовать классы для вертикального и горизонтального выравнивания колонок</h6>
            <div class="container">
                <b>align-items-start justify-content-center:</b>
                <div class="border row align-items-start justify-content-center" style="height: 70px; background-color: var(--cyan)">
                    <div class="border col-3" style="background-color: var(--teal)">
                        One of three columns
                    </div>
                    <div class="border col-3" style="background-color: var(--teal)">
                        One of three columns
                    </div>
                    <div class="border col-3" style="background-color: var(--teal)">
                        One of three columns
                    </div>
                </div>
                <br/>
                <b>align-items-center justify-content-around:</b>
                <div class="border row align-items-center justify-content-around" style="height: 70px; background-color: var(--cyan)">
                    <div class="border col-3" style="background-color: var(--teal)">
                        One of three columns
                    </div>
                    <div class="border col-3" style="background-color: var(--teal)">
                        One of three columns
                    </div>
                    <div class="border col-3" style="background-color: var(--teal)">
                        One of three columns
                    </div>
                </div>
                <br/>
                <b>align-items-end justify-content-between:</b>
                <div class="border row align-items-end justify-content-between" style="height: 70px; background-color: var(--cyan)">
                    <div class="border col-3" style="background-color: var(--teal)">
                        One of three columns
                    </div>
                    <div class="border col-3" style="background-color: var(--teal)">
                        One of three columns
                    </div>
                    <div class="border col-3" style="background-color: var(--teal)">
                        One of three columns
                    </div>
                </div>
            </div>
            <br/>
        </div>
        <br/>
        <div class="border-bottom">
            <h6>v. использовать классы для изменения порядка отображения и для смещения
                колонок</h6>
            <div class="container">
                <div class="row">
                    <div class="border col-3 order-2">1st element, 3rd order</div>
                    <div class="border col-3 order-1">2nd element, 1st order</div>
                    <div class="border col-3 order-4">3rd element, 4th order</div>
                    <div class="border col-3 order-2">4th element, 2th order</div>
                </div>
            </div>
            <br/>
        </div>
        <br/>
        <div>
            <h6>vi. создать многоуровневую вёрстку (внутри колонки создать строки с колонками)</h6>
            <div class="container">
                <div class="row">
                    <div class="col-6 border" style="background-color: var(--cyan)">
                        <div class="container">
                            <div class="row">
                                <div class="col-4 border" style="background-color: var(--teal)">col-4 inside col-6</div>
                                <div class="col-4 border" style="background-color: var(--teal)">col-4 inside col-6</div>
                                <div class="col-4 border" style="background-color: var(--teal)">col-4 inside col-6</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 border" style="background-color: var(--cyan)">
                        <div class="container">
                            <div class="row">
                                <div class="col-3 border" style="background-color: var(--teal)">col-3 inside col-6</div>
                                <div class="col-3 border" style="background-color: var(--teal)">col-3 inside col-6</div>
                                <div class="col-3 border" style="background-color: var(--teal)">col-3 inside col-6</div>
                                <div class="col-3 border" style="background-color: var(--teal)">col-3 inside col-6</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br/>
        </div>
    </div>
    <br/>
    <div class="container-fluid border rounded">
        <br/>
        <h5>8)</h5>
        <div class="border-bottom">
            <h6>i. создать панель навигации с помощью компонента NavBar. Добавить на панель
                пункты, выпадающие списки, элементы форм. Адаптировать NavBar для
                корректного отображения на маленьких экранах</h6>
            <b>Уже встроено в сайт</b>
        </div>
        <br/>
        <div class="border-bottom">
            <h6>ii. создать блоки, оформленные с помощью компонента Card</h6>
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="https://cdn.shopify.com/s/files/1/0014/1962/products/product_annoyingdog_polo_designview_1024x1024.jpg?v=1470676854" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Заголовок карточки</h5>
                    <p class="card-text">Просто длинное (я бы даже сказал, что невероятно длинное) описание карточки</p>
                    <a href="/main" class="btn btn-primary">
                        <li class="far fa-grin-alt"></li>
                        Просто кнопка
                    </a>
                </div>
            </div>
            <br/>
        </div>
        <br/>
        <div class="border-bottom">
            <h6>iii. добавить компонент Carousel</h6>
            <b>Уже встроено в сайт</b>
            <br/>
        </div>
        <br/>
        <div class="border-bottom">
            <h6>iv. добавить компоненты Collapse и Accordion для отображения сжимающихся
                блоков</h6>
            <p>
                <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                    <li class="far fa-grin-beam-sweat"></li>
                    Поскакали
                </button>
            </p>
            <div class="collapse" id="collapseExample">
                <div class="card card-body">
                    Тыгыдык тыгыдык тыгыдык тыгыдык тыгыдык тыгыдык тыгыдык тыгыдык тыгыдык тыгыдык тыгыдык тыгыдык
                    тыгыдык тыгыдык тыгыдык тыгыдык тыгыдык тыгыдык тыгыдык тыгыдык тыгыдык тыгыдык тыгыдык тыгыдык
                    тыгыдык тыгыдык тыгыдык тыгыдык тыгыдык тыгыдык тыгыдык тыгыдык тыгыдык тыгыдык тыгыдык тыгыдык
                    тыгыдык тыгыдык тыгыдык тыгыдык тыгыдык тыгыдык тыгыдык тыгыдык тыгыдык тыгыдык...
                </div>
            </div>
            <br/>
        </div>
        <br/>
        <div class="border-bottom">
            <h6>v. добавить кнопки с выпадающими списками (Dropdowns)</h6>
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Не нажимай!
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="/main">Ну..</a>
                    <a class="dropdown-item" href="/main">и..</a>
                    <a class="dropdown-item" href="/main">зачем..</a>
                    <a class="dropdown-item" href="/main">ты..</a>
                    <a class="dropdown-item" href="/main">это..</a>
                    <a class="dropdown-item" href="/main">сделал?</a>
                </div>
            </div>
            <br/>
        </div>
        <br/>
        <div class="border-bottom">
            <h6>vi. использовать вкладки (tabs, pills из раздела Navs)</h6>
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" href="/main">Домой</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/addtask">Создать задачу</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/notifications">Уведомления</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="/edittask" tabindex="-1" aria-disabled="true">Редактировать задачу</a>
                </li>
            </ul>
            <br/>
            <ul class="nav nav-pills">
                <li class="nav-item">
                    <a class="nav-link active" href="/main">Домой</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/addtask">Создать задачу</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/notifications">Уведомления</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="/edittask" tabindex="-1" aria-disabled="true">Редактировать задачу</a>
                </li>
            </ul>
            <br/>
        </div>
        <br/>
        <div class="border-bottom">
            <h6>vii. добавить списки элементов с помощью List group</h6>
            <div class="list-group">
                <a href="/main" class="list-group-item list-group-item-action active">Домой</a>
                <a href="/addtask" class="list-group-item list-group-item-action">Создать задачу</a>
                <a href="/notifications" class="list-group-item list-group-item-action">Уведомления</a>
            </div>
            <br/>
        </div>
        <br/>
        <div class="border-bottom">
            <h6>viii. использовать всплывающие диалоговые окна (modals)</h6>
            <b>Уже встроено в сайт (при создании задачи, для подтверждения действия)</b>
            <br/>
        </div>
        <br/>
        <div class="border-bottom">
            <h6>ix. использовать всплывающие подсказки (tooltip, popover)</h6>
            <div class="container">
                <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Это кнопка Клик (tooltip)">
                    <i class="far fa-smile"></i>
                    Клик
                </button>
                <button type="button" class="btn btn-secondary" data-container="body" data-toggle="popover" data-placement="bottom" data-content="А это кнопка Клак (popover)">
                    <i class="far fa-smile-wink"></i>
                    Клак
                </button>

            </div>
            <br/>
        </div>
        <br/>
        <div class="border-bottom">
            <h6>x. создать разнообразные формы: текстовые поля, кнопки, флажки, списки и т.п.
                Использовать группы (Input groups) для создания составных элементов</h6>
            <b>*было лень заполнять...*</b>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">@</span>
                </div>
                <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
            </div>

            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <span class="input-group-text" id="basic-addon2">@example.com</span>
                </div>
            </div>

            <label for="basic-url">Your vanity URL</label>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
                </div>
                <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">$</span>
                </div>
                <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                <div class="input-group-append">
                    <span class="input-group-text">.00</span>
                </div>
            </div>

            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">With textarea</span>
                </div>
                <textarea class="form-control" aria-label="With textarea"></textarea>
            </div>
            <br/>
        </div>
        <br/>
        <div class="border-bottom">
            <h6>xi. добавить значки (Extend – Icons): в кнопках, в пунктах меню, выпадающих
                списках и т. п.</h6>
            <b>Уже вставил...</b>
            <br/>
        </div>
        <br/>
    </div>
    <br/>
    <div class="container-fluid border rounded">
        <br/>
        <h5>9) Проверить HTML-код созданных страниц валидатором W3C
            (https://validator.w3.org/), сделать снимок экрана с результатами проверки,
            устранить имеющиеся ошибки.</h5>
        <div class="container">
            <img src="/lib/resources/images/validator.png" class="img-fluid img-thumbnail" alt="Responsive image">
        </div>
        <br/>
    </div>
</div>