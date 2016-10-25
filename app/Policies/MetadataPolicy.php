<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;

class MetadataPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function destroy(User $user, Metadata $metadata){
        return $user->id === $metadata->id;
    }
}
