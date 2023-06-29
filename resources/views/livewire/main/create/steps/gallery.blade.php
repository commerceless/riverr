<div class="w-full" x-data="window.HtBWuUxgpMyrQEM" x-init="initialize">

    {{-- Errors --}}
    @if ($errors->any())
        <div class="rounded-md bg-red-50 p-4 mb-6">
            <div class="flex">
                <div class="flex-shrink-0">
                    <svg class="h-5 w-5 text-red-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"> <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"></path> </svg>
                </div>
                <div class="ltr:ml-3 rtl:mr-3">
                    <h3 class="text-sm font-medium text-red-800">{{ __('messages.t_toast_something_went_wrong') }}</h3>
                    <div class="mt-2 text-sm text-red-700">
                    <ul role="list" class="list-disc ltr:pl-4 rtl:pr-4 space-y-1">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    </div>
                </div>
            </div>
        </div>
    @endif

    {{-- Please wait dialog --}}
    <div class="fixed top-0 left-0 z-50 bg-black w-full h-full opacity-80" wire:loading>
        <div class="w-full h-full flex items-center justify-center">
            <div role="status">
                <svg aria-hidden="true" class="mx-auto w-12 h-12 text-gray-500 animate-spin dark:text-gray-600 fill-white" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/>
                    <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"/>
                </svg>
                <span class="text-xs font-medium tracking-wider text-white mt-4 block">{{ __('messages.t_please_wait_dots') }}</span>
            </div>
        </div>
    </div>

    {{-- Images --}}
    <div class="mb-6 bg-white dark:bg-zinc-800 shadow-sm rounded-md border border-b-0 border-gray-200 dark:border-zinc-700" wire:key="section_images">

        {{-- Section title --}}
        <div class="bg-gray-50 dark:bg-zinc-700 px-8 py-4 rounded-t-md">
            <div class="-ml-4 -mt-4 flex justify-between items-center flex-wrap sm:flex-nowrap">
                <div class="ltr:ml-4 rtl:mr-4 mt-4">
                    <h3 class="text-sm leading-6 font-semibold tracking-wide text-gray-600 dark:text-gray-200">{{ __('messages.t_images') }}</h3>
                    <p class="text-xs font-normal text-gray-400 dark:text-gray-300">{{ __('messages.t_get_noticed_by_right_buyers_images') }}</p>
                </div>
                @if (!$video_link)
                    <div class="ltr:ml-4 rtl:mr-4 flex-shrink-0 mt-4">
                        <button id="modal-add-youtube-video-button" class="inline-flex items-center py-2 ltr:md:pl-3 rtl:md:pr-3 border border-transparent rounded-full bg-transparent hover:bg-transparent focus:outline-none focus:ring-0">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-primary-600 hover:text-primary-700 ltr:mr-2 rtl:ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"/></svg>
                            <span class="text-xs font-medium text-primary-600 hover:text-primary-700"> 
                                {{ __('messages.t_add_a_video') }}
                            </span>
                        </button>
                    </div>
                @endif
                @if (!$vimeo_video_link)
                    <div class="ltr:ml-4 rtl:mr-4 flex-shrink-0 mt-4">
                        <button id="modal-add-vimeo-video-button" class="inline-flex items-center py-2 ltr:md:pl-3 rtl:md:pr-3 border border-transparent rounded-full bg-transparent hover:bg-transparent focus:outline-none focus:ring-0">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-primary-600 hover:text-primary-700 ltr:mr-2 rtl:ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"/></svg>
                            <span class="text-xs font-medium text-primary-600 hover:text-primary-700"> 
                                 {{ __('messages.t_add_a_vimeo_video') }}
                            </span>
                        </button>
                    </div>
                @endif
            </div>
        </div>

        {{-- Section content --}}
        <div class="w-full mb-6 px-8 py-6">

            {{-- Thumbnail --}}
            <div class="w-full mb-12" wire:ignore>
                <span class="mb-2 text-xs font-semibold tracking-wide flex items-center text-gray-700 dark:text-gray-100">{{ __('messages.t_upload_thumbnail') }}</span>
                <x-forms.uploader
                    model="thumbnail"
                    id="uploader_thumbnail"
                    :extensions="['jpg', 'jpeg', 'png']"
                    accept="image/jpg, image/jpeg, image/png"
                    size="{{ settings('publish')->max_image_size }}"
                    max="1" />
            </div>

            {{-- Images uploader --}}
            <div wire:ignore>
                <span class="mb-2 text-xs font-semibold tracking-wide flex items-center text-gray-700 dark:text-gray-100">{{ __('messages.t_upload_gig_images') }}</span>
                <x-forms.uploader
                    model="images"
                    id="uploader_images"
                    :extensions="['jpg', 'jpeg', 'png']"
                    accept="image/jpg, image/jpeg, image/png"
                    size="{{ settings('publish')->max_image_size }}"
                    max="{{ settings('publish')->max_images }}" />
            </div>

        </div>

    </div>

    {{-- Video --}}
    @if ($video_link)
        <div class="mb-6 bg-white dark:bg-zinc-800 shadow-sm rounded-md border border-b-0 border-gray-200 dark:border-zinc-700" wire:key="section_video">

            {{-- Section title --}}
            <div class="bg-gray-50 dark:bg-zinc-700 px-8 py-4 rounded-t-md">
                <div class="-ml-4 -mt-4 flex justify-between items-center flex-wrap sm:flex-nowrap">
                    <div class="ltr:ml-4 rtl:mr-4 mt-4">
                        <h3 class="text-sm leading-6 font-semibold tracking-wide text-gray-600 dark:text-gray-200">{{ __('messages.t_video') }}</h3>
                        <p class="text-xs font-normal text-gray-400 dark:text-gray-300">{{ __('messages.t_capture_buyer_attention_with_video') }}</p>
                    </div>
                    <div class="ltr:ml-4 rtl:mr-4 flex-shrink-0 mt-4">
                        <button wire:click="removeVideo" class="inline-flex items-center py-2 ltr:md:pl-3 rtl:md:pr-3 border border-transparent rounded-full bg-transparent hover:bg-transparent focus:outline-none focus:ring-0">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-red-500 hover:text-red-600 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/></svg>
                            <span class="text-xs font-medium text-red-500 hover:text-red-600"> 
                                {{ __('messages.t_remove_video') }}
                            </span>
                        </button>
                    </div>
                </div>
            </div>

            {{-- Section content --}}
            <div class="w-full mb-6 px-8 py-6">

                {{-- Youtube preview --}}
                <div class="bg-white rounded-md shadow-sm w-full h-52 md:w-[calc(25%-16px)] md:h-[173.23px]">
                    <div class="aspect-square rounded-md z-10 overflow-hidden w-full h-full">
                        <iframe src="https://www.youtube.com/embed/{{ youtubeId($video_link) }}" height="100%" width="100%" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>

            </div>

        </div>
    @endif

    {{-- Vimeo Video --}}
    @if ($vimeo_video_link)
        <div class="mb-6 bg-white dark:bg-zinc-800 shadow-sm rounded-md border border-b-0 border-gray-200 dark:border-zinc-700" wire:key="sections_video">

            {{-- Section title --}}
            <div class="bg-gray-50 dark:bg-zinc-700 px-8 py-4 rounded-t-md">
                <div class="-ml-4 -mt-4 flex justify-between items-center flex-wrap sm:flex-nowrap">
                    <div class="ltr:ml-4 rtl:mr-4 mt-4">
                        <h3 class="text-sm leading-6 font-semibold tracking-wide text-gray-600 dark:text-gray-200">{{ __('messages.t_vimeo_video') }}</h3>
                        <p class="text-xs font-normal text-gray-400 dark:text-gray-300">{{ __('messages.t_capture_buyer_attention_with_video') }}</p>
                    </div>
                    <div class="ltr:ml-4 rtl:mr-4 flex-shrink-0 mt-4">
                        <button wire:click="removeVimeoVideo" class="inline-flex items-center py-2 ltr:md:pl-3 rtl:md:pr-3 border border-transparent rounded-full bg-transparent hover:bg-transparent focus:outline-none focus:ring-0">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-red-500 hover:text-red-600 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/></svg>
                            <span class="text-xs font-medium text-red-500 hover:text-red-600"> 
                                {{ __('messages.t_remove_video') }}
                            </span>
                        </button>
                    </div>
                </div>
            </div>

            {{-- Section content --}}
            <div class="w-full mb-6 px-8 py-6">

                {{-- Vimeo preview --}}
                <div class="bg-white rounded-md shadow-sm w-full h-52 md:w-[calc(25%-16px)] md:h-[173.23px]">
                    <div class="aspect-square rounded-md z-10 overflow-hidden w-full h-full">
                        <iframe src="https://player.vimeo.com/video{{ vimId($vimeo_video_link) }}" height="100%" width="100%" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>

            </div>

        </div>
    @endif

    {{-- Documents --}}
    @if (settings('publish')->is_documents_enabled)
        <div class="mb-6 bg-white dark:bg-zinc-800 shadow-sm rounded-md border border-b-0 border-gray-200 dark:border-zinc-700" wire:key="section_documents">

            {{-- Section title --}}
            <div class="bg-gray-50 dark:bg-zinc-700 px-8 py-4 rounded-t-md">
                <div class="-ml-4 -mt-4 flex justify-between items-center flex-wrap sm:flex-nowrap">
                    <div class="ltr:ml-4 rtl:mr-4 mt-4">
                        <h3 class="text-sm leading-6 font-semibold tracking-wide text-gray-600 dark:text-gray-200">{{ __('messages.t_documents') }}</h3>
                        <p class="text-xs font-normal text-gray-400 dark:text-gray-300">{{ __('messages.t_show_some_of_best_work_doc_pdfs_only') }}</p>
                    </div>
                </div>
            </div>

            {{-- Section content --}}
            <div class="w-full mb-6 px-8 py-6">

                {{-- Documents uploader --}}
                <div wire:ignore>
                    <x-forms.uploader
                        model="documents"
                        id="uploader_documents"
                        :extensions="['pdf']"
                        accept="application/pdf"
                        size="{{ settings('publish')->max_document_size }}"
                        max="{{ settings('publish')->max_documents }}" />
                </div>

            </div>

        </div>
    @endif

    {{-- Actions --}}
    <div class="flex justify-between">
        <x-forms.button action="back" text="{{ __('messages.t_back') }}" active="bg-white dark:bg-zinc-700 dark:hover:zinc-800 shadow-sm hover:bg-gray-300 text-gray-900 dark:text-gray-300"  />
        <x-forms.button action="save" text="{{ __('messages.t_save_and_continue') }}" />
    </div>

    {{-- Youtube video modal --}}
    <x-forms.modal id="modal-add-youtube-video-container" target="modal-add-youtube-video-button" uid="modal_{{ uid() }}" placement="center-center" size="max-w-md">

        {{-- Header --}}
        <x-slot name="title">{{ __('messages.t_add_youtube_video') }}</x-slot>

        {{-- Content --}}
        <x-slot name="content">
            <div class="grid grid-cols-12 md:gap-x-6 gap-y-6">

                {{-- Link --}}
                <div class="col-span-12">
                    <div class="relative">
                
                        {{-- Input --}}
                        <input type="text" placeholder="{{ __('messages.t_youtube_placeholder') }}" wire:model.defer="video_link" class="block w-full text-xs rounded border-2 ltr:pr-10 rtl:pl-10 py-3 ltr:pl-3 rtl:pr-3 font-normal {{ $errors->first('video_link') ? 'border-red-500 text-red-600 placeholder-red-400 focus:ring-red-500 focus:border-red-500' : 'border-gray-200 placeholder-gray-400 focus:ring-primary-600 focus:border-primary-600' }}">
                
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
            <x-forms.button action="addVideo" text="{{ __('messages.t_add') }}" :block="0"  />
        </x-slot>

    </x-forms.modal>


    {{-- vimeo video modal --}}
    <x-forms.modal id="modal-add-vimeo-video-container" target="modal-add-vimeo-video-button" uid="modal_{{ uid() }}" placement="center-center" size="max-w-md">

        {{-- Header --}}
        <x-slot name="title">{{ __('messages.t_add_vimeo_video') }}</x-slot>

        {{-- Content --}}
        <x-slot name="content">
            <div class="grid grid-cols-12 md:gap-x-6 gap-y-6">

                {{-- Link --}}
                <div class="col-span-12">
                    <div class="relative">
                
                        {{-- Input --}}
                        <input type="text" placeholder="{{ __('messages.t_vimeo_placeholder') }}" wire:model.defer="vimeo_video_link" class="block w-full text-xs rounded border-2 ltr:pr-10 rtl:pl-10 py-3 ltr:pl-3 rtl:pr-3 font-normal {{ $errors->first('vimeo_video_link') ? 'border-red-500 text-red-600 placeholder-red-400 focus:ring-red-500 focus:border-red-500' : 'border-gray-200 placeholder-gray-400 focus:ring-primary-600 focus:border-primary-600' }}">
                
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
                    @error('video_link')
                        <p class="mt-1 text-xs text-red-600 dark:text-red-500">{{ $errors->first('vimeo_video_link') }}</p>
                    @enderror
                
                </div>

            </div>
        </x-slot>

        {{-- Footer --}}
        <x-slot name="footer">
            <x-forms.button action="addVimeoVideo" text="{{ __('messages.t_add') }}" :block="0"  />
        </x-slot>

    </x-forms.modal>

</div>


@push('scripts')

    {{-- AlpineJS --}}
    <script>
        function HtBWuUxgpMyrQEM() {
            return {

                initialize() {
                }

            }
        }
        window.HtBWuUxgpMyrQEM = HtBWuUxgpMyrQEM();
    </script>

@endpush