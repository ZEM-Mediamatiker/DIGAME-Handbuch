<?php
namespace Grav\Common\Page\Medium;

use Grav\Common\GravTrait;

class Link implements RenderableInterface
{
    use GravTrait;
    use ParsedownHtmlTrait;

    /**
     * @var array
     */
    protected $attributes = [];
    protected $source;

    /**
     * Construct.
     * @param array  $attributes
     * @param Medium $medium
     */
    public function __construct(array $attributes, Medium $medium)
    {
        $this->attributes = $attributes;
        $this->source = $medium->reset()->thumbnail('auto')->display('thumbnail');
        $this->source->linked = true;
    }

    /**
     * Get an element (is array) that can be rendered by the Parsedown engine
     *
     * @param  string  $title
     * @param  string  $alt
     * @param  string  $class
     * @param  boolean $reset
     * @return array
     */
    public function parsedownElement($title = null, $alt = null, $class = null, $reset = true)
    {
        $innerElement = $this->source->parsedownElement($title, $alt, $class, $reset);

        return [
            'name' => 'a',
            'attributes' => $this->attributes,
            'handler' => is_string($innerElement) ? 'line' : 'element',
            'text' => $innerElement
        ];
    }

    /**
     * Forward the call to the source element
     *
     * @param string $method
     * @param mixed $args
     * @return $this|mixed
     */
    public function __call($method, $args)
    {
        $this->source = call_user_func_array(array($this->source, $method), $args);

        // Don't start nesting links, if user has multiple link calls in his
        // actions, we will drop the previous links.
        return $this->source instanceof Link ? $this->source : $this;
    }
}
