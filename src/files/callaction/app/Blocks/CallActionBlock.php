<?php

namespace App\Blocks;

use App\Blocks\GutenburgBlock;

class CallActionBlock extends GutenburgBlock
{
    public $name = 'vc_call_action';
    public $title = 'VC Call Action';
    public $description = 'VC Call Action Gutenburg Block';
    public $category = 'formatting';
    public $icon = 'images-alt2';
    public $align = 'full';

    public function __construct()
    {
        add_action('acf/init', [$this, 'register_block']);
    }

    public function register_block()
    {
        if (function_exists('acf_register_block_type')) {
            acf_register_block_type([
                'name' => $this->name,
                'title' => $this->title,
                'description' => $this->description,
                'render_callback' => [$this,'render'],
                'category' => $this->category,
                'icon' => $this->icon,
                'align' => $this->align,
            ]);
        }
    }

    public function render($block)
    {
        return view('blocks/_vc2_call_action_block');
    }
}

