# Livewire Closure Synthesizer

This simple package adds a custom closure synthesizer for Laravel Livewire.

This essentially allows you to pass closures into livewire components and persist them as
public properties across requests.

Closures are serialized and encrypted which ensures that a curious user does not know what the closure contains.

***
## Installation

All you have to do is just run the following command:

```bash
composer require dvarilek/livewire-closure-synthesizer
```
***
## Example Usage

In blade: 
```bladehtml
<livewire:component 
    :modifyComponentUsing="$modifyComponentUsing"
/>
```

In Livewire component

```php
class Component extends \Livewire\Component
{
    
    public ?Closure $modifyComponentUsing = null;
    
    // ... 
}
```

***

## Testing

```bash
composer test && composer stan
```
***

## Changelog
Please refer to [Package Releases](https://github.com/dvarilek/table-select/releases) for more information about changes.

***
## License
This package is under the MIT License. Please refer to [License File](LICENSE.md) for more information