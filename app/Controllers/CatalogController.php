<?php

namespace Controllers;

interface CatalogController
{
    /**
     * Возвращает информацию о каталоге
     *
     * @param $request
     * @return mixed
     */
    public function index($request);

    /**
     * Возвращает результаты поиска
     *
     * @param $request
     * @return mixed
     */
    public function search($request);

    /**
     * Возвращает информацию о товаре
     *
     * @param $request
     * @param $id
     * @return mixed
     */
    public function view($request, $id);
}