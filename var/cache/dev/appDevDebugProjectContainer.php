<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container3d74s1g\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container3d74s1g/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/Container3d74s1g.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\Container3d74s1g\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \Container3d74s1g\appDevDebugProjectContainer(array(
    'container.build_hash' => '3d74s1g',
    'container.build_id' => '37e946a7',
    'container.build_time' => 1518426287,
));
