<?php

namespace App\Policies;

use App\User;

use Illuminate\Auth\Access\HandlesAuthorization;

class UsersSectionModelPolicy
{

	use HandlesAuthorization;

	/**
	 * @param User   $user
	 * @param string $ability
	 *
	 * @return bool
	 */
	public function before(User $user)
	{

	}

	/**
	 * @param User $user
	 * @param User $item
	 *
	 * @return bool
	 */
	public function display(User $user)
	{
		return true;
	}

	/**
	 * @param User $user
	 * @param User $item
	 *
	 * @return bool
	 */
	public function create(User $user)
	{
		return true;
	}

	/**
	 * @param User $user
	 * @param User $item
	 *
	 * @return bool
	 */
	public function edit(User $user)
	{
		return false;
	}

	/**
	 * @param User $user
	 * @param User $item
	 *
	 * @return bool
	 */
	public function delete(User $user)
	{
		return false;
	}

	/**
	 * @param User $user
	 * @param User $item
	 *
	 * @return bool
	 */
	public function restore(User $user)
	{
		return false;
	}
}