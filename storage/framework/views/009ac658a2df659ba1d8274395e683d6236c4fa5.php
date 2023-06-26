<?php if($hasErrors($errors)): ?>
    <div <?php echo e($attributes->merge(['class' => 'rounded-lg bg-negative-50 dark:bg-secondary-800 dark:border dark:border-negative-600 p-4'])); ?>>
        <div class="flex items-center pb-3 border-b-2 border-negative-200 dark:border-negative-700">
            <?php if (isset($component)) { $__componentOriginal3bf0a20793be3eca9a779778cf74145887b021b9 = $component; } ?>
<?php $component = Illuminate\View\DynamicComponent::resolve(['component' => WireUi::component('icon')] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dynamic-component'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\DynamicComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-5 h-5 text-negative-400 dark:text-negative-600 shrink-0 mr-3','name' => 'exclamation-circle']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3bf0a20793be3eca9a779778cf74145887b021b9)): ?>
<?php $component = $__componentOriginal3bf0a20793be3eca9a779778cf74145887b021b9; ?>
<?php unset($__componentOriginal3bf0a20793be3eca9a779778cf74145887b021b9); ?>
<?php endif; ?>

            <span class="text-sm font-semibold text-negative-800 dark:text-negative-600">
                <?php echo e(str_replace('{errors}', $count($errors), $title)); ?>

            </span>
        </div>

        <div class="ml-5 pl-1 mt-2">
            <ul class="list-disc space-y-1 text-sm text-negative-700 dark:text-negative-600">
                <?php $__currentLoopData = $getErrorMessages($errors); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e(head($message)); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    </div>
<?php else: ?>
    <div class="hidden"></div>
<?php endif; ?>

<?php /**PATH /var/www/html/riverr/vendor/wireui/wireui/resources/views/components/errors.blade.php ENDPATH**/ ?>