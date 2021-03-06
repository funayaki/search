<?php
namespace Search\Test\TestApp\Model\Table;

use Cake\ORM\Table;
use Search\Manager;

/**
 * @mixin \Search\Model\Behavior\SearchBehavior
 */
class CommentsTable extends Table
{

    public function initialize(array $config)
    {
        $this->addBehavior('Search.Search');

        $this->searchManager()
            ->value('Comments.foo')
            ->like('Comments.search', ['filterEmpty' => true, 'multiValue' => true])
            ->value('Comments.baz')
            ->value('Comments.group', ['field' => 'Comments.group'])
            ->value('group', ['multiValue' => true])
            ->value('published');
    }
}
