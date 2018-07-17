<?php

namespace App\Http\Sections;

use AdminColumn;
use AdminDisplay;
use AdminForm;
use AdminFormElement;
use http\Env\Request;
use SleepingOwl\Admin\Contracts\Display\DisplayInterface;
use SleepingOwl\Admin\Contracts\Form\FormInterface;
use SleepingOwl\Admin\Contracts\Initializable;
use SleepingOwl\Admin\Contracts\Validable;
use SleepingOwl\Admin\Navigation\Badge;
use SleepingOwl\Admin\Section;

/**
 * Class Pages
 *
 * @property \App\Page $model
 *
 * @see http://sleepingowladmin.ru/docs/model_configuration_section
 */
class Pages extends Section
{
    /**
     * @see http://sleepingowladmin.ru/docs/model_configuration#ограничение-прав-доступа
     *
     * @var bool
     */
    protected $checkAccess = false;

    /**
     * @var string
     */
    protected $title = 'Страницы';

    /**
     * @var string
     */
    protected $alias;
    
     public function initialize()
    {
        $this->addToNavigation()->setIcon('fa fa-sitemap');
    }

    /**
     * @return DisplayInterface
     */
    public function onDisplay()
    {
        //return AdminDisplay::tree()->setValue('title');
	    $display = AdminDisplay::table()->setHtmlAttribute('class', 'table-primary');
	    $display->setColumns([
		    AdminColumn::image('image', 'Фото'),
		    AdminColumn::text('title','Название'),
		    AdminColumn::text('created_at','Добавлено'),
		    AdminColumn::custom('Опубликовано', function ($instance) {
			    return $instance->published ? '<i class="fa fa-check"></i>' : '<i class="fa fa-minus"></i>';
		    })->setWidth('50px')->setHtmlAttribute('class', 'text-center'),

	    ]);

	    return $display;
    }

    /**
     * @param int $id
     *
     * @return FormInterface
     */
    public function onEdit($id)
    {
        return AdminForm::form()->setElements([
            AdminFormElement::text('title', 'Название страницы')->addValidationRule('required', 'Поле обязательно для заполнения'),
            AdminFormElement::checkbox('published', 'Опубликовать?'),
            AdminFormElement::image('image', 'Фото')->addValidationRule('required', 'Поле обязательно для заполнения'),
            AdminFormElement::ckeditor('text', 'Описание страницы')->addValidationRule('required', 'Поле обязательно для заполнения')
        ]);
    }

    /**
     * @return FormInterface
     */
    public function onCreate()
    {
        return $this->onEdit(null);
    }

    /**
     * @return void
     */
    public function onDelete($id)
    {
        // remove if unused
    }

    /**
     * @return void
     */
    public function onRestore($id)
    {
        // remove if unused
    }
}
