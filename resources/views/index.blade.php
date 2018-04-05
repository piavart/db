@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-9 ">
            <div class="row content-box pl-3">
                <div class="col-12">
                    <div class="row">
                        <a href="/" class="col status-nav bg-primary text-white">Все заказы</a>
                        <a href="/" class="col status-nav">В работе</a>
                        <a href="/" class="col status-nav">На выдычу</a>
                        <a href="/" class="col status-nav">Завершенные</a>
                        <a href="/" class="col status-nav">Завершенные</a>
                        <a href="/" class="col status-nav">Завершенные</a>
                    </div>
                    <div class="row bg-light p-2  border-green border-top-0">
                        <div class=" col">
                            <form class="form-inline">
                                <input class="form-control mr-sm-2" type="search" placeholder="Номер заказа"
                                       aria-label="Search">
                                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                            </form>

                        </div>
                        <div class="col text-right">
                            <button type="button" class="btn btn-outline-secondary" data-toggle="collapse"
                                    href="#filter" role="button" aria-expanded="false" aria-controls="filter">
                                <i class="fa fa-filter"></i>
                            </button>
                            <button type="button" class="btn btn-outline-secondary">
                                <i class="fa fa-cogs"></i>
                            </button>
                        </div>
                        <div class=" col-12 collapse" id="filter">
                            <form class="mt-3">
                                <div class="form-row">
                                    <div class="form-group col">
                                        <select class="form-control form-control-sm" name="filial" id="filial">
                                            <option value="">Выберите филиал</option>
                                            <option value="1">1-й филиал</option>
                                            <option value="2">2-й филиал</option>
                                            <option value="3">3-й филиал</option>
                                        </select>
                                    </div>
                                    <div class="form-group col">
                                        <select class="form-control form-control-sm" name="filial" id="filial">
                                            <option value="">Выберете приемщика</option>
                                            <option value="1">Иванов</option>
                                            <option value="2">Петров</option>
                                            <option value="3">Сидоров</option>
                                        </select>
                                    </div>
                                    <div class="form-group col">
                                        <select class="form-control form-control-sm" name="filial" id="filial">
                                            <option value="">Выберете инженера</option>
                                            <option value="1">Иванов (10)</option>
                                            <option value="2">Петров (2)</option>
                                            <option value="3">Сидоров</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-1 text-right">
                                        <button type="button" class="btn btn-primary btn-sm">Искать</button>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="row">
                        <div class="table-responsive table-responsive-index border-top-0 border-green">
                        <table class="table table-striped table-sm">
                            <thead>
                            <tr>
                                <th scope="col">№</th>
                                <th scope="col">Дата приема</th>
                                <th scope="col">Устройство</th>
                                <th scope="col">Модель</th>
                                <th scope="col">Неисправность</th>
                                <th scope="col">Клиент</th>
                                <th scope="col">Телефон</th>
                                <th scope="col">Статус</th>
                            </tr>
                            </thead>
                            <tbody>

                            @for($i=1;$i<=40;$i++)
                                <tr>
                                    <th scope="row"><a href="/service/01-{{$i}}">01-{{$i}}</a></th>
                                    <td>19:30 31.12</td>
                                    <td>Телевизор</td>
                                    <td>Lg 233223</td>
                                    <td>Сгорела подсветка</td>
                                    <td>Воробьев А.А.</td>
                                    <td>+7(999)999-99-99</td>
                                    <td><span class="badge badge-pill badge-success">Успех</span></td>
                                </tr>
                            @endfor
                            </tbody>
                        </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="sidebar">
                @include('user._card')
                <div class="card w-100" >
                    <div class="card-body">
                        <h5 class="card-title">Звонки</h5>
                        <div class="table-responsive">
                            <table class="table table-striped table-sm table-calls">
                                <thead>
                                <tr>
                                    <th scope="col"></th>
                                    <th scope="col">Время</th>
                                    <th scope="col">Клиент</th>
                                    <th scope="col">Заказ</th>
                                    <th scope="col">Устройство</th>
                                    <th scope="col"></th>
                                </tr>
                                </thead>
                                <tbody>

                                @for($i=1;$i<=6;$i++)
                                    <tr>
                                        <td class="align-middle">
                                            <a href="tel:+7888888888" class="btn btn-xs btn-success"><i class="fa
                                            fa-phone"></i></a>
                                        </td>
                                        <td>19:30 31.12</td>
                                        <td>Воробьев А.А.</td>
                                        <td><a href="#">10-233</a></td>
                                        <td>Телевизор</td>
                                        <td  class="align-middle"><button class="btn btn-xs btn-secondary"
                                                                          data-toggle="modal" data-target="#call">
                                                <i class="fa fa-pencil"></i></button>
                                        </td>

                                    </tr>
                                @endfor
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!--модалька-->
                    <div class="modal fade" id="call" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                         aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    ...
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
