<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerLhms9km\srcDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerLhms9km/srcDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerLhms9km.legacy');

    return;
}

if (!\class_exists(srcDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerLhms9km\srcDevDebugProjectContainer::class, srcDevDebugProjectContainer::class, false);
}

return new \ContainerLhms9km\srcDevDebugProjectContainer(array(
    'container.build_hash' => 'Lhms9km',
    'container.build_id' => '895993a6',
    'container.build_time' => 1540308568,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerLhms9km');
