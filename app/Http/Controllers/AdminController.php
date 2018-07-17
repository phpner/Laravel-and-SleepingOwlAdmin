<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use AdminColumn;
use AdminDisplay;
use AdminForm;
use AdminFormElement;


class AdminController extends Controller
{
    public function index()
    {
	    $display = AdminDisplay::table()->setHtmlAttribute('class', 'table-primary');
	    $display->setColumns([
		    AdminColumn::custom('Опубликовано', function ($instance) {
			    return $instance->published ? '<i class="fa fa-check"></i>' : '<i class="fa fa-minus"></i>';
		    })->setWidth('50px')->setHtmlAttribute('class', 'text-center'),
	    ]);
        return $display;
//	    return AdminSection::view($count , 'Все страницы');
    }
}
