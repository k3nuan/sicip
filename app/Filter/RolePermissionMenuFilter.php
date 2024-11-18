<?php

namespace App\Filter;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use TakiElias\Tablar\Menu\Filters\FilterInterface;

class RolePermissionMenuFilter implements FilterInterface
{
    public function transform($item)
    {
        return $this->isVisible($item) ? $item['header'] ?? $item : false;
    }

    protected function isVisible($item)
    {
        #$user = Auth::user();
        if (!$user = Auth::user()) {
            return redirect()->route('login');
        }

        if ($user->hasRole('Super-Admin')) {
            return true;
        }
            
        if (isset($item['hasAnyRole']) && !$user->hasRole($item['hasAnyRole'], null, true)) {
            return false;
        }

        if (isset($item['hasRole']) && !$user->hasRole($item['hasRole'])) {
            return false;
        }

        if (isset($item['hasAnyPermission']) && !$user->isAbleTo($item['hasAnyPermission'])) {
            return false;
        }

        return true;
    }
}