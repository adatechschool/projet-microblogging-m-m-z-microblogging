<x-app-layout>
    <x-slot name="header">
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Publish Your Story') }}
        </h2>
        <p class="mt-1 text-sm text-gray-600">
            {{ __('Write about your favorite people, places, types of food and latest discoveries!') }}
        </p>
    </x-slot>
    <div class="flex justify-center">
        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
            <form method="post" action="/publish" enctype="multipart/form-data" class="mt-6 space-y-6">
                <!--"enctype = tells your browser how it will send the data -->
                @csrf
                <!--form has specific methods to inform the browser which http method to use to send the form content-->
                <!-- action is used to tell the browser where to send the data-->
                <div>
                    <x-input-label for="typed_text" :value="__('Type your text')" />
                    <x-text-input id="typed_text" name="typedText" type="text" class="mt-1 block w-full" autocomplete="typedText" />
                </div>
                <div>
                    <x-input-label for="imageToPost" :value="__('Choose a picture')" />
                    <x-text-input id="imageToPost" name="image" type="file" class="mt-1 block w-full text-sm text-slate-500 file:mr-4 file:py-2 file:px-4
                file:rounded-md file:border-0
                file:text-sm file:font-semibold
                file:bg-violet-50 file:text-violet-700
                hover:file:bg-violet-100" accept="image/png, image/jpeg" />
                </div>


                <!--<label for="imageToPost" :value="__('Choose a file')" class="block">
                <input id="imageToPost" name="image" accept="image/png, image/jpeg" type="file" class="mt-1 block w-full text-sm text-slate-500 file:mr-4 file:py-2 file:px-4
                file:rounded-md file:border-0
                file:text-sm file:font-semibold
                file:bg-violet-50 file:text-violet-700
                hover:file:bg-violet-100"/>
                </label>-->

                <div class="flex items-center gap-4 mt-4">
                    <x-primary-button>{{ __('Submit') }}</x-primary-button>
                     @if (isset($error))
                    <p class="mt-4 vertical-align: text-bottom text-md text-slate-500 font-semibold">Please fill in one of the blanks by adding an image, a text or both!</p>
                    @endif
            </form>
        </div>
    </div>
</x-app-layout>