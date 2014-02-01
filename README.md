Pico Description Plugin
===============================

By using this plugin, will be available from the theme page.description.

## Installation

`pico_description.php` in `pico/plugins`;

## Example

your_theme/index.html
```html
{% for page in pages %}
  {% if page.title %}
  <div class="post">
    <h3><a href="{{ page.url }}">{{ page.title }}</a></h3>
    <p class="meta">{{ page.date_formatted }}</p>
    <p class="description">{{ page.description }}</p> <!-- Use the description replaced the excerpt. -->
  </div>
  {% endif %}
{% endfor %}
```

## License

MIT.
