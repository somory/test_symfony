<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerN9RkXCU\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerN9RkXCU/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerN9RkXCU.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerN9RkXCU\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerN9RkXCU\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'N9RkXCU',
    'container.build_id' => 'bc50e0ff',
    'container.build_time' => 1549535633,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerN9RkXCU');
