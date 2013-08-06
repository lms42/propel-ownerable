<?php

namespace Lms42\Propel\Ownerable;

class AbstractQuery implements QueryInterface
{
    
    /**
     * {@inheritdoc}
     */
    public function filterByOwner($user_id)
    {
        return $this
            ->filterByUserId($user_id)
        ;
    }
    
}
