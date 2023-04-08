<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Welcome to myStock') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You have successfully registered as a vendor!") }}
                    <br><br>
                    {{ __("A verification email has been sent to your email") }}
                    <br><br>
                    {{ __("You have also been automatically logged in, feel free to edit your profile as you wish.") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
