<?php
use function Livewire\Volt\{state, rules, form};
use App\Livewire\Forms\UrlForm;
use App\Models\Url;
//use Sqids\Sqids;
use App\Utility\HashIdGenerator;

// state('url');

// form(UrlForm::class);

// $submit = function (HashIdGenerator $hashIdGenerator) {
//     $this->form->validate();

//     $this->url = Url::create($this->form->only('url') + [
//         'hashid' => $hashIdGenerator->generate()
//     ]);
// };

// $clear = function () {
//     $this->form->reset();
//     $this->url = null;
// };
?>

<x-app-layout>
    
    @volt
    <div class="p-4 h-screen">
        <div class="flex flex-col ">
            <div class="space-y-5">
                <p class="text-xl">Let&apos;s face it&hellip;</p>
                <p class="text-2xl">Getting customers to leave a review is a pain in the @$$!</p>
                <p>Introducing a <em>better</em> way to</p>
                <ul class="list-disc ml-8">
                    <li>More Reviews</li>
                    <li>Quality Reviews</li>
                    <li>Consistant Reviews</li>
                </ul>
            </div>
        </div>
        <h2 class="text-4xl my-4">Try it FREE! Sign-up now for a 14-Day free trial</h2>
        <h3>It&apos;s easy to start, easy to stop with 1-button, no-hassle cancel</h3>
        <div
            class="max-w-lg mx-auto rounded-lg overflow-hidden lg:max-w-none lg:flex my-10 shadow-teal border-4 border-teal-400">
            <div class="bg-white px-6 py-8 lg:flex-shrink-1 lg:p-12 dark:bg-gray-900">
                <h3
                    class="text-2xl text-left leading-8 font-extrabold text-gray-900 sm:text-3xl sm:leading-9 dark:text-gray-100">
                    Two Shakes Review 
                </h3>
                <p class="mt-6 text-left font-ttnorms leading-8 text-gray-500 text-lg dark:text-gray-400">
                    Turn praise into profits
                </p>
                <div class="mt-8">
                    <div class="flex items-center">
                        <h4
                            class="flex-shrink-0 pr-4 bg-white text-sm leading-5 tracking-wider font-semibold uppercase text-teal-600 dark:text-teal-300 dark:bg-transparent">
                            What's included
                        </h4>
                        <div class="flex-1 border-t-2 border-gray-200 dark:border-gray-700"></div>
                    </div>
                    <ul class="pl-0 mt-8 lg:grid lg:grid-cols-2 lg:gap-x-2 lg:gap-y-5 space-y-5 lg:space-y-0">
                        <li class="flex items-start lg:col-span-1">
                            <div class="flex-shrink-0"><svg class="h-5 w-5 text-green-400 "
                                    fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd">
                                    </path>
                                </svg>
                            </div>
                            <p class="ml-3 text-lg leading-5 text-gray-700 font-ttnorms text-left dark:text-gray-300">
                                Access to the Two Sakes Review Web App
                            </p>
                        </li>
                        <li class="flex items-start lg:col-span-1">
                            <div class="flex-shrink-0"><svg class="h-5 w-5 text-green-400 "
                                    fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd">
                                    </path>
                                </svg>
                            </div>
                            <p class="ml-3 text-lg leading-5 text-gray-700 font-ttnorms text-left dark:text-gray-300">
                                Martketing materials
                            </p>
                        </li>
                        <li class="flex items-start lg:col-span-1">
                            <div class="flex-shrink-0"><svg class="h-5 w-5 text-green-400 "
                                    fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd">
                                    </path>
                                </svg>
                            </div>
                            <p class="ml-3 text-lg leading-5 text-gray-700 font-ttnorms text-left dark:text-gray-300">
                                Customer and review tracking
                            </p>
                        </li>
                        <li class="flex items-start lg:col-span-1">
                            <div class="flex-shrink-0"><svg class="h-5 w-5 text-green-400 "
                                    fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd">
                                    </path>
                                </svg>
                            </div>
                            <p class="ml-3 text-lg leading-5 text-gray-700 font-ttnorms text-left dark:text-gray-300">
                                Downloadable reports
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
            <div
                class="py-8 px-6 text-center bg-gray-50 lg:flex-shrink-0 lg:flex lg:flex-col lg:justify-center lg:p-12 dark:bg-gray-900">
                
                <div>
                   <p class="my-10 lg:my-6 flex items-baseline justify-center text-4xl leading-none font-extrabold text-gray-900 dark:text-gray-100">
                    <span class="font-brown">$150 per month</span>
                   </p>
                    {{-- <span class="text-xl leading-7 font-medium text-gray-500 font-ttnorms">/month /location</span> --}}
                    <p class="text-xl text-balance leading-6 font-medium text-gray-900 lg:max-w-xs lg:mx-auto mb-0 lg:mb-6 dark:text-gray-100">
                    for each Google Business Profile location you have
                </p>
                </div>
                <div class="lg:mt-6">
                    <div class="rounded-md shadow">
                        
                        {{-- <div id="navigation" class="items-end my-8">          
                            <a id="next" href="{{route('subscribe.account')}}" type="button" 
                            class="flex items-center justify-center px-5 py-3 leading-6 font-medium rounded-md focus:outline-none focus:ring transition duration-200 ease-in-out shadow-teal border-2 border-teal-400 bg-white hover:bg-teal-400 hover:shadow-teal-hover text-teal-400 hover:text-white text-lg relative z-20" >
                                Start your 14-day trial
                            </a>
                        </div>    --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <form wire:submit="submit">
        @if ($url)
            <div>
                <p>Boom &mdash; your short link is ready!</p>
                <div class="mt-2">
                    <div class="relative">
                        <input type="text" readonly class="w-full rounded-lg border-slate-300 text-slate-800 h-14 px-5 text-lg placeholder:text-slate-400 focus:ring-2 focus:ring-blue-500" value="{{ $url->redirectUrl() }}">

                        <button
                            type="button"
                            class="bg-blue-500 text-blue-50 rounded-lg px-6 h-10 font-medium absolute inset-y-2 right-2"
                            x-data="{ url: '{{ $url->redirectUrl() }}', copied: false }"
                            x-on:click="
                                $clipboard(url)
                                copied = true

                                setTimeout(() => {
                                    copied = false
                                }, 2000)
                            "
                            x-text="copied ? 'Copied!' : 'Copy'"
                        >
                            Copy
                        </button>
                    </div>
                </div>
            </div>
        @else
            <input type="text" id="url" wire:model="form.url" class="w-full rounded-lg border-slate-300 text-slate-800 h-14 px-5 text-lg placeholder:text-slate-400 focus:ring-2 focus:ring-blue-500" placeholder="e.g. https://google.com" autofocus x-init="$el.focus()">
        @endif

        <div class="flex items-baseline space-x-4">
            @if ($url)
                <button type="button" wire:click="clear" class="bg-blue-500 text-blue-50 rounded-lg px-10 mt-4 h-11 font-medium">
                    Generate another short URL
                </button>
            @else
                <button type="submit" class="bg-blue-500 text-blue-50 rounded-lg px-10 mt-4 h-11 font-medium">Get short URL</button>
            @endif

            @error('form.url')
                <div>
                    {{ $message }}
                </div>
            @enderror
        </div>
    </form> --}}
@endvolt
</x-app-layout>