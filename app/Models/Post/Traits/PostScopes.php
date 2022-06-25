<?php

namespace App\Models\Post\Traits;

trait PostScopes
{
	public function scopeDelete($query)
	{
		return $query->whereNotNull('deleted_at');
	}
}