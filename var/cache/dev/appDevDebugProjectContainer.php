<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerAtvsnlz\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerAtvsnlz/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerAtvsnlz.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerAtvsnlz\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerAtvsnlz\appDevDebugProjectContainer(array(
    'container.build_hash' => 'Atvsnlz',
    'container.build_id' => '1c289133',
    'container.build_time' => 1519127603,
));
