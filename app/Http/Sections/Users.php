<?php

namespace App\Http\Sections;
use AdminColumn;
use AdminDisplay;
use AdminForm;
use AdminFormElement;
use App\Role;
use SleepingOwl\Admin\Contracts\Display\DisplayInterface;
use SleepingOwl\Admin\Contracts\Form\FormInterface;
use SleepingOwl\Admin\Section;

/**
 * Class Users
 *
 * @property \App\User $model
 *
 * @see http://sleepingowladmin.ru/docs/model_configuration_section
 */
class Users extends Section
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
    protected $title = 'Пользователи';

    /**
     * @var string
     */
    protected $alias;

	/**
	 * Initialize class.
	 */
	public function initialize()
	{
		// Добавление пункта меню и счетчика кол-ва записей в разделе
		$this->addToNavigation($priority = 500, 'gjkji');

		$this->creating(function($config, \Illuminate\Database\Eloquent\Model $model) {

		});
	}



	/**
	 * @return string
	 */
	public function getIcon()
	{
		return 'fa fa-group';
	}

    /**
     * @return DisplayInterface
     */
    public function onDisplay()
    {
	    return AdminDisplay::table()
		    ->with('roles')
		    ->setHtmlAttribute('class', 'table-primary')
		    ->setColumns([
			    AdminColumn::link('name', 'Имя пользователя'),
			    AdminColumn::email('email', 'Email')->setWidth('150px'),
			    AdminColumn::lists('roles.label', 'Роли')->setWidth('200px'),
		    ])->paginate(20);
    }

    /**
     * @param int $id
     *
     * @return FormInterface
     */
    public function onEdit($id)
    {
	    return AdminForm::panel()->addBody([
		    AdminFormElement::text('name', 'Имя пользователя')->addValidationRule('required'),
		    AdminFormElement::password('password', 'Пароль')
			    ->hashWithBcrypt()
			    ->setValidationRules('required|min:6')
			    ->addValidationMessage('required', 'Поле обязательно для заполнения')
			    ->addValidationMessage('min:6', 'Не меньше 6 символов!'),
		    AdminFormElement::text('email', 'E-mail')->setValidationRules('required|email')->addValidationMessage('required', 'Поле обязательно для заполнения'),
		    AdminFormElement::image('avatar','avatar')->setDefaultValue('images/blank.png'),
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
