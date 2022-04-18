<x-guest-layout>
    <div class="p-10">
        <div class="mx-auto flex max-w-4xl items-baseline justify-between xl:max-w-5xl 2xl:max-w-7xl">
            <h1 class="font-sans text-lg font-semibold text-gray-900 xl:text-xl 2xl:text-2xl"> Prometheus </h1>
            <div class="hidden items-center justify-between space-x-8 md:flex">
                <a href="" class="font-sans text-sm font-medium text-gray-900 xl:text-base 2xl:text-lg">Courses</a>
                <a href="" class="font-sans text-sm font-medium text-gray-900 xl:text-base 2xl:text-lg">Tutors</a>
                <a href="" class="font-sans text-sm font-medium text-gray-900 xl:text-base 2xl:text-lg">Materials</a>
            </div>
            <a href="" class="font-sans text-lg font-semibold text-gray-900 md:hidden">
                <span class="fas fa-bars"></span>
            </a>
        </div>

        <div
            class="mx-auto mt-12 grid max-w-2xl lg:mt-20 lg:max-w-4xl lg:grid-cols-8 lg:gap-x-16 xl:mt-24 xl:max-w-5xl xl:grid-cols-12 2xl:mt-28 2xl:max-w-6xl">
            <div class="sm:hidden">
                <x-dropdown>
                    <x-slot name="trigger">
                        <h3 class="font-sans text-xs font-medium uppercase text-gray-900">{{ __('Filters') }}</h3>
                        <span class="fas fa-filter font-sans text-xs font-medium text-gray-900"></span>
                    </x-slot>

                    <x-slot name="content">
                        <div class="flex flex-col">
                            <h2 class="font-sans text-xs font-semibold uppercase text-gray-700">
                                {{ __('Awarding Body') }}
                            </h2>

                            <div class="ml-4 mt-2 flex flex-col space-y-2">
                                <a class="font-sans text-xs font-normal text-gray-500">Cambridge Assessment
                                    International
                                    Examinations</a>
                                <a class="font-sans text-xs font-normal text-gray-500">Pearson Edexcel</a>
                                <a class="font-sans text-xs font-normal text-gray-500">Oxford AQA</a>
                            </div>
                        </div>
                    </x-slot>
                </x-dropdown>
            </div>

            <div class="hidden grid-cols-2 gap-4 sm:grid lg:col-span-3 lg:h-fit lg:grid-cols-1 xl:col-span-4">
                <x-dropdown>
                    <x-slot name="trigger">
                        <h2 class="font-sans text-xs font-medium uppercase text-gray-900 2xl:text-sm">
                            {{ __('Awarding Body') }}
                        </h2>
                        <span class="fas fa-award font-sans text-xs font-medium text-gray-900 2xl:text-sm"></span>
                    </x-slot>

                    <x-slot name="content">
                        <a class="font-sans text-xs font-normal text-gray-500 2xl:text-sm">Cambridge Assessment
                            International
                            Examinations</a>
                        <a class="font-sans text-xs font-normal text-gray-700 2xl:text-sm">Pearson Edexcel</a>
                        <a class="font-sans text-xs font-normal text-gray-500 2xl:text-sm">Oxford AQA</a>
                    </x-slot>
                </x-dropdown>

                <x-dropdown>
                    <x-slot name="trigger">
                        <h2 class="font-sans text-xs font-medium uppercase text-gray-900 2xl:text-sm">
                            {{ __('Exam Session') }}
                        </h2>
                        <span class="fas fa-calendar font-sans text-xs font-medium text-gray-900 2xl:text-sm"></span>
                    </x-slot>

                    <x-slot name="content">
                        <a class="font-sans text-xs font-normal text-gray-500 2xl:text-sm">Cambridge Assessment
                            International
                            Examinations</a>
                        <a class="font-sans text-xs font-normal text-gray-700 2xl:text-sm">Pearson Edexcel</a>
                        <a class="font-sans text-xs font-normal text-gray-500 2xl:text-sm">Oxford AQA</a>
                    </x-slot>
                </x-dropdown>

                <x-dropdown>
                    <x-slot name="trigger">
                        <h2 class="font-sans text-xs font-medium uppercase text-gray-900 2xl:text-sm">
                            {{ __('Course Level') }}
                        </h2>
                        <span class="fas fa-layer-group font-sans text-xs font-medium text-gray-900 2xl:text-sm"></span>
                    </x-slot>

                    <x-slot name="content">
                        <a class="font-sans text-xs font-normal text-gray-500 2xl:text-sm">Cambridge Assessment
                            International
                            Examinations</a>
                        <a class="font-sans text-xs font-normal text-gray-700 2xl:text-sm">Pearson Edexcel</a>
                        <a class="font-sans text-xs font-normal text-gray-500 2xl:text-sm">Oxford AQA</a>
                    </x-slot>
                </x-dropdown>

                <x-dropdown>
                    <x-slot name="trigger">
                        <h2 class="font-sans text-xs font-medium uppercase text-gray-900 2xl:text-sm">
                            {{ __('Subject') }}
                        </h2>
                        <span class="fas fa-flask font-sans text-xs font-medium text-gray-900 2xl:text-sm"></span>
                    </x-slot>

                    <x-slot name="content">
                        <a class="font-sans text-xs font-normal text-gray-500 2xl:text-sm">Cambridge Assessment
                            International
                            Examinations</a>
                        <a class="font-sans text-xs font-normal text-gray-700 2xl:text-sm">Pearson Edexcel</a>
                        <a class="font-sans text-xs font-normal text-gray-500 2xl:text-sm">Oxford AQA</a>
                    </x-slot>
                </x-dropdown>
            </div>

            <div class="mt-8 grid gap-y-4 lg:col-span-5 lg:mt-0 xl:col-span-8">
                @foreach ($courses as $course)
                    <div class="flex hover:cursor-pointer">
                        <img src="{{ $course->tutor->profile_photo_url }}"
                            alt="{{ $course->tutor->name }}'s profile picture" class="w-1/3 rounded-l object-cover">

                        <div class="flex w-2/3 flex-col rounded-r bg-gray-100 p-4 sm:p-6 2xl:p-8">
                            <h4 class="font-sans text-xs font-normal uppercase text-gray-700 lg:text-sm 2xl:text-base">
                                {{ $course->courseLevel->name }}</h4>

                            <h3
                                class="mt-4 font-sans text-sm font-bold text-gray-900 sm:text-lg lg:mt-6 lg:text-xl 2xl:text-2xl">
                                {{ $course->tutor->name }}</h3>
                            <h2
                                class="font-sans text-base font-black text-gray-700 sm:text-xl lg:mt-2 lg:text-2xl 2xl:text-3xl">
                                {{ $course->subject->name }}</h2>

                            <h4
                                class="mt-6 font-sans text-xs font-normal uppercase text-gray-700 lg:mt-8 lg:text-sm 2xl:text-base">
                                {{ $course->examSession->session->format('F') }}
                                <span
                                    class="font-light text-gray-500">{{ $course->examSession->session->format('Y') }}</span>
                            </h4>
                            <h5 class="mt-2 font-sans text-xs font-light text-gray-500 lg:text-sm 2xl:text-base">
                                {{ $course->awardingBody->name }}</h5>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-guest-layout>
