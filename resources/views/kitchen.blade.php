<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Kitchen Supplies</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <link rel="stylesheet" href="/css/home.css">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
        @if (Route::has('login'))
            @auth
            <body class="font-sans antialiased">
                <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
                    @include('layouts.navigation')
        @else
            <body class="antialiased">
                <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
                    <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right">
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>
                @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                    </div>
                @endif
            @endauth
        @endif

                    <div class="m-4">

                        <h1 class="m-3">Kitchen Stock</h1>
                        <?php $messageArray=null; ?>
                        @if (!$messageArray==null)
                            <h2 class="m-3"><?php $messageArray["message"]; ?></h2>
                        @endif

                        <div class="mt-10">
                            <form class="" method='post' action={{ route('kitchen') }}>
                                @csrf

                                {{-- Category --}}
                                <input type="hidden" value='kitchen' name='category'>

                                <div class="mb-4">
                                    {{-- 1 --}}
                                    {{-- Item Input --}}
                                    <div class="flex m-1">
                                    <h2 class="m-2.5 mt-9 mr-8">Item 1</h2>
                                        <!-- Stock Item -->
                                        <div class="m-2">
                                            <x-input-label for="item_name" :value="__('item_name')" />

                                            <x-text-input id="item_name" class="block mt-1 w-full"
                                                            type="item_name"
                                                            name="item_name0"
                                            />

                                            <x-input-error :messages="$errors->get('item_name')" class="mt-2" />


                                        </div>
                                        <!-- No of items -->
                                        <div class="m-2">

                                            <x-input-label for="no_of_items" :value="__('no_of_items (packages)')" />

                                            <x-text-input id="no_of_items" class="block mt-1 w-full"
                                                            type="no_of_items"
                                                            name="no_of_items0"
                                            />

                                            <x-input-error :messages="$errors->get('no_of_items0')" class="mt-2" />


                                        </div>
                                        <!-- Amount of item -->
                                        <div class="m-2">

                                            <x-input-label for="amount_of_item" :value="__('amount_of_item')" />

                                            <x-text-input id="amount_of_item" class="block mt-1 w-full"
                                                            type="amount_of_item"
                                                            name="amount_of_item0"
                                            />

                                            <x-input-error :messages="$errors->get('amount_of_item0')" class="mt-2" />

                                        </div>
                                        <!-- Units of amount -->
                                        <select name="units0" class="rounded mt-3.5 border-gray-200" style="width: 6%; height: 75%;">
                                            <option value="kg">kg</option>
                                            <option value="l">L</option>
                                            <option value="m">m</option>
                                        </select>
                                    </div>

                                    {{-- 2 --}}
                                    {{-- Item Input --}}
                                    <div class="flex m-1">
                                    <h2 class="m-2.5 mt-9 mr-8">Item 2</h2>
                                        <!-- Stock Item -->
                                        <div class="m-2">
                                            <x-input-label for="item_name" :value="__('item_name')" />

                                            <x-text-input id="item_name" class="block mt-1 w-full"
                                                            type="item_name"
                                                            name="item_name1"
                                            />

                                            <x-input-error :messages="$errors->get('item_name1')" class="mt-2" />


                                        </div>
                                        <!-- No of items -->
                                        <div class="m-2">

                                            <x-input-label for="no_of_items" :value="__('no_of_items (packages)')" />

                                            <x-text-input id="no_of_items" class="block mt-1 w-full"
                                                            type="no_of_items"
                                                            name="no_of_items1"
                                            />

                                            <x-input-error :messages="$errors->get('no_of_items1')" class="mt-2" />


                                        </div>
                                        <!-- Amount of item -->
                                        <div class="m-2">

                                            <x-input-label for="amount_of_item" :value="__('amount_of_item')" />

                                            <x-text-input id="amount_of_item" class="block mt-1 w-full"
                                                            type="amount_of_item"
                                                            name="amount_of_item1"
                                            />

                                            <x-input-error :messages="$errors->get('amount_of_item1')" class="mt-2" />

                                        </div>
                                        <!-- Units of amount -->
                                        <select name="units1" class="rounded mt-3.5 border-gray-200" style="width: 6%; height: 75%;">
                                            <option value="kg">kg</option>
                                            <option value="l">L</option>
                                            <option value="m">m</option>
                                        </select>
                                    </div>

                                    {{-- 3 --}}
                                    {{-- Item Input --}}
                                    <div class="flex m-1">
                                    <h2 class="m-2.5 mt-9 mr-8">Item 3</h2>
                                        <!-- Stock Item -->
                                        <div class="m-2">
                                            <x-input-label for="item_name" :value="__('item_name')" />

                                            <x-text-input id="item_name" class="block mt-1 w-full"
                                                            type="item_name"
                                                            name="item_name2"
                                            />

                                            <x-input-error :messages="$errors->get('item_name2')" class="mt-2" />


                                        </div>
                                        <!-- No of items -->
                                        <div class="m-2">

                                            <x-input-label for="no_of_items" :value="__('no_of_items (packages)')" />

                                            <x-text-input id="no_of_items" class="block mt-1 w-full"
                                                            type="no_of_items"
                                                            name="no_of_items2"
                                            />

                                            <x-input-error :messages="$errors->get('no_of_items2')" class="mt-2" />


                                        </div>
                                        <!-- Amount of item -->
                                        <div class="m-2">

                                            <x-input-label for="amount_of_item" :value="__('amount_of_item')" />

                                            <x-text-input id="amount_of_item" class="block mt-1 w-full"
                                                            type="amount_of_item"
                                                            name="amount_of_item2"
                                            />

                                            <x-input-error :messages="$errors->get('amount_of_item2')" class="mt-2" />

                                        </div>
                                        <!-- Units of amount -->
                                        <select name="units2" class="rounded mt-3.5 border-gray-200" style="width: 6%; height: 75%;">
                                            <option value="kg">kg</option>
                                            <option value="l">L</option>
                                            <option value="m">m</option>
                                        </select>
                                    </div>

                                    {{-- 4 --}}
                                    {{-- Item Input --}}
                                    <div class="flex m-1">
                                    <h2 class="m-2.5 mt-9 mr-8">Item 4</h2>
                                        <!-- Stock Item -->
                                        <div class="m-2">
                                            <x-input-label for="item_name" :value="__('item_name')" />

                                            <x-text-input id="item_name" class="block mt-1 w-full"
                                                            type="item_name"
                                                            name="item_name3"
                                            />

                                            <x-input-error :messages="$errors->get('item_name3')" class="mt-2" />


                                        </div>
                                        <!-- No of items -->
                                        <div class="m-2">

                                            <x-input-label for="no_of_items" :value="__('no_of_items (packages)')" />

                                            <x-text-input id="no_of_items" class="block mt-1 w-full"
                                                            type="no_of_items"
                                                            name="no_of_items3"
                                            />

                                            <x-input-error :messages="$errors->get('no_of_items3')" class="mt-2" />


                                        </div>
                                        <!-- Amount of item -->
                                        <div class="m-2">

                                            <x-input-label for="amount_of_item" :value="__('amount_of_item')" />

                                            <x-text-input id="amount_of_item" class="block mt-1 w-full"
                                                            type="amount_of_item"
                                                            name="amount_of_item3"
                                            />

                                            <x-input-error :messages="$errors->get('amount_of_item3')" class="mt-2" />

                                        </div>
                                        <!-- Units of amount -->
                                        <select name="units3" class="rounded mt-3.5 border-gray-200" style="width: 6%; height: 75%;">
                                            <option value="kg">kg</option>
                                            <option value="l">L</option>
                                            <option value="m">m</option>
                                        </select>
                                    </div>

                                    {{-- 5 --}}
                                    {{-- Item Input --}}
                                    <div class="flex m-1">
                                    <h2 class="m-2.5 mt-9 mr-8">Item 5</h2>
                                        <!-- Stock Item -->
                                        <div class="m-2">
                                            <x-input-label for="item_name" :value="__('item_name')" />

                                            <x-text-input id="item_name" class="block mt-1 w-full"
                                                            type="item_name"
                                                            name="item_name4"
                                            />

                                            <x-input-error :messages="$errors->get('item_name4')" class="mt-2" />


                                        </div>
                                        <!-- No of items -->
                                        <div class="m-2">

                                            <x-input-label for="no_of_items" :value="__('no_of_items (packages)')" />

                                            <x-text-input id="no_of_items" class="block mt-1 w-full"
                                                            type="no_of_items"
                                                            name="no_of_items4"
                                            />

                                            <x-input-error :messages="$errors->get('no_of_items4')" class="mt-2" />


                                        </div>
                                        <!-- Amount of item -->
                                        <div class="m-2">

                                            <x-input-label for="amount_of_item" :value="__('amount_of_item')" />

                                            <x-text-input id="amount_of_item" class="block mt-1 w-full"
                                                            type="amount_of_item"
                                                            name="amount_of_item4"
                                            />

                                            <x-input-error :messages="$errors->get('amount_of_item4')" class="mt-2" />

                                        </div>
                                        <!-- Units of amount -->
                                        <select 4 class="rounded mt-3.5 border-gray-200" style="width: 6%; height: 75%;">
                                            <option value="kg">kg</option>
                                            <option value="l">L</option>
                                            <option value="m">m</option>
                                        </select>
                                    </div>

                                    {{-- 6 --}}
                                    {{-- Item Input --}}
                                    <div class="flex m-1">
                                    <h2 class="m-2.5 mt-9 mr-8">Item 6</h2>
                                        <!-- Stock Item -->
                                        <div class="m-2">
                                            <x-input-label for="item_name" :value="__('item_name')" />

                                            <x-text-input id="item_name" class="block mt-1 w-full"
                                                            type="item_name"
                                                            name="item_name5"
                                            />

                                            <x-input-error :messages="$errors->get('item_name5')" class="mt-2" />


                                        </div>
                                        <!-- No of items -->
                                        <div class="m-2">

                                            <x-input-label for="no_of_items" :value="__('no_of_items (packages)')" />

                                            <x-text-input id="no_of_items" class="block mt-1 w-full"
                                                            type="no_of_items"
                                                            name="no_of_items5"
                                            />

                                            <x-input-error :messages="$errors->get('no_of_items5')" class="mt-2" />


                                        </div>
                                        <!-- Amount of item -->
                                        <div class="m-2">

                                            <x-input-label for="amount_of_item" :value="__('amount_of_item')" />

                                            <x-text-input id="amount_of_item" class="block mt-1 w-full"
                                                            type="amount_of_item"
                                                            name="amount_of_item5"
                                            />

                                            <x-input-error :messages="$errors->get('amount_of_item5')" class="mt-2" />

                                        </div>
                                        <!-- Units of amount -->
                                        <select name="units5" class="rounded mt-3.5 border-gray-200" style="width: 6%; height: 75%;">
                                            <option value="kg">kg</option>
                                            <option value="l">L</option>
                                            <option value="m">m</option>
                                        </select>
                                    </div>

                                    {{-- 7 --}}
                                    {{-- Item Input --}}
                                    <div class="flex m-1">
                                    <h2 class="m-2.5 mt-9 mr-8">Item 7</h2>
                                        <!-- Stock Item -->
                                        <div class="m-2">
                                            <x-input-label for="item_name" :value="__('item_name')" />

                                            <x-text-input id="item_name" class="block mt-1 w-full"
                                                            type="item_name"
                                                            name="item_name6"
                                            />

                                            <x-input-error :messages="$errors->get('item_name6')" class="mt-2" />


                                        </div>
                                        <!-- No of items -->
                                        <div class="m-2">

                                            <x-input-label for="no_of_items" :value="__('no_of_items (packages)')" />

                                            <x-text-input id="no_of_items" class="block mt-1 w-full"
                                                            type="no_of_items"
                                                            name="no_of_items6"
                                            />

                                            <x-input-error :messages="$errors->get('no_of_items6')" class="mt-2" />


                                        </div>
                                        <!-- Amount of item -->
                                        <div class="m-2">

                                            <x-input-label for="amount_of_item" :value="__('amount_of_item')" />

                                            <x-text-input id="amount_of_item" class="block mt-1 w-full"
                                                            type="amount_of_item"
                                                            name="amount_of_item6"
                                            />

                                            <x-input-error :messages="$errors->get('amount_of_item6')" class="mt-2" />

                                        </div>
                                        <!-- Units of amount -->
                                        <select name="units6" class="rounded mt-3.5 border-gray-200" style="width: 6%; height: 75%;">
                                            <option value="kg">kg</option>
                                            <option value="l">L</option>
                                            <option value="m">m</option>
                                        </select>
                                    </div>

                                    {{-- 8 --}}
                                    {{-- Item Input --}}
                                    <div class="flex m-1">
                                    <h2 class="m-2.5 mt-9 mr-8">Item 8</h2>
                                        <!-- Stock Item -->
                                        <div class="m-2">
                                            <x-input-label for="item_name" :value="__('item_name')" />

                                            <x-text-input id="item_name" class="block mt-1 w-full"
                                                            type="item_name"
                                                            name="item_name7"
                                            />

                                            <x-input-error :messages="$errors->get('item_name7')" class="mt-2" />


                                        </div>
                                        <!-- No of items -->
                                        <div class="m-2">

                                            <x-input-label for="no_of_items" :value="__('no_of_items (packages)')" />

                                            <x-text-input id="no_of_items" class="block mt-1 w-full"
                                                            type="no_of_items"
                                                            name="no_of_items7"
                                            />

                                            <x-input-error :messages="$errors->get('no_of_items7')" class="mt-2" />


                                        </div>
                                        <!-- Amount of item -->
                                        <div class="m-2">

                                            <x-input-label for="amount_of_item" :value="__('amount_of_item')" />

                                            <x-text-input id="amount_of_item" class="block mt-1 w-full"
                                                            type="amount_of_item"
                                                            name="amount_of_item7"
                                            />

                                            <x-input-error :messages="$errors->get('amount_of_item7')" class="mt-2" />

                                        </div>
                                        <!-- Units of amount -->
                                        <select name="units7" class="rounded mt-3.5 border-gray-200" style="width: 6%; height: 75%;">
                                            <option value="kg">kg</option>
                                            <option value="l">L</option>
                                            <option value="m">m</option>
                                        </select>
                                    </div>

                                    {{-- 9 --}}
                                    {{-- Item Input --}}
                                    <div class="flex m-1">
                                    <h2 class="m-2.5 mt-9 mr-8">Item 9</h2>
                                        <!-- Stock Item -->
                                        <div class="m-2">
                                            <x-input-label for="item_name" :value="__('item_name')" />

                                            <x-text-input id="item_name" class="block mt-1 w-full"
                                                            type="item_name"
                                                            name="item_name8"
                                            />

                                            <x-input-error :messages="$errors->get('item_name8')" class="mt-2" />


                                        </div>
                                        <!-- No of items -->
                                        <div class="m-2">

                                            <x-input-label for="no_of_items" :value="__('no_of_items (packages)')" />

                                            <x-text-input id="no_of_items" class="block mt-1 w-full"
                                                            type="no_of_items"
                                                            name="no_of_items8"
                                            />

                                            <x-input-error :messages="$errors->get('no_of_items8')" class="mt-2" />


                                        </div>
                                        <!-- Amount of item -->
                                        <div class="m-2">

                                            <x-input-label for="amount_of_item" :value="__('amount_of_item')" />

                                            <x-text-input id="amount_of_item" class="block mt-1 w-full"
                                                            type="amount_of_item"
                                                            name="amount_of_item8"
                                            />

                                            <x-input-error :messages="$errors->get('amount_of_item8')" class="mt-2" />

                                        </div>
                                        <!-- Units of amount -->
                                        <select name="units8" class="rounded mt-3.5 border-gray-200" style="width: 6%; height: 75%;">
                                            <option value="kg">kg</option>
                                            <option value="l">L</option>
                                            <option value="m">m</option>
                                        </select>
                                    </div>

                                    {{-- 10 --}}
                                    {{-- Item Input --}}
                                    <div class="flex m-1">
                                    <h2 class="m-2.5 mt-9 mr-8">Item 10</h2>
                                        <!-- Stock Item -->
                                        <div class="m-2">
                                            <x-input-label for="item_name" :value="__('item_name')" />

                                            <x-text-input id="item_name" class="block mt-1 w-full"
                                                            type="item_name"
                                                            name="item_name9"
                                            />

                                            <x-input-error :messages="$errors->get('item_name9')" class="mt-2" />


                                        </div>
                                        <!-- No of items -->
                                        <div class="m-2">

                                            <x-input-label for="no_of_items" :value="__('no_of_items (packages)')" />

                                            <x-text-input id="no_of_items" class="block mt-1 w-full"
                                                            type="no_of_items"
                                                            name="no_of_items9"
                                            />

                                            <x-input-error :messages="$errors->get('no_of_items9')" class="mt-2" />


                                        </div>
                                        <!-- Amount of item -->
                                        <div class="m-2">

                                            <x-input-label for="amount_of_item" :value="__('amount_of_item')" />

                                            <x-text-input id="amount_of_item" class="block mt-1 w-full"
                                                            type="amount_of_item"
                                                            name="amount_of_item9"
                                            />

                                            <x-input-error :messages="$errors->get('amount_of_item9')" class="mt-2" />

                                        </div>
                                        <!-- Units of amount -->
                                        <select name="units9" class="rounded mt-3.5 border-gray-200" style="width: 6%; height: 75%;">
                                            <option value="kg">kg</option>
                                            <option value="l">L</option>
                                            <option value="m">m</option>
                                        </select>
                                    </div>
                                </div>

                                <x-primary-button class="ml-3">
                                    {{ __('Save') }}
                                </x-primary-button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
