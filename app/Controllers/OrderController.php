<?php

namespace Controllers;

interface OrderController
{
    /**
     * Возвращает информацию по заказам пользователя
     *
     * @param $request
     * @return mixed
     */
    public function index($request);

    /**
     * Возвращает информацию по конкретному заказу пользователя
     *
     * @param $request
     * @param $id
     * @return mixed
     */
    public function view($request, $id);

    /**
     * Создает заказ из позиций в корзине и редиректит на просмотр созданного заказа
     *
     * @param $request
     * @return mixed
     */
    public function store($request);
}