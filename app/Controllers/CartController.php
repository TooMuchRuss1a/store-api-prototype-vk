<?php

namespace Controllers;

interface CartController
{
    /**
     * Возвращает информацию по корзине
     *
     * @param $request
     * @return mixed
     */
    public function index($request);

    /**
     * Добавляет товар в корзину
     *
     * @param $request
     * @param $id
     * @return mixed
     */
    public function add($request, $id);

    /**
     * Удаляет товар из корзины
     *
     * @param $request
     * @param $id
     * @return mixed
     */
    public function delete($request, $id);
}