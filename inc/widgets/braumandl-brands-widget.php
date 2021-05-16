<?php 

class Braumandl_Text_Widget extends WP_Widget{
    public function __construct()
    {
        parent::__construct(
            'braumandl_text_widget',
            'Braumandl: Section Description/Title',
            [
                'classname' => 'lol',
                'description' => 'You can pass this widget to sidebars of this theme to change content of different sections on this theme'
            ]
        );
    }

    public function widget($args, $instance)
    {
        extract($args);

        $text = esc_html($instance['text']);

        echo $text;
    }

    public function form($instance)
    {
        $defaults = [
            'text' => 'Title/content of section...',
        ];

        $instance = wp_parse_args($instance, $defaults);

        $text = $instance['text'];

        ;?>
            <div>
                <label for="brand-text">Description:</label>
                <div>
                    <textarea
                        name="<?php echo $this->get_field_name('text');?>"
                        style="display:block; width:100%; height:250px; margin:10px 0; padding:5px;"
                    >
                        <?php echo esc_attr($text) ;?>
                    </textarea>
                </div>
            </div>
        <?php
    }

    public function update($new_instance, $old_instance)
    {
        $instance = [];
        $instance['text'] = strip_tags($new_instance['text']);

        return $instance;
    }
}