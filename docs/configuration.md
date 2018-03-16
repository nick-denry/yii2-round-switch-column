Configuration
---
### 1. Module config

Counfigure module in your app config as follow:
```php
'modules' => [
    'roundSwitch' => [
        'class' => 'nickdenry\grid\toggle\Module',
    ],
]
```

### 2. Gridvew config

Add following line to your GridView view
```php
use nickdenry\grid\toggle\components\RoundSwitchColumn;
```

and setup your toggle attribute at GridView columns section

```php
[
    'class' => RoundSwitchColumn::class,
    'attribute' => 'active',
    /* other column options */
    'headerOptions' => ['width' => 150],
],
```

### 3. Controller config

Add toggleAction to your Controller

```php
use nickdenry\grid\toggle\actions\ToggleAction;

public function actions()
{
   return [
        'toggle' => [
            'class' => ToggleAction::class,
            'modelClass' => 'common\models\Model', // Your model class
        ],
    ];
}
```
