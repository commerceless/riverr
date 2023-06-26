<div x-data="wireui_color_picker({
    colorNameAsValue: <?= json_encode(filter_var($colorNameAsValue, FILTER_VALIDATE_BOOLEAN)); ?>,

    <?php if($attributes->wire('model')->value()): ?>
        wireModifiers: <?php
    if (is_object($attributes->wireModifiers()) || is_array($attributes->wireModifiers())) {
        echo "JSON.parse(atob('".base64_encode(json_encode($attributes->wireModifiers()))."'))";
    } elseif (is_string($attributes->wireModifiers())) {
        echo "'".str_replace("'", "\'", $attributes->wireModifiers())."'";
    } else {
        echo json_encode($attributes->wireModifiers());
    }
?>,
        wireModel: <?php if ((object) ($attributes->wire('model')) instanceof \Livewire\WireDirective) : ?>window.Livewire.find('<?php echo e($_instance->id); ?>').entangle('<?php echo e($attributes->wire('model')->value()); ?>')<?php echo e($attributes->wire('model')->hasModifier('defer') ? '.defer' : ''); ?><?php else : ?>window.Livewire.find('<?php echo e($_instance->id); ?>').entangle('<?php echo e($attributes->wire('model')); ?>')<?php endif; ?>,
    <?php endif; ?>

    <?php if($colors): ?>
        colors: <?php
    if (is_object($getColors()) || is_array($getColors())) {
        echo "JSON.parse(atob('".base64_encode(json_encode($getColors()))."'))";
    } elseif (is_string($getColors())) {
        echo "'".str_replace("'", "\'", $getColors())."'";
    } else {
        echo json_encode($getColors());
    }
?>
    <?php endif; ?>
})" <?php echo e($attributes->only(['class', 'wire:key'])->class('relative')); ?>>
    <?php if (isset($component)) { $__componentOriginal3bf0a20793be3eca9a779778cf74145887b021b9 = $component; } ?>
<?php $component = Illuminate\View\DynamicComponent::resolve(['component' => WireUi::component('input')] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dynamic-component'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\DynamicComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['attributes' => $attributes->except(['class', 'wire:key'])->whereDoesntStartWith('wire:model'),'x-model' => ''.e($colorNameAsValue ? 'selected.name' : 'selected.value').'','x-bind:class' => '{ \'pl-8\': selected.value }','x-on:input' => 'setColor($event.target.value)','x-ref' => 'input','label' => $label,'prefix' => null,'icon' => null]); ?>
         <?php $__env->slot('prefix', null, []); ?> 
            <template x-if="selected.value">
                <div
                    class="w-4 h-4 rounded shadow border"
                    :style="{ 'background-color': selected.value }"
                ></div>
            </template>
         <?php $__env->endSlot(); ?>

         <?php $__env->slot('append', null, []); ?> 
            <div class="absolute inset-y-0 right-0 flex items-center p-0.5">
                <?php if (isset($component)) { $__componentOriginal3bf0a20793be3eca9a779778cf74145887b021b9 = $component; } ?>
<?php $component = Illuminate\View\DynamicComponent::resolve(['component' => WireUi::component('button')] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dynamic-component'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\DynamicComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'h-full rounded-r-md','primary' => true,'flat' => true,'squared' => true,'x-on:click' => 'toggle','trigger' => true,'disabled' => $disabled]); ?>
                    <?php if (isset($component)) { $__componentOriginal3bf0a20793be3eca9a779778cf74145887b021b9 = $component; } ?>
<?php $component = Illuminate\View\DynamicComponent::resolve(['component' => WireUi::component('icon')] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dynamic-component'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\DynamicComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => '
                            w-4 h-4 group-focus:text-primary-700 text-gray-400 dark:text-gray-600
                            dark:group-hover:text-gray-500 dark:group-focus:text-primary-500
                        ','name' => $rightIcon]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3bf0a20793be3eca9a779778cf74145887b021b9)): ?>
<?php $component = $__componentOriginal3bf0a20793be3eca9a779778cf74145887b021b9; ?>
<?php unset($__componentOriginal3bf0a20793be3eca9a779778cf74145887b021b9); ?>
<?php endif; ?>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3bf0a20793be3eca9a779778cf74145887b021b9)): ?>
<?php $component = $__componentOriginal3bf0a20793be3eca9a779778cf74145887b021b9; ?>
<?php unset($__componentOriginal3bf0a20793be3eca9a779778cf74145887b021b9); ?>
<?php endif; ?>
            </div>
         <?php $__env->endSlot(); ?>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3bf0a20793be3eca9a779778cf74145887b021b9)): ?>
<?php $component = $__componentOriginal3bf0a20793be3eca9a779778cf74145887b021b9; ?>
<?php unset($__componentOriginal3bf0a20793be3eca9a779778cf74145887b021b9); ?>
<?php endif; ?>

    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'wireui::components.parts.popover','data' => ['margin' => (bool) $label,'class' => '
            max-h-56 py-3 px-2 sm:py-2 sm:px-1 sm:w-72 sm:rounded-xl
            overflow-y-auto soft-scrollbar border border-secondary-200
        ']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('wireui::parts.popover'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['margin' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute((bool) $label),'class' => '
            max-h-56 py-3 px-2 sm:py-2 sm:px-1 sm:w-72 sm:rounded-xl
            overflow-y-auto soft-scrollbar border border-secondary-200
        ']); ?>
        <div class="flex flex-wrap items-center justify-center gap-1 sm:gap-0.5 max-w-[18rem] mx-auto">
            <span class="sr-only">dropdown-open</span>

            <template x-for="(color, index) in colors" :key="index">
                <button class="
                        w-6 h-6 rounded shadow-lg border hover:scale-125 transition-all ease-in-out duration-100 cursor-pointer
                        hover:border-gray-400 focus:outline-none focus:ring-2 focus:ring-primary-600 sdark:focus:ring-gray-400
                        dark:border-0 dark:hover:ring-2 dark:hover:ring-gray-400
                    "
                    :style="{ 'background-color': color.value }"
                    x-on:click="select(color)"
                    :title="color.name"
                    type="button">
                </button>
            </template>
        </div>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
</div>
<?php /**PATH /var/www/html/riverr/resources/views/vendor/wireui/components/color-picker.blade.php ENDPATH**/ ?>