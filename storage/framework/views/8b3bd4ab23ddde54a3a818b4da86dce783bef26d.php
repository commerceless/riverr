<div class="w-full">

    
    <?php if($step === 'overview'): ?>
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.gigs.options.steps.overview', ['gig' => $gig])->html();
} elseif ($_instance->childHasBeenRendered('9M5MYBc')) {
    $componentId = $_instance->getRenderedChildComponentId('9M5MYBc');
    $componentTag = $_instance->getRenderedChildComponentTagName('9M5MYBc');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('9M5MYBc');
} else {
    $response = \Livewire\Livewire::mount('admin.gigs.options.steps.overview', ['gig' => $gig]);
    $html = $response->html();
    $_instance->logRenderedChild('9M5MYBc', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    <?php endif; ?>

    
    <?php if($step === 'pricing'): ?>
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.gigs.options.steps.pricing', ['gig' => $gig])->html();
} elseif ($_instance->childHasBeenRendered('K8TTaST')) {
    $componentId = $_instance->getRenderedChildComponentId('K8TTaST');
    $componentTag = $_instance->getRenderedChildComponentTagName('K8TTaST');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('K8TTaST');
} else {
    $response = \Livewire\Livewire::mount('admin.gigs.options.steps.pricing', ['gig' => $gig]);
    $html = $response->html();
    $_instance->logRenderedChild('K8TTaST', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    <?php endif; ?>

    
    <?php if($step === 'requirements'): ?>
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.gigs.options.steps.requirements', ['gig' => $gig])->html();
} elseif ($_instance->childHasBeenRendered('UTZT2Ny')) {
    $componentId = $_instance->getRenderedChildComponentId('UTZT2Ny');
    $componentTag = $_instance->getRenderedChildComponentTagName('UTZT2Ny');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('UTZT2Ny');
} else {
    $response = \Livewire\Livewire::mount('admin.gigs.options.steps.requirements', ['gig' => $gig]);
    $html = $response->html();
    $_instance->logRenderedChild('UTZT2Ny', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    <?php endif; ?>

    
    <?php if($step === 'gallery'): ?>
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.gigs.options.steps.gallery', ['gig' => $gig])->html();
} elseif ($_instance->childHasBeenRendered('TWu4NRs')) {
    $componentId = $_instance->getRenderedChildComponentId('TWu4NRs');
    $componentTag = $_instance->getRenderedChildComponentTagName('TWu4NRs');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('TWu4NRs');
} else {
    $response = \Livewire\Livewire::mount('admin.gigs.options.steps.gallery', ['gig' => $gig]);
    $html = $response->html();
    $_instance->logRenderedChild('TWu4NRs', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    <?php endif; ?>

</div><?php /**PATH /var/www/html/riverr/resources/views/livewire/admin/gigs/options/edit.blade.php ENDPATH**/ ?>