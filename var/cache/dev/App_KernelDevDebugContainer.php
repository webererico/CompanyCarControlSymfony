<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerNkjNxl9\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerNkjNxl9/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerNkjNxl9.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerNkjNxl9\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerNkjNxl9\App_KernelDevDebugContainer([
    'container.build_hash' => 'NkjNxl9',
    'container.build_id' => '2d7bddbb',
    'container.build_time' => 1601410837,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerNkjNxl9');
