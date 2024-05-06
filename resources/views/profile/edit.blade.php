<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>
            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                    <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                        <div class="max-w-xl">
                            <section>
                                <header>
                                    <h2 class="text-lg font-medium text-gray-900">
                                        {{ __('Profile Information') }}
                                    </h2>

                                    <p class="mt-1 text-sm text-gray-600">
                                        {{ __("Update your account's profile information .") }}
                                    </p>
                                </header>



                                <form method="post" enctype="multipart/form-data" action="{{ route('profile.create') }}" class="mt-6 space-y-6">
                                    @csrf
                                    @method('patch')
<div>

    <label for="formFile" class="form-label">upload avatar</label>
    <input class="form-control" name="avatar" type="file" id="formFile">

</div>
                                    <div>
                                        <x-input-label for="bio" :value="__('Bio')" />
                                        <x-text-input id="bio" name="bio" type="text" class="mt-1 block w-full"  required  />

                                    </div>

                                    <div>
                                        <x-input-label for="website" :value="__('Website')" />
                                        <x-text-input id="website" name="website" type="text" class="mt-1 block w-full"  required  />
                                    </div>
                                    <div>
                                    <x-input-label for="website" :value="__('gender')" />


                                <x-text-input id="gender" name="gender" type="text" class="mt-1 block w-full"  required  />
                            </div>

                                        <x-primary-button>{{ __('Save') }}</x-primary-button>


                                    </form>

                                </section>



                        </div>
                    </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
