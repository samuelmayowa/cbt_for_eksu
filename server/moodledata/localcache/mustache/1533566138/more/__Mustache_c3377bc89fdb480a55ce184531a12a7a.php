<?php

class __Mustache_c3377bc89fdb480a55ce184531a12a7a extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="m-t-2" data-region="random-question-preview-container" style="position:relative">
';
        $buffer .= $indent . '    <div data-region="question-count-container"></div>
';
        $buffer .= $indent . '    <div data-region="question-list-container"></div>
';
        $buffer .= $indent . '    ';
        if ($parent = $this->mustache->loadPartial('core/overlay_loading')) {
            $context->pushBlockContext(array(
                'hiddenclass' => array($this, 'blockD41d8cd98f00b204e9800998ecf8427e'),
            ));
            $buffer .= $parent->renderInternal($context, $indent);
            $context->popBlockContext();
        }
        $buffer .= '
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }


    public function blockD41d8cd98f00b204e9800998ecf8427e($context)
    {
        $indent = $buffer = '';
    
        return $buffer;
    }
}
