<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerGbpDqgp\srcApp_KernelTestDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerGbpDqgp/srcApp_KernelTestDebugContainer.php') {
    touch(__DIR__.'/ContainerGbpDqgp.legacy');

    return;
}

if (!\class_exists(srcApp_KernelTestDebugContainer::class, false)) {
    \class_alias(\ContainerGbpDqgp\srcApp_KernelTestDebugContainer::class, srcApp_KernelTestDebugContainer::class, false);
}

return new \ContainerGbpDqgp\srcApp_KernelTestDebugContainer([
    'container.build_hash' => 'GbpDqgp',
    'container.build_id' => '85a65c0f',
    'container.build_time' => 1549535770,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerGbpDqgp');
