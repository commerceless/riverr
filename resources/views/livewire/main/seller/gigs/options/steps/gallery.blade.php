<div class="w-full" x-data="window.HtBWuUxgpMyrQEM" x-init="initialize">

    {{-- Loading --}}
    <div wire:loading>
        <div class="fixed inset-0 flex items-end overflow-hidden justify-center sm:items-center z-50">
            <div class="w-full h-full flex items-center justify-center">
                <div class="app-preloader fixed z-50 grid h-full w-full place-content-center inset-0 bg-secondary-400 bg-opacity-60 transform transition-opacity dialog-backdrop backdrop-blur-sm dark:bg-secondary-700 dark:bg-opacity-60">
                    <div class="app-preloader-inner relative inline-block h-32 w-32"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-12 md:gap-x-6 gap-y-6">
        
        {{-- Success --}}
        @if (session()->has('success'))
            <div class="col-span-12">
                <div class="rounded-md bg-green-100 dark:bg-zinc-700 p-4">
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <svg class="h-5 w-5 text-green-400 dark:text-zinc-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div class="ltr:ml-3 rtl:mr-3">
                            <p class="text-sm font-medium text-green-800 dark:text-zinc-400">{{ session()->get('success') }}</p>
                        </div>
                    </div>
                </div>

            </div>
        @endif

        {{-- Images / Docs --}}
        <div class="col-span-12 lg:col-span-7" wire:key="section_images">
            <div class="bg-white rounded-lg shadow-sm border border-gray-100 px-8 py-6 mb-6 dark:bg-zinc-800 dark:border-zinc-700">

                {{-- Section title --}}
                <div class="mb-14 flex justify-between items-center">
                    <div>
                        <h2 class="text-[15px] mb-1 tracking-wider leading-6 font-semibold text-gray-900 dark:text-gray-100">
                            {{ __('messages.t_images') }}</h2>
                        <p class="text-[13px] text-gray-500 dark:text-gray-300">{{ __('messages.t_get_noticed_by_right_buyers_images') }}</p>
                    </div>
                    <div class="ltr:ml-4 rtl:mr-4 flex-shrink-0">
                        <button id="modal-add-youtube-video-button" type="button"
                            class="inline-flex items-center py-2 px-3 border border-transparent rounded-full bg-transparent hover:bg-transparent focus:outline-none focus:ring-0">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="h-5 w-5 text-gray-500 hover:text-gray-600 dark:text-zinc-300 dark:hover:text-white" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M7 4v16M17 4v16M3 8h4m10 0h4M3 12h18M3 16h4m10 0h4M4 20h16a1 1 0 001-1V5a1 1 0 00-1-1H4a1 1 0 00-1 1v14a1 1 0 001 1z" />
                            </svg>
                        </button>
                        <button id="modal-add-vimeo-video-button" type="button"
                            class="inline-flex items-center py-2 px-3 border border-transparent rounded-full bg-transparent hover:bg-transparent focus:outline-none focus:ring-0">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="20" width="20" version="1.1" id="Layer_1" viewBox="0 0 512 512" xml:space="preserve">
                                <circle style="fill: #cecece;" cx="256" cy="256" r="256"/>
                                <path style="fill: #cecece;" d="M388.741,143.1c-14.305,27.281-24.457,56.289-35.357,85.626  c-15.398-17.534-27.851-31.056-27.851-31.056h-42.696l-56.832-56.83l31.923,119.672l-91.57-67.722l-49.145,27.405l142.745,142.745  c-8.945,3.024-18.642,5.491-28.691,8.697L352.711,493.08c90.474-36.945,155.064-124.159,159.07-226.94L388.741,143.1z"/>
                                <path style="fill: #585757;" d="M390.401,144.762c-7.096-7.646-17.368-11.717-30.527-12.104c-37.152-1.2-63.426,18.566-78.091,58.733  c-0.769,2.11-0.3,4.451,1.226,6.106c1.517,1.645,3.796,2.301,5.947,1.71c4.22-1.16,8.401-1.746,12.435-1.746  c5.413,0,12.621,0.995,16.208,5.735c2.75,3.641,3.125,9.097,1.11,16.219c-1.698,6.011-10.449,22.097-21.28,39.117  c-13.195,20.739-20.482,30.036-22.585,30.036c-6.959,0-32.116-111.547-32.809-113.993c-7.213-25.566-10.836-38.398-34.299-38.398  c-17.884,0-57.768,32.658-90.517,61.109c-2.015,1.746-3.71,3.22-5.022,4.346c-3.165,2.707-3.643,7.404-1.088,10.702l6.103,7.859  c2.572,3.313,7.259,4.006,10.68,1.576l0.336-0.241c10.593-7.537,20.604-14.655,28.16-15.048  c8.209-0.402,15.334,12.428,23.828,42.951c16.175,59.289,40.755,129.96,65.977,129.96c26.357,0,57.804-22.344,98.451-75.242  c36.788-47.875,56.489-85.845,57.751-113.473C403.346,169.817,399.31,154.365,390.401,144.762L390.401,144.762z"/>
                                <path style="fill: #585757;" d="M390.401,144.762c-7.096-7.646-17.368-11.717-30.527-12.104c-37.152-1.2-63.426,18.566-78.091,58.733  c-0.769,2.11-0.3,4.451,1.226,6.106c1.517,1.645,3.796,2.301,5.947,1.71c4.22-1.16,8.401-1.746,12.435-1.746  c5.413,0,12.621,0.995,16.208,5.735c2.75,3.641,3.125,9.097,1.11,16.219c-1.698,6.011-10.449,22.097-21.28,39.117  c-13.195,20.739-20.482,30.036-22.585,30.036c-3.587,0-12.007-29.625-19.42-58.675v148.599  c24.426-4.613,53.212-27.479,89.219-74.342c36.788-47.875,56.489-85.845,57.751-113.473  C403.346,169.817,399.31,154.365,390.401,144.762z"/>
                                </svg>
                        </button>
                    </div>
                </div>

                {{-- Section content --}}
                <div class="w-full mb-10">

                    {{-- Images uploader --}}
                    <div wire:ignore>
                        <x-forms.uploader model="images" id="uploader_images" :extensions="['jpg', 'jpeg', 'png']"
                            accept="image/jpg, image/jpeg, image/png" size="{{ settings('publish')->max_image_size }}"
                            max="{{ settings('publish')->max_images }}" />
                    </div>

                </div>

                {{-- Section title --}}
                <div class="mt-14 mb-6">
                    <h2 class="text-[15px] mb-1 tracking-wider leading-6 font-semibold text-gray-900 dark:text-gray-100">
                        {{ __('messages.t_gig_gallery') }}</h2>
                    <p class="text-[13px] text-gray-500 dark:text-gray-300">{{ __('messages.t_if_u_upload_new_images_below_will_be_deleted') }}
                    </p>
                </div>

                {{-- Old images --}}
                <div class="fileuploader fileuploader-theme-thumbnails">
                    <div class="fileuploader-items">
                        <ul class="!grid !grid-cols-12 sm:!gap-x-6 gap-y-6 !m-auto fileuploader-items-list">

                            @foreach ($gig->images as $img)
                                <li
                                    wire:key="gallery-image-item-{{ $img->id }}"
                                    class="!col-span-12 sm:!col-span-6 md:!col-span-4 lg:!col-span-3 !w-full h-24 !m-auto fileuploader-item file-type-image file-ext-png file-has-popup rounded-[6px]">
                                    <div class="fileuploader-item-inner">
                                        <div class="type-holder">{{ $img->small->file_extension }}</div>
                                        <div class="actions-holder">
                                            <button type="button"
                                                x-on:click="confirm('{{ __('messages.t_are_u_sure_delete_this_image') }}') ? $wire.removeImage('{{ $img->id }}') : ''" 
                                                wire:loading.attr="disabled" 
                                                wire:target="removeImage('{{ $img->id }}')"
                                                class="fileuploader-action fileuploader-action-remove"
                                                title="{{ __('messages.t_delete') }}">
                                                <i class="fileuploader-icon-remove"></i>
                                            </button>
                                        </div>
                                        <div class="thumbnail-holder">
                                            <div class="fileuploader-item-image">
                                                <img class="lazy" src="{{ placeholder_img() }}" data-src="{{ src($img->small) }}" draggable="false">
                                            </div>
                                            <span class="fileuploader-action-popup"></span>
                                        </div>
                                        <div class="content-holder">
                                            <span>{{ human_filesize($img->large->file_size) }}</span>
                                        </div>
                                        <div class="progress-holder"></div>
                                    </div>
                                </li>
                            @endforeach

                        </ul>
                    </div>
                </div>

                {{-- Section title --}}
                <div class="mt-14 mb-6">
                    <h2 class="text-[15px] mb-1 tracking-wider leading-6 font-semibold text-gray-900 dark:text-gray-100">
                        {{ __('messages.t_gig_thumbnail') }}</h2>
                    <p class="text-[13px] text-gray-500 dark:text-gray-300">{{ __('messages.t_catch_buyers_eyes_with_nice_img') }}
                    </p>
                </div>

                {{-- Section content --}}
                <div class="w-full">
                    <x-forms.file-input :label="__('messages.t_upload_thumbnail')" model="thumbnail"  />
                    {{-- Preview image --}}
                    @if ($gig->thumbnail)
                        <div class="mt-3">
                            <img src="{{ src( $gig->thumbnail ) }}" class="h-24 w-24 rounded-lg intense cursor-pointer object-cover">
                        </div>
                    @endif
                </div>

            </div>

            {{-- Actions --}}
            <div class="hidden justify-between items-center lg:flex">
                <x-forms.button action="back" text="{{ __('messages.t_back') }}"
                    active="bg-white dark:bg-zinc-800 dark:hover:bg-zinc-900 shadow-sm hover:bg-gray-300 text-gray-900 dark:text-zinc-300" />
                <x-forms.button action="save" text="{{ __('messages.t_save_and_continue') }}" />
            </div>

        </div>

        {{-- Documents && Video --}}
        <div class="col-span-12 lg:col-span-5">

            {{-- Documents --}}
            @if (settings('publish')->is_documents_enabled)
                <div class="bg-white rounded-lg shadow-sm border border-gray-100 px-8 py-6 mb-6 dark:bg-zinc-800 dark:border-zinc-700"
                    wire:key="section_documents">

                    {{-- Section title --}}
                    <div class="mb-14">
                        <h2 class="text-[15px] mb-1 tracking-wider leading-6 font-semibold text-gray-900 dark:text-gray-100">
                            {{ __('messages.t_documents') }}</h2>
                        <p class="text-[13px] text-gray-500 dark:text-gray-300">{{ __('messages.t_show_some_of_best_work_doc_pdfs_only') }}
                        </p>
                    </div>

                    {{-- Section content --}}
                    <div class="w-full {{ $gig->documents()->count() === 0 ? '' : 'mb-10' }}">

                        {{-- Documents uploader --}}
                        <div wire:ignore>
                            <x-forms.uploader model="documents" id="uploader_documents" :extensions="['pdf']"
                                accept="application/pdf" size="{{ settings('publish')->max_document_size }}"
                                max="{{ settings('publish')->max_documents }}" />
                        </div>

                    </div>

                    {{-- Old documents --}}
                    @if ($gig->documents()->count())
                        <ul role="list" class="border border-gray-200 rounded-md divide-y divide-gray-200">
                            @foreach ($gig->documents as $doc)
                                <li class="ltr:pl-3 rtl:pr-3 ltr:pr-4 rtl:pl-4 py-3 flex items-center justify-between text-sm">
                                    <div class="w-0 flex-1 flex items-center">
                                        <svg class="flex-shrink-0 h-5 w-5 text-gray-400"
                                            x-description="Heroicon name: solid/paper-clip"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                            aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        <span class="ltr:ml-2 rtl:mr-2 flex-1 w-0 truncate">
                                            {{ $doc->name }}
                                        </span>
                                    </div>
                                    <div class="ltr:ml-4 rtl:mr-4 flex-shrink-0">
                                        <button 
                                            x-on:click="confirm('{{ __('messages.t_are_u_sure_delete_this_file') }}') ? $wire.removeDocument('{{ $doc->id }}') : ''"
                                            wire:loading.attr="disabled"
                                            wire:target="removeDocument({{ $doc->id }})" type="button"
                                            class="font-medium text-primary-600 hover:text-primary-600">
                                            {{ __('messages.t_remove') }}
                                        </button>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    @endif

                </div>
            @endif

            {{-- Video --}}
            @if ($video_link)
                <div class="bg-white rounded-lg shadow-sm border border-gray-100 px-8 py-6 dark:bg-zinc-800 dark:border-zinc-700" wire:key="section_video">

                    {{-- Section title --}}
                    <div class="mb-14 flex items-center justify-between">
                        <div>
                            <h2 class="text-[15px] mb-1 tracking-wider leading-6 font-semibold text-gray-900 dark:text-gray-100">
                                {{ __('messages.t_video') }}</h2>
                            <p class="text-[13px] text-gray-500 dark:text-gray-300">{{ __('messages.t_capture_buyer_attention_with_video') }}
                            </p>
                        </div>
                        <div class="ml-4">
                            <button wire:click="removeVideo"
                                class="inline-flex items-center py-2 px-3 border border-transparent rounded-full bg-transparent hover:bg-transparent focus:outline-none focus:ring-0">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="h-5 w-5 text-red-500 hover:text-red-600 mr-2" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                </svg>
                            </button>
                        </div>
                    </div>

                    {{-- Section content --}}
                    <div class="w-full">

                        {{-- Youtube preview --}}
                        <div class="bg-white rounded-md shadow-sm w-full h-60">
                            <div class="aspect-square rounded-md z-10 overflow-hidden w-full h-full">
                                <iframe src="https://www.youtube.com/embed/{{ youtubeId($video_link) }}"
                                    height="100%" width="100%" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                            </div>
                        </div>

                    </div>

                </div>
            @endif

            {{-- Vimeo Video --}}
            @if ($vimeo_video_link)
                <div class="bg-white rounded-lg shadow-sm border border-gray-100 px-8 py-6 dark:bg-zinc-800 dark:border-zinc-700" wire:key="sections_video">

                    {{-- Section title --}}
                    <div class="mb-14 flex items-center justify-between">
                        <div>
                            <h2 class="text-[15px] mb-1 tracking-wider leading-6 font-semibold text-gray-900 dark:text-gray-100">
                                {{ __('messages.t_vimeo_video') }}</h2>
                            <p class="text-[13px] text-gray-500 dark:text-gray-300">{{ __('messages.t_capture_buyer_attention_with_video') }}
                            </p>
                        </div>
                        <div class="ml-4">
                            <button wire:click="removeVimeoVideo"
                                class="inline-flex items-center py-2 px-3 border border-transparent rounded-full bg-transparent hover:bg-transparent focus:outline-none focus:ring-0">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="h-5 w-5 text-red-500 hover:text-red-600 mr-2" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                </svg>
                            </button>
                        </div>
                    </div>

                    {{-- Section content --}}
                    <div class="w-full">

                        {{-- Vimeo preview --}}
                        <div class="bg-white rounded-md shadow-sm w-full h-60">
                            <div class="aspect-square rounded-md z-10 overflow-hidden w-full h-full">
                                <iframe src="https://player.vimeo.com/video{{ vimId($vimeo_video_link) }}"
                                    height="100%" width="100%" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                            </div>
                        </div>

                    </div>

                </div>
            @endif

        </div>

        {{-- Actions --}}
        <div class="col-span-12 block lg:hidden">
            <div class="flex justify-between">
                <x-forms.button action="back" text="{{ __('messages.t_back') }}"
                    active="bg-white dark:bg-zinc-800 dark:hover:bg-zinc-900 shadow-sm hover:bg-gray-300 text-gray-900 dark:text-zinc-300" />
                <x-forms.button action="save" text="{{ __('messages.t_save_and_continue') }}" />
            </div>
        </div>

    </div>

    {{-- Youtube video modal --}}
    <x-forms.modal id="modal-add-youtube-video-container" target="modal-add-youtube-video-button"
        uid="modal_{{ uid() }}" placement="center-center" size="max-w-md">

        {{-- Header --}}
        <x-slot name="title">{{ __('messages.t_add_youtube_video') }}</x-slot>

        {{-- Content --}}
        <x-slot name="content">
            <div class="grid grid-cols-12 md:gap-x-6 gap-y-6">

                {{-- Link --}}
                <div class="col-span-12">
                    <div class="relative">

                        {{-- Input --}}
                        <input type="text" placeholder="{{ __('messages.t_youtube_placeholder') }}"
                            wire:model.defer="video_link"
                            class="dark:bg-transparent block w-full text-xs rounded border-2 ltr:pr-10 rtl:pl-10 py-3 ltr:pl-3 rtl:pr-3 font-normal {{ $errors->first('video_link') ? 'border-red-500 text-red-600 placeholder-red-400 focus:ring-red-500 focus:border-red-500' : 'border-gray-200 dark:border-zinc-700 placeholder-gray-400 focus:ring-primary-600 focus:border-primary-600 dark:text-zinc-400' }}">

                        {{-- Icon --}}
                        <div class="absolute inset-y-0 ltr:right-0 rtl:left-0 ltr:pr-3 rtl:pl-3 flex items-center pointer-events-none">
                            <svg class="w-4 h-4 {{ $errors->first('video_link') ? 'text-red-400' : 'text-gray-400' }}" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 576 512" xmlns="http://www.w3.org/2000/svg"><path d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z"></path></svg>
                        </div>

                    </div>

                    {{-- Error --}}
                    @error('video_link')
                        <p class="mt-1 text-xs text-red-600 dark:text-red-500">{{ $errors->first('video_link') }}</p>
                    @enderror

                </div>

            </div>
        </x-slot>

        {{-- Footer --}}
        <x-slot name="footer">
            <x-forms.button action="addVideo" text="{{ __('messages.t_add') }}" :block="0" />
        </x-slot>

    </x-forms.modal>


      {{-- Vimeo video modal --}}
    <x-forms.modal id="modal-add-vimeo-video-container" target="modal-add-vimeo-video-button"
        uid="modal_{{ uid() }}" placement="center-center" size="max-w-md">

        {{-- Header --}}
        <x-slot name="title">{{ __('messages.t_add_vimeo_video') }}</x-slot>

        {{-- Content --}}
        <x-slot name="content">
            <div class="grid grid-cols-12 md:gap-x-6 gap-y-6">

                {{-- Link --}}
                <div class="col-span-12">
                    <div class="relative">

                        {{-- Input --}}
                        <input type="text" placeholder="{{ __('messages.t_vimeo_placeholder') }}"
                            wire:model.defer="vimeo_video_link"
                            class="dark:bg-transparent block w-full text-xs rounded border-2 ltr:pr-10 rtl:pl-10 py-3 ltr:pl-3 rtl:pr-3 font-normal {{ $errors->first('vimeo_video_link') ? 'border-red-500 text-red-600 placeholder-red-400 focus:ring-red-500 focus:border-red-500' : 'border-gray-200 dark:border-zinc-700 placeholder-gray-400 focus:ring-primary-600 focus:border-primary-600 dark:text-zinc-400' }}">

                        {{-- Icon --}}
                        <div class="absolute inset-y-0 ltr:right-0 rtl:left-0 ltr:pr-3 rtl:pl-3 flex items-center pointer-events-none">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="20" width="20" version="1.1" id="Layer_1" viewBox="0 0 512 512" xml:space="preserve" class="w-4 h-4 {{ $errors->first('vimeo_video_link') ? 'text-red-400' : 'text-gray-400' }}">
                                <circle style="fill: #cecece;" cx="256" cy="256" r="256"/>
                                <path style="fill: #cecece;" d="M388.741,143.1c-14.305,27.281-24.457,56.289-35.357,85.626  c-15.398-17.534-27.851-31.056-27.851-31.056h-42.696l-56.832-56.83l31.923,119.672l-91.57-67.722l-49.145,27.405l142.745,142.745  c-8.945,3.024-18.642,5.491-28.691,8.697L352.711,493.08c90.474-36.945,155.064-124.159,159.07-226.94L388.741,143.1z"/>
                                <path style="fill: #585757;" d="M390.401,144.762c-7.096-7.646-17.368-11.717-30.527-12.104c-37.152-1.2-63.426,18.566-78.091,58.733  c-0.769,2.11-0.3,4.451,1.226,6.106c1.517,1.645,3.796,2.301,5.947,1.71c4.22-1.16,8.401-1.746,12.435-1.746  c5.413,0,12.621,0.995,16.208,5.735c2.75,3.641,3.125,9.097,1.11,16.219c-1.698,6.011-10.449,22.097-21.28,39.117  c-13.195,20.739-20.482,30.036-22.585,30.036c-6.959,0-32.116-111.547-32.809-113.993c-7.213-25.566-10.836-38.398-34.299-38.398  c-17.884,0-57.768,32.658-90.517,61.109c-2.015,1.746-3.71,3.22-5.022,4.346c-3.165,2.707-3.643,7.404-1.088,10.702l6.103,7.859  c2.572,3.313,7.259,4.006,10.68,1.576l0.336-0.241c10.593-7.537,20.604-14.655,28.16-15.048  c8.209-0.402,15.334,12.428,23.828,42.951c16.175,59.289,40.755,129.96,65.977,129.96c26.357,0,57.804-22.344,98.451-75.242  c36.788-47.875,56.489-85.845,57.751-113.473C403.346,169.817,399.31,154.365,390.401,144.762L390.401,144.762z"/>
                                <path style="fill: #585757;" d="M390.401,144.762c-7.096-7.646-17.368-11.717-30.527-12.104c-37.152-1.2-63.426,18.566-78.091,58.733  c-0.769,2.11-0.3,4.451,1.226,6.106c1.517,1.645,3.796,2.301,5.947,1.71c4.22-1.16,8.401-1.746,12.435-1.746  c5.413,0,12.621,0.995,16.208,5.735c2.75,3.641,3.125,9.097,1.11,16.219c-1.698,6.011-10.449,22.097-21.28,39.117  c-13.195,20.739-20.482,30.036-22.585,30.036c-3.587,0-12.007-29.625-19.42-58.675v148.599  c24.426-4.613,53.212-27.479,89.219-74.342c36.788-47.875,56.489-85.845,57.751-113.473  C403.346,169.817,399.31,154.365,390.401,144.762z"/>
                                </svg>
                        </div>

                    </div>

                    {{-- Error --}}
                    @error('vimeo_video_link')
                        <p class="mt-1 text-xs text-red-600 dark:text-red-500">{{ $errors->first('vimeo_video_link') }}</p>
                    @enderror

                </div>

            </div>
        </x-slot>

        {{-- Footer --}}
        <x-slot name="footer">
            <x-forms.button action="addVimeoVideo" text="{{ __('messages.t_add') }}" :block="0" />
        </x-slot>

    </x-forms.modal>

</div>


@push('scripts')
    {{-- AlpineJS --}}
    <script>
        function HtBWuUxgpMyrQEM() {
            return {

                initialize() {}

            }
        }
        window.HtBWuUxgpMyrQEM = HtBWuUxgpMyrQEM();
    </script>
@endpush
