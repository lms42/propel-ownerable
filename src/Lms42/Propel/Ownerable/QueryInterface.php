<?php

namespace Lms42\Propel\Ownerable;

interface QueryInterface
{

    /**
     * Filter by owner column
     * @param integer $user_id
     * @return self
     */
    function filterByOwner($user_id);
    
}
